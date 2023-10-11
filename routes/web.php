<?php

use Illuminate\Support\Facades\Route;

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
