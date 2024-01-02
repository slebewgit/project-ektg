<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AmenitaswisataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Id' => $this->id_kategori_fasilitas,
            'Nama' => $this->nama,
            'Alamat' => $this->alamat,
            'Deskripsi' => $this->deskripsi,
            'Nama Pengelola' => $this->nama_pengelola,
            'Nomor Pengelola' => $this->no_pengelola,
            'Hari Buka' => $this->hari_buka,
            'Jam Buka' => $this->jam_buka,
            'Jam Tutup' => $this->jam_tutup,
            'Foto' => $this->foto,
            "Sumber Foto" => $this->sumber_foto,
            "Link" => $this->link,
            "Rating" => $this->rating,
            "Fasilitas" => $this->fasilitas,
        ];
    }
}
