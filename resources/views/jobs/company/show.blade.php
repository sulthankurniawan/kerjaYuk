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
                <form action="{{ route('jobs.update', $job->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="pekerjaan">Nama Pekerjaan:</label>
                        <input type="text" class="form-control" id="pekerjaan" placeholder="Nama Pekerjaan" name="name" value="{{ $job->name }}" reqiored>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi:</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="location" value="{{ $job->location }}" required>
                    </div>
                    <div class="form-group">
                        <label for="area">Area (Kota / Kabupaten):</label>
                        <select class="form-control" id="area" name="area">
                            <option <?= ($job->area == 'Kota Jakarta Barat') ? 'selected' : ''; ?>>Kota Jakarta Barat</option>
                            <option <?= ($job->area == 'Kota Jakarta Pusat') ? 'selected' : ''; ?>>Kota Jakarta Pusat</option>
                            <option <?= ($job->area == 'Kota Jakarta Selatan') ? 'selected' : ''; ?>>Kota Jakarta Selatan</option>
                            <option <?= ($job->area == 'Kota Jakarta Timur') ? 'selected' : ''; ?>>Kota Jakarta Timur</option>
                            <option <?= ($job->area == 'Kota Jakarta Utara') ? 'selected' : ''; ?>>Kota Jakarta Utara</option>
                            <option <?= ($job->area == 'Kota Bandung') ? 'selected' : ''; ?>>Kota Bandung</option>
                            <option <?= ($job->area == 'Kota Banjar') ? 'selected' : ''; ?>>Kota Banjar</option>
                            <option <?= ($job->area == 'Kota Bekasi') ? 'selected' : ''; ?>>Kota Bekasi</option>
                            <option <?= ($job->area == 'Kota Bogor') ? 'selected' : ''; ?>>Kota Bogor</option>
                            <option <?= ($job->area == 'Kota Cimahi') ? 'selected' : ''; ?>>Kota Cimahi</option>
                            <option <?= ($job->area == 'Kota Cirebon') ? 'selected' : ''; ?>>Kota Cirebon</option>
                            <option <?= ($job->area == 'Kota Depok') ? 'selected' : ''; ?>>Kota Depok</option>
                            <option <?= ($job->area == 'Kota Sukabumi') ? 'selected' : ''; ?>>Kota Sukabumi</option>
                            <option <?= ($job->area == 'Kota Tasikmalaya') ? 'selected' : ''; ?>>Kota Tasikmalaya</option>
                            <option <?= ($job->area == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="location_link">Link Lokasi (Google Maps)</label>
                        <input type="text" class="form-control" id="location_link" placeholder="Link lokasi" name="location_link" required>
                    </div>
                    <div class="form-group">
                        <label for="career">Jenis Karir:</label>
                        <select class="form-control" id="career" name="career">
                            <option <?= ($job->career == 'Architecture and Construction') ? 'selected' : ''; ?>>Architecture and Construction</option>
                            <option <?= ($job->career == 'Agriculture, Food and Natural Resources') ? 'selected' : ''; ?>>Agriculture, Food and Natural Resources</option>
                            <option <?= ($job->career == 'Arts, Audio/Video Technology and Communications') ? 'selected' : ''; ?>>Arts, Audio/Video Technology and Communications</option>
                            <option <?= ($job->career == 'Business Management and Administration') ? 'selected' : ''; ?>>Business Management and Administration</option>
                            <option <?= ($job->career == 'Education and Training') ? 'selected' : ''; ?>>Education and Training</option>
                            <option <?= ($job->career == 'Finance') ? 'selected' : ''; ?>>Finance</option>
                            <option <?= ($job->career == 'Government and Public Administration') ? 'selected' : ''; ?>>Government and Public Administration</option>
                            <option <?= ($job->career == 'Health Science') ? 'selected' : ''; ?>>Health Science</option>
                            <option <?= ($job->career == 'Hospitality and Tourism') ? 'selected' : ''; ?>>Hospitality and Tourism</option>
                            <option <?= ($job->career == 'Human Services') ? 'selected' : ''; ?>>Human Services</option>
                            <option <?= ($job->career == 'Information Technology & Software') ? 'selected' : ''; ?>>Information Technology & Software</option>
                            <option <?= ($job->career == 'Law, Public Safety, Corrections and Security') ? 'selected' : ''; ?>>Law, Public Safety, Corrections and Security</option>
                            <option <?= ($job->career == 'Manufacturing') ? 'selected' : ''; ?>>Manufacturing</option>
                            <option <?= ($job->career == 'Marketing, Sales and Service') ? 'selected' : ''; ?>>Marketing, Sales and Service</option>
                            <option <?= ($job->career == 'Science, Technology, Engineering and Mathematics') ? 'selected' : ''; ?>>Science, Technology, Engineering and Mathematics</option>
                            <option <?= ($job->career == 'Transportation, Distribution and Logistics') ? 'selected' : ''; ?>>Transportation, Distribution and Logistics</option>
                            <option <?= ($job->career == 'Others') ? 'selected' : ''; ?>>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis_pekerjaan">Jenis Pekerjaan:</label>
                        <select class="form-control" id="jenis_pekerjaan" name="type">
                            <option <?= ($job->type == 'Penuh Waktu') ? 'selected' : ''; ?>>Penuh Waktu</option>
                            <option <?= ($job->type == 'Paruh Waktu') ? 'selected' : ''; ?>>Paruh Waktu</option>
                            <option <?= ($job->type == 'Magang') ? 'selected' : ''; ?>>Magang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="min_gaji">Gaji:</label>
                        <div class="form-row">
                            <div class="col-6">
                                <input type="number" class="form-control" id="min_gaji" placeholder="Minimum" name="min_salary" value="{{ $job->min_salary }}" required>
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" id="end_kerja" placeholder="Maximum" name="max_salary" value="{{ $job->max_salary }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_kerja">Jam Kerja:</label>
                        <div class="form-row">
                            <div class="col-6">
                                <input type="time" class="form-control" id="start_kerja" placeholder="Mulai" name="workhour_start" value="{{ $job->workhour_start }}" required>
                            </div>
                            <div class="col-6">
                                <input type="time" class="form-control" id="max_gaji" placeholder="Selesai" name="workhour_end" value="{{ $job->workhour_end }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_hari_kerja">Hari Kerja:</label>
                        <div class="form-row">
                            <div class="col-6">
                                <select class="form-control" id="start_hari_kerja" name="workday_start">
                                    <option <?= ($job->workday_start == 'Senin') ? 'selected' : ''; ?>>Senin</option>
                                    <option <?= ($job->workday_start == 'Selasa') ? 'selected' : ''; ?>>Selasa</option>
                                    <option <?= ($job->workday_start == 'Rabu') ? 'selected' : ''; ?>>Rabu</option>
                                    <option <?= ($job->workday_start == 'Kamis') ? 'selected' : ''; ?>>Kamis</option>
                                    <option <?= ($job->workday_start == 'Jumat') ? 'selected' : ''; ?>>Jumat</option>
                                    <option <?= ($job->workday_start == 'Sabtu') ? 'selected' : ''; ?>>Sabtu</option>
                                    <option <?= ($job->workday_start == 'Minggu') ? 'selected' : ''; ?>>Minggu</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="end_hari_kerja" aria-placeholder="Yay" name="workday_end">
                                    <option <?= ($job->workday_end == 'Senin') ? 'selected' : ''; ?>>Senin</option>
                                    <option <?= ($job->workday_end == 'Selasa') ? 'selected' : ''; ?>>Selasa</option>
                                    <option <?= ($job->workday_end == 'Rabu') ? 'selected' : ''; ?>>Rabu</option>
                                    <option <?= ($job->workday_end == 'Kamis') ? 'selected' : ''; ?>>Kamis</option>
                                    <option <?= ($job->workday_end == 'Jumat') ? 'selected' : ''; ?>>Jumat</option>
                                    <option <?= ($job->workday_end == 'Sabtu') ? 'selected' : ''; ?>>Sabtu</option>
                                    <option <?= ($job->workday_end == 'Minggu') ? 'selected' : ''; ?>>Minggu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status_pekerjaan">Status Pekerjaan:</label>
                        <select class="form-control" id="status_pekerjaan" name="job_state">
                            <option <?= ($job->job_state == 'Pegawai Tetap') ? 'selected' : ''; ?>>Pegawai Tetap</option>
                            <option <?= ($job->job_state == 'Pegawai Kontrak') ? 'selected' : ''; ?>>Pegawai Kontrak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kualifikasi">Kualifikasi Edukasi:</label>
                        <select class="form-control" id="kualifikasi" name="education">
                            <option <?= ($job->education == 'SD') ? 'selected' : ''; ?>>SD</option>
                            <option <?= ($job->education == 'SMP') ? 'selected' : ''; ?>>SMP</option>
                            <option <?= ($job->education == 'SMA') ? 'selected' : ''; ?>>SMA</option>
                            <option <?= ($job->education == 'D1') ? 'selected' : ''; ?>>D1</option>
                            <option <?= ($job->education == 'D2') ? 'selected' : ''; ?>>D2</option>
                            <option <?= ($job->education == 'D3') ? 'selected' : ''; ?>>D3</option>
                            <option <?= ($job->education == 'D4') ? 'selected' : ''; ?>>D4</option>
                            <option <?= ($job->education == 'S1') ? 'selected' : ''; ?>>S1</option>
                            <option <?= ($job->education == 'S2') ? 'selected' : ''; ?>>S2</option>
                            <option <?= ($job->education == 'S3') ? 'selected' : ''; ?>>S3</option>
                            <option <?= ($job->education == 'Tidak Ada') ? 'selected' : ''; ?>>Tidak Ada</option>
                            <option <?= ($job->education == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <fieldset>
                            <label for="major">Kualifikasi Prodi:</label><br />
                            <input type="checkbox" name="majors[]" value="Teknik Telekomunikasi" <?= (in_array('Teknik Telekomunikasi', $job->majors)) ? 'checked' : ''; ?>>Teknik Telekomunikasi<br />
                            <input type="checkbox" name="majors[]" value="Teknik Elektro" <?= (in_array('Teknik Elektro', $job->majors)) ? 'checked' : ''; ?>>Teknik Elektro<br />
                            <input type="checkbox" name="majors[]" value="Teknik Fisika" <?= (in_array('Teknik Fisika', $job->majors)) ? 'checked' : ''; ?>>Teknik Fisika<br />
                            <input type="checkbox" name="majors[]" value="Teknik Komputer" <?= (in_array('Teknik Komputer', $job->majors)) ? 'checked' : ''; ?>>Teknik Komputer<br />
                            <input type="checkbox" name="majors[]" value="Teknik Biomedis" <?= (in_array('Teknik Biomedis', $job->majors)) ? 'checked' : ''; ?>>Teknik Biomedis<br />

                            <input type="checkbox" name="majors[]" value="Informatika" <?= (in_array('Informatika', $job->majors)) ? 'checked' : ''; ?>>Informatika<br />
                            <input type="checkbox" name="majors[]" value="Teknologi Informasi" <?= (in_array('Teknologi Informasi', $job->majors)) ? 'checked' : ''; ?>>Teknologi Informasi<br />
                            <input type="checkbox" name="majors[]" value="Rekayasa Perangkat Lunak" <?= (in_array('Rekayasa Perangkat Lunak', $job->majors)) ? 'checked' : ''; ?>>Rekayasa Perangkat Lunak<br />
                            <input type="checkbox" name="majors[]" value="Data Sains" <?= (in_array('Data Sains', $job->majors)) ? 'checked' : ''; ?>>Data Sains<br />

                            <input type="checkbox" name="majors[]" value="Teknik Industri" <?= (in_array('Teknik Industri', $job->majors)) ? 'checked' : ''; ?>>Teknik Industri<br />
                            <input type="checkbox" name="majors[]" value="Sistem Informasi" <?= (in_array('Sistem Informasi', $job->majors)) ? 'checked' : ''; ?>>Sistem Informasi<br />
                            <input type="checkbox" name="majors[]" value="Teknik Logistik" <?= (in_array('Teknik Logistik', $job->majors)) ? 'checked' : ''; ?>>Teknik Logistik<br />

                            <input type="checkbox" name="majors[]" value="ICT Business" <?= (in_array('ICT Business', $job->majors)) ? 'checked' : ''; ?>>ICT Business<br />
                            <input type="checkbox" name="majors[]" value="Manajemen Bisnis Telekomunikasi & Informatika" <?= (in_array('Manajemen Bisnis Telekomunikasi & Informatika', $job->majors)) ? 'checked' : ''; ?>>Manajemen Bisnis Telekomunikasi & Informatika<br />
                            <input type="checkbox" name="majors[]" value="Akuntansi" <?= (in_array('Akuntansi', $job->majors)) ? 'checked' : ''; ?>>Akuntansi<br />
                            <input type="checkbox" name="majors[]" value="Manajemen" <?= (in_array('Manajemen', $job->majors)) ? 'checked' : ''; ?>>Manajemen<br />

                            <input type="checkbox" name="majors[]" value="Administrasi Bisnis" <?= (in_array('Administrasi Bisnis', $job->majors)) ? 'checked' : ''; ?>>Administrasi Bisnis<br />
                            <input type="checkbox" name="majors[]" value="Ilmu Komunikasi" <?= (in_array('Ilmu Komunikasi', $job->majors)) ? 'checked' : ''; ?>>Ilmu Komunikasi<br />
                            <input type="checkbox" name="majors[]" value="Digital Public Relation" <?= (in_array('Digital Public Relation', $job->majors)) ? 'checked' : ''; ?>>Digital Public Relation<br />

                            <input type="checkbox" name="majors[]" value="Desain Komunikasi Visual" <?= (in_array('Desain Komunikasi Visual', $job->majors)) ? 'checked' : ''; ?>>Desain Komunikasi Visual<br />
                            <input type="checkbox" name="majors[]" value="Product Innovation & Management" <?= (in_array('Product Innovation & Management', $job->majors)) ? 'checked' : ''; ?>>Product Innovation & Management<br />
                            <input type="checkbox" name="majors[]" value="Desain Interior" <?= (in_array('Desain Interior', $job->majors)) ? 'checked' : ''; ?>>Desain Interior<br />
                            <input type="checkbox" name="majors[]" value="Kriya (Fashion and Textile Design)" <?= (in_array('Kriya (Fashion and Textile Design)', $job->majors)) ? 'checked' : ''; ?>>Kriya (Fashion and Textile Design)<br />
                            <input type="checkbox" name="majors[]" value="Visual Arts (Seni Rupa)" <?= (in_array('Visual Arts (Seni Rupa)', $job->majors)) ? 'checked' : ''; ?>>Visual Arts (Seni Rupa)<br />

                            <input type="checkbox" name="majors[]" value="Manajemen Informatika" <?= (in_array('Manajemen Informatika', $job->majors)) ? 'checked' : ''; ?>>Manajemen Informatika<br />
                            <input type="checkbox" name="majors[]" value="Komputerisasi Akuntansi" <?= (in_array('Komputerisasi Akuntansi', $job->majors)) ? 'checked' : ''; ?>>Komputerisasi Akuntansi<br />
                            <input type="checkbox" name="majors[]" value="Manajemen Pemasaran" <?= (in_array('Manajemen Pemasaran', $job->majors)) ? 'checked' : ''; ?>>Manajemen Pemasaran<br />
                            <input type="checkbox" name="majors[]" value="Perhotelan" <?= (in_array('Perhotelan', $job->majors)) ? 'checked' : ''; ?>>Perhotelan<br />
                            <input type="checkbox" name="majors[]" value="Teknologi Rekayasa Multimedia" <?= (in_array('Teknologi Rekayasa Multimedia', $job->majors)) ? 'checked' : ''; ?>>Teknologi Rekayasa Multimedia<br />

                            <input type="checkbox" name="majors[]" value="Lainnya" <?= (in_array('Lainnya', $job->majors)) ? 'checked' : ''; ?>>Lainnya<br />
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <label for="pengalaman">Pengalaman Kerja:</label>
                        <select class="form-control" id="pengalaman" name="experience">
                            <option <?= ($job->experience == 'Baru Lulus') ? 'selected' : ''; ?>>Baru Lulus</option>
                            <option <?= ($job->experience == 'Pernah Magang Pekerjaan Serupa') ? 'selected' : ''; ?>>Pernah Magang Pekerjaan Serupa</option>
                            <option <?= ($job->experience == '1 Tahun') ? 'selected' : ''; ?>>1 Tahun</option>
                            <option <?= ($job->experience == '3 Tahun') ? 'selected' : ''; ?>>3 Tahun</option>
                            <option <?= ($job->experience == '5 Tahun') ? 'selected' : ''; ?>>5 Tahun</option>
                            <option <?= ($job->experience == '10 Tahun') ? 'selected' : ''; ?>>10 Tahun</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggung_jawab">Tanggung Jawab:</label>
                        <textarea class="form-control" id="tanggung_jawab" rows="8"
                            placeholder="Tuliskan tanggung jawab pekerjaan..." name="responsibility">{{ $job->responsibility }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="pengumpulan">Berkas Pendaftaran yang Diperlukan:</label>
                        <textarea class="form-control" id="pengumpulan" rows="4"
                            placeholder="Jika ingin melamar kirim CV, Resume, dan Portofolio melalui google drive pada form lamaran kerja" name="submission">{{ $job->submission }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="lainnya">Informasi Lain:</label>
                        <textarea class="form-control" id="lainnya" rows="4"
                            placeholder="Tuliskan informasi lainnya jika diperlukan" name="other">{{ $job->other }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Batas Pendaftaran:</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="location" value="{{$job->expiration}}" required>
                    </div>
                    <div class="form-group">
                        <label for="pengalaman">Penampilan Lowongan:</label>
                        <select class="form-control" id="pengalaman" name="experience">
                            <option <?= ($job->emergence == 'Tampilkan') ? 'selected' : ''; ?>>Tampilkan</option>
                            <option <?= ($job->emergence == 'Sembunyikan') ? 'selected' : ''; ?>>Sembunyikan</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-orange btn-block mb-2 mb-md-0">Edit
                        Informasi</button>
                </form>

                <div class="card card-body border-0">
                    <?php if ($job->status == 'open') : ?>
                    <button type="submit" class="btn btn-secondary text-white btn-block mb-2 mb-md-0">Tutup Lowongan</button>
                    <?php elseif ($job->status == 'closed') : ?>
                    <button type="submit" class="btn btn-success text-white btn-block mb-2 mb-md-0">Buka Lowongan</button>
                    <button type="submit" class="btn btn-danger text-white btn-block mb-2 mb-md-0">Hapus Lowongan</button>
                    <?php endif ?>
                </div>

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
                    <div role="tabpanel" class="tab-pane fade-in active" id="pendaftar_content">
                        <div class="list-group mb-2">

                            @foreach ($applicants as $applicant)
                            @if ($applicant->requests.wishlist == '0') 
                            <li class="list-group-item user-list border-0 px-0 d-flex flex-row position-relative">
                                <!-- <img src="{{ url("img/illustration/avatars/user-1.jpg") }}" alt="Foto Profil"
                                    class="image-cover profile-picture mr-2" style="width:50px;height:50px;"> -->
                                <div class="user-information">
                                    <a class="font-size-body stretched-link text-dark" href="{{ route(requests.show, $applicant->users.id) }}">{{ $applicant->users.first_name }}</a>
                                    <p class="font-size-sub-body mb-0">{{ $applicant->users.major }}</p>
                                </div>
                            </li>
                            @endif
                            @endforeach
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="wishlist_content">
                        <div class="list-group mb-2">

                            @foreach ($applicants as $applicant)
                            @if ($applicant->requests.wishlist == '1') 
                            <li class="list-group-item user-list border-0 px-0 d-flex flex-row position-relative">
                                <!-- <img src="{{ url("img/illustration/avatars/user-1.jpg") }}" alt="Foto Profil"
                                    class="image-cover profile-picture mr-2" style="width:50px;height:50px;"> -->
                                <div class="user-information">
                                    <a class="font-size-body stretched-link text-dark" href="{{ route(requests.show, $applicant->users.id) }}">{{ $applicant->users.first_name }}</a>
                                    <p class="font-size-sub-body mb-0">{{ $applicant->users.major }}</p>
                                </div>
                            </li>
                            @endif
                            @endforeach
                            
                        </div>
                    </div>
                    <form action="">
                            <button type="submit" class="btn btn-green text-white btn-block mb-2 mb-md-0">Export
                                Excel</button>
                    </form>
                </div>
                <!-- End Wishlsit Tabs -->
            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection