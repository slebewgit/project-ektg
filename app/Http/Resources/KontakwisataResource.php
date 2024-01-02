<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KontakwisataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Nama'=>$this->nama,
            'Jabatan'=>$this->jabatan,
            'Foto' => url("public/$this->foto"),
        ];
    }
}
