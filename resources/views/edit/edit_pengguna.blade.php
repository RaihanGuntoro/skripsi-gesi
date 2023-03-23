@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <center>
            <div class="container">
                <div class="card mt-5 br-15  card-admin mw-60">
                    <div class="card-body ">
                        <div class="d-flex justify-content-between">
                            <h3 class="poppins text-center ms-3">Daftar Pengguna</h3>
                            <div>
                                <a href="/tambah_pengguna" class="btn btn-tambah br-10 ">Tambah +</a>
                                <a href="/export_pengguna" class="btn btn-success br-10 me-5">Export Excel</a>
                            </div>

                        </div>

                        <table class="table mt-4">
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

                                @foreach ($pengguna as $item)
                                <tr>
                                    <th scope="row"> {{ $nomor++ }} </th>
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
                    </div>
                </div>
            </div>
        </center>
    </div>
</section>

@endsection