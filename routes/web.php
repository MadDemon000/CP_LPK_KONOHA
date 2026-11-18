<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProgramMagangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/galeri', [GaleriController::class, 'galeri'])->name('galeri');
Route::get('/programmagang', [ProgramMagangController::class, 'magang'])->name('magang');

Route::get('/layout', function () {
    return view('layout');
});

