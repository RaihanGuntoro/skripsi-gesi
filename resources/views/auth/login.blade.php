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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BKKBN Kec Gesi</title>
</head>

<body style="background-image: url(img/bg-login.png)" >

    <nav class="navbar navbar-expand-lg navbar-light navbar-1 shadow-sm br-5">
        <div class="container-fluid">
            <img src="img/bkkbn.png" alt="" width="120px" class="ms-3 me-4 mt-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h3 class="teks-navbar mt-2 ms-midle">BKKBN Kecamatan Gesi</h3>
        </div>
    </nav>



    <div class="">
        <div class="row">
            <div class="col-md-7 ">
                <!-- <div class="text-center " style="margin-top: 30%; font-family: poppins;">
                    <h1 class=" fw-bold white">Badan Koordinasi </h1>
                    <h1 class=" fw-bold white">Keluarga Berencana Nasional</h1>
                </div> -->

            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-duration="900">
                <div class="card me-4  mt-100 br-10 card1">
                    <div class="card-body mx-4 ">

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <legend class=" h3  text-center fw-bold blue">LOGIN FORM</legend>
                            <div class="mb-3">
                                <label for="email" class="form-label mt-3 fw-bold">Email Anda :</label>
                                <div class="d-flex">
                                    <i class="fa fa-duotone fa-mobile icon fa-lg"></i>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email Anda"  autofocus required> 
                                </div> 

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Password :</label>
                                <div class="d-flex">
                                    <i class="fa fa-lock icon fa-sm"></i>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-blue mt-3 mb-3">LOGIN</button>
                        </form>
                        
                    </div>
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