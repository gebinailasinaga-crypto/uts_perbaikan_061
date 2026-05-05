<!DOCTYPE html>

@section('konten')
    <h2 class="mb-3">Tambah Data Pasien</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $kesalahan)
                    <li>{{ $kesalahan }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nomor Rekam Medis</label>
            <input type="text" name="no_rekam_medis" class="form-control" value="{{ old('no_rekam_medis') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="{{ old('nama_pasien') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control" value="{{ old('umur') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection