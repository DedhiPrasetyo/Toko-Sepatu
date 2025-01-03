<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jordan extends Model
{
    use HasFactory;

    protected $table = 'jordan';

    protected $fillable = [
        'jenis_jordan',
        'gambar',
        'deskripsi',
        'harga',
        'stock',
    ];
}
