<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class adidas extends Model
{
    protected $fillable = [
        'jenis_adidas',
        'gambar',
        'deskripsi',
        'harga',
        'stock',
    ];
}
