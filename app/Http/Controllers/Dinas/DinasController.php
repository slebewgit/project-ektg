<?php

namespace App\Http\Controllers\Dinas;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AtraksiWisata;
use App\Models\DesaWisata;
use App\Models\Fasilitas;
use App\Models\Kategori;
use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;

class DinasController extends Controller
{
    
    public function index()
    {
        $data['list_desa_wisata'] = DesaWisata::all();
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        $data['list_user'] = Admin::all();
        $data['list_fasilitas'] = Fasilitas::all();
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        return view('dinas.index', $data);
    }

    
}
