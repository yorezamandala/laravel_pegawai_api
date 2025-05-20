<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');        // List pegawai
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');  // Form tambah
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');          // Simpan data baru
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');  // Form edit
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');   // Update data
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy'); // Hapus data
