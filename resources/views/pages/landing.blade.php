@extends('layouts.main')

@section('title')
KerjaYuk | Home
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <div data-aos="fade-up" data-aos-once="true" data-aos-delay="200" data-aos-duration="600">
        <div class="container">
            <h1 class="text-header mb-3 mb-sm-3 mb-md-4">
                Cari pekerjaan impian anda
                <br>
                bersama Kerjayuk
            </h1>
            <form class="search-box mb-2 mb-sm-2 mb-md-3">
                <label class="sr-only" for="inlineFormInputGroup">Jabatan atau perusahaan</label>
                <div class="input-group">
                    <input class="form-control border-right-0 search-input" placeholder="Job tile or company...">
                    <button type="submit" class="btn btn-search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
            <a href="#" class="px-4 mt-4">
                Advanced Job Search
            </a>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Main -->
<main>
    <section class="section-recomended-jobs">
        <div class="container">
            <div class="card">
                <div data-aos="fade-in" data-aos-duration="600" data-aos-once="true">
                    <h2 class="text-center">Pekerjaan Terbaru</h2>
                </div>
                <div id="job-items" class="owl-carousel job-carousel">
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="300">
                        <div class="job-card card h-100 d-flex flex-column">
                            <img class="card-img-top mx-md-auto d-md-block"
                                src="{{ url("kerjayuk-template/images/globalpay.png") }}" alt="Company Logo">
                            <div class="job-body h-100 d-flex flex-column mt-2">
                                <h3 class="job-title mb-0">UI/UX Designer</h3>
                                <p class="job-company mb-2">Global Pay Indonesia</p>
                                <p class="job-locations">Central Jakarta, Jakarta</p>
                                <div class="job-footer mt-auto">
                                    <span class="job-date mb-2 d-block">A day ago</span>
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="600">
                        <div class="job-card card h-100">
                            <img class="card-img-top mx-md-auto d-md-block"
                                src="{{ url("kerjayuk-template/images/dataon.png") }}" alt="Company Logo" />
                            <div class="job-body h-100 d-flex flex-column mt-2">
                                <h3 class="job-title mb-0">Software Developer</h3>
                                <p class="job-company mb-2">Dataon Company</p>
                                <p class="job-locations">Tangerang, Banten</p>
                                <div class="job-footer mt-auto">
                                    <span class="job-date mb-2 d-block">A day ago</span>
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="900">
                        <div class="job-card card h-100">
                            <img class="card-img-top mx-md-auto d-md-block"
                                src="{{ url("kerjayuk-template/images/logo-sociolla.jpg") }}" alt="Company Logo" />
                            <div class="job-body h-100 d-flex flex-column mt-2">
                                <h3 class="job-title mb-0">Back End Developer</h3>
                                <p class="job-company mb-2">Social Bella Indonesia</p>
                                <p class="job-locations">Tangerang, Banten</p>
                                <div class="job-footer mt-auto">
                                    <span class="job-date mb-2 d-block">A day ago</span>
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="1200">
                        <div class="job-card card h-100">
                            <img class="card-img-top mx-md-auto d-md-block"
                                src="{{ url("kerjayuk-template/images/telkom.png") }}" alt="Company Logo" />
                            <div class="job-body h-100 d-flex flex-column mt-2">
                                <h3 class="job-title mb-0">Business Analyst</h3>
                                <p class="job-company mb-2">Telkom Indonesia</p>
                                <p class="job-locations">Tangerang, Banten</p>
                                <div class="job-footer mt-auto">
                                    <span class="job-date mb-2 d-block">A day ago</span>
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-job-category">
        <div class="container">
            <div class="card">
                <div data-aos="fade-in" data-aos-duration="600" data-aos-once="true">
                    <h2 class="text-center">Temukan pekerjaan yang sesuai dengan minat Anda</h2>
                </div>
                <div id="category-items" class="category-carousel owl-carousel px-4">
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="300">
                        <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                            <div class="category-icon mb-2 d-flex justify-content-center align-items-center"
                                style="background-color: #FE9C09;">
                                <i class="fas fa-university"></i>
                            </div>
                            <a class="text-center title" href="#">Accounting</a>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-once="true" data-aos-delay="600">
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
                    </div>
                </div>
            </div>
    </section>
</main>
<!-- End Main -->
@endsection