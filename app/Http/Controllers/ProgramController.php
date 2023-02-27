<?php

namespace App\Http\Controllers;

use App\Models\program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()    //nama methodnya index
    {
        return view('home', [
            "title" => "Halaman Utama",
            "programs" => program::all()   //program mengambil dari model
        ]);
    }
}