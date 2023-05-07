<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <!-- KOREWA BOKU NO CSS DA -->
    <link rel="stylesheet" href="css/style.css">
    <title> {{ $title }} </title>
</head>

<body>
    <section class="">
        <nav class="navbar navbar-expand-lg navbar-light navbar-1 shadow ">
            <div class="container-fluid justify-content-between">

                <a href="/"><img src="../img/bkkbn2.png" alt="" width="150px" class="ms-3 "></a>
              
                    <a href="/login" class="btn btn-blue2 mt-2 me-3">
                        <h6> Masuk</h6>
                    </a>

            </div>
        </nav>
    </section>

    <div>
        @yield('home')
    </div>


    <div class="row">

        <div class="col-lg-6 col-md-12 mb-4 mb-md-0" data-aos="fade-right" data-aos-duration="700">
            <div class="mt-3 mb-5 poppins" style="margin-left: 20%;">
                <img src="img/bkkbn.png" width="200px" class="mb-3" alt="">
                <h4 class="mb-3">BKKBN Kecamatan Gesi</h4>
                <h6>Jl. Gesi Tangen</h6>
                <h6> Kecamatan Gesi, Kabupaten Sragen, Jawa Tengah </h6>
                <h6> Kode Pos 57262</h6>
            </div>
        </div>

    </div>

    <footer class="text-center" >
        <h7>© 2020 Copyright: BKKBN Kecamatan Gesi</h7>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div>
        @yield('chart')
    </div>


</body>

</html>