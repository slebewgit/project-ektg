<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AtraksiWisata;
use App\Models\DesaWisata;
use App\Models\Fasilitas;
use App\Models\Kategori;
use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_desa_wisata'] = DesaWisata::all();
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        $data['list_user'] = Admin::all();
        $data['list_fasilitas'] = Fasilitas::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        
        $data['mitra'] = auth()->guard('mitra')->user();
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();

        return view('mitra.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
    public function show(string $id)
    {
        //
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
