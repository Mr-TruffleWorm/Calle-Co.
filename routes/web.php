<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home_page');
});

Route::get('our_branches', function () {
    return view('branches');
});
