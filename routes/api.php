<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\RegistrationController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::middleware(['api'])->group(function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me'])->middleware('log.route');

    Route::post('register', [RegistrationController::class, 'register']);
 //   Route::get('email/verify/{id}', [VerificationController::class, 'verify'])->name('verification.verify');
 //   Route::get('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
   // Route::post('password/email', [ForgotPasswordController::class, 'forgot']);
  //  Route::post('password/reset', [ForgotPasswordController::class, 'reset']);

   // Route::patch('user/profile', [UserController::class, 'updateProfile']);
});
