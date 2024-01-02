<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AmenitaswisataResource;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class AmenitaswisataApiController extends Controller
{
    public function Hotel(){
        $id_kategori ="9913771d-01cb-4f91-ac54-14045ecafcda";
        $list_hotel = Fasilitas::where('id_kategori_fasilitas', $id_kategori)->get();
        return AmenitaswisataResource::collection($list_hotel);
    }
}
