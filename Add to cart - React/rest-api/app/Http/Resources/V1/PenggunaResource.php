<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PenggunaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idpengguna' => $this->idpengguna,
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'telp' => $this->telp
        ];
    }
}
?>