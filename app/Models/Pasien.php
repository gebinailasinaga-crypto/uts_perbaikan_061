<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    // Tambahkan baris di bawah ini untuk proteksi Mass Assignment
    protected $fillable = [
        'no_rekam_medis',   
        'nama_pasien',
        'jenis_kelamin',
        'umur'
    ];
}