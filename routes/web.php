<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.userauth.signup');
});

require __DIR__.'/dashboard/dashboard.php';
require __DIR__.'/userauth/loginroute.php';
require __DIR__.'/userauth/signuproute.php';
require __DIR__.'/viewtable/viewtable.php';
require __DIR__.'/form/formroute.php';