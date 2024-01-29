<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/auth', function () {
    return view('auth');
})->name('auth');


Route::get('/register', function() {
    return view('register');
})->name('goToRegister');

Route::post('/auth/register', [AuthController::class, 'Register'])->name('register');
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/restrictedPage', function () {
    return view('restrictedPage');
})->middleware('isLogged')->name('restrictedPage');





