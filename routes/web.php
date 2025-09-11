<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home_page');
});

Route::get('our-branches', function () {
    return view('branches');
});

Route::get('our-products', function () {
    return view('products');
});

Route::get('about-us', function () {
    return view('about_us');
});
Route::get('franchising-page', function () {
    return view('franchising');
});
