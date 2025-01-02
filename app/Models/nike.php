<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nike extends Model
{
    use HasFactory;

    protected $table = 'nike';

    protected $fillable = [
        'jenis_nike',
        'gambar',
        'deskripsi',
        'harga',
        'stock',
    ];
}
