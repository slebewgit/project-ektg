<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KontakwisataResource;
use App\Models\KontakWisata;
use Illuminate\Http\Request;

class KontakwisataApiController extends Controller
{
    function getAllData()
    {
        $data_kontak = KontakWisata::all();
        return KontakwisataResource::collection($data_kontak);
    }
}
