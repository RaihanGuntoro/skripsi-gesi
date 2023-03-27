@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">

        <div class="col-md-6">
            <div class="container">
                <div class="card mt-5 br-15  card-admin">
                    <div class="card-body ">
                        <h3 class="poppins text-center">Tambah Admin</h3>
                        <form class="mt-3" method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Admin</label>
                                <input type="text" class="form-control" id="name" name="name" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Masukkan Email </label>
                                <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Masukkan Password</label>
                                <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                            </div>
                            <button type="submit" class=" btn btn-tambah mt-1">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection