<?php

namespace App\Http\Controllers;

use App\Models\kontrasepsi;
use Illuminate\Http\Request;

class KontrasepsiController extends Controller
{
    public function index()    //nama methodnya index
    {
        return view('kontrasepsi', [
            "title" => "Alat Kontrasepsi",
            "kontrasepsis" => kontrasepsi::all()   //kontrasepsi mengambil dari model
        ]);
    }

    // public function index()    //nama methodnya index
    // {
    //     $data_kontrasepsi = kontrasepsi::all();
    //     return view('kontrasepsi',  $data_kontrasepsi);
    // }
}
