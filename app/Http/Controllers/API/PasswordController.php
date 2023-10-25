<?php

namespace App\Http\Controllers\API;

use App\ApiCode;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;
use App\Mail\SendOtp;
use Ichtrojan\Otp\Otp;
use App\Models\OtpCode;

class PasswordController extends Controller
{
    //
    /**
     * @OA\Post(
     *     path="/api/get_changePasswordCode_byMail",
     *     tags={"User"},
     *     summary="Obtenir le code de changement de mot de passe par e-mail",
     *     description="Génère un code OTP (mot de passe à usage unique) et l'envoie à l'adresse e-mail de l'utilisateur dans le but de changer le mot de passe.",
     *     operationId="getChangePasswordCodeByMail",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Adresse e-mail de l'utilisateur",
     *         @OA\JsonContent(
     *             @OA\Property(property="email", type="string", format="email", example="utilisateur@example.com"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Code OTP envoyé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Code OTP envoyé"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Ressource introuvable",
     *     ),
     * )
     */


    public function get_changePasswordCode_byMail(Request $request)
    {
        $email = $request->email;
        $identifier = User::where('email', $email)->first()->id;
        generateOtp($identifier, $email);

        return $this->respondWithMessage('Code Otp envoyé');
    }

    /**
     * @OA\Post(
     *     path="/api/confirm_forgotPasswordCode_byMail",
     *     tags={"User"},
     *     summary="Confirmer le code de réinitialisation de mot de passe par e-mail",
     *     description="Confirme le code OTP (mot de passe à usage unique) envoyé par e-mail pour réinitialiser le mot de passe de l'utilisateur.",
     *     operationId="confirmForgotPasswordCodeByMail",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Token de confirmation reçu par e-mail",
     *         @OA\JsonContent(
     *             @OA\Property(property="token", type="string", example="votre_token_otp"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Confirmation réussie",
     *         @OA\JsonContent(
     *             @OA\Property(property="identifier", type="string", example="identifiant_de_l_utilisateur"),
     *             @OA\Property(property="otpVerify", type="boolean", example=true),
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Ressource non trouvée",
     *     ),
     * )
     */

    public function confirm_forgotPasswordCode_byMail(Request $request)
    {

        $token = $request->token;
        $identifier = ModelsOtp::where('token', $token)->first()->identifier;
        $otp = new Otp();
        $otpVerify =  $otp->validate($identifier, $token);

        return response()->json([
            'identifier' => $identifier,
            'otpVerify' => $otpVerify
        ]);
    }

    /**
     * @OA\Put(
     *     path="/api/change_password/{identifier}",
     *     tags={"User"},
     *     summary="Changer le mot de passe de l'utilisateur",
     *     description="Change le mot de passe de l'utilisateur en fournissant le nouveau mot de passe.",
     *     operationId="changePasswordByMail",
     *     @OA\Parameter(
     *         name="identifier",
     *         in="path",
     *         description="Identifiant de l'utilisateur",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         description="Nouveau mot de passe",
     *         @OA\JsonContent(
     *             @OA\Property(property="new_password", type="string", minLength=8, maxLength=25, example="nouveau_mot_de_passe"),
     *             @OA\Property(property="new_password_confirmation", type="string", minLength=8, maxLength=25, example="nouveau_mot_de_passe_confirmation"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Mot de passe modifié avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Mot de passe modifié avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreur de validation",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Ressource non trouvée",
     *     ),
     * )
     */

    public function change_password(Request $request, $id)
    {

        try {
            $credential = request()->validate([
                'new_password' => 'required|string|min:8|max:25|confirmed'
            ]);

            $user = User::findOrFail($id);
            $user->password = Hash::make($credential['new_password']);
            $user->save();

            return $this->respondWithMessage('Mot de passe modifié avec succès');
        } catch (ValidationException $e) {

            return $this->respondUnprocessableEntity(ApiCode::VALIDATION_ERROR);
        }
    }
}
