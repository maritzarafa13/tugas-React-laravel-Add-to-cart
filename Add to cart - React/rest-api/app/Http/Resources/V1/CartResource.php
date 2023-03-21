<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idorderdetail' => $this->idorderdetail,
            'idpengguna' => $this->idpengguna,
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'telp' => $this->telp,
            'idproduk' => $this->idproduk,
            'produk' => $this->produk,
            'harga' => $this->harga,
            'kategori' => $this->kategori
        ];
    }
}
?>