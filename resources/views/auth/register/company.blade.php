@extends('layouts.main')

@section('title')
Company | Register
@endsection

@section('content')
<!--Main-->
<main>
    <section class="section-register-company">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <form action="/register-company" method="POST">
                    @csrf
                    <div class="card-header bg-transparent">
                        <h3 class="text-left">Merekrut lebih mudah dengan KerjaYuk</h3>
                        <p class="text-inactive">Terdapat keahlian yang beragam serta menyampaikan informasi dengan
                            pasti</p>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""><strong>Nama Pribadi</strong></label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Pribadi">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Perusahaan</strong></label>
                            <input type="text" name="company" class="form-control" placeholder="Perusahaan">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Industri</strong></label>
                            <input type="text" name="industry" class="form-control" placeholder="Industri">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Email</strong></label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Nomor Telepon</strong></label>
                            <input id="cc" type="phone" name="phone" placeholder="1234 5678 9010" />
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Deskripsi Perusahaan</strong></label>
                            <textarea name="about_company" class="form-control" id="about_perusahaan" rows="8"
                            placeholder="Tuliskan informasi perusahaan..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Kata Sandi</strong></label>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <p><label for="checkbox"><input type="checkbox" name="setcookie" value="true"
                                            id="setcookie" required/> Saya telah membaca dan menyetujui kebijakan privasi
                                        KerjaYuk</label></p>
                            </label>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button type="submit"
                            class="btn btn-red text-white primary btn-block d-lg-center-flex mb-2 mb-md-0">Buka Iklan
                            Lowongan Pekerjaan Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- Main -->
@endsection