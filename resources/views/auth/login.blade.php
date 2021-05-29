@extends('layouts.main')

@section('title')
KerjaYuk | Login
@endsection

@section('content')
<!-- Main -->
<main>
    <section class="section-login">
        <div class="container">
            <div class="col-md-4 offset-md-4 px-0">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h3 class="text-left">Masuk</h3>
                        <p class="text-inactive">Sangat mudah dan cepat. Kami tidak akan mengunggah apapun tanpa
                            izin
                            dari anda</p>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for=""><strong>Email</strong></label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Password</strong></label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                    <p><label for="checkbox"><input type="checkbox" name="setcookie" value="true"
                                                id="remember" /> Remember Me</label></p>
                                </label>
                            </div>
                            <a href="#">
                                <legend id="forgot-pass">Lupa Kata Sandi?</legend>
                            </a>
                        </div>
                        <div class="card-footer">
                            <button type="submit"
                                class="btn btn-red text-white primary btn-block d-lg-center-flex mb-2 mb-md-0">Masuk</button>
                            <p class="text-center">Pengguna baru? <a href="#">Buat akun</a>
                                sekarang!</p>
                            <p class="text-inactive">Dengan memilih "Masuk" saya telah membaca dan menyetujui
                                persyaratan penggunaan KerjaYuk.com dan kebijakan privasi</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection