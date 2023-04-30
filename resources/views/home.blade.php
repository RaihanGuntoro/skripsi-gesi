@extends('layouts.main')
@section('home')
<section>
    <div style="background-image: url(img/bg1.png);" class="mb-4 shadow-lg">
        <div class="row">
            <div class="col-md-7" data-aos="fade-right" data-aos-duration="1000">
                <div class="mt-5 p-4">
                    <h1 class="text-center w-100 fw-bold poppins">Selamat Datang di Website BKKBN Kecamatan Gesi</h1>
                    <h5 class="text-center w-100 mt-4  poppins">Belum tau tentang berbagai jenis alat kontrasepsi ?</h5>
                    <h5 class="text-center w-100 poppins">Klik tombol dibawah !</h5>
                    <center><a href="/kontrasepsi" class="btn shadow-lg btn-success mt-3 br-15 h6 poppins">Jenis-jenis Alat Kontrasepsi</a></center>
                </div>
            </div>
            <div class="col-md-5 mt-4 mb-4" data-aos="flip-up" data-aos-duration="1000">
                <div class="card card-gambara tengah" style="width: 18rem; ">
                    <img style="border-radius:20px" src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2021/08/25/2227413478.jpg" alt="">
                </div>
                <div class="card card-gambarb tengah" style="width: 18rem;">
                    <img style="border-radius:20px" src="https://hamilplus.com/wp-content/uploads/2018/08/efek-samping-pil-Kb-andalan.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-up" data-aos-duration="1000">
    <div class=" br-15 p-15 poppins" style="border: 2px solid #38ABF2; margin-left: 50px; margin-right: 50px; ">
        <h3 class="text-center fw-bold mb-4 ">Program BKKBN Kecamatan Gesi</h3>

        @foreach ($programs as $coba)
        <div class="card br-10 card-program mt-3 ms-3 me-3">
            <h5 class="fw-bold "> Acara {{ $coba -> nama_program }} </h5>
            <h7 class="mb-2">{{ $coba -> tanggal_program }} </h7>
            <h6> Di {{ $coba -> lokasi_program }}</h6>
            <h6 style="color: red;"> {{ $coba -> pelaksanaan_program }} </h6>
        </div>
        @endforeach

    </div>
</section>

<section class="container" data-aos="fade-right" data-aos-duration="600">
    <div class="row mt-3 ">
        <div class=" tengah mt-4 poppins" >
            <center>
                <h3 class="text-center fw-bold mb-2 ">Grafik Akseptor KB Berdasarkan Desa</h3>
                <div class="br-15" style="max-width: 80%;" id="ChartKBGesi">


                </div>
            </center>
        </div>
        <div class=" tengah mt-3" data-aos="fade-up" data-aos-duration="600">
            <div class="card card-kata br-15 text-center">
                <h4 class="poppins">Mereka sudah menerapkan prinsip Keluarga Berencana, </h4>
                <h4 class="poppins">bagaimana dengan Anda?</h4>
            </div>
        </div>

        <div class="col-md-6 tengah mt-3" data-aos="fade-right" data-aos-duration="600">
            <img src="img/text-penyuluh.png" width="100%" alt="">
        </div>

        <div class=" col-md-6 tengah mt-5" data-aos="fade-left" data-aos-duration="600">
            <div class="card card-penyuluh br-15 ">
                <h4 class="poppins fw-bold">Contact Penyuluh</h4>
                <table class="table poppins table-hover">
                    <thead class="table-primary">
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

@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var desa = <?php echo json_encode($desa) ?>;
    var total_pengguna = <?php echo json_encode($total_pengguna) ?>;

    Highcharts.chart('ChartKBGesi', {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: 'Tahun 2023'
        },
        xAxis: {
            categories: desa,
            crosshair: true
        },
        yAxis: {

            title: {
                text: 'Jumlah Pengguna'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:30px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} Orang</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jumlah Pengguna KB',
            data: total_pengguna

        }, ]
    });
</script>
@endsection