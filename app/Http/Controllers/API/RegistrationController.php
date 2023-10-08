<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    //
    public function register(RegistrationRequest $request) {
        User::create($request->getAttributes())->sendEmailVerificationNotification();

    // User::create($request->getAttributes());
       return $this->respondWithMessage('User successfully created');
    }
}
