<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title> {{ $title }} </title>
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light navbar-1 shadow">
            <div class="container-fluid justify-content-between">

                <a href="/"><img src="../img/bkkbn.png" alt="" width="120px" class="ms-3 mt-0"></a>
                <h3 class="teks-navbar mt-2 me-3">BKKBN Kecamatan Gesi</h3>
                <a href="/login" class="btn btn-blue2 me-3">
                    <h6> Masuk</h6>
                </a>
            </div>
        </nav>
    </section>

    <div>
        @yield('home')
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mt-5 mb-5" style="margin-left: 10%;">
                <img src="img/bkkbn.png" width="200px" class="mb-3" alt="">
                <h4 class="mb-3">BKKBN Kecamatan Gesi</h4>
                <h6>Jl. Gesi Tangen</h6>
                <h6> Kecamatan Gesi, Kabupaten Sragen, Jawa Tengah </h6>
                <h6> Kode Pos 57262</h6>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container">
                <center>
                    <div class="card card-motivasi text-center martop-10 " style="max-width: 400px;">
                        <h5 class="text-center">Ingatlah, saat semuanya runtuh dan gagal, keluarga adalah tempatmu kembali. Rencanakanlah dengan tepat, konsultasikanlah sebelum terlambat.</h5>
                        <h4 class="fw-bold text-center">BKKBN Kecamatan Gesi</h4>
                    </div>
                </center>

            </div>
        </div>
    </div>



    <footer class="text-center">
        <h7>Copy Right BKKBN Kecamatan Gesi</h7>
    </footer>

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
</body>

</html>