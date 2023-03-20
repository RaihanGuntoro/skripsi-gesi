@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <div class="container">
            <div class="card mt-5 br-15  card-admin mw-60 mx-5">
                <div class="card-body ">
                    <h3 class="poppins text-center">Tambah Pengguna</h3>
                    <form class="mt-3" method="post" action="/tambah_pengguna" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="nomor_pengguna" class="form-label">Nomor Pengguna</label>
                            <input type="text" class="form-control" id="nomor_pengguna" name="nomor_pengguna" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="alamat_pengguna" class="form-label">Alamat Pengguna</label>
                            <input type="text" class="form-control" id="alamat_pengguna" name="alamat_pengguna" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="umur_pengguna" class="form-label">Umur Pengguna</label>
                            <input type="text" class="form-control" id="umur_pengguna" name="umur_pengguna" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="kontrasepsi_pengguna" class="form-label">Kontrasepsi Pengguna</label>
                            <input type="text" class="form-control" id="kontrasepsi_pengguna" name="kontrasepsi_pengguna" autocomplete="off">
                        </div>
                        <button type="submit"  class=" btn btn-tambah mt-1">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection