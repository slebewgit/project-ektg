<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AtraksiwisataResource;
use App\Models\AtraksiWisata;
use Illuminate\Http\Request;

class AtraksiwisataApiController extends Controller
{
    public function WisataAlam()
    {
        $id_kategori = '98c9bfa5-bb4f-42db-9c93-5d7369192445';
        $list_atraksi = AtraksiWisata::where('id_kategori', $id_kategori)->get();
        return AtraksiwisataResource::collection($list_atraksi);
    }
    public function WisataBudaya()
    {
        $id_kategori = '98c9bfc2-2fde-46fd-9808-54b7eed6a754';
        $list_atraksi = AtraksiWisata::where('id_kategori', $id_kategori)->get();
        return AtraksiwisataResource::collection($list_atraksi);
    }
    public function WisataBuatan()
    {
        $id_kategori = '98c9bfd4-8172-4516-8f61-40e214a22cae';
        $list_atraksi = AtraksiWisata::where('id_kategori', $id_kategori)->get();
        return AtraksiwisataResource::collection($list_atraksi);
    }
}
