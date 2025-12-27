<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/shopping', function () {
    return view('home.shopping');
});

Route::get('/about', function () {
    return view('home.about');
});