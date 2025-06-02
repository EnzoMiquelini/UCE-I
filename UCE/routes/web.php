<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');         

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'auth'])->name('login');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sobre', function () {
    return view('about');
})->name('about');

Route::get('/fale-conosco', function () {
    return view('contact');
})->name('contact');


Route::get('/registrar', function () {
    return view('register');
})->name('registrar');

Route::get('/entrar', function () {
    return view('login');
})->name('entrar');
