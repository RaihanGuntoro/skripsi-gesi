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
    <title>Halaman Edit</title>
</head>

<body style="background-image: url(../img/bg1.png)">

    <nav class="navbar navbar-expand-lg navbar-light navbar-1 shadow ">
        <div class="container-fluid justify-content-between">

            <a href="/edit_utama"><img src="../img/bkkbn2.png" alt="" width="150px" class="ms-3 mt-0"></a>
            <div class="d-flex">

                <a class="btn btn-blue2 mt-2 poppins  me-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Keluar
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <div>
        @yield('keluar')
    </div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>