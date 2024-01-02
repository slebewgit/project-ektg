<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class KalenderWisata extends Model
{
    protected $table="kalender_wisata";

    public function Bulan()
    {
        return $this->belongsTo(Bulan::class, 'id_bulan');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Kalender-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleUploadFoto1()
    {
        $this->handleDelete();
        if (request()->hasFile('foto1')) {
            $foto1 = request()->file('foto1');
            $destination = "Kalender-Wisata";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto1->extension();
            $url = $foto1->storeAs($destination, $filename);
            $this->foto1 = "app/" . $url;
            $this->save();

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
}
