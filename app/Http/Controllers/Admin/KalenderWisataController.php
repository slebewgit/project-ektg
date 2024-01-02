<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KalenderWisata;
use App\Models\Bulan;

class KalenderWisataController extends Controller
{

    public function index()
    {
        $data['list_kalender_wisata'] = KalenderWisata::all();
        return view('admin.kalender_wisata.index', $data);
    }


    public function create()
    {
        $data['list_bulan'] = Bulan::all();
        return view('admin.kalender_wisata.create', $data);
    }


    public function store(Request $request)
    {
        $kalender_wisata = New KalenderWisata;
        $kalender_wisata->nama = request('nama');
        $kalender_wisata->deskripsi = request('deskripsi');
        $kalender_wisata->event = request('event');
        $kalender_wisata->deskripsi_event = request('deskripsi_event');
        $kalender_wisata->penyelenggara_event = request('penyelenggara_event');
        $kalender_wisata->transportasi = request('transportasi');
        $kalender_wisata->tempat = request('tempat');
        $kalender_wisata->tanggal = request('tanggal');
        $kalender_wisata->id_bulan = request('id_bulan');
        $kalender_wisata->link_event = request('link_event');
        $kalender_wisata->sumber_foto = request('sumber_foto');
        $kalender_wisata->handleUploadFoto();
        $kalender_wisata->handleUploadFoto1();
        $kalender_wisata->save();

        return redirect('admin/kalender-wisata')->with('primary', 'Data Berhasil Ditambahkan');
    }

    public function storeBulan(Request $request)
    {
        $bulan = New Bulan;
        $bulan->nama = request('nama');
        $bulan->save();

        return back();
    }

    public function show($kalender_wisata)
    {
        $data['kalender_wisata'] = KalenderWisata::find($kalender_wisata);
        $data['list_bulan'] = Bulan::all();
        return view('admin.kalender_wisata.show', $data);
    }


    public function edit($kalender_wisata)
    {
        $data['kalender_wisata'] = KalenderWisata::find($kalender_wisata);
        $data['list_bulan'] = Bulan::all();
        return view('admin.kalender_wisata.edit', $data);
    }


    public function update($kalender_wisata)
    {
        $kalender_wisata = KalenderWisata::find($kalender_wisata);
        $kalender_wisata->nama = request('nama');
        $kalender_wisata->deskripsi = request('deskripsi');
        $kalender_wisata->event = request('event');
        $kalender_wisata->deskripsi_event = request('deskripsi_event');
        $kalender_wisata->penyelenggara_event = request('penyelenggara_event');
        $kalender_wisata->transportasi = request('transportasi');
        $kalender_wisata->tempat = request('tempat');
        $kalender_wisata->tanggal = request('tanggal');
        $kalender_wisata->id_bulan = request('id_bulan');
        $kalender_wisata->link_event = request('link_event');
        $kalender_wisata->sumber_foto = request('sumber_foto');
        if (request('foto')) $kalender_wisata->handleUploadFoto();
        if (request('foto1')) $kalender_wisata->handleUploadFoto1();
        $kalender_wisata->save();

        return redirect('admin/kalender-wisata')->with('primary', 'Data Berhasil Diedit');
    }


    public function destroy($kalender_wisata)
    {
        $kalender_wisata = KalenderWisata::find($kalender_wisata);
        $kalender_wisata->handleDelete();
        $kalender_wisata->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}