<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController\SignupController;

Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'register'])->name('registeruser');
