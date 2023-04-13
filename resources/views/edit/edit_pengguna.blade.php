@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <center>
            <div class="container" data-aos="flip-up" data-aos-duration="600">
                <div class="card mt-3 br-15  card-admin mw-60 poppins">
                    <div class="card-body ">
                        <div class="d-flex justify-content-between">
                            <h3 class="poppins text-center ">Daftar Pengguna</h3>
                            <div class="ms-4">
                                <a href="/tambah_pengguna" class="btn btn-tambah br-10 me-2">Tambah +</a>
                                <a href="/edit_total" class="btn btn-tambah br-10 me-2">Total</a>
                                <a href="/export_pengguna" class="btn btn-success br-10 me-5">Export Excel</a>
                            </div>

                            <!--FILTER-->
                            <form method="GET" action="/edit_pengguna">
                                <div class="d-flex">
                                    <input type="text" name="filter_key"  class="form-control" placeholder="Masukkan Text" autocomplete="off">
                                    <button type="submit" class="ms-2 btn btn-tambah mt-1">Cari</button>
                                </div>
                            </form>
                            <!-- END FILTER -->

                        </div>

                        <div class="table-responsive">
                            <table class="table mt-4 poppins table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nomor</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Umur</th>
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
                                        <td> {{ $item -> nama_pengguna }} </td>
                                        <td> {{ $item -> nomor_pengguna }} </td>
                                        <td>{{ $item -> alamat_pengguna }}</td>
                                        <td> {{ $item -> umur_pengguna }} </td>
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
</section>

@endsection