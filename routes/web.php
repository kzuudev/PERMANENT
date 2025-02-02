<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'store']);



Route::get('/registration', function () {
    return view('registration');
});

Route::get('/LFMS', function () {
    return view('LFMS');
});

