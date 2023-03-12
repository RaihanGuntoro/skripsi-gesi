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

    public function index2()    //nama methodnya index
    {
        return view('edit/edit_kontrasepsi', [
            "title" => "Edit Kontrasepsi",
            "kontrasepsis" => kontrasepsi::all()   //kontrasepsi mengambil dari model
        ]);
    }

    public function create ( Request $request)
    {
        kontrasepsi::create($request->all());
        return redirect('/edit_kontrasepsi');
    }

    public function delete ($id)
    {
        $data = kontrasepsi::find($id);
        $data -> delete();
        return redirect('/edit_kontrasepsi');
    }
}
