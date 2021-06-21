@extends('layouts.main')

@section('title')
KerjaYuk | Profile
@endsection

@section('content')
<main>
    <section class="section-profile-seeker">
    
        <div class="information bg-white">
            <div class="container">
                <div class="box-profile p-4">
                    <h3 class="profile-username text-left">Informasi Pribadi</h3>
                    <form action="" class="informasi-pribadi">
                        <div class="form-group">
                            <span><i class="fas fa-user mr-2 text-body" style="min-width: 20px;"></i>Nama</span>
                            <p class="text-secondary">{{ $user->first_name }} {{ $user->last_name }}</p>
                        </div>
                        <div class="form-group">
                            <span><i class="fas fa-envelope mr-2 text-body" style="min-width: 20px;"></i>Email</span>
                            <p class="text-secondary">{{ $user->email }}</p>
                        </div>
                        <div class="form-group">
                            <span><i class="fas fa-phone mr-2 text-body" style="min-width: 20px;"></i>Nomor
                                Telepon</span>
                            <p class="text-secondary">{{ $user->phone }}</p>
                        </div>
                        <div class="form-group">
                            <span><i class="fas fa-graduation-cap mr-2 text-body"
                                    style="min-width: 20px;"></i>Pendidikan</span>
                            <div class="row">
                                <div class="col-md-6 text-secondary">{{ $user->education }} {{ $user->major }} </div>
                                <div class="col-md-6 text-secondary">{{ $user->institution }}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span><i class="fa fa-money mr-2 text-body"
                                    style="min-width: 20px;"></i>Ekspektasi Gaji</span>
                            <div class="row">
                                <div class="col-md-6 text-secondary">{{ $user->min_expectation_salary }} - {{ $user->max_expectation_salary }} </div>
                            </div>
                        </div>
                        <a href="/users/edit" class="btn btn-grey primary btn-block"><i
                                class="fas fa-plus-circle mr-2"></i>Perbaharui</a>
                    </form>

                    <hr>
                    <br>

                    <h3>Pengalaman Kerja</h3>
                    @foreach ($experiences as $experience)
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 text-secondary"><i class="fas fa-user-tie mr-2"></i>{{ $experience->company_name }} - {{ $experience->job_name }} </div>
                            <div class="col-md-6 text-secondary">{{ $experience->start_period }} sampai {{ $experience->end_period }}</div>
                        </div>
                        <div class="row">
                            <form action="/experiences/{{ $experience->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn-sm btn-grey" style="margin-left:900px">Hapus</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    <form action="/experiences" method="POST">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="#">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="perusahaan" name="company_name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="#">Nama Pekerjaan</label>
                                <input type="text" class="form-control" id="jabatan" name="job_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="#">Sejak</label>
                                <input type="date" class="form-control" id="sejak" name="start_period">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="#">Sampai</label>
                                <input type="date" class="form-control" id="sampai" name="end_period">
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

                    <hr>
                    <br>

                    <h3>Keahlian</h3>
                    <div class="keahlian">
                        @foreach ($expertices as $expertice)
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6 text-secondary">{{ $expertice->tool_name }}</div>
                                <div class="col-6 text-secondary">{{ $expertice->level }}</div>
                            </div>
                            <div class="row">
                                <form action="/expertices/{{ $expertice->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-sm btn-grey" style="margin-left:900px">Hapus</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                        <a type="button" class="btn btn-grey primary btn-block" href="/expertices"><i
                                class="fas fa-plus-circle mr-2"></i>Perbaharui</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection