<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function me()
    {

            return $this->respond(auth()->user());

    }

    public function update(Request $request)
    {
       // $request->user()->fill($request->validated());

        $requestData = $request->all();

        var_dump($requestData);

        $validationRules = [];

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

        var_dump($validatedData);


        // Mettez à jour le modèle avec les données validées
         $user = auth()->user()->fill($validatedData);

        if (auth()->user()->isDirty('email')) {
            auth()->user()->email_verified_at = null;
            $identifier = auth()->user()->id;
            $mail = auth()->user->email;
            $this->generateOtp($identifier, $mail);
        }


        //auth()->user()->save();



    }


}
