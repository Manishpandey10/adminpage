<?php

use App\Http\Controllers\FormController\BasicFormController;
use Illuminate\Support\Facades\Route;

Route::get('auth')->group(function(){
    Route::get('/form',[BasicFormController::class, 'viewform'])->name('basicform');
    Route::post('/form',[BasicFormController::class, 'registeruser'])->name('adduser');
});