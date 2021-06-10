@extends('layouts.main')

@section('title')
Company | Home
@endsection

@section('content')
<!-- Header -->
<div class="mt-3">
    <div class="position-relative" data-aos="fade-up" data-aos-once="true" data-aos-delay="200" data-aos-duration="600"
            style="z-index: 1;">
        <div class="container text-center">
            <h1>Cari calon karyawan yang anda butuhkan bersama CariYuk</h1>
            <h5>Temukan hal terbaik yang dapat memotivasi kandidat untuk bergabung di perusahaan anda</h5>
            <center>
                @guest
                <a href="/register-company" class="btn btn-warning text-white">Daftar Sebagai Company</a>
                @endguest
            </center>
        </div>
        <div class="mt-2" style="text-align: center;">
            <img src="{{ url("img/illustration/background/header-company.png") }}" class="img-responsive" alt="kerjayuk"
                width="450" height="326">
        </div>
    </div>
</div>

<!-- End Header -->

<!-- Main -->
<div class="bg-light">
    <div class="mt-3 container text-center">
        <h2 style="padding-top: 20px;">Mengapa harus menggunakan jasa Kerjayuk?</h2>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-3">
                <i class="fas fa-hand-holding-usd fa-5x"></i>
            </div>
            <div class="col-5" style="padding-top: 25px;">
                <h4>Tidak memerlukan biaya!</h4>
            </div>
        </div>
        <div class="mt-5">
            <div class="row justify-content-center align-items-center" style="padding-bottom: 50px;">
                <div class="col-3">
                    <i class="fas fa-list-alt fa-5x"></i>
                </div>
                <div class="col-5">
                    <h4> Mendapatkan kandidat fresh graduate yang berkualitas!</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-3 container">
    <div class="row">
        <div class="col-sm-1">
            <i class="fas fa-question-circle fa-5x text-danger"></i>
        </div>
        <div class="col-sm-5" style="padding-top: 13px;">
            <h4> Ada masalah ataupun pertanyaan?</h4>
            <a href="https://api.whatsapp.com/send?phone=+6282120803476" class="text-success"><i class="fab fa-whatsapp"></i> HUBUNGI KAMI VIA WHATSAPP!</a> <br>
            <a href = "mailto: angka.kurniawan@gmail.com" class="text-danger"><i class="far fa-envelope"></i> HUBUNGI KAMI VIA EMAIL!</a> <br><br>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection