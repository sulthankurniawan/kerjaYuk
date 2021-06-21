@extends('layouts.main')

@section('title')
KerjaYuk | Profile
@endsection

@section('content')
<main>
    <section class="section-form-profile-seeker">
        <!-- <div class="avatar">
            <div class="container d-flex flex-column align-items-center">
                <div class="img-wrapper bg-white mb-2 p-3">
                    <img src="{{ url("img/illustration/avatars/user-1.jpg") }}" alt="User Profile">
                </div>
                <a href="#" class="text-white">Ubah foto profil</a>
            </div>
        </div> -->
        <div class="profile-information">
            <div class="container">
                <div class="card card-body">
                    <form action="/users" method="POST">
                    @csrf
                        <div class="form-group">
                                <label for=""><strong>Nama Depan</strong></label>
                                <input type="text" name="first_name" class="form-control" placeholder="Nama Depan" value="{{ $user->first_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Nama Belakang</strong></label>
                                <input type="text" name="last_name" class="form-control" placeholder="Nama Belakang" value="{{ $user->last_name }}" required>
                            </div>
                        <div class="form-group">
                            <label for=""><strong>Email</strong></label>
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Nomor Telepon (gunakan kode negara [+62])</strong></label>
                            <input type="phone" name="phone" class="form-control" placeholder="Phone" value="{{ $user->phone }}" required>
                        </div>
                        <div class="form-group">
                            <label for="edukasi"><strong>Edukasi Terakhir</strong></label>
                            <select class="form-control" id="edukasi" name="education">
                            <option <?= ($user->education == 'SD') ? 'selected' : ''; ?>>SD</option>
                            <option <?= ($user->education == 'SMP') ? 'selected' : ''; ?>>SMP</option>
                            <option <?= ($user->education == 'SMA') ? 'selected' : ''; ?>>SMA</option>
                            <option <?= ($user->education == 'D1') ? 'selected' : ''; ?>>D1</option>
                            <option <?= ($user->education == 'D2') ? 'selected' : ''; ?>>D2</option>
                            <option <?= ($user->education == 'D3') ? 'selected' : ''; ?>>D3</option>
                            <option <?= ($user->education == 'D4') ? 'selected' : ''; ?>>D4</option>
                            <option <?= ($user->education == 'S1') ? 'selected' : ''; ?>>S1</option>
                            <option <?= ($user->education == 'S2') ? 'selected' : ''; ?>>S2</option>
                            <option <?= ($user->education == 'S3') ? 'selected' : ''; ?>>S3</option>
                            <option <?= ($user->education == 'Tidak Ada') ? 'selected' : ''; ?>>Tidak Ada</option>
                            <option <?= ($user->education == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Sekolah / Universitas / Institusi</strong></label>
                            <input type="text" name="institution" class="form-control" placeholder="Universitas" value="{{ $user->institution }}" required>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Prodi</strong></label>
                            <select name="major" id="major" class="form-control" required>
                                <option value="Teknik Telekomunikasi" <?= ($user->major == 'Teknik Telekomunikasi') ? 'selected' : ''; ?>>Teknik Telekomunikasi</option>
                                <option value="Teknik Elektro" <?= ($user->major == 'Teknik Elektro') ? 'selected' : ''; ?>>Teknik Elektro</option>
                                <option value="Teknik Fisika" <?= ($user->major == 'Teknik Fisika') ? 'selected' : ''; ?>>Teknik Fisika</option>
                                <option value="Teknik Komputer" <?= ($user->major == 'Teknik Komputer') ? 'selected' : ''; ?>>Teknik Komputer</option>
                                <option value="Teknik Biomedis" <?= ($user->major == 'Teknik Biomedis') ? 'selected' : ''; ?>>Teknik Biomedis</option>

                                <option value="Informatika" <?= ($user->major == 'Informatika') ? 'selected' : ''; ?>>Informatika</option>
                                <option value="Teknologi Informasi" <?= ($user->major == 'Teknologi Informasi') ? 'selected' : ''; ?>>Teknologi Informasi</option>
                                <option value="Rekayasa Perangkat Lunak" <?= ($user->major == 'Rekayasa Perangkat Lunak') ? 'selected' : ''; ?>>Rekayasa Perangkat Lunak</option>
                                <option value="Data Sains" <?= ($user->major == 'Data Sains') ? 'selected' : ''; ?>>Data Sains</option>

                                <option value="Teknik Industri" <?= ($user->major == 'Teknik Industri') ? 'selected' : ''; ?>>Teknik Industri</option>
                                <option value="Sistem Informasi" <?= ($user->major == 'Sistem Informasi') ? 'selected' : ''; ?>>Sistem Informasi</option>
                                <option value="Teknik Logistik" <?= ($user->major == 'Teknik Logistik') ? 'selected' : ''; ?>>Teknik Logistik</option>
                                <option value="ICT Business" <?= ($user->major == 'ICT Business') ? 'selected' : ''; ?>>ICT Business</option>
                                <option value="Manajemen Bisnis Telekomunikasi & Informatika" <?= ($user->major == 'Manajemen Bisnis Telekomunikasi & Informatika') ? 'selected' : ''; ?>>Manajemen Bisnis Telekomunikasi & Informatika</option>
                                <option value="Akuntansi" <?= ($user->major == 'Akuntansi') ? 'selected' : ''; ?>>Akuntansi</option>
                                <option value="Manajemen" <?= ($user->major == 'Manajemen') ? 'selected' : ''; ?>>Manajemen</option>

                                <option value="Administrasi Bisnis" <?= ($user->major == 'Administrasi Bisnis') ? 'selected' : ''; ?>>Administrasi Bisnis</option>
                                <option value="Ilmu Komunikasi" <?= ($user->major == 'Ilmu Komunikasi') ? 'selected' : ''; ?>>Ilmu Komunikasi</option>
                                <option value="Digital Public Relation" <?= ($user->major == 'Digital Public Relation') ? 'selected' : ''; ?>>Digital Public Relation</option>

                                <option value="Desain Komunikasi Visual" <?= ($user->major == 'Desain Komunikasi Visual') ? 'selected' : ''; ?>>Desain Komunikasi Visual</option>
                                <option value="Product Innovation & Management" <?= ($user->major == 'Product Innovation & Management') ? 'selected' : ''; ?>>Product Innovation & Management</option>
                                <option value="Desain Interior" <?= ($user->major == 'Desain Interior') ? 'selected' : ''; ?>>Desain Interior</option>
                                <option value="Kriya (Fashion and Textile Design)" <?= ($user->major == 'Kriya (Fashion and Textile Design)') ? 'selected' : ''; ?>>Kriya (Fashion and Textile Design)</option>
                                <option value="Visual Arts (Seni Rupa)" <?= ($user->major == 'Visual Arts (Seni Rupa)') ? 'selected' : ''; ?>>Visual Arts (Seni Rupa)</option>

                                <option value="Manajemen Informatika" <?= ($user->major == 'Manajemen Informatika') ? 'selected' : ''; ?>>Manajemen Informatika</option>
                                <option value="Komputerisasi Akuntansi" <?= ($user->major == 'Komputerisasi Akuntansi') ? 'selected' : ''; ?>>Komputerisasi Akuntansi</option>
                                <option value="Manajemen Pemasaran" <?= ($user->major == 'Manajemen Pemasaran') ? 'selected' : ''; ?>>Manajemen Pemasaran</option>
                                <option value="Perhotelan" <?= ($user->major == 'Perhotelan') ? 'selected' : ''; ?>>Perhotelan</option>
                                <option value="Teknologi Rekayasa Multimedia" <?= ($user->major == 'Teknologi Rekayasa Multimedia') ? 'selected' : ''; ?>>Teknologi Rekayasa Multimedia</option>

                                <option value="Tidak Ada" <?= ($user->major == 'Tidak Ada') ? 'selected' : ''; ?>>Tidak Ada</option>
                                <option value="Lainnya" <?= ($user->major == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="min_gaji"><strong>Ekspektasi Gaji:</strong></label>
                            <div class="form-row">
                                <div class="col-6">
                                    <input type="number" class="form-control" id="min_gaji" placeholder="Minimum"
                                        name="min_expectation_salary" value="{{ $user->min_expectation_salary }}">
                                </div>
                                <div class="col-6">
                                    <input type="number" class="form-control" id="end_kerja" placeholder="Maximum"
                                        name="max_expectation_salary" value="{{ $user->max_expectation_salary }}">
                                </div>
                            </div>
                        </div>

                        <div class="button-controls-mobile d-block d-lg-none flex-lg-row ml-lg-0 mt-3">
                            <button type="submit"
                                class="btn btn-green text-white d-block d-lg-inline-flex mb-2">Simpan</button>
                            <a href="/users/profile" class="btn btn-default btn-grey d-block d-lg-inline-flex mr-0">Batal</a>
                        </div>
                        <div class="button-controls-desktop d-none d-lg-flex ml-lg-0 mt-3">
                            <a href="/users/profile" class="btn btn-default btn-grey d-block d-lg-inline-flex mr-0 mr-md-2">Batal</a>
                            <button type="submit"
                                class="btn btn-green text-white d-block d-lg-inline-flex mb-md-0">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection