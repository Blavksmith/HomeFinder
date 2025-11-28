<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\FavoriteController;


Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');


// Property route
Route::resource('/property', PropertyController::class);

Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');

Route::get('/properties/{id}', [PropertyController::class, 'show'])->name('properties.show');




Route::get('/PropertyDetail', function () {
    return view('PropertyDetail');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/data', function () {
    return view('Data');
});


Route::post('/favorite/{property_id}', [FavoriteController::class, 'store'])->name('favorite.store');
Route::delete('/favorite/{property_id}', [FavoriteController::class, 'destroy'])->name('favorite.destroy');
Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorite.index');