<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $primaryKey = 'idpengguna';
    protected $fillable = ['nama', 'alamat', 'telp'];
}

