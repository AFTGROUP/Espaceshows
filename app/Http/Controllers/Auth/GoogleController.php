<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use App\Notifications\registerNotification;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Enregistrez l'utilisateur dans votre base de données ici
         $user->getId(); // pour l'ID Google unique
         $user->getName(); //pour le nom de l'utilisateur
         $user->getEmail(); // pour l'e-mail de l'utilisateur (vérifiez l'unicité)


        // Connectez l'utilisateur après l'inscription si nécessaire
        auth()->login($user);

        return redirect()->route('Auth'); // Redirigez l'utilisateur vers la page d'accueil
    }
}
