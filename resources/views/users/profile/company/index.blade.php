@extends('layouts.main')

@section('title')
KerjaYuk | Profile
@endsection

@section('content')
<section class="section-profile-company">
    <div class="information bg-white">
        <div class="container">
            <div class="box-profile p-4">
                <h3 class="profile-username text-left">Informasi Representasi dan Perusahaan</h3>
                <div class="informasi-pribadi">
                    <div class="form-group">
                        <span><i class="fas fa-user mr-2 text-body" style="min-width: 20px;"></i>Nama Representasi</span>
                        <p class="text-secondary">{{ $user->first_name }} {{ $user->last_name }}</p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-building mr-2 text-body" style="min-width: 20px;"></i>Nama Perusahaan</span>
                        <p class="text-secondary">{{ $user->company }}</p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-envelope mr-2 text-body" style="min-width: 20px;"></i>Email</span>
                        <p class="text-secondary">{{ $user->email }}</p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-phone mr-2 text-body" style="min-width: 20px;"></i>Nomor Telepon</span>
                        <p class="text-secondary">{{ $user->phone }}</p>
                    </div>
                    <div class="form-group">	
                        <span><i class="fas fa-industry mr-2 text-body" style="min-width: 20px;"></i>Industri</span>
                        <p class="text-secondary">{{ $user->industry }}</p>
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-exclamation mr-2 text-body" style="min-width: 20px;"></i>Tentang Perusahaan</span>
                        <p class="text-secondary">{{ $user->about_company }}</p>
                    </div>

                    <a href="/users/edit" class="btn btn-grey primary btn-block"><i
                            class="fas fa-plus-circle mr-2"></i>Perbaharui</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection