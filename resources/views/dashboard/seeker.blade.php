@extends('layouts.home')

@section('title')
KerjaYuk | Home
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <div class="position-relative" data-aos="fade-up" data-aos-once="true" data-aos-delay="200" data-aos-duration="600"
        style="z-index: 1;">
        <div class="container position-relative">
            <h1 class="text-header mb-3 mb-sm-3 mb-md-4">
                Cari pekerjaan impian anda bersama <span>KerjaYuk</span>
            </h1>
            <div class="d-flex justify-content-center">
                <form class="search-box">
                    <label class="sr-only" for="inlineFormInputGroup">Jabatan atau perusahaan</label>
                    <div class="input-group mb-3">
                        <input class="form-control border-right-0 search-input" placeholder="Job tile or company...">
                        <button type="submit" class="btn btn-search">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <a href="#" class="px-4 mt-4">
                        Advanced Job Search
                    </a>
                </form>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Main -->
<main>
    <section class="container section-recomended-jobs">
        <div data-aos="fade-in" data-aos-duration="600" data-aos-once="true">
            <h3 class="text-center font-weight-600">Pekerjaan Terbaru</h3>
        </div>
        <div class="position-relative d-flex justify-content-center">
            <div id="job-items" class="owl-carousel job-carousel row">
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="300">
                    <div class="job-card card card-body h-100 w-100 d-flex flex-column position-relative">
                        <div class="tag position-absolute">New</div>
                        <img class="card-img-top mx-auto d-md-block"
                            src="{{ url("img/illustration/company/globalpay.png") }}" alt="Company Logo">
                        <div class="job-body h-100 d-flex flex-column mt-2">
                            <a class="job-title mb-0 stretched-link" href="#">UI/UX Designer</a>
                            <p class="job-company mb-2">Global Pay Indonesia</p>
                            <p class="job-locations">Central Jakarta, Jakarta</p>
                            <div class="job-footer mt-auto">
                                <span class="job-date mb-2 d-block">A day ago</span>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="600">
                    <div class="job-card card card-body h-100 w-100">
                        <img class="card-img-top mx-auto d-md-block"
                            src="{{ url("img/illustration/company/dataon.png") }}" />
                        <div class="job-body h-100 d-flex flex-column mt-2">
                            <a class="job-title mb-0 stretched-link" href="#">Software Developer</a>
                            <p class="job-company mb-2">Dataon Company</p>
                            <p class="job-locations">Tangerang, Banten</p>
                            <div class="job-footer mt-auto">
                                <span class="job-date mb-2 d-block">A day ago</span>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="900">
                    <div class="job-card card card-body h-100 w-100">
                        <img class="card-img-top mx-auto d-md-block"
                            src="{{ url("img/illustration/company/logo-sociolla.jpg") }}" />
                        <div class="job-body h-100 d-flex flex-column mt-2">
                            <a class="job-title mb-0 stretched-link" href="#">Back End Developer</a>
                            <p class="job-company mb-2">Social Bella Indonesia</p>
                            <p class="job-locations">Tangerang, Banten</p>
                            <div class="job-footer mt-auto">
                                <span class="job-date mb-2 d-block">A day ago</span>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="1200">
                    <div class="job-card card card-body h-100 w-100">
                        <img class="card-img-top mx-auto d-md-block"
                            src="{{ url("img/illustration/company/telkom.png") }}" />
                        <div class="job-body h-100 d-flex flex-column mt-2">
                            <a class="job-title mb-0 stretched-link" href="#">Business Analyst</a>
                            <p class="job-company mb-2">Telkom Indonesia</p>
                            <p class="job-locations">Tangerang, Banten</p>
                            <div class="job-footer mt-auto">
                                <span class="job-date mb-2 d-block">A day ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-company">
        <div class="container">
            <div data-aos="fade-in" data-aos-duration="600" data-aos-once="true">
                <h3 class="text-center font-weight-600">Perusahaan Ternama</h3>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3 d-flex align-items-center justify-content-center h-100 w-100"
                    data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="300">
                    <div>
                        <img src="{{ url("img/illustration/company/cashbac-removebg-preview.png") }}" alt="Cashbac Logo"
                            width="200" height="200">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 d-flex align-items-center justify-content-center h-100 w-100"
                    data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="600">
                    <div>
                        <img src="{{ url("img/illustration/company/logo-sociolla-removebg-preview.png") }}"
                            alt="Cashbac Logo" width="200" height="200">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 d-flex align-items-center justify-content-center h-100 w-100"
                    data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="900">
                    <div>
                        <img src="{{ url("img/illustration/company/globalpay-removebg-preview.png") }}"
                            alt="Cashbac Logo" width="200" height="200">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 d-flex align-items-center justify-content-center h-100 w-100"
                    data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="1200">
                    <div>
                        <img src="{{ url("img/illustration/company/telkom.png") }}" alt="Cashbac Logo" width="130"
                            height="130">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-job-category">
        <div class="container">
            <div data-aos="fade-in" data-aos-duration="600" data-aos-once="true">
                <h3 class="text-center font-weight-600">Temukan pekerjaan yang sesuai dengan minat Anda</h3>
            </div>
            <div id="category-items" class="category-carousel owl-carousel px-4 row mx-0">
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="300">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <i class="fas fa-university"></i>
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="#">Accounting</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="600">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="#">IT & Software</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="900">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <i class="fas fa-mail-bulk"></i>
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="#">Sales & Marketing</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="1200">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <i class="fas fa-palette"></i>
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="#">Media Creative</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="1500">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <i class="far fa-handshake"></i>
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="#">Management Consultation</a>
                    </div>
                </div>
                <!-- <div data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="600">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center"
                            style="background-color: #FE9C09;">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <a class="text-center title" href="#">IT & Software</a>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="900">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center"
                            style="background-color: #FE9C09;">
                            <i class="fas fa-mail-bulk"></i>
                        </div>
                        <a class="text-center title" href="#">Sales & Marketing</a>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="1200">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center"
                            style="background-color: #FE9C09;">
                            <i class="fas fa-palette"></i>
                        </div>
                        <a class="text-center title" href="#">Media Creative</a>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="1500">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center"
                            style="background-color: #FE9C09;">
                            <i class="far fa-handshake"></i>
                        </div>
                        <a class="text-center title" href="#">Management Consultation</a>
                    </div>
                </div> -->
            </div>
    </section>
</main>
<!-- End Main -->
@endsection