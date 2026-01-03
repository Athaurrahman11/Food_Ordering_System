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
Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/mycart', function () {
    return view('home.mycart');
});

Route::get('/dashboard', function () {
    return view('admin.homepage');
});

Route::get('/addcategory', function () {
    return view('admin.add_category');
});

Route::get('/view_category', function () {
    return view('admin.view_category');
});

Route::get('/add_food', function () {
    return view('admin.add_food');
});

