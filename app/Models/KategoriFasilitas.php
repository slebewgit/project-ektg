<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Fasilitas;

class KategoriFasilitas extends Model
{
    protected $table="kategori_fasilitas";

    public function Fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'id');
    }
}
