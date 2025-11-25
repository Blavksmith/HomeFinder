<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewUserData;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');


Route::get('/', function () {
    return view('DashBoard');
});

Route::get('/PropertyDetail', function () {
    return view('PropertyDetail');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/data', [viewUserData::class, 'index']);
