<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\DesaWisata;
use App\Models\AtraksiWisata;
class WebPetaWisataController extends Controller
{

    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['list_desa_wisata'] =DesaWisata::all();
        $data['list_atraksi_wisata']=AtraksiWisata::all();
        $data['list_fasilitas']=Fasilitas::all();
        return view('web.peta_wisata', $data);
    }

    public function peta()
    {
        $data['list_desa_wisata'] =DesaWisata::all();
        $data['list_atraksi_wisata']=AtraksiWisata::all();
        $data['list_fasilitas_wisata']=Fasilitas::all();
        return view('web.peta', $data);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
