@extends('layouts.main')

@section('title')
KerjaYuk | Find Job
@endsection

@section('content')
<main>
    <section class="section-find-job">
        <div class="w3-panel py-4" style="background-color: #f55151;">
            <form class="container" action="/jobs/search" method="POST">
            @csrf
                <div class="row mb-3">
                    <!-- <div class="col">
                        <input type="search" class="form-control" placeholder="Nama pekerjaan atau perusahaan">
                    </div> -->
                    
                    <!-- <div class="col">
                        <input type="search" class="form-control" placeholder="Spesialisasi Karir">
                    </div> -->
                    
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#area">
                            Area
                        </button>
                        <!-- <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#salary">
                            Gaji
                        </button> -->
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#type">
                            Jenis Pekerjaan
                        </button>
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#degree">
                            Gelar
                        </button>
                        <!-- <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#major">
                            Prodi
                        </button> -->
                        <h3 class="text-white mb-0 d-inline-block" style="margin-left:auto">|</h3>
                        <!-- <button style="margin-left:10px;" type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#major">
                            Urutkan Berdasarkan
                        </button> -->
                        <button type="submit" class="btn btn-outline-light" style="margin-left:10px">
                        Cari
                        </button>
                        
                    </div>

                    <div class="modal fade" id="area" role="dialog">
                        <div class="modal-dialog">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!-- <h4 class="modal-title">Modal Header</h4> -->
                                </div>
                                <div class="modal-body">
                                    <div class="form-group" style="margin:auto">
                                        <div class="col">
                                            <select class="form-control" id="area" name="area">
                                                <option>Kota Jakarta Barat</option>
                                                <option>Kota Jakarta Pusat</option>
                                                <option>Kota Jakarta Selatan</option>
                                                <option>Kota Jakarta Timur</option>
                                                <option>Kota Jakarta Utara</option>
                                                <option>Kota Bandung</option>
                                                <option>Kota Banjar</option>
                                                <option>Kota Bekasi</option>
                                                <option>Kota Bogor</option>
                                                <option>Kota Cimahi</option>
                                                <option>Kota Cirebon</option>
                                                <option>Kota Depok</option>
                                                <option>Kota Sukabumi</option>
                                                <option>Kota Tasikmalaya</option>
                                                <option>Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn-red" data-dismiss="modal">Pilih</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal fade" id="type" role="dialog">
                        <div class="modal-dialog">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!-- <h4 class="modal-title">Modal Header</h4> -->
                                </div>
                                <div class="modal-body">
                                    <div class="form-group" style="margin:auto">
                                        <select class="form-control" id="type" name="type">
                                            <option>Penuh Waktu</option>
                                            <option>Paruh Waktu</option>
                                            <option>Magang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn-red" data-dismiss="modal">Pilih</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal fade" id="degree" role="dialog">
                        <div class="modal-dialog">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!-- <h4 class="modal-title">Modal Header</h4> -->
                                </div>
                                <div class="modal-body">
                                    <div class="form-group" style="margin:auto">
                                        <select class="form-control" id="edukasi" name="education">
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
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn-red" data-dismiss="modal">Pilih</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal fade" id="major" role="dialog">
                        <div class="modal-dialog">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!-- <h4 class="modal-title">Modal Header</h4> -->
                                </div>
                                <div class="modal-body">
                                    <div class="form-group" style="margin:auto">
                                        <select name="major" id="major" class="form-control">
                                            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                                            <option value="Teknik Elektro">Teknik Elektro</option>
                                            <option value="Teknik Fisika">Teknik Fisika</option>
                                            <option value="Teknik Komputer">Teknik Komputer</option>
                                            <option value="Teknik Biomedis">Teknik Biomedis</option>

                                            <option value="Informatika">Informatika</option>
                                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                            <option value="Data Sains">Data Sains</option>

                                            <option value="Teknik Industri">Teknik Industri</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                            <option value="Teknik Logistik">Teknik Logistik</option>
                                            <option value="ICT Business">ICT Business</option>
                                            <option value="Manajemen Bisnis Telekomunikasi & Informatika">Manajemen Bisnis Telekomunikasi & Informatika</option>
                                            <option value="Akuntansi">Akuntansi</option>
                                            <option value="Manajemen">Manajemen</option>

                                            <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                            <option value="Digital Public Relation">Digital Public Relation</option>

                                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                            <option value="Product Innovation & Management">Product Innovation & Management</option>
                                            <option value="Desain Interior">Desain Interior</option>
                                            <option value="Kriya (Fashion and Textile Design)">Kriya (Fashion and Textile Design)</option>
                                            <option value="Visual Arts (Seni Rupa)">Visual Arts (Seni Rupa)</option>

                                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                                            <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                                            <option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
                                            <option value="Perhotelan">Perhotelan</option>
                                            <option value="Teknologi Rekayasa Multimedia">Teknologi Rekayasa Multimedia</option>

                                            <option value="Tidak Ada">Tidak Ada</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn-red" data-dismiss="modal">Pilih</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="modal fade" id="salary" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <!-- <h4 class="modal-title">Modal Header</h4> -->
                            </div>
                            <br>
                            <div class="form-group" style="margin:auto">
                                <label for="min_gaji">Ekspektasi Gaji:</label>
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
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn-red" data-dismiss="modal">Pilih</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="container results py-4">
            <p>Terdapat {{ count($jobs) }} pekerjaan tersedia</p>
            <h3 class="mt-4 mb-5">{{ $career }}</h3>

            @foreach($jobs as $job)
            <div class="card w-95">
                <div class="card-body">
                    <div class="row">
                        <!-- <div class="col-sm-3">
                            <img src="{{ url("img/illustration/company/ovo.png") }}" alt="OVO Logo"
                                style="padding-left: 25px; padding-bottom: 30px;">
                        </div> -->
                        <div class="col-sm-6">
                            <h5 class="card-title">{{ $job->name }}</h5>
                            <p class="card-text">{{ $job->company }}</p>
                            <p class="card-text" style="font-size: 14px; color: rgba(0, 0, 0, 0.65);">Rp {{ $job->min_salary }} -
                                Rp
                                {{ $job->max_salary }}</p>
                            <p class="card-text"><b>{{ $job->area }}, Indonesia</b></p>
                        </div>
                        <div class="col-sm-3" style="padding-top: 30px; align-items: center;">
                            <p class="card-text" style="font-size: 12px; color: rgba(0, 0, 0, 0.65);">Diperbarui pada {{ $job->updated_at }}</p>
                            <p class="card-text" style="font-size: 12px; color: rgba(0, 0, 0, 0.65);">Daftar sebelum tanggal {{ $job->expiration }}</p>
                            <a class="card-text text-dark" style="font-size: 12px;" href="/jobs/show/{{ $job->id }}">Lihat Selengkapnya <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            @endforeach

        </div>
    </section>
</main>




@endsection