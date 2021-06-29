@extends('layouts.main')

@section('title')
KerjaYuk | Job Detail
@endsection

@section('content')
<!-- Main -->
<main>
    <section class="section-job-detail-seeker-v2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="wrapper d-flex flex-column justify-content-center align-items-center">
                            <h4 class="font-weight-600">{{ $job->name }}</h4>
                            <p class="mb-3 mb-md-2">{{ $job->company }}</p>
                            <div class="row w-100">
                                <div class="col-4 d-flex justify-content-center text-center">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-briefcase mr-0 mr-md-2 mb-2 mb-md-0"></i>{{ $job->type }}</span>
                                </div>
                                <div class="col-4 d-flex justify-content-center text-center border-left">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-map-marker-alt mr-0 mr-md-2 mb-2 mb-md-0"></i>{{ $job->area }}</span>
                                </div>
                                <div class="col-4 d-flex justify-content-center text-center border-left">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-user-friends mr-0 mr-md-2 mb-2 mb-md-0"></i>{{ count($applicants) }} Orang Telah Mendaftarkan Diri</span>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row mb-3">
                                <div class="col-12 col-md">
                                    <div class="row">
                                        <div class="col-12 col-md-4 pl-md-0 py-1 py-sm-1 py-md-0">
                                            <div class="text-center py-4 px-3 py-sm-4 list-feature feature-1 h-100">
                                                <i class="fas fa-dollar-sign text-white mb-2"></i>
                                                <div class="text-group text-white body-small">
                                                    <span class="mb-0">IDR {{ $job->min_salary }}</span>
                                                    <span class="mb-0">to</span>
                                                    <span class="mb-0">IDR {{ $job->max_salary }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 pl-md-0 py-1 py-sm-1 py-md-0">
                                            <div class="text-center py-4 px-3 py-sm-4 list-feature feature-2 h-100">
                                                <i class="fas fa-clock text-white mb-2"></i>
                                                <div class="text-group text-white body-small">
                                                    <span class="mb-0">{{ $job->workhour_start }}</span>
                                                    <span class="mb-0">to</span>
                                                    <span class="mb-0">{{ $job->workhour_end }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 pl-md-0 py-1 py-sm-1 py-md-0">
                                            <div class="text-center py-4 px-3 py-sm-4 list-feature feature-3 h-100">
                                                <i class="far fa-calendar-alt text-white mb-2"></i>
                                                <div class="text-group text-white body-small">
                                                    <span class="mb-0">{{ $job->workday_start }}</span>
                                                    <span class="mb-0">to</span>
                                                    <span class="mb-0">{{ $job->workday_end }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="title-desc position-relative">
                                <h5 class="text-center font-weight-600 title-desc">Deskripsi Pekerjaan</h5>
                            </div>

                            <h5 class="body-default font-weight-600 mt-5">Tanggung Jawab:</h5>
                            <ul class="list-group ml-3 list-tanggung-jawab mb-4">
                                <li class="list-group-item border-0 d-flex px-0">
                                    <div class="position-relative mr-2">
                                        <div class="list-bullet d-flex justify-content-center align-items-center"
                                            style="margin-top:5px;">
                                        </div>
                                    </div>
                                    <p class="mb-0">{{ $job->responsibility }}</p>
                                </li>
                            </ul>

                            <div class="row mb-0 mb-md-4">
                                <div class="col-12 col-md-5">
                                    <h5 class="body-default font-weight-600">Alamat Lengkap:</h5>
                                    <p>{{ $job->location }}</p>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <h5 class="body-default font-weight-600">Tautan (Google Maps):</h5>
                                    <a href="{{ $job->location_link }}">{{ $job->location_link }}</a>
                                </div>
                            </div>

                            <div class="row mb-0 mb-md-4">
                                <div class="col-12 col-md-5">
                                    <h5 class="body-default font-weight-600">Kualifikasi Prodi:</h5>
                                    @foreach ($job->majors as $major)
                                    <p class="mb-0">{{ $major }}</p>
                                    @endforeach
                                </div>
                                <div class="col-12 col-md-auto">
                                    <h5 class="body-default font-weight-600">Kualifikasi Edukasi:</h5>
                                    <p>{{ $job->education }}</p>
                                </div>
                            </div>
                            <div class="row mb-0 mb-md-4">
                                <div class="col-12 col-md-5">
                                    <h5 class="body-default font-weight-600">Status Pekerja:</h5>
                                    <p>{{ $job->job_state }}</p>
                                </div>
                            </div>
                            <div class="row mb-0 mb-md-4">
                                <div class="col-12 col-md-5">
                                    <h5 class="body-default font-weight-600">Spesialis Pekerjaan:</h5>
                                    <p class="mb-0">{{ $job->career }}</p>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <h5 class="body-default font-weight-600">Pengalaman:</h5>
                                    <p>{{ $job->experience }}</p>
                                </div>
                            </div>
                            
                            <h5 class="body-default font-weight-600">Kemampuan yang dibutuhkan</h5>
                            <p>{{ $job->skill }}</p>

                            <h5 class="body-default font-weight-600">Tentang Perusahaan</h5>
                            <p>{{ $job->about_company }}</p>

                            <h5 class="body-default font-weight-600">Informasi Tambahan</h5>
                            <p>{{ $job->other }}</p>

                            <h5 class="body-default font-weight-600">Daftar Sebelum Tanggal Berikut</h5>
                            <p>{{ $job->expiration }}</p>

                            <h5 class="body-default font-weight-600">Berkas yang Perlu Dikumpulkan</h5>
                            <p>{{ $job->submission }}</p>

                            @if (Auth::user()->role == 'seeker')
                            <!-- Action Button Desktop -->
                            <div class="action-button mt-5 d-none d-md-flex justify-content-md-center">
                                <a href="/jobs" class="btn btn-grey mr-2 body-default">Lowongan Lainnya</a>
                                <?php if (count($requests) > 0) : ?>
                                <a href="/requests/create/{{ $job->id }}" class="btn btn-red body-default disabled">Anda sudah mendaftarkan diri</a>
                                <?php elseif (count($requests) == 0) : ?>
                                <a href="/requests/create/{{ $job->id }}" class="btn btn-red body-default">Apply Pekerjaan</a>
                                <?php endif ?>
                            </div>

                            <!-- Action Button Mobile -->
                            <div class="action-button mt-5 d-block d-md-none">
                                <?php if (count($requests) > 0) : ?>
                                <a href="/requests/create/{{ $job->id }}" class="btn btn-red body-default disabled">Anda sudah mendaftarkan diri</a>
                                <?php elseif (count($requests) == 0) : ?>
                                <a href="/requests/create/{{ $job->id }}" class="btn btn-red body-default">Apply Pekerjaan</a>
                                <?php endif ?>
                                <a href="/jobs" class="btn btn-grey btn-block mr-2 body-default">Lowongan Lainnya</a>
                            </div>

                            <a href="/reports/jobs/{{ $job->id }}" class="mt-3 text-center d-block body-default link-red">Laporkan
                                Lowongan?</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection