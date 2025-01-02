<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vans extends Model
{
    use HasFactory;

    protected $table = 'vans';

    protected $fillable = [
        'jenis_vans',
        'gambar',
        'deskripsi',
        'harga',
        'stock',
    ];
}
