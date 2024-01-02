<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KontakWisata;

class KontakController extends Controller
{

    public function index()
    {
        $data['list_kontak_wisata'] = KontakWisata::all();
        return view('admin.kontak.index', $data);
    }


    public function create()
    {
        return view('admin.kontak.create');
    }


    public function store(Request $request)
    {
        $kontak_wisata = New KontakWisata;
        $kontak_wisata->nama = request('nama');
        $kontak_wisata->jabatan = request('jabatan');
        $kontak_wisata->link_wa = request('link_wa');
        $kontak_wisata->link_fb = request('link_fb');
        $kontak_wisata->link_ig = request('link_ig');
        $kontak_wisata->handleUploadFoto();
        $kontak_wisata->save();

        return redirect('admin/kontak')->with('primary', 'Data Berhasil Disimpan');
    }

    public function show($kontak_wisata)
    {
        $data['kontak_wisata'] = KontakWisata::find($kontak_wisata);

        return view('admin.kontak.show', $data);
    }

    public function edit($kontak_wisata)
    {
        $data['kontak_wisata'] = KontakWisata::find($kontak_wisata);

        return view('admin.kontak.edit', $data);
    }


    public function update($kontak_wisata)
    {
        $kontak_wisata = KontakWisata::find($kontak_wisata);
        $kontak_wisata->nama = request('nama');
        $kontak_wisata->jabatan = request('jabatan');
        $kontak_wisata->link_wa = request('link_wa');
        $kontak_wisata->link_fb = request('link_fb');
        $kontak_wisata->link_ig = request('link_ig');
        if (request('foto')) $kontak_wisata->handleUploadFoto();
        $kontak_wisata->save();

        return redirect('admin/kontak')->with('primary', 'Data Berhasil Disimpan');
    }

    public function destroy($kontak_wisata)
    {
        $kontak_wisata = KontakWisata::find($kontak_wisata);
        $kontak_wisata->handleDelete();
        $kontak_wisata->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
