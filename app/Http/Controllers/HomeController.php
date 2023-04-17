<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\penyuluh;
use App\Models\total;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()    //nama methodnya index
    {
        $desa = total::select(DB::raw("desa"))
        ->pluck("desa");

        $total_pengguna = total::select(DB::raw("total_pengguna"))
        ->pluck("total_pengguna");

        return view('home', [
            "title" => "BKKBN Kecamatan Gesi",
            "programs" => program::all(),
            "penyuluh" => penyuluh::all(),  //penyuluh mengambil dari model
        ], compact("desa", "total_pengguna"));
    }
}