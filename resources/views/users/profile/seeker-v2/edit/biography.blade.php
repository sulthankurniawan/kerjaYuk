@extends('layouts.main_sidebar')

@section('title')
KerjaYuk | Profile
@endsection

@section('content')
<section class="section-profile-seeker">
    <div class="avatar">
        <div class="container d-flex flex-column align-items-center">
            <div class="img-wrapper bg-white mb-2 p-2">
                <img src="{{ url("img/illustration/avatars/user-1.jpg") }}">
            </div>
            <h3 class="profile-username mb-1 text-white mt-2 text-center">Muhammad Fachrian</h3>
            <a href="../../pages/seeker/form_profile_seeker.html" class="text-white text-center">Ubah
                informasi
                profil</a>
        </div>
    </div>
    <div class="information bg-white">
        <div class="container">
            <div class="box-profile p-4">
                <form action="">
                    <div class="form-row form-group">
                        <div class="form-group col-md-6 pr-md-5">
                            <label for="firstname" class="body-small">Nama Depan</label>
                            <input type="text" class="form-control custom-text-input" id="firstname"
                                placeholder="Nama Depan">
                        </div>
                        <div class="form-group col-md-6 pl-md-5">
                            <label for="lastname" class="body-small">Nama Belakang</label>
                            <input type="text" class="form-control custom-text-input" id="lastname"
                                placeholder="Nama Belakang">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="body-small">Email</label>
                        <input type="email" name="email" id="email" class="form-control custom-text-input"
                            placeholder="Email">
                    </div>
                    <div class="form-row form-group">
                        <div class="form-group col-md-4 pr-md-3">
                            <label for="alamat" class="body-small">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control custom-text-input"
                                placeholder="Alamat">
                        </div>
                        <div class="form-group col-md-4 px-md-3">
                            <label for="negara" class="body-small">Negara</label>
                            <input type="text" name="negara" id="negara" class="form-control custom-text-input"
                                placeholder="Negara">
                        </div>
                        <div class="form-group col-md-4 pl-md-3">
                            <label for="provisnsi" class="body-small">Provisnsi</label>
                            <input type="text" name="provisnsi" id="provisnsi" class="form-control custom-text-input"
                                placeholder="Provisnsi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir" class="body-small">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir"
                            class="form-control form-control custom-text-input">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin" class="body-small">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telepon" class="body-small">Nomor Telepon</label>
                        <input type="tel" name="telepon" id="telepon" class="form-control custom-text-input">
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