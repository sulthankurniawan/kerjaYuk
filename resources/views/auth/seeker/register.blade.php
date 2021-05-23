@extends('layouts.main')

@section('title')
Seeker | Login
@endsection

@section('content')
<!--Main-->
<main>
    <section>
        <div class="container">
            <div class="col-md-4 offset-md-4 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-left">Mendaftar</h3>
                        <p class="text-inactive">Daftar gratis dan dapatkan pekerjaan yang sesuai dengan mudah dan
                            cepat kemudian melamar pekerjaan yang diinginkan</p>
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
                            <label for=""><strong>Email</strong></label>
                            <input type="password" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Kata Sandi</strong></label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-red text-white primary btn-block">Daftar Sekarang</button>
                        <p class="text-center">Sudah memiliki akun? <a href="#">Masuk</a></p>
                        <p class="text-inactive">Dengan memilih "Daftar sekarang" saya telah membaca dan menyetujui
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