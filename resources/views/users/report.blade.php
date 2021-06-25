@extends('layouts.main')

@section('title')
KerjaYuk | Report
@endsection

@section('content')
<main>
    <section class="section-form-report">
        <div class="container">
            <div class="card card-body report-card p-4 mt-5">
                <h2 class="text-title">Laporkan Pengguna?</h2>
                <p class="text-inactive">Beritahu kami mengapa anda ingin melaporkan pengguna tersebut</p>
                <form action="/reports/users" method="POST">
                @csrf
                    <div class="form-group">
                        <input type="text" name="reported_user_id" value="{{ $user_id }}" hidden>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <option selected>Laporkan pengguna ini karena</option>
                            <option>This is a fake account</option>
                            <option>They’re pretending to be another company</option>
                            <option>They’re attempting to share contact information</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Tuliskan alasan anda disini..." name="description"></textarea>
                        <div class="button-controls d-block d-md-flex flex-md-row-reverse mt-3">
                            <button type="submit"
                                class="btn btn-green text-white d-block d-lg-inline-flex mb-2 mb-md-0">Kirim</button>
                            <a href="/"
                                class="btn btn-default btn-secondary d-block d-lg-inline-flex mr-0 mr-md-2">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection

