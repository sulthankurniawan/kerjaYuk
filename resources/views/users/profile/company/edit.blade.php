@extends('layouts.main')

@section('title')
KerjaYuk | Profile
@endsection

@section('content')
<section class="section-profile-company">
    <div class="information bg-white">
        <div class="container">
            <div class="box-profile p-4">
                <form action="/users" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nama_depan_representasi" class="body-small">Nama Depan Representasi</label>
                        <input type="text" name="first_name" id="nama_depan_representasi"
                            class="form-control custom-text-input" value="{{ $user->first_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang_representasi" class="body-small">Nama Belakang Representasi</label>
                        <input type="text" name="last_name" id="nama_belakang_representasi"
                            class="form-control custom-text-input" value="{{ $user->last_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_perusahaan" class="body-small">Nama Perusahaan</label>
                        <input type="text" name="company" id="nama_perusahaan"
                            class="form-control custom-text-input" value="{{ $user->company }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="body-small">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control custom-text-input" value="{{ $user->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="body-small">Nomor Telepon</label>
                        <input type="phone" name="phone" id="phone"
                            class="form-control custom-text-input" value="{{ $user->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="industri" class="body-small">Industri</label>
                        <input type="text" name="industry" id="industri" class="form-control custom-text-input" value="{{ $user->industry }}" required>
                    </div>
                    <div class="form-group">
                        <label for="about_company" class="body-small">Tentang Perusahaan</label>
                        <textarea type="text" name="about_company" id="about_company" class="form-control custom-text-input" rows="4">{{ $user->about_company }}</textarea>
                    </div>

                    <!-- Action Button Desktop -->
                    <div class="action-button mt-5 d-none d-md-block">
                        <a href="/users/profile" class="btn btn-grey mr-2 body-default">Batal</a>
                        <button class="btn btn-green body-default">Simpan</button>
                    </div>

                    <!-- Action Button Mobile -->
                    <div class="action-button mt-5 d-block d-md-none">
                        <button class="btn btn-green btn-block body-default">Simpan</button>
                        <a href="/users/profile" class="btn btn-grey btn-block mr-2 body-default">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection