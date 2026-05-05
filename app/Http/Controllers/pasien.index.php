<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // Menampilkan daftar pasien
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index', compact('pasiens'));
    }

    // Menampilkan formulir tambah
    public function create()
    {
        return view('pasien.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'no_rekam_medis' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required|integer'
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil ditambahkan!');
    }

    // Fungsi edit, update, dan hapus (akan diisi di nomor 5)
    public function edit(Pasien $pasien){}
    public function update(Request $request, Pasien $pasien){}
    public function destroy(Pasien $pasien){}
}