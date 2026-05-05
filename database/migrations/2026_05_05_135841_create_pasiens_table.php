<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel pasiens.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            // id: Primary Key & Auto-increment (Bawaan Laravel)
            $table->id(); 
            
            // no_rekam_medis: String (Contoh: RM-001)
            $table->string('no_rekam_medis'); 
            
            // nama_pasien: String (Wajib diisi)
            $table->string('nama_pasien'); 
            
            // jenis_kelamin: String (Contoh: Laki-laki, Perempuan)
            $table->string('jenis_kelamin'); 
            
            // umur: Integer (Berupa angka)
            $table->integer('umur'); 
            
            // created_at & updated_at: Timestamps (Bawaan otomatis Laravel)
            $table->timestamps(); 
        });
    }

    /**
     * Batalkan migrasi (Hapus tabel).
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};