<?php

use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('/galeri',[GaleriController::class,'galeri'])->name('galeri');
