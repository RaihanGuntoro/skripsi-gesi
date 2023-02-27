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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Baharudin</td>
                                    <td>baharGamink@gmail.com</td>
                                    <td>081393009367</td>
                                    <td><button type="" class="btn btn-danger br-10">Delete</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Febi</td>
                                    <td>Kucingmalas@gmail.com</td>
                                    <td>081804433569</td>
                                    <td><button type="" class="btn btn-danger br-10">Delete</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ferdy</td>
                                    <td>Josua@gmail.com</td>
                                    <td>081804433569</td>
                                    <td><button type="" class="btn btn-danger br-10">Delete</button></td>
                                </tr>

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
                        <form class="mt-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Admin</label>
                                <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Masukkan Email </label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Masukkan Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
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