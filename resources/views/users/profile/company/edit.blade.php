@extends('layouts.main_sidebar')

@section('title')
KerjaYuk | Profile
@endsection

@section('content')
<section class="section-profile-company">
    <div class="avatar">
        <div class="container d-flex flex-column align-items-center">
            <div class="img-wrapper bg-white mb-2 p-2">
                <img src="{{ url("img/illustration/company/telkom.png") }}">
            </div>
            <h3 class="profile-username mb-1 text-white mt-2 text-center">Telkom Indonesia</h3>
            <a href="../../pages/seeker/form_profile_seeker.html" class="text-white text-center">Ubah
                informasi
                profil</a>
        </div>
    </div>
    <div class="information bg-white">
        <div class="container">
            <div class="box-profile p-4">
                <form action="">
                    <div class="form-group">
                        <label for="nama_perusahaan" class="body-small">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" id="nama_perusahaan"
                            class="form-control custom-text-input" placeholder="Nama Perusahaan">
                    </div>
                    <div class="form-group">
                        <label for="industri" class="body-small">Industri</label>
                        <input type="text" name="industri" id="industri" class="form-control custom-text-input"
                            placeholder="Industri">
                    </div>
                    <div class="form-group">
                        <label for="email_perusahaan" class="body-small">Email</label>
                        <input type="email" name="email_perusahaan" id="email_perusahaan"
                            class="form-control custom-text-input" placeholder="Email">
                    </div>
                    <div class="form-group form-row">
                        <div class="form-group col-md-6">
                            <label for="alamat" class="body-small">Alamat Lengkap</label>
                            <input type="text" name="alamat" id="alamat" class="form-control custom-text-input"
                                placeholder="Alamat">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="negara" class="body-small">Negara</label>
                            <input type="text" name="negara" id="negara" class="form-control custom-text-input"
                                placeholder="Negara">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="provinsi" class="body-small">Provinsi</label>
                            <input type="text" name="provinsi" id="provinsi" class="form-control custom-text-input"
                                placeholder="Provinsi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon" class="body-small">Nomor Telepon</label>
                        <input type="tel" name="nomor_telepon" id="nomor_telepon" class="form-control custom-text-input"
                            placeholder="Nomor Telepon">
                    </div>

                    <!-- Action Button Desktop -->
                    <div class="action-button mt-5 d-none d-md-block">
                        <a href="#" class="btn btn-grey mr-2 body-default">Batal</a>
                        <a class="btn btn-green body-default">Simpan</a>
                    </div>

                    <!-- Action Button Mobile -->
                    <div class="action-button mt-5 d-block d-md-none">
                        <a class="btn btn-green btn-block body-default">Simpan</a>
                        <a href="#" class="btn btn-grey btn-block mr-2 body-default">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection