<?php

namespace App\Http\Controllers;

use App\Models\penyuluh;
use App\Models\program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()    //nama methodnya index
    {
        return view('home', [
            "title" => "Halaman Utama",
            "programs" => program::all(),
            "penyuluh" => penyuluh::all()  //program mengambil dari model
        ]);
    }
}