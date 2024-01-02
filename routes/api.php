<?php

use App\Http\Controllers\Api\AmenitaswisataApiController;
use App\Http\Controllers\Api\DesawisataApiController;
use App\Http\Controllers\Api\AtraksiwisataApiController;
use App\Http\Controllers\Api\KalenderwisataApiController;
use App\Http\Controllers\Api\KontakwisataApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('desawisata/all', [DesawisataApiController::class,'getAllData']);
Route::get('wisataalam/all', [AtraksiwisataApiController::class,'WisataAlam']);
Route::get('wisatabudaya/all', [AtraksiwisataApiController::class,'WisataBudaya']);
Route::get('wisatabuatan/all', [AtraksiwisataApiController::class,'WisataBuatan']);
Route::get('januari/all', [KalenderwisataApiController::class,'get']);
Route::get('kalender/all', [KalenderwisataApiController::class,'getAllData']);
Route::get('kontak/all', [KontakwisataApiController::class,'getAllData']);
Route::get('hotel/all', [AmenitaswisataApiController::class,'Hotel']);
