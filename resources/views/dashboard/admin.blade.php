@extends('layouts.main_sidebar')

@section('title')
KerjaYuk | Home
@endsection

@section('content')
<main>
    <!-- Main -->
    <section class="section-home-admin">
        <div class="container">
            <div class="row mt-2">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <div class="card bg-light border">
                        <div class="card-header">Kelola Seeker</div>
                        <div class="card-body">
                            <p>
                                <a href="/users/seeker">
                                    <img style="max-height: 150px; max-width: 300px;"
                                        src="{{ url("img/illustration/menu/User.jpeg") }}" class="card-img" alt="..." />
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <div class="card bg-light border">
                        <div class="card-header">Kelola Company</div>
                        <div class="card-body">
                            <p>
                                <a href="/users/company">
                                    <img style="max-height: 150px; max-width: 300px;"
                                        src="{{ url("img/illustration/menu/Company.jpeg") }}" class="card-img"
                                        alt="..." />
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="card bg-light border">
                        <div class="card-header">Kelola Lowongan</div>
                        <div class="card-body">
                            <p>
                                <a href="/jobs">
                                    <img style="max-height: 150px; max-width: 300px;"
                                        src="{{ url("img/illustration/menu/Report.jpeg") }}" class="card-img"
                                        alt="..." />
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main -->

    <section class="section-manage-report">
        <div class="container">
            <h3 class="pt-3 font-weight-600">Laporan Pengguna</h3>

            <div class="card card-body">

                <div class="table-responsive">
                    <table class="table table-striped">
                        
                        <thead>
                            <tr>
                                <th>Nama Pelapor</th>
                                <th>Peran</th>
                                <th>Email Pelapor</th>
                                <th>Nomor Telepon Pelapor</th>
                                <th>Kategori</th>
                                <th>Alasan Pelapor</th>
                                <th>Tanggal Pelaporan</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->first_name }}</td>
                                <td>{{ $report->role }}</td>
                                <td><a href="mailto: {{ $report->email }}" style="color:black">{{ $report->email }}</a></td>
                                <td><a href="https://api.whatsapp.com/send?phone={{ $report->phone }}" style="color:black">{{ $report->phone }}</a></td>
                                <td>{{ $report->category }}</td>
                                <td>{{ $report->description }}</td>
                                <td>{{ $report->created_at }}</td>
                                <td>
                                    @if ($report->reported_job_id != null)
                                    <a href="/reports/jobs/{{ $report->id }}/{{ $report->whistleblower_id }}/{{ $report->reported_job_id }}" class="btn text-primary btn-flat btn-xs"><i
                                            class="	fa fa-align-justify"></i>Detail</a>
                                    @endif
                                    @if ($report->reported_user_id != null)
                                    <a href="/reports/users/{{ $report->id }}/{{ $report->whistleblower_id }}/{{ $report->reported_user_id }}" class="btn text-primary btn-flat btn-xs"><i
                                            class="	fa fa-align-justify"></i>Detail</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="/reports/destroy/{{ $report->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn text-danger btn-flat btn-xs"><i class="fa fa-trash"></i>Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <br>
</main>
@endsection