<?php

use App\Http\Controllers\Mitra\AtraksiWisataController;
use App\Http\Controllers\Mitra\FasilitasController;
use App\Http\Controllers\Mitra\MitraController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:mitra'], function () {
    Route::get('/', [MitraController::class, 'index']);

    Route::get('atraksi-wisata/{kategori}', [AtraksiWisataController::class, 'index']);
    Route::get('atraksi-wisata/{kategori}/create', [AtraksiWisataController::class, 'create']);
    Route::POST('atraksi-wisata', [AtraksiWisataController::class, 'store']);
    Route::get('atraksi-wisata/{atraksi_wisata}/show', [AtraksiWisataController::class, 'show']);
    Route::get('atraksi-wisata/{atraksi_wisata}/edit', [AtraksiWisataController::class, 'edit']);
    Route::PUT('atraksi-wisata/{kategori}/update', [AtraksiWisataController::class, 'update']);
    Route::get('atraksi-wisata/{atraksi_wisata}/delete', [AtraksiWisataController::class, 'destroy']);

    Route::PUT('rekomendasi/{atraksi_wisata}', [AtraksiWisataController::class, 'rekomendasi']);
    Route::PUT('hapus-rekomendasi/{atraksi_wisata}', [AtraksiWisataController::class, 'hapusrekomendasi']);

    Route::get('fasilitas/{kategori_fasilitas}', [FasilitasController::class, 'index']);
    Route::get('fasilitas/{kategori_fasilitas}/create', [FasilitasController::class, 'create']);
    Route::POST('fasilitas', [FasilitasController::class, 'store']);
    Route::get('fasilitas/{fasilitas}/show', [FasilitasController::class, 'show']);
    Route::get('fasilitas/{fasilitas}/edit', [FasilitasController::class, 'edit']);
    Route::PUT('fasilitas/{kategori_fasilitas}/update', [FasilitasController::class, 'update']);
    Route::get('fasilitas/{fasilitas}/delete', [FasilitasController::class, 'destroy']);
});
