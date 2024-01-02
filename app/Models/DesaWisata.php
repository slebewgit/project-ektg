<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use Illuminate\Support\Str;

class DesaWisata extends Model
{
    protected $table="desa_wisata";

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Desa-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;

        }
    }
    function handleUploadFoto1()
    {
        $this->handleDelete1();
        if (request()->hasFile('foto1')) {
            $foto1 = request()->file('foto1');
            $destination = "Desa-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto1->extension();
            $url = $foto1->storeAs($destination, $filename);
            $this->foto1 = "app/" . $url;

        }
    }
    function handleUploadFoto2()
    {
        $this->handleDelete2();
        if (request()->hasFile('foto2')) {
            $foto2 = request()->file('foto2');
            $destination = "Desa-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto2->extension();
            $url = $foto2->storeAs($destination, $filename);
            $this->foto2 = "app/" . $url;

        }
    }
    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleDelete1()
    {
        $foto1 = $this->foto1;
        if ($foto1) {
            $path = public_path($foto1);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleDelete2()
    {
        $foto2 = $this->foto2;
        if ($foto2) {
            $path = public_path($foto2);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
