<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DesaWisata;
use App\Models\Galeri;

class DesaWisataController extends Controller
{

    public function index()
    {
        $data['list_desa_wisata'] = DesaWisata::all();
        return view('admin.desa_wisata.index', $data);
    }

    public function create()
    {
        return view('admin.desa_wisata.create');
    }

    public function store(Request $request)
    {
        $desa_wisata = New DesaWisata;
        $desa_wisata->nama_desa_wisata = request('nama_desa_wisata');
        $desa_wisata->deskripsi = request('deskripsi');
        $desa_wisata->link_jadesta = request('link_jadesta');
        $desa_wisata->lat = request('lat');
        $desa_wisata->lng = request('lng');
        $desa_wisata->handleUploadFoto();
        $desa_wisata->handleUploadFoto1();
        $desa_wisata->handleUploadFoto2();
        $desa_wisata->save();

        return redirect('admin/desa-wisata')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($desa_wisata)
    {
        $data['desa_wisata'] = DesaWisata::find($desa_wisata);
        return view('admin.desa_wisata.show', $data);
    }


    public function edit($id)
    {
        $data['desa_wisata'] = DesaWisata::find($id);

        return view('admin.desa_wisata.edit', $data);
    }


    public function update($desa_wisata)
    {
        $desa_wisata = DesaWisata::find($desa_wisata);
        $desa_wisata->nama_desa_wisata = request('nama_desa_wisata');
        $desa_wisata->deskripsi = request('deskripsi');
        $desa_wisata->link_jadesta = request('link_jadesta');
        $desa_wisata->lat = request('lat');
        $desa_wisata->lng = request('lng');
        if (request('foto')) $desa_wisata->handleUploadFoto();
        if (request('foto1')) $desa_wisata->handleUploadFoto1();
        if (request('foto2')) $desa_wisata->handleUploadFoto2();
        $desa_wisata->save();

        return redirect('admin/desa-wisata')->with('success', 'Data Berhasil Di Edit');
    }

    public function destroy($desa_wisata)
    {
        $desa_wisata = DesaWisata::find($desa_wisata);
        $desa_wisata->handleDelete();
        $desa_wisata->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
