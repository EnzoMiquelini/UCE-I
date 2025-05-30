<?php

use App\Http\Controllers\pageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user/store',[UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/', [pageController::class, 'index'])->name('home.index');