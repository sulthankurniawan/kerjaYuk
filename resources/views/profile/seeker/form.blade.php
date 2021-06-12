@extends('layouts.main')

@section('title')
KerjaYuk | Profile
@endsection

@section('content')
<main>
    <section class="section-form-profile-seeker">
        <div class="avatar">
            <div class="container d-flex flex-column align-items-center">
                <div class="img-wrapper bg-white mb-2 p-3">
                    <img src="{{ url("img/illustration/avatars/user-1.jpg") }}" alt="User Profile">
                </div>
                <a href="#" class="text-white">Ubah foto profil</a>
            </div>
        </div>
        <div class="profile-information">
            <div class="container">
                <div class="card card-body">
                    <form>
                        <div class="form-group">
                            <label for="fname">Nama Depan</label>
                            <input type="text" class="form-control" id="fname" name="firstname"
                                placeholder="Nama Depan">
                        </div>
                        <div class="form-group">
                            <label for="lname">Nama Belakang</label>
                            <input class="form-control" type="text" id="lname" name="lastname"
                                placeholder="Nama Belakang">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" type="text" id="alamat" name="alamat" placeholder="Provinsi">
                            <input class="form-control" type="text" id="alamat" name="alamat" placeholder="Kota">
                            <input class="form-control" type="text" id="alamat" name="alamat"
                                placeholder="Alamat Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Email</label>
                            <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
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
                            <label for="nomor_telepon">Nomor Telepon</label>
                            <input class="form-control" type="tel" name="nomor_telepon" id="nomor_telepon" required>
                        </div>

                        <div class="button-controls-mobile d-block d-lg-none flex-lg-row ml-lg-0 mt-3">
                            <button type="submit"
                                class="btn btn-green text-white d-block d-lg-inline-flex mb-2">Kirim</button>
                            <a href="#" class="btn btn-default btn-grey d-block d-lg-inline-flex mr-0">Batal</a>
                        </div>
                        <div class="button-controls-desktop d-none d-lg-flex ml-lg-0 mt-3">
                            <a href="#" class="btn btn-default btn-grey d-block d-lg-inline-flex mr-0 mr-md-2">Batal</a>
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