<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\AtraksiWisata;

class WebAtraksiWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($kategori)
    {
        $data['kategori']=Kategori::find($kategori);

        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['list_kategori'] = Kategori::all();
        $data['list_atraksi_wisata']=AtraksiWisata::where('id_kategori', $kategori)->get();
        return view ('web.atraksi-wisata.atraksi_wisata', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($atraksi_wisata)
    {
        $data['atraksi_wisata'] = AtraksiWisata::find($atraksi_wisata);

        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        return view('web.atraksi-wisata.detail_atraksi', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
