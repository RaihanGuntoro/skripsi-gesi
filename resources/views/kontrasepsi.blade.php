@extends('layouts.main')
@section('home')


<section>
    <div style="background-image: url(img/bg1.png)" class="">
        <div class="p-15" data-aos="fade-up" data-aos-duration="1000">
            <h3 class=" text-center poppins mb-4"> <br> Alat Kontrasepsi </h3>
            <div class="card shadow-lg br-15 p-15  mb-3 mt-3" style="border: 2px solid black" >

                @foreach ($kontrasepsis as $item)
                <div class="poppins mt-3 ms-3 border-bottom ">
                    <h4 class="fw-bold">{{ $item -> nama_kontrasepsi }}</h4>
                    <div class="">
                        <img src="{{ asset('gambarkontrasepsi/'. $item->gambar_kontrasepsi)}}" width="150px" class=" mb-3" alt="">
                        <h5  style="width: 100%; text-align:justify;">{{ $item -> deskripsi_kontrasepsi }}</h5>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>

</section>
@endsection