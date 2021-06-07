@extends('layouts.main')

@section('title')
KerjaYuk | Detail Job
@endsection

@section('content')
<!-- Main -->
<main>
    <section class="section-detail-job">
        <div class="container">
            <div class="card card-body border-0">
                <div class="card-header text-center border-bottom-0 px-0">
                    <h4 class="text-title mb-3">Informasi Lowongan</h4>
                    <!-- <img src="{{ url("img/illustration/company/logo-sociolla.jpg") }}" alt="Company Logo" width="150"> -->
                </div>
                <form action="/jobs" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="pekerjaan">Nama Pekerjaan:</label>
                        <input type="text" class="form-control" id="pekerjaan" placeholder="Nama Pekerjaan" name="name">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi:</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="location">
                    </div>
                    <div class="form-group">
                        <label for="jenis_pekerjaan">Jenis Pekerjaan:</label>
                        <select class="form-control" id="jenis_pekerjaan" name="type">
                            <option>Penuh Waktu</option>
                            <option>Paruh Waktu</option>
                            <option>Magang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="min_gaji">Gaji:</label>
                        <div class="form-row">
                            <div class="col-6">
                                <input type="number" class="form-control" id="min_gaji" placeholder="Minimum"
                                    name="min_salary">
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" id="end_kerja" placeholder="Maximum"
                                    name="max_salary">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_kerja">Jam Kerja:</label>
                        <div class="form-row">
                            <div class="col-6">
                                <input type="time" class="form-control" id="start_kerja" placeholder="Mulai"
                                    name="workhour_start">
                            </div>
                            <div class="col-6">
                                <input type="time" class="form-control" id="max_gaji" placeholder="Selesai"
                                    name="workhour_end">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_hari_kerja">Hari Kerja:</label>
                        <div class="form-row">
                            <div class="col-6">
                                <select class="form-control" id="start_hari_kerja" name="workday_start">
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jum'at</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="end_hari_kerja" aria-placeholder="Yay" name="workday_end">
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jum'at</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status_pekerjaan">Status Pekerjaan:</label>
                        <select class="form-control" id="status_pekerjaan" name="job_state">
                            <option>Pegawai Tetap</option>
                            <option>Pegawai Kontrak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kualifikasi">Kualifikasi Edukasi:</label>
                        <select class="form-control" id="kualifikasi" name="education">
                            <option>SD</option>
                            <option>SMP</option>
                            <option>SMA</option>
                            <option>D1</option>
                            <option>D2</option>
                            <option>D3</option>
                            <option>D4</option>
                            <option>S1</option>
                            <option>S2</option>
                            <option>S3</option>
                            <option>Tidak Ada</option>
                            <option>Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <fieldset>
                            <label for="major">Kualifikasi Prodi:</label><br />
                            <input type="checkbox" name="majors[]" value="Teknik Telekomunikasi">Teknik Telekomunikasi<br />
                            <input type="checkbox" name="majors[]" value="Teknik Elektro">Teknik Elektro<br />
                            <input type="checkbox" name="majors[]" value="Teknik Fisika">Teknik Fisika<br />
                            <input type="checkbox" name="majors[]" value="Teknik Komputer">Teknik Komputer<br />
                            <input type="checkbox" name="majors[]" value="Teknik Biomedis">Teknik Biomedis<br />

                            <input type="checkbox" name="majors[]" value="Informatika">Informatika<br />
                            <input type="checkbox" name="majors[]" value="Teknologi Informasi">Teknologi Informasi<br />
                            <input type="checkbox" name="majors[]" value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak<br />
                            <input type="checkbox" name="majors[]" value="Data Sains">Data Sains<br />

                            <input type="checkbox" name="majors[]" value="Teknik Industri">Teknik Industri<br />
                            <input type="checkbox" name="majors[]" value="Sistem Informasi">Sistem Informasi<br />
                            <input type="checkbox" name="majors[]" value="Teknik Logistik">Teknik Logistik<br />

                            <input type="checkbox" name="majors[]" value="ICT Business">ICT Business<br />
                            <input type="checkbox" name="majors[]" value="Manajemen Bisnis Telekomunikasi & Informatika">Manajemen Bisnis Telekomunikasi & Informatika<br />
                            <input type="checkbox" name="majors[]" value="Akuntansi">Akuntansi<br />
                            <input type="checkbox" name="majors[]" value="Manajemen">Manajemen<br />

                            <input type="checkbox" name="majors[]" value="Administrasi Bisnis">Administrasi Bisnis<br />
                            <input type="checkbox" name="majors[]" value="Ilmu Komunikasi">Ilmu Komunikasi<br />
                            <input type="checkbox" name="majors[]" value="Digital Public Relation">Digital Public Relation<br />

                            <input type="checkbox" name="majors[]" value="Desain Komunikasi Visual">Desain Komunikasi Visual<br />
                            <input type="checkbox" name="majors[]" value="Product Innovation & Management">Product Innovation & Management<br />
                            <input type="checkbox" name="majors[]" value="Desain Interior">Desain Interior<br />
                            <input type="checkbox" name="majors[]" value="Kriya (Fashion and Textile Design)">Kriya (Fashion and Textile Design)<br />
                            <input type="checkbox" name="majors[]" value="Visual Arts (Seni Rupa)">Visual Arts (Seni Rupa)<br />

                            <input type="checkbox" name="majors[]" value="Manajemen Informatika">Manajemen Informatika<br />
                            <input type="checkbox" name="majors[]" value="Komputerisasi Akuntansi">Komputerisasi Akuntansi<br />
                            <input type="checkbox" name="majors[]" value="Manajemen Pemasaran">Manajemen Pemasaran<br />
                            <input type="checkbox" name="majors[]" value="Perhotelan">Perhotelan<br />
                            <input type="checkbox" name="majors[]" value="Teknologi Rekayasa Multimedia">Teknologi Rekayasa Multimedia<br />

                            <input type="checkbox" name="majors[]" value="Tidak Ada">Tidak Ada<br />
                            <input type="checkbox" name="majors[]" value="Lainnya">Lainnya<br />
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <label for="pengalaman">Pengalaman Kerja:</label>
                        <select class="form-control" id="pengalaman" name="experience">
                            <option>Baru Lulus</option>
                            <option>Pernah Magang Pekerjaan Serupa</option>
                            <option>1 Tahun</option>
                            <option>3 Tahun</option>
                            <option>5 Tahun</option>
                            <option>10 Tahun</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggung_jawab">Tanggung Jawab:</label>
                        <textarea class="form-control" id="tanggung_jawab" rows="8"
                            placeholder="Tuliskan tanggung jawab pekerjaan..." name="responsibility"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pengumpulan">Berkas Pendaftaran yang Diperlukan:</label>
                        <textarea class="form-control" id="pengumpulan" rows="4"
                            placeholder="Jika ingin melamar kirim CV, Resume, dan Portofolio melalui google drive pada form lamaran kerja" name="submission"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="lainnya">Informasi Lain:</label>
                        <textarea class="form-control" id="lainnya" rows="4"
                            placeholder="Tuliskan informasi lainnya jika diperlukan" name="other"></textarea>
                    </div>
                    <button type="submit" class="btn btn-orange btn-block mb-2 mb-md-0">Edit
                        Informasi</button>
                    <button type="submit" class="btn btn-danger text-white btn-block mb-2 mb-md-0">Tutup
                        Lowongan</button>
                </form>

                <!-- Wishlist Tabs -->
                <ul class="nav nav-tabs nav-fill mt-3 border-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-500" href="#pendaftar_content" role="tab"
                            data-toggle="tab">Pendaftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-500" href="#wishlist_content" role="tab"
                            data-toggle="tab">Wishlist</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-2">
                    <div role="tabpanel" class="tab-pane fade in active" id="pendaftar_content">
                        <div class="list-group mb-2">
                            <li class="list-group-item user-list border-0 px-0 d-flex flex-row position-relative">
                                <img class="mr-2" src="{{ url("img/illustration/avatars/user-1.jpg") }}"
                                    alt="Profile Picture" width="50" height="50" style="border-radius: 50%;">
                                <div class="user-information">
                                    <a class="font-size-body stretched-link text-dark"
                                        href="../../pages/company/info-pendaftar.html">Muhammad Fachrian</a>
                                    <p class="font-size-sub-body mb-0">UI Designer</p>
                                </div>
                            </li>
                            <li class="list-group-item user-list border-0 px-0 d-flex flex-row position-relative">
                                <img class="mr-2" src="{{ url("img/illustration/avatars/user-1.jpg") }}"
                                    alt="Profile Picture" width="50" height="50" style="border-radius: 50%;">
                                <div class="user-information">
                                    <a class="font-size-body stretched-link text-dark" href="#">Muhammad
                                        Fachrian</a>
                                    <p class="font-size-sub-body mb-0">UI Designer</p>
                                </div>
                            </li>
                            <li class="list-group-item user-list border-0 px-0 d-flex flex-row position-relative">
                                <img class="mr-2" src="{{ url("img/illustration/avatars/user-1.jpg") }}"
                                    alt="Profile Picture" width="50" height="50" style="border-radius: 50%;">
                                <div class="user-information">
                                    <a class="font-size-body stretched-link text-dark" href="#">Muhammad
                                        Fachrian</a>
                                    <p class="font-size-sub-body mb-0">UI Designer</p>
                                </div>
                            </li>
                        </div>
                        <form action="">
                            <button type="submit" class="btn btn-green text-white btn-block mb-2 mb-md-0">Export
                                Excel</button>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="wishlist_content">
                        <div class="list-group mb-2">
                            <li class="list-group-item user-list border-0 px-0 d-flex flex-row position-relative">
                                <img src="{{ url("img/illustration/avatars/user-1.jpg") }}" alt="Foto Profil"
                                    class="image-cover profile-picture mr-2" style="width:50px;height:50px;">
                                <div class="user-information">
                                    <a class="font-size-body stretched-link text-dark" href="#">Muhammad
                                        Fachrian</a>
                                    <p class="font-size-sub-body mb-0">UI Designer</p>
                                </div>
                            </li>
                            <li class="list-group-item user-list border-0 px-0 d-flex flex-row position-relative">
                                <img src="{{ url("img/illustration/avatars/user-1.jpg") }}" alt="Foto Profil"
                                    class="image-cover profile-picture mr-2" style="width:50px;height:50px;">
                                <div class="user-information">
                                    <a class="font-size-body stretched-link text-dark" href="#">Muhammad
                                        Fachrian</a>
                                    <p class="font-size-sub-body mb-0">UI Designer</p>
                                </div>
                            </li>
                            <li class="list-group-item user-list border-0 px-0 d-flex flex-row position-relative">
                                <img src="{{ url("img/illustration/avatars/user-1.jpg") }}" alt="Foto Profil"
                                    class="image-cover profile-picture mr-2" style="width:50px;height:50px;">
                                <div class="user-information">
                                    <a class="font-size-body stretched-link text-dark" href="#">Muhammad
                                        Fachrian</a>
                                    <p class="font-size-sub-body mb-0">UI Designer</p>
                                </div>
                            </li>
                        </div>
                        <form action="">
                            <button type="submit" class="btn btn-green text-white btn-block mb-2 mb-md-0">Export
                                Excel</button>
                        </form>
                    </div>
                </div>
                <!-- End Wishlsit Tabs -->
            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection