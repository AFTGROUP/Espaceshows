<?php

namespace App\Http\Controllers\API;

use App\ApiCode;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Contracts\Providers\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;

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
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
     * Update the specified resource in storage.
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
                $identifier = $user->id;
                $mail = $user->email;
                generateOtp($identifier, $mail);
            }

            $user->save();

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->respondNotFound(ApiCode::SOMETHING_WENT_WRONG);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
