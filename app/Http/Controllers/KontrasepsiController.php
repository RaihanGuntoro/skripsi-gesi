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

    public function create(Request $request)
    {
        $data = kontrasepsi::create($request->all());
        if ($request->hasFile('gambar_kontrasepsi')) {
            $request->file('gambar_kontrasepsi')->move('gambarkontrasepsi/', $request->file('gambar_kontrasepsi')->getClientOriginalName());
            $data->gambar_kontrasepsi = $request->file('gambar_kontrasepsi')->getClientOriginalName();
            $data->save();
        }
        return redirect('/edit_kontrasepsi');
    }

    public function delete($id)
    {
        $data = kontrasepsi::find($id);
        $data->delete();
        return redirect('/edit_kontrasepsi');
    }

    public function tampilkan($id)
    {
        $data = kontrasepsi::find($id);

        return view('update/update_kontrasepsi', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = kontrasepsi::find($id);
        $data->update($request->all());
        return redirect('edit_kontrasepsi');
    }
}
