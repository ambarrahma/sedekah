<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalangDana extends Model
{
    use HasFactory;

    protected $table = 'galang_dana';

    protected $fillable = [
        'gambar',
        'nama_galang_dana',
        'nama_organisasi',
        'kategori_donasi',
        'target_donasi',
        'deskripsi',
    ];
}
