<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\AtraksiWisata;
use App\Models\Kategori;
use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;

class AtraksiWisataController extends Controller
{
    public function index($kategori)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        
        $data['kategori'] = Kategori::find($kategori);
        $data['list_atraksi_wisata'] = AtraksiWisata::where('id_kategori', $kategori)->get();
        return view('mitra.atraksi_wisata.index', $data);
    }

    
    public function create($kategori)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        
        $data['kategori'] = Kategori::find($kategori);
        return view('mitra.atraksi_wisata.create', $data);
    }

    
    public function store()
    {
        $atraksi_wisata =New AtraksiWisata;
        $atraksi_wisata->id_kategori = request('id_kategori');
        $atraksi_wisata->id_mitra = request('id_mitra');
        $atraksi_wisata->nama = request('nama');
        $atraksi_wisata->alamat = request('alamat');
        $atraksi_wisata->destinasi = request('destinasi');
        $atraksi_wisata->deskripsi = request('deskripsi');
        $atraksi_wisata->nama_pengelola = request('nama_pengelola');
        $atraksi_wisata->no_pengelola = request('no_pengelola');
        $atraksi_wisata->hari_buka = request('hari_buka');
        $atraksi_wisata->jam_buka = request('jam_buka');
        $atraksi_wisata->jam_tutup = request('jam_tutup');
        $atraksi_wisata->lat = request('lat');
        $atraksi_wisata->lng = request('lng');
        $atraksi_wisata->sumber_foto = request('sumber_foto');
        $atraksi_wisata->rekomendasi = 1;
        $atraksi_wisata->status = 1;
        $atraksi_wisata->handleUploadFoto();
        $atraksi_wisata->save();

        $id_kategori = request('id_kategori');
        return redirect('mitra/atraksi-wisata/'. $id_kategori)->with('success', 'Data Berhasil Disimpan');
    }

    
    public function show($atraksi_wisata)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['atraksi_wisata'] = AtraksiWisata::find($atraksi_wisata);
        
        return view('mitra.atraksi_wisata.show', $data);
    }

    
    public function edit($atraksi_wisata)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['atraksi_wisata'] = AtraksiWisata::find($atraksi_wisata);
        
        return view('mitra.atraksi_wisata.edit', $data);
    }

    
    public function update($atraksi_wisata)
    {
        $atraksi_wisata = AtraksiWisata::find($atraksi_wisata);
        $atraksi_wisata->id_kategori = request('id_kategori');
        $atraksi_wisata->nama = request('nama');
        $atraksi_wisata->alamat = request('alamat');
        $atraksi_wisata->destinasi = request('destinasi');
        $atraksi_wisata->deskripsi = request('deskripsi');
        $atraksi_wisata->nama_pengelola = request('nama_pengelola');
        $atraksi_wisata->no_pengelola = request('no_pengelola');
        $atraksi_wisata->hari_buka = request('hari_buka');
        $atraksi_wisata->jam_buka = request('jam_buka');
        $atraksi_wisata->jam_tutup = request('jam_tutup');
        $atraksi_wisata->lat = request('lat');
        $atraksi_wisata->lng = request('lng');
        $atraksi_wisata->sumber_foto = request('sumber_foto');
        $atraksi_wisata->handleUploadFoto();
        $atraksi_wisata->save();

        $id_kategori = request('id_kategori');
        return redirect('mitra/atraksi-wisata/'.$id_kategori)->with('success', 'Data Berhasil Disimpan');
    }

    
    public function destroy($atraksi_wisata)
    {
        AtraksiWisata::destroy($atraksi_wisata);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }

    public function rekomendasi($atraksi_wisata) {
        $atraksi_wisata = AtraksiWisata::find($atraksi_wisata);
        $atraksi_wisata->rekomendasi = 2;
        $atraksi_wisata->save();

        return back()->with('success', 'Rekomendasi Berhasil Di Masukan');
    }

    public function hapusrekomendasi($atraksi_wisata) {
        $atraksi_wisata = AtraksiWisata::find($atraksi_wisata);
        $atraksi_wisata->rekomendasi = 1;
        $atraksi_wisata->save();

        return back()->with('danger', 'Rekomendasi Berhasil Di Hapus');
    }
}
