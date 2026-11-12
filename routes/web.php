<?php

use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;


Route::get('/galeri', [GaleriController::class, 'galeri'])->name('galeri');
Route::get('/', function () {
    return view('beranda');
    });

    Route::get('/layout', function () {
    return view('layout');
});
