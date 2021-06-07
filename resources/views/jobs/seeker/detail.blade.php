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
                            <div class="logo-wrapper">
                                <img src="{{ url("img/illustration/company/telkom.png") }}" alt="Company Logo"
                                    class="w-100">
                            </div>
                            <h4 class="font-weight-600">Human Resource</h4>
                            <p class="mb-3 mb-md-2">Telkom Indonesia</p>
                            <div class="row w-100">
                                <div class="col-4 d-flex justify-content-center text-center">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-briefcase mr-0 mr-md-2 mb-2 mb-md-0"></i>Full-Time</span>
                                </div>
                                <div class="col-4 d-flex justify-content-center text-center border-left">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-map-marker-alt mr-0 mr-md-2 mb-2 mb-md-0"></i>
                                        Jakarta Pusat</span>
                                </div>
                                <div class="col-4 d-flex justify-content-center text-center border-left">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-user-friends mr-0 mr-md-2 mb-2 mb-md-0"></i>220
                                        Applicant</span>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row mb-3">
                                <div class="col-12 col-md-auto">
                                    <h5 class="body-default font-weight-600">Syarat Skill:</h5>
                                    <ul class="list-group mb-3 ml-3 mr-5">
                                        <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                                            <div class="position-relative mr-2">
                                                <div
                                                    class="list-bullet d-flex justify-content-center align-items-center">
                                                </div>
                                            </div>
                                            <p class="mb-0">Communication</p>
                                        </li>
                                        <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                                            <div class="position-relative mr-2">
                                                <div
                                                    class="list-bullet d-flex justify-content-center align-items-center">
                                                </div>
                                            </div>
                                            <p class="mb-0">Organization</p>
                                        </li>
                                        <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                                            <div class="position-relative mr-2">
                                                <div
                                                    class="list-bullet d-flex justify-content-center align-items-center">
                                                </div>
                                            </div>
                                            <p class="mb-0">Conflict Management</p>
                                        </li>
                                        <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                                            <div class="position-relative mr-2">
                                                <div
                                                    class="list-bullet d-flex justify-content-center align-items-center">
                                                </div>
                                            </div>
                                            <p class="mb-0">Decision Making</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="row">
                                        <div class="col-12 col-md-4 pl-md-0 py-1 py-sm-1 py-md-0">
                                            <div class="text-center py-4 px-3 py-sm-4 list-feature feature-1 h-100">
                                                <i class="fas fa-dollar-sign text-white mb-2"></i>
                                                <div class="text-group text-white body-small">
                                                    <span class="mb-0">IDR 9.000.000</span>
                                                    <span class="mb-0">to</span>
                                                    <span class="mb-0">IDR 15.000.000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 pl-md-0 py-1 py-sm-1 py-md-0">
                                            <div class="text-center py-4 px-3 py-sm-4 list-feature feature-2 h-100">
                                                <i class="fas fa-clock text-white mb-2"></i>
                                                <div class="text-group text-white body-small">
                                                    <span class="mb-0">08.00</span>
                                                    <span class="mb-0">to</span>
                                                    <span class="mb-0">17.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 pl-md-0 py-1 py-sm-1 py-md-0">
                                            <div class="text-center py-4 px-3 py-sm-4 list-feature feature-3 h-100">
                                                <i class="far fa-calendar-alt text-white mb-2"></i>
                                                <div class="text-group text-white body-small">
                                                    <span class="mb-0">Monday</span>
                                                    <span class="mb-0">to</span>
                                                    <span class="mb-0">Friday</span>
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
                                    <p class="mb-0">Membantu memberi penilaian terhadap
                                        kualitas kinerja dan karakteristik pegawai Perusahaan.</p>
                                </li>
                                <li class="list-group-item border-0 d-flex px-0">
                                    <div class="position-relative mr-2">
                                        <div class="list-bullet d-flex justify-content-center align-items-center"
                                            style="margin-top:5px;">
                                        </div>
                                    </div>
                                    <p class="mb-0">Mengawasi dan mengatur kontrak kerja karyawan.</p>
                                </li>
                                <li class="list-group-item border-0 d-flex px-0">
                                    <div class="position-relative mr-2">
                                        <div class="list-bullet d-flex justify-content-center align-items-center"
                                            style="margin-top:5px;">
                                        </div>
                                    </div>
                                    <p class="mb-0">Mengawasi dan mengatur BPJS Ketenagakerjaan.</p>
                                </li>
                                <li class="list-group-item border-0 d-flex px-0">
                                    <div class="position-relative mr-2">
                                        <div class="list-bullet d-flex justify-content-center align-items-center"
                                            style="margin-top:5px;">
                                        </div>
                                    </div>
                                    <p class="mb-0">Mengatur administrasi HR Perusahaan.
                                        Membuat laporan absensi, gaji dan bonus pegawai.</p>
                                </li>
                                <li class="list-group-item border-0 d-flex px-0">
                                    <div class="position-relative mr-2">
                                        <div class="list-bullet d-flex justify-content-center align-items-center"
                                            style="margin-top:5px;">
                                        </div>
                                    </div>
                                    <p class="mb-0">Bertanggung jawab atas mediasi dalam relasi antar
                                        pegawai atau antara
                                        pegawai dengan manajemen Perusahaan.</p>
                                </li>
                            </ul>

                            <div class="row mb-0 mb-md-4">
                                <div class="col-12 col-md-5">
                                    <h5 class="body-default font-weight-600">Jenis Pekerjaan:</h5>
                                    <p>Full Time</p>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <h5 class="body-default font-weight-600">Kualifikasi:</h5>
                                    <p>Sarjana</p>
                                </div>
                            </div>

                            <div class="row mb-0 mb-md-4">
                                <div class="col-12 col-md-5">
                                    <h5 class="body-default font-weight-600">Spesialis Pekerjaan:</h5>
                                    <p class="mb-0">Sumber Daya</p>
                                    <p class="mb-0">Manusia / Personalia</p>
                                    <p class="">Sumber Daya Manusia /HR</p>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <h5 class="body-default font-weight-600">Pengalaman:</h5>
                                    <p>3 Tahun</p>
                                </div>
                            </div>

                            <h5 class="body-default font-weight-600">Tentang Perusahaan</h5>
                            <p>Perusahaan PT. Bumi Indah Makmur bergerak di bidang Property.
                                Terletak di daerah Leker Rejo, Gresik dengan lokasi yang sangat strategis.
                                Perusahaan ini dalam mengembangkan usaha membutuhkan tenaga SDM yang berjiwa muda
                                dan siap menghadapi tantangan.</p>

                            <h5 class="body-default font-weight-600">Informasi Tambahan Perusahaan Industri</h5>
                            <p>Properti / Real Estate.</p>

                            <!-- Action Button Desktop -->
                            <div class="action-button mt-5 d-none d-md-flex justify-content-md-center">
                                <a href="#" class="btn btn-grey mr-2 body-default">Lowongan Lainnya</a>
                                <a class="btn btn-red body-default">Apply Pekerjaan</a>
                            </div>

                            <!-- Action Button Mobile -->
                            <div class="action-button mt-5 d-block d-md-none">
                                <a class="btn btn-red btn-block body-default">Apply Pekerjaan</a>
                                <a href="#" class="btn btn-grey btn-block mr-2 body-default">Lowongan Lainnya</a>
                            </div>
                            <a href="#" class="mt-3 text-center d-block body-default link-red">Laporkan
                                Lowongan?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection