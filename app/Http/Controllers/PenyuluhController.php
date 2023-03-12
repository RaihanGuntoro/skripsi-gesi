<?php

namespace App\Http\Controllers;

use App\Models\penyuluh;
use Illuminate\Http\Request;

class PenyuluhController extends Controller
{
    public function index()    //nama methodnya index
    {
        return view('edit/edit_penyuluh', [
            "title" => "Edit Penyuluh",
            "penyuluh" => penyuluh::all()   //penyuluh mengambil dari model
        ]);
    }

    public function create ( Request $request)
    {
        penyuluh::create($request->all());
        return redirect('/edit_penyuluh');
    }

    public function delete ($id)
    {
        $data = penyuluh::find($id);
        $data -> delete();
        return redirect('/edit_penyuluh');
    }
}
