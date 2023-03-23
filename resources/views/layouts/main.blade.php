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
        <nav class="navbar navbar-expand-lg navbar-light navbar-1 shadow" >
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


    <div class="mt-5 mb-5" style="margin-left: 10%;">
        <img src="img/bkkbn.png" width="200px" class="mb-3" alt="">
        <h4 class="mb-3">BKKBN Kecamatan Gesi</h4>
        <h6>Jl. Gesi Tangen</h6>
        <h6> Kecamatan Gesi, Kabupaten Sragen, Jawa Tengah </h6>
        <h6> Kode Pos 57262</h6>
    </div>

    <footer class="text-center">
        <h7 >Copy Right BKKBN Kecamatan Gesi</h7>
    </footer>

</body>

</html>