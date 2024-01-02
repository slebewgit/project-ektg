<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DesawisataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $foto): array
    {

        return [
            'Nama' => $this->nama_desa_wisata,
            'Deskripsi' => $this->deskripsi,
            'Link Jadesta' => $this->link_jadesta,
            'Foto' => url("public/$this->foto"),
            'Foto1' => url("public/$this->foto1"),
            'Foto2' => url("public/$this->foto2"),
            'Foto3' => url("public/$this->foto3"),
        ];
    }
}
