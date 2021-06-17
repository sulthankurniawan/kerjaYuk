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
                <h3 class="profile-username text-left">Informasi Pribadi</h3>
                <form action="" class="informasi-pribadi">
                    <div class="form-group">
                        <span><i class="fas fa-user mr-2 text-body" style="min-width: 20px;"></i>Nama
                            Perusahaan</span>
                        <p class="text-secondary">Telkom Indonesia</p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-building mr-2 text-body" style="min-width: 20px;"></i>Industri</span>
                        <p class="text-secondary">Telekomunikasi</p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-envelope mr-2 text-body" style="min-width: 20px;"></i>Email</span>
                        <p class="text-secondary">hrdtelkomindonesia@gmail.com</p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-phone mr-2 text-body" style="min-width: 20px;"></i>Nomor Telepon</span>
                        <p class="text-secondary">021 - 123456</p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-map-marker-alt mr-2 text-body" style="min-width: 20px;"></i>Alamat</span>
                        <p class="text-secondary">Indah Ksc, Perum Poris Indah Blok G25 No.3, RT.007/RW.001, Poris
                            Plawad Utara, Kec. Cipondoh, Kota Tangerang, Banten 15141</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection