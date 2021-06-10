@extends('layouts.main')

@section('title')
Company | Home
@endsection

@section('content')
<!-- Header -->
<header class="text-center header-company">
    <div class="position-relative" data-aos="fade-up" data-aos-once="true" data-aos-delay="200" data-aos-duration="600"
        style="z-index: 1;">
        <div class="container">
            <h1 class="text-header mb-3 mb-sm-3 mb-md-4">
                Halo, Selamat Datang
                <br>
                Telkom Indonesia!
            </h1>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Daftar Pekerjaan -->
<main class="section-home-company">
    <section class="container daftar-pekerjaan">
        <div class="mt-3">
            <div class="col col-xs-6 text-right">
                <a href="#" class="btn btn-sm btn-green btn-create text-white"><i class="fas fa-plus-circle"></i> Tambah
                    Lowongan</a>
            </div>
            <div class="mt-3">
                <div class="card w-95 border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3 d-flex justify-content-center align-items-center"
                                style="font-size: 24px;">
                                <i class="fas fa-palette fa-5x" style="color: #FE9C09;"></i>
                            </div>
                            <div class="col-sm-5">
                                <h5 class="card-title">UI/UX Designer</h5>
                                <p class="card-text">PT Telkom Indonesia</p>
                                <p class="card-text" style="font-size: 14px; color: rgba(0, 0, 0, 0.65);">Rp 9.000.000 -
                                    Rp
                                    15.000.000</p>
                                <p class="card-text"><b>Jakarta Barat, Indonesia</b></p>
                            </div>
                            <div class="col-sm-2" style="padding-top: 30px; align-items: center;">
                                <p class="card-text" style="font-size: 12px; color: rgba(0, 0, 0, 0.65);">11 jam yang
                                    lalu
                                </p>
                                <a class="card-text text-dark" style="font-size: 12px;" href="#">Lihat Semua <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                            <div class="dropdown col-sm-1" style="padding-top: 30px; align-items: center;">
                                <a type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                <!--Menu-->
                                <div class="dropdown-menu dropdown-primary">
                                    <a class="dropdown-item text-danger" href="#"><i
                                            class="fa fa-trash"></i>&nbsp;&nbsp;Hapus Lowongan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-95 border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3 d-flex justify-content-center align-items-center"
                                style="font-size: 24px;">
                                <i class="fas fa-laptop-code fa-5x" style="color: #AFCDF0;"></i>
                            </div>
                            <div class="col-sm-5">
                                <h5 class="card-title">Back End Developer</h5>
                                <p class="card-text">PT Telkom Indonesia</p>
                                <p class="card-text" style="font-size: 14px; color: rgba(0, 0, 0, 0.65);">Rp 7.500.000 -
                                    Rp
                                    8.000.000</p>
                                <p class="card-text"><b>Jakarta Barat, Indonesia</b></p>
                            </div>
                            <div class="col-sm-2" style="padding-top: 30px; align-items: center;">
                                <p class="card-text" style="font-size: 12px; color: rgba(0, 0, 0, 0.65);">23 jam yang
                                    lalu
                                </p>
                                <a class="card-text text-dark" style="font-size: 12px;" href="#">Lihat Semua <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                            <div class="col-sm-1" style="padding-top: 30px; align-items: center;">
                                <a type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                <!--Menu-->
                                <div class="dropdown-menu dropdown-primary">
                                    <a class="dropdown-item text-danger" href="#"><i
                                            class="fa fa-trash"></i>&nbsp;&nbsp;Hapus Lowongan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-95 bg-light border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3 d-flex justify-content-center align-items-center"
                                style="font-size: 24px;">
                                <i class="fas fa-laptop-code fa-5x" style="color: #AFCDF0;"></i>
                            </div>
                            <div class="col-sm-5">
                                <h5 class="card-title">Front End Developer</h5>
                                <p class="card-text">PT Telkom Indonesia</p>
                                <p class="card-text" style="font-size: 14px; color: rgba(0, 0, 0, 0.65);">Rp 9.000.000 -
                                    Rp
                                    15.000.000</p>
                                <p class="card-text"><b>Jakarta Barat, Indonesia</b></p>
                            </div>
                            <div class="col-sm-2" style="padding-top: 30px; align-items: center;">
                                <p class="card-text text-danger" style="font-size: 12px; color: rgba(0, 0, 0, 0.65);">
                                    Ditutup</p>
                                <a class="card-text text-dark" style="font-size: 12px;" href="#">Lihat Semua <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                            <div class="col-sm-1" style="padding-top: 30px; align-items: center;">
                                <a type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                <!--Menu-->
                                <div class="dropdown-menu dropdown-primary">
                                    <a class="dropdown-item text-danger" href="#"><i
                                            class="fa fa-trash"></i>&nbsp;&nbsp;Hapus Lowongan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Daftar Pekerjaan -->
@endsection