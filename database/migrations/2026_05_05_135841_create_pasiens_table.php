<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id(); // Kunci utama, penomoran otomatis
            $table->string('no_rekam_medis'); // Nomor rekam medis
            $table->string('nama_pasien'); // Nama pasien
            $table->string('jenis_kelamin'); // Jenis kelamin
            $table->integer('umur'); // Umur
            $table->timestamps(); // Waktu pembuatan dan pembaruan otomatis
        });
    }

    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
};