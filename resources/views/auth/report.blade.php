@extends('layouts.main')

@section('title')
KerjaYuk | Report
@endsection

@section('content')
<main>
    <section class="section-form-report">
        <div class="container">
            <div class="card card-body report-card p-4 mt-5">
                <h2 class="text-title">Laporkan Iklan Lowongan?</h2>
                <p class="text-inactive">Beritahu kami mengapa anda ingin melaporkan iklan lowongan tersebut</p>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Report this advertisement as</option>
                            <option>This is a fake account</option>
                            <option>They’re pretending to be another company</option>
                            <option>They’re attempting to share contact information</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Tuliskan alasan anda disini..."></textarea>
                        <div class="button-controls d-block d-md-flex flex-md-row-reverse mt-3">
                            <button type="submit"
                                class="btn btn-green text-white d-block d-lg-inline-flex mb-2 mb-md-0">Kirim</button>
                            <a href="#"
                                class="btn btn-default btn-secondary d-block d-lg-inline-flex mr-0 mr-md-2">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection

