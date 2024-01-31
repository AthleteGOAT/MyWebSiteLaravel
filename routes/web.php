<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\createController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\editController;
use App\Models\userPosts;
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
Route::post('/updated/{id}', [editController::class, 'updated_post'])->name('updated_post');

Route::get('/edit/{id}', [editController::class, 'edit'])->name('edit_post');
Route::get('/deleted/{id}', [deleteController::class, 'delete_post'])->name('delete_post');



Route::get('/restrictedPage', function () {
    return view('restrictedPage');
})->middleware('isLogged')->name('restrictedPage');





