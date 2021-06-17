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
                <h3 class="profile-username text-left">Informasi Pribadi</h3>
                <form action="" class="informasi-pribadi">
                    <div class="form-group">
                        <span><i class="fas fa-map-marker-alt mr-2 text-body" style="min-width: 20px;"></i>Alamat</span>
                        <p class="text-secondary">Perumahan Telkom Bumi Mulyaharja 1, Bogor </p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-envelope mr-2 text-body" style="min-width: 20px;"></i>Email</span>
                        <p class="text-secondary">mfachrian04@gmail.com</p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-phone mr-2 text-body" style="min-width: 20px;"></i>Nomor
                            Telepon</span>
                        <p class="text-secondary">081114531074</p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-graduation-cap mr-2 text-body"
                                style="min-width: 20px;"></i>Pendidikan</span>
                        <div class="row">
                            <div class="col-md-6 text-secondary">Bachelor's Degree in Computer Science</div>
                            <div class="col-md-6 text-secondary">Graduate since 2017</div>
                        </div>
                    </div>
                </form>

                <hr>
                <br>

                <h3 class="profile-username text-left">Ekspektasi Penghasilan </h3>
                <form action="" class="penghasilan">
                    <div class="form-group">
                        <p class="text-secondary"><i class="fas fa-file-invoice-dollar mr-2"></i>Rp
                            6.000.000 -
                            Rp
                            20.000.000</p>
                    </div>
                    <a href="profile_seeker_edit_penghasilan.html" class="btn btn-grey primary btn-block"><i
                            class="fas fa-plus-circle mr-2"></i>Perbaharui</a>
                </form>

                <hr>
                <br>

                <h3>Pengalaman Kerja</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6 pr-md-3">
                            <label for="#" class="body-small">Perusahaan</label>
                            <input type="text" class="form-control custom-text-input" id="perusahaan"
                                placeholder="Witel Bogor">
                        </div>
                        <div class="form-group col-md-6 pl-md-3">
                            <label for="#" class="body-small">Jabatan</label>
                            <input type="text" class="form-control custom-text-input" id="jabatan"
                                placeholder="UI Designer">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 pr-md-3">
                            <label for="from" class="body-small">Sejak</label>
                            <input type="date" name="from" id="from" class="form-control custom-text-input">
                        </div>
                        <div class="form-group col-md-6 pl-md-3">
                            <label for="until" class="body-small">Sampai</label>
                            <input type="date" name="until" id="until" class="form-control custom-text-input">
                        </div>
                    </div>
                    <div class="button-controls-mobile d-block d-lg-none flex-lg-row ml-lg-0 mt-3">
                        <button type="submit"
                            class="btn btn-green text-white d-block d-lg-inline-flex mb-2">Simpan</button>
                        <a href="#" class="btn btn-default btn-grey d-block d-lg-inline-flex mr-0">Batal</a>
                    </div>

                    <div class="button-controls-desktop d-none d-lg-flex ml-lg-0 mt-3">
                        <a href="#" class="btn btn-default btn-grey d-block d-lg-inline-flex mr-0 mr-md-2">Batal</a>
                        <button type="submit"
                            class="btn btn-green text-white d-block d-lg-inline-flex mb-md-0">Simpan</button>
                    </div>
                </form>

                <hr>
                <br>

                <h3>Keahlian</h3>
                <form action="" class="keahlian">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6 text-secondary">Figma</div>
                            <div class="col-6 text-secondary">Advanced</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6 text-secondary">Adobe Photoshop</div>
                            <div class="col-6 text-secondary">Intermediate</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6 text-secondary">Adobe Ilustrator</div>
                            <div class="col-6 text-secondary">Beginner</div>
                        </div>
                    </div>
                    <a href="../../pages/seeker/profile_seeker_edit_keahlian.html"
                        class="btn btn-grey primary btn-block"><i class="fas fa-plus-circle mr-2"></i>Perbaharui</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection