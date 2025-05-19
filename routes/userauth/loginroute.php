<?php

use App\Http\Controllers\AuthController\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'verify'])->name('verifylogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

