 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Rute Pasien
Route::resource('pasien', PasienController::class);   
