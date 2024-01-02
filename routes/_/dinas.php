<?php

use App\Http\Controllers\Dinas\AtraksiWisataController;
use App\Http\Controllers\Dinas\DinasController;
use App\Http\Controllers\Dinas\FasilitasController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:dinas'], function () {
    Route::get('/', [DinasController::class, 'index']);

    Route::get('atraksi-wisata/{kategori}', [AtraksiWisataController::class, 'index']);
    Route::get('atraksi-wisata/{atraksi_wisata}/show', [AtraksiWisataController::class, 'show']);
    Route::PUT('status/{atraksi_wisata}', [AtraksiWisataController::class, 'status']);
    Route::PUT('hapus-status/{atraksi_wisata}', [AtraksiWisataController::class, 'hapusstatus']);
    Route::PUT('batal-status/{atraksi_wisata}', [AtraksiWisataController::class, 'batalstatus']);


    Route::get('fasilitas/{kategori_fasilitas}', [FasilitasController::class, 'index']);
    Route::get('fasilitas/{fasilitas}/show', [FasilitasController::class, 'show']);
    Route::PUT('status-fasilitas/{fasilitas}', [FasilitasController::class, 'status']);
    Route::PUT('hapus-status-fasilitas/{fasilitas}', [FasilitasController::class, 'hapusstatus']);
    Route::PUT('batal-status-fasilitas/{fasilitas}', [FasilitasController::class, 'batalstatus']);
});