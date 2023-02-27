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
        <nav class="navbar navbar-expand-lg navbar-light navbar-1 " style="box-shadow: 0px 2px 0px gray;">
            <div class="container-fluid justify-content-between">

                <img src="img/bkkbn.png" alt="" width="120px" class="ms-3 mt-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
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
        <h6>Jln. Gesi Tangen</h6>
        <h6> Kecamatan Gesi Kabupaten Sragen Jawa Tengah </h6>
        <h6> Kode Pos XXXX</h6>
    </div>

    <footer>
        <p class="text-center ">Copy Right BKKBN Kecamatan Gesi</p>
    </footer>

</body>

</html>