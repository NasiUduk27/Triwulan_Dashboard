<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndikatorKegiatanController;
use App\Http\Controllers\IndikatorKinerjaController;
use App\Http\Controllers\IndikatorProgramController;
use App\Http\Controllers\MasterProgramController;
use App\Http\Controllers\MasterSubController;
use App\Http\Controllers\PengaturanController;
use App\Models\Indikator_kegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);

    Route::resource('/master_subkegiatan', MasterSubController::class);
<<<<<<< HEAD
});
// Route::resource('/indikator_program', IndikatorProgramController::class);
// Route::resource('/indikator_kegiatan', IndikatorKegiatanController::class);
// Route::resource('/kegiatan', KegiatanController::class);
=======
<<<<<<< HEAD
    Route::resource('/indikator_program', IndikatorProgramController::class);
    Route::resource('/indikator_kinerja', IndikatorKinerjaController::class);
    Route::resource('/pengaturan', PengaturanController::class);
    Route::resource('/master_program', MasterProgramController::class);
    Route::resource('/indikator_kegiatan', IndikatorKegiatanController::class);

});
// Route::resource('/indikator_program', IndikatorProgramController::class);
// Route::resource('/indikator_kegiatan', IndikatorKegiatanController::class);
// Route::resource('/kegiatan', KegiatanController::class);

  


Route::get('logout', [LoginController::class, 'logout']);


// Route::get('/', [HomeController::class, 'index']);
// Route::get('/anggotakelompok', [AnggotaController::class, 'index']);
// Route::resource('/datatenda', TendaController::class);
// Route::resource('/pendaki', PendakiController::class);
// Route::resource('/sb', SleepingBagController::class);
// Route::resource('/jaket', JaketController::class);
// Route::resource('/sepatu', SepatuController::class);
// Route::resource('/sb', SleepingBagController::class);
// Route::resource('/others', OthersController::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
