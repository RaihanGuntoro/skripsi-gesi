@extends('layouts.main')
@section('home')
<section>
    <div style="background-image: url(img/bg1.png)" class="mb-5">
        <div class="">
            <br>
            <h1 class="text-center white poppins">Selamat Datang di Website BKKBN </h1>
            <h1 class="text-center white poppins">Kecamatan Gesi</h1>

            <br>

            <div class="card br-15 p-15" style="box-shadow: 0px 3px 0px gray; margin-left: 50px; margin-right: 50px">
                <h3 class=" fw-bold mt-2 ms-2">Alat-alat Kontrasepsi</h3>

                <div class=" d-flex mt-2 mb-3 justify-content-between">

                    <div class="card  card-kontrasepsi col-sm-6 " style="width: 17rem;">
                        <center>
                            <img src="img/icon/kondom.png" width="100px" class="mt-3" alt="...">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">KONDOM</h5>
                            <h6 class="card-text lh-base poppins">Kondom merupakan salah satu alat kontrasepsi yang terbuat dari bahan sejenis karet yang dipasang pada alat kelamin sebagai pelindung saat berhubungan seksual.</h6>
                        </div>
                    </div>

                    <div class="card ms-3 card-kontrasepsi col-sm-6" style="width: 17rem;">
                        <center>
                            <img src="img/icon/iud.png" width="100px" class="mt-3" alt="...">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">IUD</h5>
                            <h6 class="card-text lh-base poppins">IUD adalah sebuah alat kontrasepsi berbahan plastik yang memiliki bentuk seperti huruf ‘T’ dan dipasang di dalam rahim untuk mencegah kehamilan.</h6>
                        </div>
                    </div>

                    <div class="card ms-3 card-kontrasepsi col-sm-6" style="width: 17rem;">
                        <center>
                            <img src="img/icon/pills.png" width="100px" class="mt-3" alt="...">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">PIL</h5>
                            <h6 class="card-text lh-base poppins">PIL KB adalah sebuah jenis pengendalian kelahiran yang dirancang untuk dipakai dengan cara ditelan lewat mulut oleh wanita.</h6>
                        </div>
                    </div>

                    <div class="card ms-3 card-kontrasepsi col-sm-6" style="width: 17rem;">
                        <center>
                            <img src="img/icon/pills.png" width="100px" class="mt-3" alt="...">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">PIL</h5>
                            <h6 class="card-text lh-base poppins">PIL KB adalah sebuah jenis pengendalian kelahiran yang dirancang untuk dipakai dengan cara ditelan lewat mulut oleh wanita.</h6>
                        </div>
                    </div>
                    <div>
                        <a href="/kontrasepsi"> <img src="img/icon/next.png" class="mt-100 ms-3 col-sm-6" width="70px" alt=""></a>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</section>

<section>
    <div class="card br-15 p-15 mb-5" style="border: 3px solid #38ABF2; margin-left: 50px; margin-right: 50px">
        <h3 class=" fw-bold mt-2 mb-4 ms-2">Program BKKBN</h3>
        @foreach ($programs as $coba)
        <div class="card br-10 card-program mb-3 ms-3 me-3">

            <h4> {{ $coba['nama_program'] }} </h4>
            <h6> {{ $coba['tanggal_program'] }} </h6>
            <h5> {{ $coba['lokasi_program'] }} </h5>

        </div>
        @endforeach
        <div class="card br-10 card-program mb-3  ms-3 me-3">
            <h4>Acaraaaaaaaaaaaaaaaaaaaaaaaaaaaa</h4>
            <h6>24 januari 2020</h6>
            <h5>Di Lapangan Gesi</h5>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <center>
                    <div class="card mt-5" style="max-width: 400px;">
                        <h5 class="text-start">"Ingatlah, saat semuanya runtuh dan gagal, keluarga adalah tempatmu kembali. Rencanakanlah dengan tepat, konsultasikanlah sebelum terlambat."</h5>
                        <h4 class="fw-bold text-start">-BKKBN Kecamatan Gesi</h4>
                    </div>
                </center>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-penyuluh mt-3 ms-5 br-15 ">
                <h3 class="poppins ">Contact Penyuluh</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Jokowi</td>
                            <td>081393009367</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Prabowo</td>
                            <td>081804433569</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ferdy Sambo</td>
                            <td>081804433569</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection