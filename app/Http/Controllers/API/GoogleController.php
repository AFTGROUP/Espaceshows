<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    //
    public function loginWithGoogle(){
       return Socialite::driver('google')->redirect();
    }
}
