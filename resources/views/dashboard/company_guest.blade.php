@extends('layouts.main')

@section('title')
Company | Home
@endsection

@section('content')
<!-- Header -->
<div class="mt-3">
    <div class="container text-center">
        <h1>Cari calon karyawan yang anda butuhkan disini</h1>
        <h5>Temukan hal terbaik yang dapat memotivasi kandidat untuk bergabung di perusahaan anda</h5>
        <button class="btn-danger" style="border-radius: 13px; height: 60px; width: 400px;"><a href="#"
                class="text-white" style="font-size: 30px;">Daftar Disini</a></button>
    </div>
</div>
<div class="mt-2" style="text-align: center;">
    <img src="{{ url("img/illustration/background/header-company.png") }}" class="img-responsive" alt="kerjayuk"
        width="450" height="326">
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
            <a href="#" class="text-success"><i class="fab fa-whatsapp"></i> HUBUNGI KAMI VIA WHATSAPP!</a>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection