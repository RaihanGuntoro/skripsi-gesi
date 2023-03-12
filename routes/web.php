<?php
//BAGIAN ROUTING

use App\Models\kontrasepsi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PenyuluhController;
use App\Http\Controllers\KontrasepsiController;
 

Route::get('/', [HomeController::class, 'index']);

Route::get('/login',  [LoginController::class, 'index']);
Route::post('/login',  [LoginController::class, 'authenticate']);

Route::get('/edit_admin',  [AdminController::class, 'index']);
Route::post('/edit_admin',  [AdminController::class, 'create']);
Route::get('/delete_admin/{id}',  [AdminController::class, 'delete']);

Route::get('/edit_kontrasepsi',  [KontrasepsiController::class, 'index2']);
Route::post('/edit_kontrasepsi',  [KontrasepsiController::class, 'create']);
Route::get('/delete_kontrasepsi/{id}',  [KontrasepsiController::class, 'delete']);

Route::get('/edit_program',  [ProgramController::class, 'index']);
Route::post('/edit_program',  [ProgramController::class, 'create']);
Route::get('/delete_program/{id}',  [ProgramController::class, 'delete']);

Route::get('/edit_penyuluh',  [PenyuluhController::class, 'index']);
Route::post('/edit_penyuluh',  [PenyuluhController::class, 'create']);
Route::get('/delete_penyuluh/{id}',  [PenyuluhController::class, 'delete']);

Route::get('/edit_utama', function () {
    return view('edit/edit_utama');
});

Route::get('/pengguna', function () {
    return view('pengguna');
});

Route::get('/kontrasepsi', [KontrasepsiController::class, 'index']); //ngambil method index dari controller