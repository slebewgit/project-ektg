<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Bulan;
use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\KalenderWisata;

class WebKalenderWisataController extends Controller
{
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['list_bulan'] = Bulan::all();
        $data['list_kalender_wisata'] = KalenderWisata::all();
        return view('web.kalender_wisata', $data);
    }

    public function create(Request $request)
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($kalender_wisata)
    {
        $data['kalender'] = KalenderWisata::find($kalender_wisata);

        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        return view('web.detail_kalender_wisata', $data);
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
