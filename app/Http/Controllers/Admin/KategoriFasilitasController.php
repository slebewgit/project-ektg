<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriFasilitas;

class KategoriFasilitasController extends Controller
{
    public function index()
    {
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        return view('admin.kategori_fasilitas.index', $data);
    }

    public function store(Request $request)
    {
        $kategori_fasilitas = New KategoriFasilitas();
        $kategori_fasilitas->nama = request('nama');
        $kategori_fasilitas->save();

        return back()->with('primary', 'Data Berhasil Disimpan');
    }

    public function update($kategori_fasilitas)
    {
        $kategori_fasilitas = KategoriFasilitas::find($kategori_fasilitas);
        $kategori_fasilitas->nama = request('nama');
        $kategori_fasilitas->save();

        return back()->with('info', 'Data Berhasil di Edit');
    }

    public function destroy($kategori_fasilitas)
    {
        KategoriFasilitas::destroy($kategori_fasilitas);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
