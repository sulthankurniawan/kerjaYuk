@extends('layouts.main')

@section('title')
KerjaYuk | Find Job
@endsection

@section('content')
<main>
    <section class="section-find-job">
        <div class="w3-panel py-4" style="background-color: #f55151;">
            <form class="container">
                <div class="row mb-3">
                    <div class="col">
                        <input type="search" class="form-control" placeholder="Nama pekerjaan atau perusahaan">
                    </div>
                    <div class="col">
                        <select class="form-control" id="sel1">
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
                    <div class="col">
                        <input type="search" class="form-control" placeholder="Spesialisasi Karir">
                    </div>
                    <button type="button" class="btn btn-outline-light" style="margin:auto">
                        Cari
                    </button>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#salary">
                            Gaji
                        </button>
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#type">
                            Jenis Pekerjaan
                        </button>
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#degree">
                            Gelar
                        </button>
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#major">
                            Prodi
                        </button>
                        <h3 class="text-white mb-0 d-inline-block">|</h3>
                        <button style="margin-left:10px;" type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#major">
                            Urutkan Berdasarkan
                        </button>
                        
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

<div class="modal fade" id="salary" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>

            <!-- <div data-role="page">
                <div data-role="main" class="ui-content">
                    <form method="post" action="/action_page_post.php">
                        <div data-role="rangeslider">
                            <label for="price-min">Min</label>
                            <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
                            <label for="price-max">Max</label>
                            <input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">
                        </div>
                        <input type="submit" data-inline="true" value="Submit">

                    </form>
                </div>
            </div> -->

            <br>
            <div class="form-group" style="margin:auto">
                <label for="min_gaji">Ekspektasi Gaji:</label>
                <div class="form-row">
                    <div class="col-6">
                        <input type="number" class="form-control" id="min_gaji" placeholder="Minimum"
                            name="min_expectation_salary">
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-control" id="end_kerja" placeholder="Maximum"
                            name="max_expectation_salary">
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

<div class="modal fade" id="type" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="form-group" style="margin:auto">
                    <form>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Penuh Waktu</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Kontrak</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Magang</label>
                        </div>
                    </form>
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
                    <form>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Penuh Waktu</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Kontrak</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Magang</label>
                        </div>
                    </form>
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
                    <form>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Penuh Waktu</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Kontrak</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Magang</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-red" data-dismiss="modal">Pilih</button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="sort" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body">
                <div class="form-group" style="margin:auto">
                    <form>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Penuh Waktu</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Kontrak</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> Magang</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-red" data-dismiss="modal">Pilih</button>
            </div>
        </div>

    </div>
</div>
@endsection