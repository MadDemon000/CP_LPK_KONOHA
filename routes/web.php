<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
    });

    Route::get('/layout', function () {
    return view('layout');
});