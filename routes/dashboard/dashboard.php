<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('frontend.dashboard.index');
})->name('dashboard');