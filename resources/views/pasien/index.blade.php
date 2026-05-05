<!DOCTYPE html>

@section('konten')
    <h2 class="mb-3">Daftar Pasien</h2>

    <!-- Pesan notifikasi -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol ke halaman tambah data -->
    <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">Tambah Pasien Baru</a>

    <!-- Tabel Data -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>No Rekam Medis</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Tampilkan semua data pasien -->
            @foreach($pasiens as $nomor => $pasien)
            <tr>
                <td>{{ $nomor + 1 }}</td>
                <td>{{ $pasien->no_rekam_medis }}</td>
                <td>{{ $pasien->nama_pasien }}</td>
                <td>{{ $pasien->jenis_kelamin }}</td>
                <td>{{ $pasien->umur }}</td>
                <td>
                    <!-- Tombol Ubah -->
                    <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-sm btn-warning">Ubah</a>
                    
                    <!-- Tombol Hapus -->
                    <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin hapus data pasien ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection