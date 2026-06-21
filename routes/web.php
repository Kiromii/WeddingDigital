<?php

use Illuminate\Support\Facades\Route;

// Landing Page / Cover Page
Route::get('/', function () {
    return view('welcome-wedding');
});

Route::get('/undangan', function () {
    return view('landingpage');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

