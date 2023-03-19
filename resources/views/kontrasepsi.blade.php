@extends('layouts.main')
@section('home')


<section>

    <h3 class=" text-center mt-5 mb-4">Alat Kontrasepsi </h3>
    <div class="card shadow-lg br-15 p-15 ms-5 me-5 mb-4 mt-3" style="border: 3px solid #38ABF2;">

        @foreach ($kontrasepsis as $item)
        <div class="poppins mt-3 ms-3 border-bottom ">
            <h4 class="fw-bold">{{ $item -> nama_kontrasepsi }}</h4>
            <div class="d-flex">
                <img src="{{ asset('gambarkontrasepsi/'. $item->gambar_kontrasepsi)}}" width="150px" class="mt-3 mb-3" alt="">
                <h4 class="ms-4" style="width: 80%;">{{ $item -> deskripsi_kontrasepsi }}</h4>
            </div>
        </div>
        @endforeach

    </div>

</section>
@endsection