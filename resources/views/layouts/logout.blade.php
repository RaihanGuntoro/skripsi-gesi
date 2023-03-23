<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Halaman Edit</title>
</head>

<body style="background-image: url(../img/bg1.png)">

    <nav class="navbar navbar-expand-lg navbar-light navbar-1 shadow ">
        <div class="container-fluid justify-content-between">

            <a href="/"><img src="../img/bkkbn.png" alt="" width="120px" class="ms-3 mt-0"></a>
            <h3 class="teks-navbar mt-2 me-3">BKKBN Kecamatan Gesi</h3>
            <a href="" class="btn btn-blue2 me-3">
                <h6> Keluar</h6>
            </a>
        </div>
    </nav>

    <div>
        @yield('keluar')
    </div>
</body>

</html>