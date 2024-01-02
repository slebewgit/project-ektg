<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\Kategori;
use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;

class WebFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($kategori_fasilitas)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['kategori_fasilitas'] = KategoriFasilitas::find($kategori_fasilitas);
        $data['list_fasilitas']= Fasilitas::where('id_kategori_fasilitas', $kategori_fasilitas)->get();
        return view('web.fasilitas.fasilitas', $data);
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
    public function show($fasilitas)
    {
        $data['fasilitas'] = Fasilitas::find($fasilitas);

        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        return view('web.fasilitas.detail_fasilitas', $data);
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
