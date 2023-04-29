@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <div class="container" data-aos="zoom-in" data-aos-duration="500">
            <div class="card mt-5 br-15  card-admin mw-60 mx-5 poppins">
                <div class="card-body ">
                    <h3 class="poppins text-center">Tambah Pengguna</h3>
                    <form class="mt-3" method="post" action="/tambah_pengguna" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_istri" class="form-label">Nama Istri</label>
                            <input  type="text" class="form-control" id="nama_istri" name="nama_istri" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="nama_suami" class="form-label">Nama Suami</label>
                            <input type="text" class="form-control" id="nama_suami" name="nama_suami" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="umur_istri" class="form-label">Umur Istri</label>
                            <input  type="text" class="form-control" id="umur_istri" name="umur_istri" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="alamat_pengguna" class="form-label">Alamat Pengguna</label>
                            <select class="form-select" id="alamat_pengguna" name="alamat_pengguna" aria-label="Default select example">
                                <option selected>Pilih Desa</option>
                                <option value="Gesi">Gesi</option>
                                <option value="Blangu">Blangu</option>
                                <option value="Pilangsari">Pilangsari</option>
                                <option value="Poleng">Poleng</option>
                                <option value="Slendro">Slendro</option>
                                <option value="Srawung">Srawung</option>
                                <option value="Tanggan">Tanggan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kontrasepsi_pengguna" class="form-label">Kontrasepsi Pengguna</label>
                            <input type="text" class="form-control" id="kontrasepsi_pengguna" name="kontrasepsi_pengguna" autocomplete="off">
                        </div>
                        <button type="submit" class=" btn btn-tambah mt-1">Tambah</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection