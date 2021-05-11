@extends('layouts.guest')

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
    <section class="section-recomended-jobs">
        <div data-aos="fade-in" data-aos-duration="600" data-aos-once="true">
            <div class="text-center text-title">
                <h2>Pekerjaan Terbaru</h2>
            </div>
        </div>
        <div class="container position-relative d-flex justify-content-center">
            <div id="job-items" class="owl-carousel job-carousel row">
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="300">
                    <div class="job-card card card-body h-100 w-100 d-flex flex-column position-relative">
                        <div class="tag position-absolute">New</div>
                        <img class="card-img-top mx-auto d-md-block"
                            src="{{ url("kerjayuk-template/images/globalpay.png") }}" alt="Company Logo">
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
                            src="{{ url("kerjayuk-template/images/dataon.png") }}" alt="Company Logo" />
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
                            src="{{ url("kerjayuk-template/images/logo-sociolla.jpg") }}" alt="Company Logo" />
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
                            src="{{ url("kerjayuk-template/images/telkom.png") }}" alt="Company Logo" />
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
                <div class="text-center text-title">
                    <h2>Perusahaan Ternama</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3 d-flex align-items-center justify-content-center h-100 w-100"
                    data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="300">
                    <div>
                        <img src="{{ url("kerjayuk-template/images/cashbac-removebg-preview.png") }}" alt="Cashbac Logo"
                            width="200" height="200">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 d-flex align-items-center justify-content-center h-100 w-100"
                    data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="600">
                    <div>
                        <img src="{{ url("kerjayuk-template/images/logo-sociolla-removebg-preview.png") }}"
                            alt="Cashbac Logo" width="200" height="200">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 d-flex align-items-center justify-content-center h-100 w-100"
                    data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="900">
                    <div>
                        <img src="{{ url("kerjayuk-template/images/globalpay-removebg-preview.png") }}"
                            alt="Cashbac Logo" width="200" height="200">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 d-flex align-items-center justify-content-center h-100 w-100"
                    data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="1200">
                    <div>
                        <img src="{{ url("kerjayuk-template/images/telkom.png") }}" alt="Cashbac Logo" width="130"
                            height="130">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection