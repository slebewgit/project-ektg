<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use Illuminate\Http\Request;
use App\Models\User;

class MitraController extends Controller
{
    public function index()
    {
        $data['list_mitra'] = Mitra::all();

        return view('admin.mitra.index', $data);
    }

   
    public function create()
    {
        return view('admin.mitra.create');
    }

   
    public function store(Request $request)
    {
        $mitra = New mitra;
        $mitra->nama = request('nama');
        $mitra->username = request('username');
        $mitra->kategori = request('kategori');
        $mitra->password = request('confirmasi_password');
        $mitra->confirmasi_password = request('confirmasi_password');
        $mitra->alamat = request('alamat');
        $mitra->nomor_telpon = request('nomor_telpon');
        $mitra->foto = request('foto');
        $mitra->handleUploadPoto();
        $mitra->save();

        return redirect('admin/mitra')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show($mitra)
    {
        $data['mitra'] = Mitra::find($mitra);

        return view('admin.mitra.show', $data);
    }

   
    public function edit($mitra)
    {
        $data['mitra'] = Mitra::find($mitra);
        return view('admin.mitra.edit', $data);
    }

   
    public function update($mitra)
    {
        $mitra = Mitra::find($mitra);
        $mitra->nama = request('nama');
        $mitra->kategori = request('kategori');
        $mitra->username = request('username');
        $mitra->password = request('confirmasi_password');
        $mitra->confirmasi_password = request('confirmasi_password');
        $mitra->alamat = request('alamat');
        $mitra->nomor_telpon = request('nomor_telpon');
        $mitra->alamat = request('alamat');
        $mitra->foto = request('foto');
        $mitra->handleUploadPoto();
        $mitra->save();

        return redirect('admin/mitra')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function destroy($mitra)
    {
        Mitra::destroy($mitra);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}