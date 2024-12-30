<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jordan extends Model
{
    protected $fillable = [
        'jenis_jordan',
        'gambar',
        'deskripsi',
        'harga',
        'stock',
    ];
}
