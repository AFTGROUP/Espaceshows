<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ADMIN\AuthController;
use App\Http\Controllers\ADMIN\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserStatutController;

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


Auth::routes();

Route::get('/', function () {
    return view('portal');
});

Route::get('/portal', function () {
    return view('portal');
});

Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/archives', function () {
    return view('archives');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/evenement', function () {
    return view('evenement');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/ticket', function () {
    return view('ticket');
});

Route::get('/registerv2', function () {
    return view('registerv2');
});

Route::get('/loginv2', function () {
    return view('loginv2');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



