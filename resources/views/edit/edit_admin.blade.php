@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <div class="card mt-5 br-15  card-admin">
                    <div class="card-body ">
                        <h3 class="poppins text-center">Daftar Admin</h3>
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No HP</th>
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
                                    <td> {{ $admin['nama_admin'] }} </td>
                                    <td>{{ $admin['email_admin'] }}</td>
                                    <td> {{ $admin['nomor_admin'] }} </td>
                                    <td> <a href="/delete_admin/{{ $admin -> id }}" class="btn btn-danger br-10">Delete</a> </td>
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
                        <h3 class="poppins text-center">Tambah Admin</h3>
                        <form class="mt-3" method="post" action="/edit_admin">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_admin" class="form-label">Nama Admin</label>
                                <input type="text" class="form-control" id="nama_admin" name="nama_admin" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_admin" class="form-label">Nomor Admin</label>
                                <input type="text" class="form-control" id="nomor_admin" name="nomor_admin" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="email_admin" class="form-label">Masukkan Email </label>
                                <input type="email" class="form-control" id="email_admin" name="email_admin" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="password_admin" class="form-label">Masukkan Password</label>
                                <input type="password" class="form-control" id="password_admin" name="password_admin" autocomplete="off">
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