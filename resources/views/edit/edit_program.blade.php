@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <center>
            <div class="" style="max-width: 80%;" data-aos="fade-left" data-aos-duration="900">
                <div class="card mt-5 br-15 poppins">
                    <div class="card-body ">
                        <h3 class="poppins text-center">Daftar Program</h3>
                        <div class="table-responsive">
                            <table class="table mt-4 table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Pelaksanaan</th>
                                        <th scope="col">Action</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $nomor = 1;
                                    @endphp

                                    @foreach ($program as $item)
                                    <tr>
                                        <th scope="row"> {{ $nomor++ }} </th>
                                        <td> {{ $item -> nama_program }} </td>
                                        <td>{{ $item -> lokasi_program }}</td>
                                        <td>{{ $item -> tanggal_program }}</td>
                                        <td> {{ $item -> pelaksanaan_program }} </td>
                                        <td> <a href="/tampilkan_program/{{ $item -> id }}" class="btn btn-edit ">Edit</a> </td>
                                        <td> <a href="/delete_program/{{ $item -> id }}" class="btn btn-danger br-10">Delete</a> </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </center>

        <div class="">
            <div class="card mt-3 br-15 poppins container " data-aos="fade-up" data-aos-duration="800">
                <div class="card-body ">
                    <h3 class="poppins text-center">Tambah Program</h3>
                    <form class="mt-3" method="post" action="/edit_program">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_program" class="form-label">Nama Program</label>
                            <input type="text" class="form-control" id="nama_program" name="nama_program" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_program" class="form-label">Hari dan tanggal Program</label>
                            <input type="text" class="form-control" id="tanggal_program" name="tanggal_program" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi_program" class="form-label">Lokasi Program</label>
                            <input type="text" class="form-control" id="lokasi_program" name="lokasi_program" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label for="pelaksanaan_program" class="form-label">Pelaksanaan Program</label>
                            <select class="form-select" name="pelaksanaan_program" aria-label="Default select example">
                                <!-- <option selected>Pelaksanaan Program</option> -->
                                <option value="Terlaksana">Sudah Terlaksana</option>
                                <option value="Proses">Dalam Proses</option>
                            </select>
                        </div>

                        <button type="submit" class=" btn btn-tambah mt-1">Tambah</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection