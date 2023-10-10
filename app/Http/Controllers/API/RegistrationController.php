<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\Role;
use App\ApiCode;
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

    public function selectRole(Request $request)
    {
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
        TempStorage::storeTemporaryData($temporaryToken, $temporaryData);

        return response()->json(['temporary_token' => $temporaryToken, 'message' => 'Rôle choisi avec succès.']);
    }

    public function register(RegistrationRequest $request)
    {
        User::create($request->getAttributes())->sendEmailVerificationNotification();

        // User::create($request->getAttributes());
        return $this->respondWithMessage('User successfully created');
    }
}
