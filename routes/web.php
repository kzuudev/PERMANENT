<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

// Route for processing the login form (POST request)
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::get('/registration', function () {
    return view('registration');
});


Route::get('/LFMS', function () {
    return view('LFMS');
})->name('lfms');
