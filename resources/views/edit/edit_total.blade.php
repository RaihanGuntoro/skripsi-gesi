@extends('layouts.logout')
@section('keluar')

<section>
    <div class="row">
        <div class="col-md-7" data-aos="fade-up-right" data-aos-duration="800">
            <div class="card mt-5 br-15  card-admin mw-60 poppins">
                <div class="card-body ">
                    <div class="d-flex justify-content-between">
                        <h3 class="poppins text-center ms-3">Jumlah Total Akseptor</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table mt-3 poppins table-hover">
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
        </div>

        <div class="col-md-5" data-aos="fade-up-left" data-aos-duration="800">
            <div class="card mt-5 br-15 me-2 mlmr-10 poppins">
                <div class="card-body ">
                    <h3 class="poppins text-center"> Total Akseptor KB</h3>
                    <form class="mt-3" method="post" action="/edit_total">
                        @csrf
                        <div class="mb-3">
                            <label for="desa" class="form-label">Nama Desa</label>
                            <select class="form-select" id="desa" name="desa" aria-label="Default select example">
                                <option selected>Pilih Desa</option>
                                <option value="Gesi">Gesi</option>
                                <option value="Blangu">Blangu</option>
                                <option value="Pilangsari">Pilangsari</option>
                                <option value="Poleng">Poleng</option>
                                <option value="Slendro">Slendro</option>
                                <option value="Srawung">Srawung</option>
                                <option value="Tanggan">Tanggan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="total_pengguna" class="form-label">Total Akseptor</label>
                            <input type="text" class="form-control" id="total_pengguna" name="total_pengguna" autocomplete="off">
                        </div>
                        <button type="submit" class=" btn btn-tambah mt-1">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection