<?php

namespace App\Models;


use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;

class Mitra extends ModelAuthenticate
{
    protected $table = "mitra";

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    function handleUploadPoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "mitra";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;


        }
    }


}
