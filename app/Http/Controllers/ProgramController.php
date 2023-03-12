<?php

namespace App\Http\Controllers;

use App\Models\program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()    //nama methodnya index
    {
        return view('edit/edit_program', [
            "title" => "Edit Program",
            "program" => program::all()   //program mengambil dari model
        ]);
    }

    public function create ( Request $request)
    {
        program::create($request->all());
        return redirect('/edit_program');
    }

    public function delete ($id)
    {
        $data = program::find($id);
        $data -> delete();
        return redirect('/edit_program');
    }
}
