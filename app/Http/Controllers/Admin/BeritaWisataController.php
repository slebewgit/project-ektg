<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_berita'] = Berita::all();
        return view('admin.berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $berita = new Berita();
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        $berita->handleUploadFoto();

        $berita->save();

        return redirect('admin/berita')->with('success', 'Data Berhasil Ditambahkan');
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
    public function edit(string $berita)
    {
        $data['berita'] = Berita::find($berita);

      return view('admin.berita.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $berita)
    {
        $berita = Berita::find($berita);
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        if (request('foto')) $berita->handleUploadFoto();

        $berita->save();

        return redirect('admin/berita')->with('success', 'Data berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
