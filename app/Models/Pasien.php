<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    // Ini agar data bisa disimpan sekaligus (Mass Assignment)
    protected $fillable = [
        'no_rekam_medis',
        'nama_pasien',
        'jenis_kelamin',
        'umur'
    ];
}