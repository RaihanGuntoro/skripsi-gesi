<?php
//BAGIAN ROUTING

use App\Models\kontrasepsi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\KontrasepsiController;
 

Route::get('/', [ProgramController::class, 'index']);

Route::get('/login',  [LoginController::class, 'index']);
Route::post('/login',  [LoginController::class, 'authenticate']);

Route::get('/edit', function () {
    return view('edit/edit_utama');
});

Route::get('/edit_admin', function () {
    return view('edit/edit_admin');
});

Route::get('/pengguna', function () {
    return view('pengguna');
});

Route::get('/kontrasepsi', [KontrasepsiController::class, 'index']); //ngambil method index dari controller