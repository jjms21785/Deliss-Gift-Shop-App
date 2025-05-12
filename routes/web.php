<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.template');
});

Route::get('/register', function () {
    return view('pages.register');
});
