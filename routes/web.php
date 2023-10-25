<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ADMIN\AuthController;
use App\Http\Controllers\ADMIN\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::group(['middleware' => 'web'], function () {
    Auth::routes();

    Route::get('admin/login', [LoginController::class, 'showLoginForm']);

Route::post('admin/login', [LoginController::class, 'store'])->name('admin.login');

Route::post('admin/deconnexion', [LoginController::class, 'logout'])->name('admin.logout');


Route::middleware(['isAdmin'])->group(function () {


    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('profil', ProfileController::class);

});


});
