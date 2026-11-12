<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/galeri', [GaleriController::class, 'galeri'])->name('galeri');

Route::get('/layout', function () {
    return view('layout');
});
