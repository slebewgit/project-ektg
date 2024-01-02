<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\BeritaWisataController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PengelolaController;
use App\Http\Controllers\Admin\DesaWisataController;
use App\Http\Controllers\Admin\AtraksiWisataController;
use App\Http\Controllers\Admin\KalenderWisataController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\KategoriFasilitasController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\DinasController;
use App\Http\Controllers\Admin\GaleriController;

Route::group(['middleware' => 'auth:admin'], function () {
    Route::resource('/', AdminController::class);

    Route::resource('pengelola', PengelolaController::class);

    Route::resource('desa-wisata', DesaWisataController::class);

    Route::resource('atraksi-wisata', AtraksiWisataController::class);
    Route::get('atraksi-wisata/show-atraksi-wisata/{atraksi_wisata}', [AtraksiWisataController::class, 'detail']);
    Route::PUT('rekomendasi/{atraksi_wisata}', [AtraksiWisataController::class, 'rekomendasi']);
    Route::PUT('hapus-rekomendasi/{atraksi_wisata}', [AtraksiWisataController::class, 'hapusrekomendasi']);

    Route::resource('kalender-wisata', KalenderWisataController::class);

    Route::resource('kontak', KontakController::class);

    Route::resource('kategori', KategoriController::class);
    Route::resource('berita', BeritaWisataController::class);

    Route::resource('detail', DetailController::class);

    Route::resource('kategori-fasilitas', KategoriFasilitasController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::get('fasilitas/create/{kategori_fasilitas}', [FasilitasController::class, 'create']);
    Route::get('fasilitas/show-fasilitas/{fasilitas}', [FasilitasController::class, 'detail']);
    Route::resource('mitra', MitraController::class);
    Route::resource('dinas', DinasController::class);

    Route::post('store-bulan', [KalenderWisataController::class, 'storeBulan']);
});
