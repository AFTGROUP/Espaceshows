<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EvenementController;
use App\Http\Controllers\API\RegistrationController;
use App\Http\Controllers\API\TypeEvenementController;

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
    Route::post('register', [RegistrationController::class, 'register']); //Inscription

    Route::post('/confirmAccount', [RegistrationController::class, 'confirmAccount'])->name('confirmAccount'); //Confirmation de compte par otp
    Route::get('/generateOtp', [RegistrationController::class, 'generateOtp']);
    Route::post('/evenement', [EvenementController::class, 'store']);
    Route::post('/type', [TypeEvenementController::class, 'store']);
});
