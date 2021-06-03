@extends('layouts.auth')

@section('title')
Seeker | Login
@endsection

@section('content')
<!--Main-->
<main>
    <section class="section-register-seeker">
        <div class="container">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <form action="/register-seeker" method="POST">
                        @csrf
                        <div class="card-header bg-transparent">
                            <h3 class="text-left">Mendaftar</h3>
                            <p class="text-inactive">Daftar gratis dan dapatkan pekerjaan yang sesuai dengan mudah dan
                                cepat kemudian melamar pekerjaan yang diinginkan</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for=""><strong>Nama</strong></label>
                                <input type="text" name="name" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Email</strong></label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Kata Sandi</strong></label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Nomor Telepon</strong></label>
                                <input type="phone" name="phone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <p><label for="checkbox"><input type="checkbox" name="setcookie" value="true"
                                            id="setcookie" required/> Saya telah membaca dan menyetujui kebijakan privasi
                                        KerjaYuk</label></p>
                            <button type="submit" class="btn btn-danger primary btn-block">Daftar Sekarang</button>
                            <p class="text-center">Sudah memiliki akun? <a href="#">Masuk</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection