<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\KategoriFasilitas;
use App\Models\Mitra;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{

    public function index()
    {
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        return view('admin.fasilitas.index', $data);
    }


    public function create($kategorifasilitas)
    {
        $data["list_kategori_fasilitas"] = KategoriFasilitas::all();
        $data['kategori_fasilitas'] = KategoriFasilitas::find($kategorifasilitas);
        $data["list_mitra"] = Mitra::all();
        return view('admin.fasilitas.create', $data);
    }

    public function store(Request $request)
    {
        $fasilitas = new Fasilitas;
        $fasilitas->id_kategori_fasilitas = request('id_kategori_fasilitas');
        $fasilitas->id_mitra = request('id_mitra');
        $fasilitas->nama = request('nama');
        $fasilitas->alamat = request('alamat');
        $fasilitas->deskripsi = request('deskripsi');
        $fasilitas->nama_pengelola = request('nama_pengelola');
        $fasilitas->no_pengelola = request('no_pengelola');
        $fasilitas->hari_buka = request('hari_buka');
        $fasilitas->jam_buka = request('jam_buka');
        $fasilitas->jam_tutup = request('jam_tutup');
        $fasilitas->link = request('link');
        $fasilitas->rating = request('rating');
        $fasilitas->lat = request('lat');
        $fasilitas->lng = request('lng');
        $fasilitas->fasilitas = request('fasilitas');
        $fasilitas->sumber_foto = request('sumber_foto');
        $fasilitas->status = 2;
        $fasilitas->handleUploadFoto();
        $fasilitas->handleUploadFoto1();
        $fasilitas->handleUploadFoto2();
        $fasilitas->save();

        $id_kategori_fasilitas = request('id_kategori_fasilitas');
        return redirect('admin/fasilitas/' . $id_kategori_fasilitas)->with('success', 'Data Berhasil Disimpan');
    }

    public function show($kategori)
    {
        $data['kategori_fasilitas'] = KategoriFasilitas::find($kategori);
        $data['list_fasilitas'] = Fasilitas::all();

        return view('admin.fasilitas.show', $data);
    }

    public function edit($fasilitas)
    {
        $data["list_kategori_fasilitas"] = KategoriFasilitas::all();
        $data['fasilitas'] = Fasilitas::find($fasilitas);
        
        $data["list_mitra"] = Mitra::all();
        return view('admin.fasilitas.edit', $data);
    }

    public function update($fasilitas)
    {
        $fasilitas = Fasilitas::find($fasilitas);
        $fasilitas->id_kategori_fasilitas = request('id_kategori_fasilitas');
        $fasilitas->id_mitra = request('id_mitra');
        $fasilitas->nama = request('nama');
        $fasilitas->alamat = request('alamat');
        $fasilitas->deskripsi = request('deskripsi');
        $fasilitas->nama_pengelola = request('nama_pengelola');
        $fasilitas->no_pengelola = request('no_pengelola');
        $fasilitas->hari_buka = request('hari_buka');
        $fasilitas->jam_buka = request('jam_buka');
        $fasilitas->jam_tutup = request('jam_tutup');
        $fasilitas->link = request('link');
        $fasilitas->rating = request('rating');
        $fasilitas->fasilitas = request('fasilitas');
        $fasilitas->lat = request('lat');
        $fasilitas->lng = request('lng');
        $fasilitas->sumber_foto = request('sumber_foto');
        if (request('foto')) $fasilitas->handleUploadFoto();
        if (request('foto1')) $fasilitas->handleUploadFoto1();
        if (request('foto2')) $fasilitas->handleUploadFoto2();
        $fasilitas->save();

        $id_kategori_fasilitas = request('id_kategori_fasilitas');
        return redirect('admin/fasilitas/' . $id_kategori_fasilitas)->with('success', 'Data Berhasil Disimpan');
    }

    public function detail($fasilitas)
    {
        $data['fasilitas'] = Fasilitas::find($fasilitas);

        return view('admin.fasilitas.detail', $data);
    }


    public function destroy($fasilitas)
    {
        $fasilitas = Fasilitas::find($fasilitas);
        $fasilitas->handleDelete();
        $fasilitas->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
