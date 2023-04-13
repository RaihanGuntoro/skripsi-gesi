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
    <link rel="stylesheet" href="../css/style.css">
    <title>Update Program</title>
</head>

<body style="background-image: url(../img/bg1.png)">

    <nav class="navbar navbar-expand-lg navbar-light navbar-1 shadow poppins">
        <div class="container-fluid justify-content-between">

            <img src="../img/bkkbn.png" alt="" width="120px" class="ms-3 mt-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex">
                <h3 class="teks-navbar mt-2 me-5">BKKBN Kecamatan Gesi</h3>
                <a class="btn btn-blue2 mt-2 me-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Keluar
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <div>
        <div class="container" data-aos="fade-down-right" data-aos-duration="1000">
            <div class="card mt-5 br-15 poppins ">
                <div class="card-body ">
                    <h3 class="poppins text-center">Update Kontrasepsi</h3>
                    <form class="mt-3" method="post" action="/update_kontrasepsi/{{$data->id}}">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_kontrasepsi" class="form-label">Nama Kontrasepsi</label>
                            <input value="{{$data->nama_kontrasepsi}}" type="text" class="form-control" id="nama_kontrasepsi" name="nama_kontrasepsi" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="kode_kontrasepsi" class="form-label">Kode Kontrasepsi</label>
                            <input value="{{$data->kode_kontrasepsi}}" type="text" class="form-control" id="kode_kontrasepsi" name="kode_kontrasepsi" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_kontrasepsi" class="form-label">Jumlah Kontrasepsi</label>
                            <input value="{{$data->jumlah_kontrasepsi}}" type="text" class="form-control" id="jumlah_kontrasepsi" name="jumlah_kontrasepsi" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi_kontrasepsi" class="form-label">Deskripsi Kontrasepsi</label>
                            <input value="{{$data->deskripsi_kontrasepsi}}" type="text" class="form-control" id="deskripsi_kontrasepsi" name="deskripsi_kontrasepsi" autocomplete="off">
                        </div>

                        <button type="submit" class=" btn btn-tambah mt-1">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>