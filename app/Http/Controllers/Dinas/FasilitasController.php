<?php

namespace App\Http\Controllers\Dinas;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\Kategori;
use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($kategori_fasilitas)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();

        $data['kategori_fasilitas'] = KategoriFasilitas::find($kategori_fasilitas);
        $data['list_fasilitas'] = Fasilitas::where('id_kategori_fasilitas', $kategori_fasilitas)->get();

        return view('dinas.fasilitas.index', $data);
    }

    public function show($fasilitas)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();

        $data['fasilitas'] = Fasilitas::find($fasilitas);

        return view('dinas.fasilitas.show', $data);
    }

    public function status($fasilitas) {
        $fasilitas = Fasilitas::find($fasilitas);
        $fasilitas->status = 2;
        $fasilitas->save();

        return back()->with('warning', 'Persetujaun Berhasil Di Berikan');
    }

    public function hapusstatus($fasilitas) {
        $fasilitas = Fasilitas::find($fasilitas);
        $fasilitas->status = 3;
        $fasilitas->save();

        return back()->with('warning', 'Persetujuan Berhasil Di Hapus');
    }

    public function batalstatus($fasilitas) {
        $fasilitas = Fasilitas::find($fasilitas);
        $fasilitas->status = 1;
        $fasilitas->save();

        return back()->with('warning', 'Persetujuan Berhasil Di Batalkan');
    }
}
