<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TerverifikasiController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', function () {
    $terverifikasis = \App\Models\Terverifikasi::all();
    $galleries = \App\Models\Gallery::all();
    return view('home', ['terverifikasis' => $terverifikasis, 'galleries' => $galleries]);
});
// Route::get('/', function () {
//     $terverifikasis = \App\Models\Terverifikasi::all();
//     return view('home', ['terverifikasis' => $terverifikasis]);
// });



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [TestimoniController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/terverifikasi', [TerverifikasiController::class, 'index'])->name('terverifikasi');
    Route::resource('/gallery', GalleryController::class);
});

require __DIR__.'/auth.php';

Route::get('/kritikdansaran', function () {
    return view('kritikdansaran');
});

// Route::get('/marchingband',function(){
//     return view('kategori.marchingband');
// });
// Route::get('/marchingband', [KategoriController::class, 'kategoriMarchingBand']);

Route::get('/marchingband', [KategoriController::class, 'marchingband']);
Route::get('/gamelan', [KategoriController::class, 'gamelan']);
Route::get('/angklung', [KategoriController::class, 'angklung']);
Route::get('/hadroh', [KategoriController::class, 'hadroh']);
Route::get('/kolintang', [KategoriController::class, 'kolintang']);
Route::get('/semuakategori', [KategoriController::class, 'kategori']);
Route::get('/drumb', [KategoriController::class, 'drumb']);
// Route::get('/angklung', [KategoriController::class, 'lihatSemuaKategori']);

Route::post('/kirim-testimoni', [TestimoniController::class, 'kirim']);
Route::post('/dashboard/terima/{nama}', [TestimoniController::class, 'terima'])->name('terima');
Route::delete('/dashboard/tolak/{nama}', [TestimoniController::class, 'tolak'])->name('tolak');