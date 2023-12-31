<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CountryStateCityController;
use App\Http\Controllers\API\RegistrationController;
use App\Http\Controllers\API\ReservationController;
use App\Http\Controllers\API\CommentaireController;
use App\Http\Controllers\API\LikeController;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\API\SubscribersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EvenementController;
use App\Http\Controllers\API\GoogleController;
use App\Http\Controllers\API\NotificationController;
use App\Http\Controllers\API\PasswordController;
use App\Http\Controllers\API\TypeEvenementController;
use App\Http\Controllers\API\UserController;

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
 * Authentification endpoints
 */

Route::middleware(['api'])->group(function ($router) {
    Route::post('login', [AuthController::class, 'login']); //connexion
    Route::post('logout', [AuthController::class, 'logout']); //Déconnexion
    Route::post('refresh', [AuthController::class, 'refresh']); //Rafraîchir le token


    Route::get('/allRoles', [RegistrationController::class, 'allRoles'])->name('allRoles');
    Route::post('/selectRole', [RegistrationController::class, 'selectRole'])->name('selectRole');
    Route::post('register', [RegistrationController::class, 'register']); //Inscription

    Route::post('/confirmAccount', [RegistrationController::class, 'confirmAccount'])->name('confirmAccount'); //Confirmation de compte par otp
    Route::get('/generateOtp', [RegistrationController::class, 'generateOtp']);
});

/**
 * Authentification endpoints by google API
 */

 Route::get('/auth/google', [GoogleController::class, 'loginWithGoogle']);
 Route::any('auth/google/callback', [GoogleController::class, 'callbackFromGoogle']);

/**
 * Newsletter endpoints
 */
Route::middleware(['api'])->group(function ($router) {

    //Subscribers
    Route::post('/subscriber', [SubscribersController::class, 'index'])->name('subscribe');
    Route::get('/subscriber/verify/{token}/{email}', [SubscribersController::class, 'verify'])->name('subscriber_verify');

    // Message to All Subscriber

    // Route::get('/subscriber/all', [AdminSubscriberController::class, 'show_all'])->name('admin_subscribers');
    // Route::get('/subscriber/send-email', [AdminSubscriberController::class, 'send_email'])->name('subscriber_send_email');
    // Route::post('/admin/subscriber/send-email-submit', [AdminSubscriberController::class, 'send_email_submit'])->name('subscriber_send_email_submit');
});


/**
 * Réservation tickets endpoints
 */
Route::middleware(['api'])->group(function ($router) {

    Route::get('/reservations', [ReservationController::class, 'index']); //reservation
    Route::get('/reservations/{id}', [ReservationController::class, 'show']);
    Route::post('/reservations', [ReservationController::class, 'store']);
    Route::put('/reservations/{id}', [ReservationController::class, 'update']);
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);
});

/**
 * Users profile & others endpoints
 */

Route::middleware(['api'])->group(function ($router) {
    Route::get('me', [UserController::class, 'index'])->middleware('log.route');
    Route::get('/editProfil/{id}', [UserController::class, 'edit']);
    Route::put('updateProfil/{id}', [UserController::class, 'update']);
    Route::put('change-password/{id}', [UserController::class, 'changePassword']);
    Route::post('get_changePasswordCode_byMail', [PasswordController::class, 'get_changePasswordCode_byMail']);
    Route::post('confirm_forgotPasswordCode_byMail', [PasswordController::class, 'confirm_forgotPasswordCode_byMail']);
    Route::put('change_password/{identifier}', [PasswordController::class, 'change_password']);
});


/**
 * Evenements endpoints
 */

Route::middleware(['api'])->group(function ($router) {
    Route::post('/evenement', [EvenementController::class, 'store']);
    Route::post('/type', [TypeEvenementController::class, 'store']);
});


/**
 * Notifications endpoints
 */
Route::middleware(['api'])->group(function ($router) {

    Route::post('/sendNotification/{content}', [NotificationController::class, 'sendNotification']);
    Route::get('/allNotifications', [NotificationController::class, 'allNotifications']);
    Route::get('/unreadNotifications', [NotificationController::class, 'unreadNotifications']);
     Route::get('/markAsRead/{id}', [NotificationController::class, 'markAsRead']);
    Route::put('/enableNotification', [NotificationController::class, 'enableNotification']);
    Route::put('disabledNotification', [NotificationController::class, 'disabledNotification']);
});


/**
 * Country & cities endpoints
 */

Route::middleware(['api'])->group(function ($router) {

    Route::get('/allCountryAndPosition', [CountryStateCityController::class, 'allCountryAndPosition']); //TOus les pays et positions
    Route::post('/getStateInCountry', [CountryStateCityController::class, 'getStateInCountry']); // Departements/Etats d'un pays
    Route::post('/getCityInState', [CountryStateCityController::class, 'getCityInState']); //Villes d'un département
    Route::post('/getCityInCountry', [CountryStateCityController::class, 'getCityInCountry']); //Villes d'un pays


});


/**
 *  historique des commandes  endpoints
 */
Route::middleware(['api'])->group(function ($router) {

    Route::get('/historiqueCommandes', [EvenementController::class, 'historiqueCommandes']); //reservation
});


/**
 *  Likes et commenataires des evenements  endpoints
 */


Route::middleware(['api'])->group(function ($router) {
    Route::get('/commentaires/{evenementId}', [CommentaireController::class, 'getCommentairesByEvenement']);
    Route::post('/commentaires', [CommentaireController::class, 'addCommentaire']);
    Route::put('/commentaires/{commentaireId}', [CommentaireController::class, 'updateCommentaire']);
    Route::delete('/commentaires/{commentaireId}', [CommentaireController::class, 'deleteCommentaire']);
    

/**
 *  Likes  des evenements  endpoints
 */

    Route::get('/{evenementId}', [LikeController::class, 'likeByEvent']);
    Route::get('/liked-people/{evenementId}', [LikeController::class, 'likedPeople']);
    Route::get('/total-likes/{evenementId}', [LikeController::class, 'totalLikes']);
    Route::get('/grand-likes', [LikeController::class, 'grandLikes']);
    Route::get('/petit-evenement', [LikeController::class, 'petitEvenement']);

});




