<?php
//BAGIAN ROUTING

use App\Models\kontrasepsi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenyuluhController;
use App\Http\Controllers\KontrasepsiController;


Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/edit_utama', function () {
        return view('edit/edit_utama');
    });

    Route::get('/edit_admin',  [AdminController::class, 'index']);
    Route::post('/edit_admin',  [AdminController::class, 'create']);
    Route::get('/delete_admin/{id}',  [AdminController::class, 'delete']);

    Route::get('/edit_kontrasepsi',  [KontrasepsiController::class, 'index2']);
    Route::post('/edit_kontrasepsi',  [KontrasepsiController::class, 'create']);
    Route::get('/delete_kontrasepsi/{id}',  [KontrasepsiController::class, 'delete']);
    Route::get('/tampilkan_kontrasepsi/{id}',  [KontrasepsiController::class, 'tampilkan']);
    Route::post('/update_kontrasepsi/{id}',  [KontrasepsiController::class, 'update']);

    Route::get('/edit_program',  [ProgramController::class, 'index']);
    Route::post('/edit_program',  [ProgramController::class, 'create']);
    Route::get('/delete_program/{id}',  [ProgramController::class, 'delete']);
    Route::get('/tampilkan_program/{id}',  [ProgramController::class, 'tampilkan']);
    Route::post('/update_program/{id}',  [ProgramController::class, 'update']);

    Route::get('/edit_penyuluh',  [PenyuluhController::class, 'index']);
    Route::post('/edit_penyuluh',  [PenyuluhController::class, 'create']);
    Route::get('/delete_penyuluh/{id}',  [PenyuluhController::class, 'delete']);

    Route::get('/edit_pengguna',  [PenggunaController::class, 'index']);
    Route::get('/tambah_pengguna',  [PenggunaController::class, 'index2']);
    Route::post('/tambah_pengguna',  [PenggunaController::class, 'create']);
    Route::get('/delete_pengguna/{id}',  [PenggunaController::class, 'delete']);
    Route::get('/export_pengguna',  [PenggunaController::class, 'export']);
    Route::get('/tampilkan_pengguna/{id}',  [PenggunaController::class, 'tampilkan']);
    Route::post('/update_pengguna/{id}',  [PenggunaController::class, 'update']);

    Route::get('/edit_total',  [PenggunaController::class, 'index_total']);
    Route::get('/tampilkan_total/{id}',  [PenggunaController::class, 'tampilkan_total']);
    Route::post('/update_total/{id}',  [PenggunaController::class, 'update_total']);

});


Route::get('/kontrasepsi', [KontrasepsiController::class, 'index']); //ngambil method index dari controller

require __DIR__ . '/auth.php';
