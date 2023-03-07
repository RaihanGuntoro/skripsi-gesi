<?php
//BAGIAN ROUTING

use App\Models\kontrasepsi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontrasepsiController;
 

Route::get('/', [HomeController::class, 'index']);

Route::get('/login',  [LoginController::class, 'index']);
Route::post('/login',  [LoginController::class, 'authenticate']);

Route::get('/edit_admin',  [AdminController::class, 'index']);
Route::post('/edit_admin',  [AdminController::class, 'create']);

Route::get('/edit_utama', function () {
    return view('edit/edit_utama');
});

Route::get('/pengguna', function () {
    return view('pengguna');
});

Route::get('/kontrasepsi', [KontrasepsiController::class, 'index']); //ngambil method index dari controller