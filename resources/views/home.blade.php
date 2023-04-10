@extends('layouts.main')
@section('home')
<section>
    <div style="background-image: url(img/bg1.png);" class="mb-4">
        <div class="row">
            <div class="col-md-7" data-aos="fade-right" data-aos-duration="1000">
                <div class="mt-5 p-4">
                    <h1 class="text-center w-100 fw-bold">Selamat Datang di Website BKKBN Kecamatan Gesi</h1>
                    <h4 class="text-center w-100 mt-4  poppins">Masih bingung tentang alat kontrasepsi ? Yuk belajar !</h4>
                    <a href="/kontrasepsi" class="btn btn-success mt-3 br-15 h5" style="margin-left: 50px;">Lihat Selengkapnya</a>
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
        <div class="col-md-7 tengah mt-3" data-aos="fade-up-right" data-aos-duration="1000">
            <div class=" br-15 chartKB" id="ChartKBGesi">

            </div>
        </div>

        <div class="col-md-5 tengah mt-3" data-aos="fade-up-left" data-aos-duration="1000">
            <div class="card card-penyuluh  marleft-5 br-15 ">
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
            text: 'Grafik Akseptor KB Tiap Desa'
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
                text: 'Jumlah Akseptor'
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
            name: 'Akseptor',
            data: total_pengguna

        }, ]
    });
</script>
@endsection