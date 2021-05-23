@extends('layouts.main')

@section('title')
Company | Register
@endsection

@section('content')
<!--Main-->
<main>
    <section>
        <div class="container">
            <div class="col-md-4 offset-md-4 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-left">Merekrut lebih mudah dengan KerjaYuk</h3>
                        <p class="text-inactive">Terdapat keahlian yang beragam serta menyampaikan informasi dengan
                            pasti</p>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""><strong>Nama Depam</strong></label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Nama Belakang</strong></label>
                            <input type="text" name="last_name" class="form-control" placeholder="Nama Belakang">
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
                            <label for=""><strong>Posisi dalam suatu Perusahaan</strong></label>
                            <input type="text" name="position_company" class="form-control"
                                placeholder="Posisi pada Perusahaan">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Ukuran Perusahaan</strong></label>
                            <input type="text" name="company_size" class="form-control" placeholder="Ukuran Perusaahn">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Email</strong></label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Nomor Telepon</strong></label>
                            <input id="cc" type="text" placeholder="1234 5678 9010" />
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Bagaimana mendengar KerjaYuk?</strong></label>
                            <input type="text" name="about_us" class="form-control" placeholder="About Us">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <p><label for="checkbox"><input type="checkbox" name="setcookie" value="true"
                                            id="setcookie" /> Saya telah membaca dan menyetujui kebijakan privasi
                                        KerjaYuk</label></p>
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit"
                            class="btn btn-red text-white primary btn-block d-lg-center-flex mb-2 mb-md-0">Buka
                            Iklan Lowongan Pekerjaan Sekarang</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main -->
@endsection