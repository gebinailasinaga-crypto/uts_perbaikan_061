<!DOCTYPE html>

@section('konten')
    <h2 class="mb-3">Ubah Data Pasien</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $kesalahan)
                    <li>{{ $kesalahan }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nomor Rekam Medis</label>
            <input type="text" name="no_rekam_medis" class="form-control" value="{{ old('no_rekam_medis', $pasien->no_rekam_medis) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="{{ old('nama_pasien', $pasien->nama_pasien) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" required>
                <option value="Laki-laki" {{ old('jenis_kelamin', $pasien->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $pasien->jenis_kelamin) ==