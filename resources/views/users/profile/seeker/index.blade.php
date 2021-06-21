@extends('layouts.main')

@section('title')
KerjaYuk | Profile
@endsection

@section('content')
<section class="section-profile-seeker">

    <div class="information bg-white">
        <div class="container">
            <div class="box-profile p-4">
                <h3 class="profile-username text-left">Informasi Pribadi</h3>
                <div class="informasi-pribadi">
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
                            <div class="col-md-6 text-secondary">{{ $user->education }} {{ $user->major }} - {{ $user->institution }}</div>
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
                </div>

                <hr>
                <br>

                <h3>Pengalaman Kerja</h3>
                <div class="pengalaman">
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
                    <a href="/experiences"
                        class="btn btn-grey primary btn-block"><i class="fas fa-plus-circle mr-2"></i>Perbaharui</a>
                </div>

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
                    <a href="/expertices"
                        class="btn btn-grey primary btn-block"><i class="fas fa-plus-circle mr-2"></i>Perbaharui</a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection