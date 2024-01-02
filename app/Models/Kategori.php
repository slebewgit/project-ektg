<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\AtraksiWisata;

class Kategori extends Model
{
    protected $table = "kategori";

    public function AtraksiWisata()
    {
        return $this->belongsTo(AtraksiWisata::class, 'id');
    }
}
