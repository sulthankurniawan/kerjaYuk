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
                    <button type="button" class="btn btn-outline-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
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
                        <h3 class="text-white mb-0 d-inline-block">|</h3>
                        <a href="#" class="d-inline text-white filter-link px-3">Urutkan Berdasarkan</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="container results py-4">
            <p>1-10 Pekerjaan yang cocok</p>
            <h3 class="mt-4 mb-5">IT Software</h3>

            @foreach($jobs as $job)
            <div class="card w-95">
                <div class="card-body">
                    <div class="row">
                        <!-- <div class="col-sm-3">
                            <img src="{{ url("img/illustration/company/ovo.png") }}" alt="OVO Logo"
                                style="padding-left: 25px; padding-bottom: 30px;">
                        </div> -->
                        <div class="col-sm-6">
                            <h5 class="card-title">Sr UI/UX Designer</h5>
                            <p class="card-text">PT Visionet Internasional</p>
                            <p class="card-text" style="font-size: 14px; color: rgba(0, 0, 0, 0.65);">Rp 5.000.000 -
                                Rp
                                8.000.000</p>
                            <p class="card-text"><b>Jakarta Barat, Indonesia</b></p>
                        </div>
                        <div class="col-sm-3" style="padding-top: 30px; align-items: center;">
                            <p class="card-text" style="font-size: 12px; color: rgba(0, 0, 0, 0.65);">11 jam yang
                                lalu</p>
                            <p class="card-text" style="font-size: 12px; color: rgba(0, 0, 0, 0.65);">Apply sebelum
                                tanggal
                                30 April 2021</p>
                        </div>
                    </div>
                </div>
            </div>
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

            <div data-role="page">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Pilih</button>
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
                <div class="container" style="padding: 30px">
                    <form>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Penuh Waktu</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Kontrak</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Magang</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Pilih</button>
            </div>
        </div>

    </div>
</div>
@endsection