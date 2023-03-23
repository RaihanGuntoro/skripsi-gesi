<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Update Pengguna</title>
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
                    <h3 class="poppins text-center">Update Pengguna</h3>
                    <form class="mt-3" method="post" action="/update_pengguna/{{$data->id}}">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
                            <input value="{{$data->nama_pengguna}}" type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="nomor_pengguna" class="form-label">Nomor Pengguna</label>
                            <input value=" {{$data->nomor_pengguna}}" type="text" class="form-control" id="nomor_pengguna" name="nomor_pengguna" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="alamat_pengguna" class="form-label">Alamat Pengguna</label>
                            <input value="{{$data->alamat_pengguna}}" type="text" class="form-control" id="alamat_pengguna" name="alamat_pengguna" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="umur_pengguna" class="form-label">Umur Pengguna</label>
                            <input value="{{$data->umur_pengguna}}" type="text" class="form-control" id="umur_pengguna" name="umur_pengguna" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="kontrasepsi_pengguna" class="form-label">kontrasepsi Pengguna</label>
                            <input value="{{$data->kontrasepsi_pengguna}}" type="text" class="form-control" id="kontrasepsi_pengguna" name="kontrasepsi_pengguna" autocomplete="off">
                        </div>


                        <button type="submit" class=" btn btn-tambah mt-1">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>