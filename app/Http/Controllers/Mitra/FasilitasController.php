<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\Kategori;
use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index($kategori_fasilitas)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        
        $data['kategori_fasilitas'] = KategoriFasilitas::find($kategori_fasilitas);
        $data['list_fasilitas'] = Fasilitas::where('id_kategori_fasilitas', $kategori_fasilitas)->get();
        return view('mitra.fasilitas.index', $data);
    }

    
    public function create($kategori_fasilitas)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        
        $data['kategori_fasilitas'] = KategoriFasilitas::find($kategori_fasilitas);
        return view('mitra.fasilitas.create', $data);
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
        $fasilitas->sumber_foto = request('sumber_foto');
        $fasilitas->handleUploadFoto();
        $fasilitas->handleUploadFoto1();
        $fasilitas->handleUploadFoto2();
        $fasilitas->status = 1;
        $fasilitas->save();

        $id_kategori_fasilitas = request('id_kategori_fasilitas');
        return redirect('mitra/fasilitas/' . $id_kategori_fasilitas)->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($fasilitas)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();

        $data['fasilitas'] = Fasilitas::find($fasilitas);

        return view('mitra.fasilitas.show', $data);
    }

    
    public function edit($fasilitas)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();

        $data['fasilitas'] = Fasilitas::find($fasilitas);

        return view('mitra.fasilitas.edit', $data);
    }

    
    public function update($fasilitas)
    {
        $fasilitas = Fasilitas::find($fasilitas);
        $fasilitas->id_kategori_fasilitas = request('id_kategori_fasilitas');
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
        $fasilitas->sumber_foto = request('sumber_foto');
        $fasilitas->handleUploadFoto();
        $fasilitas->handleUploadFoto1();
        $fasilitas->handleUploadFoto2();
        $fasilitas->save();

        $id_kategori_fasilitas = request('id_kategori_fasilitas');
        return redirect('mitra/fasilitas/' . $id_kategori_fasilitas)->with('success', 'Data Berhasil Disimpan');
    }

    
    public function destroy($fasilitas)
    {
        Fasilitas::destroy($fasilitas);
        return back()->with('danger', 'Data Berhasil Di Hapus');
        
    }
}
