<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Update Program</title>
</head>

<body style="background-image: url(../img/bg1.png)">

    <nav class="navbar navbar-expand-lg navbar-light navbar-1 shadow ">
        <div class="container-fluid justify-content-between">

            <img src="../img/bkkbn.png" alt="" width="120px" class="ms-3 mt-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h3 class="teks-navbar mt-2 me-3">BKKBN Kecamatan Gesi</h3>
            <a href="" class="btn btn-blue2 me-3">
                <h6> Keluar</h6>
            </a>
        </div>
    </nav>

    <div>
    <div class="container">
            <div class="card mt-5 br-15  ">
                <div class="card-body ">
                    <h3 class="poppins text-center">Update Program</h3>
                    <form class="mt-3" method="post" action="/update_program/{{$data->id}}">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_program" class="form-label">Nama Program</label>
                            <input value="{{$data->nama_program}}" type="text" class="form-control" id="nama_program" name="nama_program" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_program" class="form-label">Tanggal Program</label>
                            <input value="{{$data->tanggal_program}}" type="date" class="form-control" id="tanggal_program" name="tanggal_program" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi_program" class="form-label">Lokasi Program</label>
                            <input value=" {{$data->lokasi_program}}" type="text" class="form-control" id="lokasi_program" name="lokasi_program" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label for="pelaksanaan_program" class="form-label">Pelaksanaan Program</label>
                            <select class="form-select" name="pelaksanaan_program" aria-label="Default select example">
                                <option selected>{{$data->pelaksanaan_program}}</option>
                                <option value="Terlaksana">Sudah Terlaksana</option>
                                <option value="Proses">Dalam Proses</option>
                            </select>
                        </div>

                        <button type="submit" class=" btn btn-tambah mt-1">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
