@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <center>
            <div class="container">
                <div class="card mt-5 br-15  card-admin mw-60">
                    <div class="card-body ">
                        <h3 class="poppins text-center">Daftar Kontrasepsi</h3>
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $nomor = 1;
                                @endphp

                                @foreach ($kontrasepsis as $item)
                                <tr>
                                    <th scope="row"> {{ $nomor++ }} </th>
                                    <td> {{ $item -> nama_kontrasepsi }} </td>
                                    <td>
                                        <img src=" {{ asset('gambarkontrasepsi/'. $item->gambar_kontrasepsi)}}" style="width: 100px" alt="">
                                    </td>
                                    <td>{{ $item -> kode_kontrasepsi }}</td>
                                    <td> {{ $item -> jumlah_kontrasepsi }} </td>
                                    <td> {{ $item -> deskripsi_kontrasepsi }} </td>
                                    <td> <a href="/delete_kontrasepsi/{{ $item -> id }}" class="btn btn-danger br-10">Delete</a> </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </center>

        <div class="container">
            <div class="card mt-5 br-15  card-admin mw-60 mx-5">
                <div class="card-body ">
                    <h3 class="poppins text-center">Tambah Kontrasepsi</h3>
                    <form class="mt-3" method="post" action="/edit_kontrasepsi" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_kontrasepsi" class="form-label">Nama Kontrasepsi</label>
                            <input type="text" class="form-control" id="nama_kontrasepsi" name="nama_kontrasepsi" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="gambar_kontrasepsi" class="form-label">Gambar Kontrasepsi</label>
                            <input type="file" class="form-control" id="gambar_kontrasepsi" name="gambar_kontrasepsi" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="kode_kontrasepsi" class="form-label">Kode Kontrasepsi</label>
                            <input type="text" class="form-control" id="kode_kontrasepsi" name="kode_kontrasepsi" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_kontrasepsi" class="form-label">Jumlah Kontrasepsi</label>
                            <input type="text" class="form-control" id="jumlah_kontrasepsi" name="jumlah_kontrasepsi" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi_kontrasepsi" class="form-label">Deskripsi Kontrasepsi</label>
                            <input type="text" class="form-control" id="deskripsi_kontrasepsi" name="deskripsi_kontrasepsi" autocomplete="off">
                        </div>
                        <button type="submit"  class=" btn btn-tambah mt-1">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection