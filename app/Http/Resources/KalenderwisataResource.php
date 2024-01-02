<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KalenderwisataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Bulan' =>$this->id_bulan,
            'Nama' => $this->nama,
            'Deskripsi' => $this->deskripsi,
            'Tempat' => $this->tempat,
            'Tahun' => $this->tahun,
            'Foto' => url("public/$this->foto"),
            "Sumber Foto" => $this->sumber_foto
        ];
    }
}
