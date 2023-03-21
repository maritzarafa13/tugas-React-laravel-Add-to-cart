<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = 'idorderdetail';
    protected $fillable = ['idpengguna','nama','alamat','telp','idproduk','produk', 'harga', 'kategori'];
}
