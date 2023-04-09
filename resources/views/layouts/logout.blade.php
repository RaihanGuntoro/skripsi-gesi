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
    <!-- KOREWA BOKU NO CSS DA -->
    <link rel="stylesheet" href="css/style.css">
    <title>Halaman Edit</title>
</head>

<body style="background-image: url(../img/bg1.png)">

    <nav class="navbar navbar-expand-lg navbar-light navbar-1 shadow ">
        <div class="container-fluid justify-content-between">

            <a href="/"><img src="../img/bkkbn.png" alt="" width="120px" class="ms-3 mt-0"></a>
            <h3 class="teks-navbar mt-2 me-3">BKKBN Kecamatan Gesi</h3>
            <a class="btn btn-blue2 me-3" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Keluar
                            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>

    <div>
        @yield('keluar')
    </div>

    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>