<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\RegistrationController;
use App\Http\Controllers\API\ReservationController;

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


/**
 * Authentification API
 */

Route::middleware(['api'])->group(function ($router) {
    Route::post('login', [AuthController::class, 'login']); //connexion
    Route::post('logout', [AuthController::class, 'logout']); //Déconnexion
    Route::post('refresh', [AuthController::class, 'refresh']); //Rafraîchir le token
    Route::get('me', [AuthController::class, 'me'])->middleware('log.route'); //Données utilisateur


    Route::get('/allRoles', [RegistrationController::class, 'allRoles'])->name('allRoles');
    Route::post('/selectRole', [RegistrationController::class, 'selectRole'])->name('selectRole');
    Route::post('register', [RegistrationController::class, 'register']);//Inscription

  Route::get('email/verify/{id}', [VerificationController::class, 'verify'])->name('verification.verify');
 //   Route::get('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
   // Route::post('password/email', [ForgotPasswordController::class, 'forgot']);
  //  Route::post('password/reset', [ForgotPasswordController::class, 'reset']);

   // Route::patch('user/profile', [UserController::class, 'updateProfile']);


   Route::get('/reservations', [ReservationController::class, 'index']);//reservation 
   Route::get('/reservations/{id}', [ReservationController::class, 'show']);//reservation par id
   Route::post('/reservations', [ReservationController::class, 'store']);
   Route::put('/reservations/{id}', [ReservationController::class, 'update']);
   Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);
   

});

