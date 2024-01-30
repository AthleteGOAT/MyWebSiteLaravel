<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\createController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('home');

Route::get('/auth', function () {
    return view('auth');
})->name('auth');


Route::get('/register', function() {
    return view('register');
})->name('goToRegister');
Route::get('/create', function() {
    return view('create');
})->name('goToCreate');

Route::post('/auth/register', [AuthController::class, 'Register'])->name('register');
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/create', [createController::class, 'create'])->name('create_post');


Route::get('/restrictedPage', function () {
    return view('restrictedPage');
})->middleware('isLogged')->name('restrictedPage');





