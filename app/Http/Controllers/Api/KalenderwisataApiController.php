<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KalenderwisataResource;
use App\Models\KalenderWisata;
use Illuminate\Http\Request;

class KalenderwisataApiController extends Controller
{
    // function getAllData()
    // {
    //     $data_kalenderwisata = KalenderWisata::all();
    //     return $data_kalenderwisata->groupBy('id_bulan');
    // }
    function getAllData()
    {
        $data_kalenderwisata = KalenderWisata::all();
        return KalenderwisataResource::collection($data_kalenderwisata);
    }
}
