<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebDesaWisataController;
use App\Http\Controllers\Web\WebKontakWisataController;
use App\Http\Controllers\Web\WebKalenderWisataController;
use App\Http\Controllers\Web\WebPetaWisataController;
use App\Http\Controllers\Web\WebAtraksiWisataController;
use App\Http\Controllers\Web\WebFasilitasController;

Route::resource('/', WebDesaWisataController::class);

Route::resource('desa-wisata', WebDesaWisataController::class);

//kontak
Route::resource('kontak-wisata', WebKontakWisataController::class);

//kalender
Route::get('kalender-wisata', [WebKalenderWisataController::class, 'index']);
Route::get('detail-kalender/{kalender}',[WebKalenderWisataController::class,'show']);

//peta
Route::resource('peta-wisata', WebPetaWisataController::class);

//fasilitas
Route::get('fasilitas/{kategori_fasilitas}',[WebFasilitasController::class,'index']);
Route::get('fasilitas-wisata/{fasilitas}',[WebFasilitasController::class,'show']);

//berita
Route::get('berita/{berita}', [WebKontakWisataController::class, 'show']);

//atraksi
Route::get('atraksi/{kategori}',[WebAtraksiWisataController::class,'index']);
Route::get('atraksi-wisata/{atraksi_wisata}',[WebAtraksiWisataController::class,'show']);