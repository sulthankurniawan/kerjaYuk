@extends('layouts.main')

@section('title')
KerjaYuk | Profile
@endsection

@section('content')
<main>
    <section class="section-profile-seeker">
        <div class="avatar">
            <div class="container d-flex flex-column align-items-center">
                <div class="img-wrapper bg-white mb-2 p-3">
                    <img src="{{ url("img/illustration/avatars/user-1.jpg") }}" alt="User Profile">
                </div>
                <h3 class="profile-username mb-1 text-white mt-2 text-center">Muhammad Fachrian</h3>
                <a href="../../pages/seeker/form_profile_seeker.html" class="text-white text-center">Ubah informasi
                    profil</a>
            </div>
        </div>
        <div class="information bg-white">
            <div class="container">
                <div class="box-profile p-4">
                    <h3 class="profile-username text-left">Informasi Pribadi</h3>
                    <form action="" class="informasi-pribadi">
                        <div class="form-group">
                            <span><i class="fas fa-map-marker-alt mr-2 text-body"
                                    style="min-width: 20px;"></i>Alamat</span>
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
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="#">Mata Uang</label>
                                <input type="text" class="form-control" id="currency" placeholder="e.g. IDR - Rp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="#">Per tahun</label>
                                <input type="text" class="form-control" id="per year" placeholder="e.g. Per - Year">
                            </div>
                        </div>
                    </form>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="#">Minimal Penghasilan</label>
                                <input type="text" class="form-control" id="minimum" placeholder="e.g. Rp4.000.000">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="#">Maximum</label>
                                <input type="text" class="form-control" id="maximum" placeholder="e.g. Rp15.000.000">
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

                    <h3>Pengalaman Kerja</h3>
                    <form action="" class="pengalaman">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 text-secondary"><i class="fas fa-user-tie mr-2"></i>Witel Bogor
                                    UI/UX
                                </div>
                                <div class="col-md-6 text-secondary">2018-2019</div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-grey primary btn-block"><i
                                class="fas fa-plus-circle mr-2"></i>Perbaharui</button>
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
                        <button type="button" class="btn btn-grey primary btn-block"><i
                                class="fas fa-plus-circle mr-2"></i>Perbaharui</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection