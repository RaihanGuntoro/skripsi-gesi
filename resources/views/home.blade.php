@extends('layouts.main')
@section('home')
<section>
    <div style="background-image: url(img/bg1.png)" class="mb-4">
        <div class="">
            <br>
            <h1 class="text-center white poppins">Selamat Datang di Website BKKBN </h1>
            <h1 class="text-center white poppins">Kecamatan Gesi</h1>

            <br>

            <div class="card br-15 p-15" style="box-shadow: 0px 3px 0px gray; margin-left: 50px; margin-right: 50px">
                <h3 class=" fw-bold mt-2 ms-2">Alat-alat Kontrasepsi</h3>

                <div class="row d-flex ms-2 me-2 mt-2 mb-3 justify-content-between">

                    <div class="card tengah card-kontrasepsi col-md-3 martop-5 " style="width: 21rem;">
                        <center>
                            <img src="img/icon/kondom.png" width="100px" class="mt-3" alt="...">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">KONDOM</h5>
                            <h6 class="card-text lh-base poppins">Kondom merupakan salah satu alat kontrasepsi yang terbuat dari bahan sejenis karet yang dipasang pada alat kelamin sebagai pelindung saat berhubungan seksual.</h6>
                        </div>
                    </div>

                    <div class="card tengah card-kontrasepsi col-md-3 martop-5 " style="width: 21rem;">
                        <center>
                            <img src="img/icon/iud.png" width="100px" class="mt-3" alt="...">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">IUD</h5>
                            <h6 class="card-text lh-base poppins">IUD adalah sebuah alat kontrasepsi berbahan plastik yang memiliki bentuk seperti huruf ‘T’ dan dipasang di dalam rahim untuk mencegah kehamilan.</h6>
                        </div>
                    </div>

                    <div class="card tengah card-kontrasepsi col-md-3 martop-5 " style="width: 21rem;">
                        <center>
                            <img src="img/icon/pills.png" width="100px" class="mt-3" alt="...">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">PIL</h5>
                            <h6 class="card-text lh-base poppins">PIL KB adalah sebuah jenis pengendalian kelahiran yang dirancang untuk dipakai dengan cara ditelan lewat mulut oleh wanita.</h6>
                        </div>
                    </div>

                    <div class="tengah col-md-3">
                        <div class="mt-4">
                            <a href="/kontrasepsi" class="fw-bold h4" style="text-decoration: none;"> Lihat Selengkapnya </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</section>

<section>
    <div class="card br-15 p-15 " style="border: 2px solid black; margin-left: 50px; margin-right: 50px">
        <h3 class=" fw-bold mb-3 ms-2">Program BKKBN</h3>
        @foreach ($programs as $coba)
        <div class="card br-10 card-program mt-3  ms-3 me-3">

            <h4> {{ $coba -> nama_program }} </h4>
            <h6> {{ $coba -> tanggal_program }} </h6>
            <h5> {{ $coba -> lokasi_program }} </h5>
            <h5 style="color: red;"> {{ $coba -> pelaksanaan_program }} </h5>

        </div>
        @endforeach
    </div>
</section>

<section class="container">
    <div class="row mt-3 ">
        <div class="col-md-7 tengah mt-3">
            <div class=" br-15 chartKB" id="ChartKBGesi" >

            </div>
        </div>

        <div class="col-md-5 tengah mt-3">
            <div class="card card-penyuluh  marleft-5 br-15">
                <h3 class="poppins ">Contact Penyuluh</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $nomor = 1;
                        @endphp

                        @foreach ($penyuluh as $item)
                        <tr>
                            <th scope="row" class="h6">{{ $nomor++ }}</th>
                            <td class="h6">{{ $item -> nama_penyuluh }}</td>
                            <td class="h6">{{ $item -> alamat_penyuluh }}</td>
                            <td class="h6 "> <a class="text-decoration-none" href="https://api.whatsapp.com/send?phone=62{{ $item['nomor_penyuluh'] }} ">Whatsapp</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection