@extends('layouts.main')
@section('home')


<section>
    
    <div>
        @foreach ($kontrasepsis as $item)
        <h1> {{ $item['nama_kontrasepsi'] }} </h1>
        <h1> {{ $item['nama_kontrasepsi'] }} </h1>
        <img src="{{ $item['gambar_kontrasepsi'] }}" alt="">
        @endforeach
    </div>


    <h3 class=" text-center mt-4 mb-4">Alat Kontrasepsi </h3>
    <div class="card shadow-lg br-15 p-15 ms-5 me-5 mb-4 mt-3 ">

        <div class="poppins mt-3 ms-3 border-bottom">
            <h4 class="fw-bold">1. Kondom</h4>
            <div class="d-flex">
                <img src="img/icon/kondom.png" width="150px" class="mt-3 mb-3" alt="">
                <h4 class="ms-4" style="width: 80%;">Kondom adalah alat kontrasepsi atau alat untuk mencegah kehamilan atau penularan penyakit kelamin pada saat bersanggama. Kondom biasanya dibuat dari bahan karet latex dan dipakaikan pada alat kelamin pria atau wanita pada keadaan ereksi sebelum bersanggama atau berhubungan suami-istri.</h4>
            </div>

        </div>

        <div class="poppins mt-3 ms-3 border-bottom">
            <h4 class="fw-bold">2. IUD</h4>
            <div class="d-flex">
                <img src="img/icon/iud.png" width="150px" class="mt-3 mb-3" alt="">
                <h4 class="ms-4" style="width: 80%;">Kondom adalah alat kontrasepsi atau alat untuk mencegah kehamilan atau penularan penyakit kelamin pada saat bersanggama. Kondom biasanya dibuat dari bahan karet latex dan dipakaikan pada alat kelamin pria atau wanita pada keadaan ereksi sebelum bersanggama atau berhubungan suami-istri.</h4>
            </div>

        </div>

        <div class="poppins mt-3 ms-3 border-bottom">
            <h4 class="fw-bold">3. Pil KB</h4>
            <div class="d-flex">
                <img src="img/icon/pills.png" width="150px" class="mt-3 mb-3" alt="">
                <h4 class="ms-4" style="width: 80%;">Kondom adalah alat kontrasepsi atau alat untuk mencegah kehamilan atau penularan penyakit kelamin pada saat bersanggama. Kondom biasanya dibuat dari bahan karet latex dan dipakaikan pada alat kelamin pria atau wanita pada keadaan ereksi sebelum bersanggama atau berhubungan suami-istri.</h4>
            </div>

        </div>

    </div>
</section>
@endsection