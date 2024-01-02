<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\KategoriFasilitas;
use App\Models\KontakWisata;
use Illuminate\Http\Request;
use App\Models\Kategori;

class WebKontakWisataController extends Controller
{
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['list_berita'] = Berita::all();
        $data['list_kontak_wisata'] = KontakWisata::all();
        return view('web.kontak_wisata', $data);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $berita)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['berita'] = Berita::find($berita);
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->get();
        // return $data;
        return view('web.berita', $data);
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
