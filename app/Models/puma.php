<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puma extends Model
{
    use HasFactory;

    protected $table = 'puma';

    protected $fillable = [
        'jenis_puma',
        'gambar',
        'deskripsi',
        'harga',
        'stock',
    ];
}
