<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\UserNotification;
use Exception;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('jwt.verify');
    }


    /**
     * Envoyer une notification à l'utilisateur authentifié.
     *
     * @OA\Post(
     *     path="/api/sendNotification/{content}",
     *     tags={"Notifications"},
     *     summary="Envoyer une notification",
     *     operationId="envoyerNotification",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="content",
     *         in="path",
     *         description="Contenu de la notification",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Notification envoyée avec succès",
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Non autorisé",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur interne du serveur",
     *     ),
     * )
     */
    public function sendNotification($content = null,  Request $request)
    {
        try {
            $user = Auth::user();
            $data = [
                'content' => $content,

            ];

            // $user->notify(new UserNotification($data));
            Notification::send($user, new UserNotification($data));


            return $this->respondWithMessage('Succès');
        } catch (Exception $e) {
            return $this->respondWithMessage('' . $e->getMessage());
        }
    }


    public function allNotifications(Request $request)
    {
        try {
            $allNotifications = [];
            $user = Auth::user();
            foreach ($user->notifications as $notification) {
                $allNotifications[] = $notification->data;
            }
            return $this->respond($allNotifications, 'Toutes les notifications lues ou non');
        } catch (Exception $e) {
            return $this->respondWithMessage('' . $e->getMessage());
        }
    }

    public function unreadNotifications(Request $request)
    {

        try {
            $unreadNotifications = [];
            $user = Auth::user();
            foreach ($user->unreadNotifications as $notification) {
                $unreadNotifications[] = $notification->data;
            }
            return $this->respond($unreadNotifications, 'Toutes les notifications non lues');
        } catch (Exception $e) {
            return $this->respondWithMessage('' . $e->getMessage());
        }
    }

    public function markAsRead(Request $request, $id)
    {
    }

    /**
     * Activer les notifications pour l'utilisateur authentifié.
     *
     * @OA\Put(
     *     path="/api/enableNotification",
     *     tags={"Notifications"},
     *     summary="Activer les notifications",
     *     operationId="activerNotifications",
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Notifications activées",
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Non autorisé",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur interne du serveur",
     *     ),
     * )
     */

    public function enableNotification(Request $request)
    {

        try {
            $user = Auth::user();
            $user->notifications_active = true;
            $user->save();

            return $this->respondWithMessage('Notifications activées');
        } catch (Exception $e) {
            return $this->respondWithMessage('' . $e->getMessage());
        }
    }

    /**
     * Désactiver les notifications pour l'utilisateur authentifié.
     *
     * @OA\Put(
     *     path="/api/disabledNotification",
     *     tags={"Notifications"},
     *     summary="Désactiver les notifications",
     *     operationId="desactiverNotifications",
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Notifications désactivées",
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Non autorisé",
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur interne du serveur",
     *     ),
     * )
     */
    public function disabledNotification()
    {
        try {
            $user = Auth::user();
            $user->notifications_active = false;
            $user->save();

            return $this->respondWithMessage('Notifications désactivées');
        } catch (Exception $e) {
            return $this->respondWithMessage('' . $e->getMessage());
        }
    }
}
