<?php

namespace App\Http\Controllers\API;

use OTPHP\TOTP;
use App\ApiCode;
use OtpGenerator;
use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use App\Mail\SendOtp;
use Ichtrojan\Otp\Otp;
use App\Models\OtpCode;
use App\Models\TemporyData;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegistrationRequest;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;
use Illuminate\Validation\ValidationException;

class RegistrationController extends Controller
{
    //



    /**
     * Liste des rôles
     *
     * Récupère la liste de tous les rôles.
     *
     * @OA\Get(
     *     path="/AllRoles",
     *     summary="Liste des rôles",
     *     tags={"Roles"},
     *     @OA\Response(
     *         response=200,
     *         description="Liste des rôles",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(type="object", ref="#/components/schemas/Role")
     *         )
     *     )
     * )
     */


    public function allRoles(Request $request)
    {

        $roles = Role::all();

        return $this->respond($roles, 'Liste des rôles');
    }

    /**
     * @OA\Post(
     *     path="/api/select-role",
     *     tags={"Auth"},
     *     summary="Sélectionner un rôle avant l'inscription",
     *     description="Permet à un utilisateur de sélectionner un rôle en fournissant un identifiant de rôle valide.",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             required={"role_id"},
     *             @OA\Property(
     *                 property="role_id",
     *                 type="integer",
     *                 description="Identifiant du rôle choisi par l'utilisateur."
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Rôle choisi avec succès.",
     *         @OA\JsonContent(
     *             type="string",
     *             example="temporary_token_value",
     *             description="Token temporaire associé au rôle choisi."
     *         )
     *     ),
     *     @OA\Response(
     *         response="422",
     *         description="Erreur de validation.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="error",
     *                 type="string",
     *                 description="Description de l'erreur de validation."
     *             )
     *         )
     *     )
     * )
     */



    public function selectRole(Request $request)
    {
        try{
            $validated = $request->validate([
                'role_id' => 'required|exists:roles,id',
            ]);

            // Générez un token temporaire (peut être un UUID ou un autre identifiant unique)
            $temporaryToken = uniqid();

            // Associez le token temporaire au rôle choisi
            $temporaryData = [
                'role_id' => $validated['role_id'],
            ];

            // Stockez le token temporaire et les données associées dans une base de données temporaire
            TemporyData::storeTemporaryData($temporaryToken, $temporaryData);

            return $this->respond($temporaryToken, 'Rôle choisi avec succès.');
        }
        catch (ValidationException $e) {

            return $this->respondUnprocessableEntity(ApiCode::VALIDATION_ERROR);

        }
    }

    /**
     * Enregistrement de l'utilisateur avec vérification temporaire.
     *
     * Cette route permet à un utilisateur de s'inscrire et de lier son rôle
     * via un token temporaire. Elle génère également un code OTP et l'envoie à l'utilisateur.
     *
     * @OA\Post(
     *     path="/api/register",
     *     summary="Enregistrement de l'utilisateur avec vérification temporaire",
     *     tags={"Auth"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="nom", type="string", description="Nom de l'utilisateur"),
     *             @OA\Property(property="prenom", type="string", description="Prénom de l'utilisateur"),
     *             @OA\Property(property="email", type="string", description="Adresse e-mail de l'utilisateur"),
     *             @OA\Property(property="telephone", type="string", description="Numéro de téléphone de l'utilisateur"),
     *             @OA\Property(property="password", type="string", description="Mot de passe de l'utilisateur (doit être confirmé)"),
     *             @OA\Property(property="temporary_token", type="string", description="Token temporaire de vérification")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Utilisateur enregistré avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Utilisateur enregistré avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreurs de validation",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Échec de la validation des données"),
     *             @OA\Property(property="errors", type="object", description="Liste des erreurs de validation")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur interne du serveur",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Erreur interne du serveur")
     *         )
     *     )
     * )
     */

    public function register(RegistrationRequest $request)
    {
            $attributes = $request->getAttributes();

            $user =  User::create($attributes);

            // Récupérez les données associées au token temporaire depuis la base de données temporaire
            $temporaryToken =  $attributes['temporary_token'];

            $temporaryData = TemporyData::retrieveTemporaryData($temporaryToken);

            if ($temporaryData) {

                $user->roles()->attach($temporaryData->role_id);
            }

            //Effacer le token temporaire

            TemporyData::clearTemporaryData($temporaryToken);

            //Générer un code otp et l'envoyer à l'utilisateur
            $identifier = $user->id;
            $mail = $user->email;
            $this->generateOtp($identifier, $mail);

            return $this->respondWithMessage('User successfully created');
    }


    /**
     * Générer un code OTP et l'envoyer à l'utilisateur.
     *
     * Cette route génère un code OTP (One Time Password) et l'envoie à l'utilisateur
     * par e-mail, SMS ou tout autre moyen de communication.
     *
     * @OA\Post(
     *     path="/api/generateOtp",
     *     summary="Générer un code OTP et l'envoyer à l'utilisateur",
     *     tags={"Auth"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="identifier", type="string", description="Identifiant de l'utilisateur"),
     *             @OA\Property(property="mail", type="string", description="Adresse e-mail de l'utilisateur")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Code OTP généré et envoyé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Code OTP généré et envoyé avec succès")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur interne du serveur",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Erreur interne du serveur")
     *         )
     *     )
     * )
     */

    public function generateOtp($identifier, $mail)
    {

        generateOtp($identifier, $mail);

    }


    /**
     * @OA\Post(
     *     path="/api/confirmAccount",
     *     summary="Confirmer un compte utilisateur avec un code OTP",
     *     description="Confirmez un compte utilisateur en vérifiant un code OTP avec l'identifiant associé.",
     *     tags={"Auth"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Les données nécessaires pour confirmer le compte utilisateur",
     *         @OA\JsonContent(
     *             required={"token"},
     *             @OA\Property(
     *                 property="token",
     *                 type="string",
     *                 description="Le code OTP à vérifier."
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Validation réussie du code OTP",
     *         @OA\JsonContent(
     *             type="boolean",
     *             example=true,
     *             description="Indique si la validation du code OTP a réussi."
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Échec de validation du code OTP",
     *         @OA\JsonContent(
     *             type="boolean",
     *             example=false,
     *             description="Indique si la validation du code OTP a échoué."
     *         )
     *     )
     * )
     */


    public function confirmAccount(Request $request)
    {

        $token = $request->token;

        confirmAccount($token);


    }
}
