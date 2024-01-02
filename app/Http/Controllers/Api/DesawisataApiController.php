<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DesawisataResource;
use App\Models\DesaWisata;
use Illuminate\Http\Request;

class DesawisataApiController extends Controller
{
    function getAllData()
    {
        $data_desawisata = DesaWisata::all();
        return DesawisataResource::collection($data_desawisata);
    }
}
