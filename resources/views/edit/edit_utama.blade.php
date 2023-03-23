@extends('layouts.logout')
@section('keluar')

<section>
    <div class="container">
        <h3 class="poppins text-center mt-4 mb-3 fw-bold" style="color: white;">HALAMAN EDIT</h3>
        <div class="row">
            <div class="col-md-12">

                <div class="row d-flex mt-3 justify-content-evenly ">

                    <div class="card card-edit  poppins col-sm-4" style="width: 17rem; height: 14rem">
                        <a href="/edit_admin" class="td-none">
                            <center>
                                <img src="img/icon/admin1.png" width="80px" alt="..." class="mt-3">
                                <div class="card-body mb-3">
                                    <h3 class=" card-title fw-bold">ADMIN</h3>
                                    <h6 class="card-text">Anda dapat menambahkan maupun menghapus admin.</h6>
                                </div>
                            </center>
                        </a>
                    </div>

                    <div class="card card-edit card-query poppins col-sm-4" style="width: 17rem; height: 14rem">
                        <a href="/edit_kontrasepsi" class="td-none">
                            <center>
                                <img src="img/icon/kontrasepsi.png" width="80px" alt="..." class="mt-3">
                                <div class="card-body">
                                    <h3 class=" card-title fw-bold">KONTRASEPSI</h3>
                                    <h6 class="card-text">Anda dapat menambahkan maupun menghapus alat kontrasepsi.</h6>
                                </div>
                            </center>
                        </a>
                    </div>

                    <div class="card card-edit card-query poppins col-sm-4" style="width: 17rem; height: 14rem">
                        <a href="/edit_program" class="td-none">
                            <center>
                                <img src="img/icon/program.png" width="80px" alt="..." class="mt-3">
                                <div class="card-body">
                                    <h3 class=" card-title fw-bold">PROGRAM</h3>
                                    <h6 class="card-text">Anda dapat menambahkan maupun menghapus program.</h6>
                                </div>
                            </center>
                        </a>
                    </div>
                </div>

                <div class="d-flex row mt-4 justify-content-evenly">

                    <div class="card card-edit poppins" style="width: 17rem; height: 14rem">
                        <a href="/edit_penyuluh" class="td-none">
                            <center>
                                <img src="img/icon/penyuluh.png" width="80px" alt="..." class="mt-3">
                                <div class="card-body">
                                    <h3 class=" card-title fw-bold">PLKB</h3>
                                    <h6 class="card-text">Anda dapat menambahkan maupun menghapus penyuluh KB.</h6>
                                </div>
                            </center>
                        </a>
                    </div>

                    <div class="card card-edit card-query poppins" style="width: 17rem; height: 14rem">
                        <a href="/edit_pengguna" class="td-none">
                            <center>
                                <img src="img/icon/pengguna.png" width="80px" alt="..." class="mt-3">
                                <div class="card-body">
                                    <h3 class=" card-title fw-bold">PENGGUNA</h3>
                                    <h6 class="card-text">Anda dapat menambahkan maupun menghapus pengguna KB.</h6>
                                </div>
                            </center>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection