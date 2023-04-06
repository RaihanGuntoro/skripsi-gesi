@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <center>
            <div class="container">
                <div class="card mt-5 br-15  card-admin mw-60">
                    <div class="card-body ">
                        <div class="d-flex justify-content-between">
                            <h3 class="poppins text-center ms-3">Jumlah Total Akseptor</h3>
                        </div>

                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Desa</th>
                                    <th scope="col">Total Akseptor</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $nomor = 1;
                                @endphp

                                @foreach ($total as $jumlah)
                                <tr>
                                    <th scope="row"> {{ $nomor++ }} </th>
                                    <td> {{ $jumlah -> desa }} </td>
                                    <td> {{ $jumlah -> total_pengguna }} </td>
                                    <td> <a href="/tampilkan_total/{{ $jumlah -> id }}" class="btn btn-edit ">Edit</a> </td>
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