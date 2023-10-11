<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\Role;
use App\ApiCode;
use App\Models\TemporyData;
use OpenApi\Annotations as OA;


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
     *         response="400",
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
        $validated = $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);

        if (!$validated['role_id']) {
            return $this->respondBadRequest(ApiCode::VALIDATION_ERROR);
        }

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


        //Génération du code otp en son envoi à l'utilisateur

        

        return $this->respondWithMessage('User successfully created');
    }
}
