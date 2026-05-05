use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

// Baris ini yang paling penting untuk menghilangkan error tadi
Route::resource('pasien', PasienController::class);