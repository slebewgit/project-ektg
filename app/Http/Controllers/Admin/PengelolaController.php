<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PengelolaController extends Controller
{

    public function index()
    {
        $data['list_user'] = User::all();
        $data['user'] = auth()->user();

        return view('admin.pengelola.index', $data);
    }


    public function create()
    {
        $data['user'] = auth()->user();

        return view('admin.pengelola.create', $data);
    }


    public function store(Request $request)
    {
        $user = New User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = request('confir_password');
        $user->confir_password = request('confir_password');
        $user->handleUploadPoto();
        $user->save();

        return redirect('admin/pengelola')->with('success', 'Data Berhasil Disimpan');
    }




    public function edit($user)
    {
        $data['user'] = User::find($user);
        return view('admin.pengelola.edit', $data);
    }


    public function update(User $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = request('confir_password');
        $user->confir_password = request('confir_password');
        $user->save();
        $user->handleUploadPoto();

        return redirect('admin/pengelola')->with('success', 'Data Berhasil Disimpan');
    }


    public function destroy($user)
    {
        User::destroy($user);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
