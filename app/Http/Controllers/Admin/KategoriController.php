<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('admin.kategori.index', $data);
    }

    public function store(Request $request)
    {
        $kategori = New Kategori;
        $kategori->nama = request('nama');
        $kategori->save();

        return back()->with('primary', 'Data Berhasil Disimpan');
    }

    public function update(Kategori $kategori)
    {
        $kategori->nama = request('nama');
        $kategori->save();

        return back()->with('info', 'Data Berhasil di Edit');
    }

    public function destroy($kategori)
    {
        Kategori::destroy($kategori);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
