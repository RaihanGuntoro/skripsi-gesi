@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5 br-15  card-admin">
                <div class="card-body ">
                    <div class="container d-flex justify-content-between">
                        <h3 class="poppins text-center">Daftar Admin</h3>
                        <a href="/register" class="btn btn-tambah br-10 ">Tambah +</a>
                    </div>

                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $nomor = 1;
                            @endphp

                            @foreach ($users as $admin)
                            <tr>
                                <th scope="row"> {{ $nomor++ }} </th>
                                <td> {{ $admin['name'] }} </td>
                                <td>{{ $admin['email'] }}</td>
                                <td> <a href="/delete_admin/{{ $admin -> id }}" class="btn btn-danger br-10">Delete</a> </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection