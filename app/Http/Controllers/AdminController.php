<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        return view ('edit/edit_admin', [
            "title" => "Halaman Edit Admin",
            "users" => user::all()   // dari model user
        ]);
    }

    public function create ( Request $request)
    {
        user::create($request->all());
        return redirect('/edit_admin');
    }

    public function delete ($id)
    {
        $data = user::find($id);
        $data -> delete();
        return redirect('/edit_admin');
    }
}
