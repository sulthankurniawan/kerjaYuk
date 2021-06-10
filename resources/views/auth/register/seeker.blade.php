@extends('layouts.main')

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
                                <label for=""><strong>Nama Depan</strong></label>
                                <input type="text" name="first_name" class="form-control" placeholder="Nama Depan" required>
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Nama Belakang</strong></label>
                                <input type="text" name="last_name" class="form-control" placeholder="Nama Belakang" required>
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Email</strong></label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="edukasi"><strong>Edukasi Terakhir</strong></label>
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
                            <div class="form-group">
                                <label for=""><strong>Sekolah / Universitas / Institusi</strong></label>
                                <input type="text" name="institution" class="form-control" placeholder="Telkom University" required>
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Prodi</strong></label>
                                <select name="major" id="major" class="form-control" required>
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
                            <div class="form-group">
                                <label for=""><strong>Kata Sandi</strong></label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Nomor Telepon (gunakan kode negara [+62])</strong></label>
                                <input type="phone" name="phone" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <p><label for="checkbox"><input type="checkbox" name="setcookie" value="true" id="setcookie" required/> Saya telah membaca dan menyetujui kebijakan privasi KerjaYuk</label></p>
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