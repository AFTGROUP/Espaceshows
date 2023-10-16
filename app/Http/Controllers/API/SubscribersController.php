<?php

namespace App\Http\Controllers\API;

use Mail;
use App\ApiCode;
use App\Models\Subscribers;
use App\Mail\EspaceShowMail;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;

class SubscribersController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * @OA\Post(
     *     path="/api/subscriber",
     *     tags={"Newsletter"},
     *     summary="Subscribe to the newsletter",
     *     operationId="subscribeToNewsletter",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Subscription request",
     *         @OA\JsonContent(
     *             @OA\Property(property="email", type="string", format="email", description="Email address of the subscriber")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Subscription successful",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Success message")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Resource not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Validation error message")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Error message")
     *         )
     *     )
     * )
     */

    public function index(Request $request)
    {

        try {
            $validated = $request->validate([
                'email' => 'required|email|unique:subscribers|max:30'
            ]);
            $token = hash('sha256', time());
            $subscriber = new Subscribers();
            $subscriber->email = $request->email;
            $subscriber->token = $token;
            $subscriber->status = 'Pending';

            if (!$subscriber->save()) {
                return $this->respondInternalServerError(ApiCode::SOMETHING_WENT_WRONG);
            }

            // Send email
            $subject = 'Veuillez confirmer l&apos;abonnement';
            $verification_link = url('subscriber/verify/' . $token . '/' . $request->email);
            $message = 'Veuillez cliquer sur le lien suivant afin de vérifier en tant qu&apos;abonné:<br><br>';

            $message .= '<a href="' . $verification_link . '">';
            $message .= $verification_link;
            $message .= '</a><br><br>';
            $message .= 'Si vous avez reçu cet email par erreur, supprimez-le simplement.
        Vous ne serez pas abonné si vous ne cliquez pas sur le lien de confirmation ci-dessus.';

            Mail::to($request->email)->send(new EspaceShowMail($subject, $message));

            return $this->respondWithMessage('Merci, veuillez vérifier
        votre boîte de réception pour confirmer votre abonnement.');
        } catch (ValidationException $e) {

            return $this->respondUnprocessableEntity(ApiCode::VALIDATION_ERROR);
        }
    }

    /**
     * @OA\Post(
     *     path="/subscriber/verify/{token}/{email}",
     *     tags={"Newsletter"},
     *     summary="Verify subscriber by token and email",
     *     operationId="verifySubscriber",
     *     @OA\Parameter(
     *         name="token",
     *         in="path",
     *         required=true,
     *         description="Verification token",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="email",
     *         in="path",
     *         required=true,
     *         description="Subscriber's email",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Subscriber verified successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Verification successful message")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Subscriber not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Subscriber not found message")
     *         )
     *     )
     * )
     */



    public function verify($token, $email)
    {

        // Helpers::read_json();

        $subscriber_data = Subscribers::where('token', $token)->where('email', $email)->first();
        if ($subscriber_data) {
            $subscriber_data->token = '';
            $subscriber_data->status = 'Active';
            $subscriber_data->update();

            return $this->respondWithMessage('Vous avez été vérifié avec succès en tant qu&apos;abonné à ce système');
        } else {
            return $this->respondNotFound(ApiCode::RESOURCE_NOT_FOUND);
        }
    }
}
