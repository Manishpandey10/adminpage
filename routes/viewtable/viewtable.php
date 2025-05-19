<?php

use App\Http\Controllers\TableController\ViewTableController;
use Illuminate\Support\Facades\Route;

Route::get('/table',[ViewTableController::class, 'viewtable'])->name('viewtable');
Route::get('/table/deleteuser/{id}', [ViewTableController::class, 'delete'])->name('deleteuser');
Route::get('/table/update/{id}', [ViewTableController::class, 'updateuser'])->name('edit.user');
Route::post('/table/update/{id}', [ViewTableController::class, 'submituser'])->name('update.user');