<?php

namespace App\Http\Controllers\API;

use App\ApiCode;
use App\Models\User;
use App\Mail\SendOtp;
use Ichtrojan\Otp\Otp;
use App\Models\OtpCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\Providers\Auth;
use Illuminate\Validation\ValidationException;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.verify');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return $this->respond(auth()->user());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //

    }

    /**
     * @OA\Get(
     *     path="/api/editProfil/{id}",
     *     tags={"User"},
     *     summary="Modifier les informations utilisateur",
     *     description="Afficher les informations du profil de la ressource utilisateur spécifiée.",
     *     operationId="editUser",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de l'utilisateur",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Informations du profil de l'utilisateur",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Ressource non trouvée",
     *     ),
     * )
     */

    public function edit($id)
    {
        //

        try {
            $user = User::findOrFail($id);

            if (!$user) {
                return $this->respondWithMessage('La donnée ciblée n&apos;existe pas');
            }

            return $this->respond($user, 'Informations du profil utilisateur');
        } catch (JWTException $e) {
            return $this->respondNotFound(ApiCode::RESOURCE_NOT_FOUND);
        }
    }

    /**
     * @OA\Put(
     *     path="/api/updateProfil/{id}",
     *     tags={"User"},
     *     summary="Mettre à jour les informations de l'utilisateur",
     *     description="Mettez à jour la ressource utilisateur spécifiée dans le stockage.",
     *     operationId="updateUser",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de l'utilisateur",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         description="Données de l'utilisateur à mettre à jour",
     *         @OA\JsonContent(
     *             @OA\Property(property="nom", type="string", maxLength=255, example="Doe"),
     *             @OA\Property(property="prenom", type="string", maxLength=255, example="John"),
     *             @OA\Property(property="email", type="string", format="email", maxLength=255, example="john@example.com"),
     *             @OA\Property(property="telephone", type="string", maxLength=255, example="123456789"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Utilisateur mis à jour avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Modification effectuée")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Ressource non trouvée",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="La donnée ciblée n'existe pas")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Non autorisé",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthorized")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Entité non traitable",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Entité non traitable")
     *         )
     *     ),
     * )
     */

    public function update(Request $request, string $id)
    {

        try {
            $requestData = $request->all();

            $validationRules = [];

            $user = User::findOrFail($id);

            // Ajoutez des règles de validation pour chaque champ modifié
            if (isset($requestData['nom'])) {
                $validationRules['nom'] = 'string|max:255';
            }

            if (isset($requestData['prenom'])) {
                $validationRules['prenom'] = 'string|max:255';
            }

            if (isset($requestData['email'])) {
                $validationRules['email'] = 'email|max:255|unique:users,email';
            }

            if (isset($requestData['telephone'])) {
                $validationRules['telephone'] = 'string|max:255|unique:users,telephone';
            }

            // Validez les données en utilisant les règles de validation dynamiques
            $validatedData = $request->validate($validationRules);

            //var_dump($validatedData);


            // Mettez à jour le modèle avec les données validées
            $user = $user->fill($validatedData);

            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }

            $user->save();

            return $this->respondWithMessage('Modification effectué');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->respondNotFound(ApiCode::SOMETHING_WENT_WRONG);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @OA\Put(
     *     path="/api/change-password/{id}",
     *      tags={"User"},
     *     summary="Change user's password",
     *     description="Change the user's password by providing the old and new password.",
     *     operationId="changePassword",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="User ID",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         description="Password change data",
     *         @OA\JsonContent(
     *             @OA\Property(property="old_password", type="string", format="password", example="old_password"),
     *             @OA\Property(property="new_password", type="string", format="password", example="new_password"),
     *             @OA\Property(property="new_password_confirmation", type="string", format="password", example="new_password_confirmation"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Password changed successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Password changed successfully")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Validation failed",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Les données de validation ont échoué."),
     *             @OA\Property(property="errors", type="object"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Ancien mot de passe incorrect")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Resource not found",
     *     ),
     * )
     */

    public function changePassword(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'old_password' => 'required|string|min:8|max:25|',
                'new_password' => 'required|string|min:8|max:25|confirmed',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Les données de validation ont échoué.',
                    'errors' => $validator->errors(),
                ], 422);
            }

            $user = User::findOrFail($id);

            $validated = $validator->validated();

            if (Hash::check($validated['old_password'], $user->password)) {
                $user->password = Hash::make($validated['new_password']);
                $user->save();

                return $this->respondWithMessage('Modification de mot de passe effectué');
            } else {
                return $this->respondWithMessage('Ancien mot de passe incorrect');
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->respondNotFound(ApiCode::SOMETHING_WENT_WRONG);
        }
    }
}
