@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <div class="card mt-5 br-15  card-admin">
                    <div class="card-body ">
                        <h3 class="poppins text-center">Daftar Program</h3>
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $nomor = 1;
                                @endphp

                                @foreach ($program as $item)
                                <tr>
                                    <th scope="row"> {{ $nomor++ }} </th>
                                    <td> {{ $item['nama_program'] }} </td>
                                    <td>{{ $item['lokasi_program'] }}</td>
                                    <td> {{ $item['tanggal_program'] }} </td>
                                    <td> <a href="/delete_program/{{ $item -> id }}" class="btn btn-danger br-10">Delete</a> </td>
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
                        <h3 class="poppins text-center">Tambah Program</h3>
                        <form class="mt-3" method="post" action="/edit_program">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_program" class="form-label">Nama Program</label>
                                <input type="text" class="form-control" id="nama_program" name="nama_program">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_program" class="form-label">Tanggal Program</label>
                                <input type="date" class="form-control" id="tanggal_program" name="tanggal_program">
                            </div>
                            <div class="mb-3">
                                <label for="lokasi_program" class="form-label">Lokasi Program</label>
                                <input type="text" class="form-control" id="lokasi_program" name="lokasi_program">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection