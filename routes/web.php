<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProgramMagangController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/galeri', [GaleriController::class, 'galeri'])->name('galeri');
Route::get('/program-magang', [ProgramMagangController::class, 'magang'])->name('magang');
Route::get('/tentang-kami', [TentangKamiController::class, 'tentangkami'])->name('tentang-kami');

Route::get('/layout', function () {
    return view('layout');
});

// ================= LANGUAGE SWITCH =================

Route::post('/language', function (\Illuminate\Http\Request $request) {

    $locale = $request->input('locale');

    if (! in_array($locale, ['id', 'ja'])) {
        abort(400);
    }

    session(['locale' => $locale]);

    return redirect()->back();

})->name('language.switch');