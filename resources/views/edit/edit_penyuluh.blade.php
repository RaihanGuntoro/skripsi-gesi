@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <div class="card mt-5 br-15  card-admin">
                    <div class="card-body ">
                        <h3 class="poppins text-center">Daftar Penyuluh</h3>
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $nomor = 1;
                                @endphp

                                @foreach ($penyuluh as $item)
                                <tr>
                                    <th scope="row"> {{ $nomor++ }} </th>
                                    <td> {{ $item -> nama_penyuluh }} </td>
                                    <td>{{ $item -> nomor_penyuluh }}</td>
                                    <td> {{ $item -> alamat_penyuluh }} </td>
                                    <td> <a href="/delete_penyuluh/{{ $item -> id }}" class="btn btn-danger br-10">Delete</a> </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="container">
                <div class="card mt-5 br-15  card-admin">
                    <div class="card-body ">
                        <h3 class="poppins text-center">Tambah Penyuluh</h3>
                        <form class="mt-3" method="post" action="/edit_penyuluh">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_penyuluh" class="form-label">Nama Penyuluh</label>
                                <input type="text" class="form-control" id="nama_penyuluh" name="nama_penyuluh" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_penyuluh" class="form-label">Nomor Penyuluh</label>
                                <input type="text" class="form-control" id="nomor_penyuluh" name="nomor_penyuluh" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="alamat_penyuluh" class="form-label">Alamat Penyuluh</label>
                                <input type="text" class="form-control" id="alamat_penyuluh" name="alamat_penyuluh" autocomplete="off">
                            </div>

                            <button type="submit"  class=" btn btn-tambah mt-1">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection