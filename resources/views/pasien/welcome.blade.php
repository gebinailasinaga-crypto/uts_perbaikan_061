<!DOCTYPE html>

@section('konten')
    <div class="container text-center mt-5">
        <h1>Selamat Datang di Sistem Manajemen Pasien Klinik</h1>
        <p class="lead">Aplikasi ini digunakan untuk mencatat data rekam medis pasien</p>
        <a href="{{ route('pasien.index') }}" class="btn btn-primary btn-lg mt-3">Mulai Menggunakan</a>
    </div>
@endsection