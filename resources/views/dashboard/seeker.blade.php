@extends('layouts.main')

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
                Selamat Datang <?= Auth::user()->first_name ?>! <br> Ayo cari lowongan kerja <a href="/jobs">Disini</a>
            </h1>
            <!-- <div class="d-flex justify-content-center">
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
            </div> -->
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

                @foreach ($jobs as $job)
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="300">
                    <div class="job-card card card-body h-100 w-100 d-flex flex-column position-relative">
                        <div class="job-body h-100 d-flex flex-column mt-2">
                            <a class="job-title mb-0 stretched-link" href="/jobs/show/{{ $job->id }}">{{ $job->name }}</a>
                            <p class="job-company mb-2">{{ $job->company }}</p>
                            <p class="job-locations">{{ $job->location }}</p>
                            <div class="job-footer mt-auto">
                                <span class="job-date mb-2 d-block">Daftar sebelum {{ $job->expiration }}</span>
                                <a href="/jobs/show/{{ $job->id }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="section-job-category">
        <div class="container">
            <div data-aos="fade-in" data-aos-duration="600" data-aos-once="true">
                <h3 class="text-center font-weight-600">Temukan pekerjaan yang sesuai dengan karir Anda</h3>
            </div>
            <div id="category-items" class="category-carousel owl-carousel px-4 row mx-0">
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="300">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-university"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 1) }}">Agriculture, Food and Natural Resources</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="600">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-laptop"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 2) }}">Architecture and Construction</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="900">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-mail-bulk"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 3) }}">Arts, Audio/Video Technology and Communications</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="1200">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-palette"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 4) }}">Business Management and Administration</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="1500">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="far fa-handshake"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 5) }}">Education and Training</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="300">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-university"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 6) }}">Finance</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="600">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-laptop"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 7) }}">Government and Public Administration</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="900">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-mail-bulk"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 8) }}">Health Science</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="1200">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-palette"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 9) }}">Hospitality and Tourism</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="1500">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="far fa-handshake"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 10) }}">Human Services</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="300">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-university"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 11) }}">Information Technology & Software</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="600">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-laptop"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 12) }}">Law, Public Safety, Corrections and Security</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="900">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-mail-bulk"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 13) }}">Manufacturing</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="1200">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-palette"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 14) }}">Marketing, Sales and Service</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="1500">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="far fa-handshake"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 15) }}">Science, Technology, Engineering and Mathematics</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="300">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-university"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 16) }}">Transportation, Distribution and Logistics</a>
                    </div>
                </div>
                <div class="col h-100" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                    data-aos-delay="600">
                    <div class="category-card border-0 p-0 d-flex flex-column align-items-center position-relative">
                        <div class="category-icon mb-2 d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-laptop"></i> -->
                        </div>
                        <a class="font-weight-500 text-center stretched-link" href="{{ route('jobs.career', 17) }}">Others</a>
                    </div>
                </div>
            </div>
    </section>
</main>
<!-- End Main -->
@endsection