<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dinas;
use Illuminate\Http\Request;
use App\Models\User;

class DinasController extends Controller
{
    public function index()
    {
        $data['list_dinas'] = Dinas::all();

        return view('admin.dinas.index', $data);
    }

   
    public function create()
    {
        return view('admin.dinas.create');
    }

   
    public function store(Request $request)
    {
        $dinas = New Dinas;
        $dinas->nama = request('nama');
        $dinas->username = request('username');
        $dinas->password = request('confirmasi_password');
        $dinas->confirmasi_password = request('confirmasi_password');
        $dinas->alamat = request('alamat');
        $dinas->nomor_telpon = request('nomor_telpon');
        $dinas->handleUploadPoto();
        $dinas->save();

        return redirect('admin/dinas')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show($dinas)
    {
        $data['dinas'] = Dinas::find($dinas);

        return view('admin.dinas.show', $data);
    }

   
    public function edit($dinas)
    {
        $data['dinas'] = dinas::find($dinas);
        return view('admin.dinas.edit', $data);
    }

   
    public function update($dinas)
    {
        $dinas = Dinas::find($dinas);
        $dinas->nama = request('nama');
        $dinas->username = request('username');
        $dinas->password = request('confirmasi_password');
        $dinas->confirmasi_password = request('confirmasi_password');
        $dinas->alamat = request('alamat');
        $dinas->nomor_telpon = request('nomor_telpon');
        $dinas->handleUploadPoto();
        $dinas->save();

        return redirect('admin/dinas')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function destroy($dinas)
    {
        Dinas::destroy($dinas);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}