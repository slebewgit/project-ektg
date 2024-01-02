<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_detail'] = Detail::all();
        return view('admin.detail.index', $data);
    }

    public function store(Request $request)
    {
        $detail = New Detail;
        $detail->nama = request('nama');
        $detail->save();

        return back()->with('primary', 'Data Berhasil Disimpan');
    }

    public function update($detail)
    {
        $detail = Detail::find($detail);
        $detail->nama = request('nama');
        $detail->save();

        return back()->with('primary', 'Data Berhasil Disimpan');
    }

}
