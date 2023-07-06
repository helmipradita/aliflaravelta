<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    protected $fillable = [
        'rasa_sambal',
        'tempat_makan',
        'harga',
        'porsi_makan',
        'parkir',
        'warna_sambal',
        'penjual',
        'alamat',
        'jam_buka',
        'jam_tutup',
    ];
    use HasFactory;
}
