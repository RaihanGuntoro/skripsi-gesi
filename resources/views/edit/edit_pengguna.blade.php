@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <center>
            <div class="container" data-aos="flip-up" data-aos-duration="600">
                <div class="card mt-3 br-15  card-admin mw-60 poppins">
                    <div class="card-body ">
                        <div class=" justify-content-between">
                            <h2 class="poppins text-center ">Daftar Pengguna</h2>

                            <div class=" row justify-content-between mt-4">
                                <div class="row col-md-7 ">
                                    <a href="/tambah_pengguna" class="martop-5 col-md-3 btn btn-tambah br-10 me-2">Tambah +</a>
                                    <a href="/edit_total" class="martop-5 col-md-3 btn btn-tambah br-10 me-2">Total</a>
                                    <button type="button" style="width:140px" class="martop-5 col-md-3 btn btn-tambah me-2 br-10" data-bs-toggle="modal" data-bs-target="#exampleModal">Import Excel</button>
                                    <a href="/export_pengguna" style="width:140px" class="martop-5 col-md-3 btn btn-tambah  br-10 ">Export Excel</a>
                                </div>
                                <!--FILTER-->
                                <form class="col-md-5 martop-5" method="GET" action="/edit_pengguna">
                                    <div class="d-flex">
                                        <input  type="text" name="filter_key" class="form-control" placeholder="Cari" autocomplete="off">
                                        <button type="submit" class="ms-2 btn btn-tambah mt-1">Cari</button>
                                    </div>
                                </form>
                                <!-- END FILTER -->
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table mt-4 poppins table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Istri</th>
                                        <th scope="col">Nama Suami</th>
                                        <th scope="col">Umur Istri</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Alat Kontrasepsi</th>
                                        <th scope="col">Action</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $nomor = 1;
                                    @endphp

                                    @foreach ($pengguna as $index => $item)
                                    <tr>
                                        <th scope="row"> {{ $index + $pengguna -> firstItem() }} </th>
                                        <td> {{ $item -> nama_istri }} </td>
                                        <td> {{ $item -> nama_suami }} </td>
                                        <td> {{ $item -> umur_istri }} </td>
                                        <td>{{ $item -> alamat_pengguna }}</td>
                                        <td> {{ $item -> kontrasepsi_pengguna }} </td>
                                        <td> <a href="/tampilkan_pengguna/{{ $item -> id }}" class="btn btn-edit ">Edit</a> </td>
                                        <td> <a href="/delete_pengguna/{{ $item -> id }}" class="btn btn-danger br-10">Delete</a> </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $pengguna->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import File Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/import_pengguna" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="file" name="file" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Import Excel</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>

@endsection