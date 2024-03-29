<?php

namespace App\Http\Controllers;

use App\Models\total;
use App\Models\pengguna;
use Illuminate\Http\Request;
use App\Exports\exportpengguna;
use App\Imports\importpengguna;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

class PenggunaController extends Controller
{
    public function index(Request $request)    //nama methodnya index
    {
        $filter = $request->filter_key;

        $pengguna = pengguna::where('nama_istri', 'LIKE', '%'.$filter.'%')
        ->orWhere('nama_suami', 'LIKE', '%'.$filter.'%')
        ->orWhere('alamat_pengguna', 'LIKE', '%'.$filter.'%')
        ->orWhere('kontrasepsi_pengguna', 'LIKE', '%'.$filter.'%')
        ->paginate(10);   //pagination

        $pengguna -> appends($request->all());

        return view('edit/edit_pengguna', [
            "title" => "Edit Pengguna"
        ], compact('pengguna'));
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
    
    public function export()
    {
        return Excel::download(new exportpengguna, 'DataPenggunaKBGesi.xlsx');
    }

    public function import(Request $request)
    {
        $data = $request -> file('file');
        $namafile = $data -> getClientOriginalName();
        $data -> move('datapengguna', $namafile);

        Excel::import(new importpengguna, \public_path('/datapengguna/'.$namafile));
        return redirect('/edit_pengguna');
    }
    
    ################################## TOTAL #########################
    
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

    public function create_total ( Request $request)
    {
        total::create($request->all());
        return redirect('/edit_total');
    }

}
