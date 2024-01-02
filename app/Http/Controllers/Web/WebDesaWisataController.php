<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DesaWisata;
use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Kategori;
use App\Models\Galeri;

class WebDesaWisataController extends Controller
{

    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['list_desa_wisata'] = DesaWisata::all();
        $data['detail'] = Detail::all();
        $data['list_desa_wisata'] = DesaWisata::paginate(6);
        return view('web.desa_wisata', $data);
    }

    public function desa()
    {
        $data['list_desa_wisata'] = DesaWisata::all();
        $data['detail'] = Detail::all();
        $data['list_desa_wisata'] = DesaWisata::paginate(6);
        return view('web.desa', $data);
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
