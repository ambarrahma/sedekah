<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'nominal_donasi',
        'metode_pembayaran',
        'pesan',
    ];
}
