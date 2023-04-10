<?php

namespace App\Http\Controllers;

use App\Models\total;
use App\Models\pengguna;
use Illuminate\Http\Request;
use App\Exports\exportpengguna;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

class PenggunaController extends Controller
{
    public function index()    //nama methodnya index
    {
        return view('edit/edit_pengguna', [
            "title" => "Edit Pengguna",
            "pengguna" => pengguna::paginate(5)   //pengguna mengambil dari model
        ]);
    }

    public function index2()    //nama methodnya index
    {
        return view('edit/tambah_pengguna', [
            "title" => "Tambah Pengguna",
            "pengguna" => pengguna::all()   //pengguna mengambil dari model
        ]);
    }

    public function create ( Request $request)
    {
        pengguna::create($request->all());
        return redirect('/edit_pengguna');
    }

    public function delete ($id)
    {
        $data = pengguna::find($id);
        $data -> delete();
        return redirect('/edit_pengguna');
    }

    public function export()
    {
        return Excel::download(new exportpengguna, 'DataPenggunaKBGesi.xlsx');
    }

    public function tampilkan($id)
    {
        $data = pengguna::find($id);

        return view('update/update_pengguna', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = pengguna::find($id);
        $data->update($request->all());
        return redirect('edit_pengguna');
    }


    ################################## TOTAL

    public function index_total()    //nama methodnya index
    {
        return view('edit/edit_total', [
            "title" => "Edit Total",
            "total" => total::all()   //pengguna mengambil dari model
        ]);
    }

    public function tampilkan_total($id)
    {
        $data = total::find($id);

        return view('update/update_total', compact('data'));
    }

    public function update_total(Request $request, $id)
    {
        $data = total::find($id);
        $data->update($request->all());
        return redirect('edit_total');
    }

}
