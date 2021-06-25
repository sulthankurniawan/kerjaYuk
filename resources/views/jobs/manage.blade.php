@extends('layouts.main_sidebar')

@section('title')
KerjaYuk | Manage Report
@endsection

@section('content')
<main>
    <section class="section-manage-report">
        <div class="container">
            <h3 class="pt-3 font-weight-600">Manage Report</h3>

            <div class="card card-body">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Pekerjaan</th>
                                <th>Nama Perusahaan</th>
                                <th>Lokasi</th>
                                <th>Tautan Lokasi</th>
                                <th>Terakhir Diperbarui</th>
                                <th>Penampilan</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                            <tr>
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->company }}</td>
                                <td>{{ $job->location }}</td>
                                <td>{{ $job->location_link }}</td>
                                <td>{{ $job->updated_at }}</td>
                                <td>{{ $job->display }}</td>
                                <td>{{ $job->status }}</td>
                                <td>
                                    <a href="/jobs/show/{{ $job->id }}" class="btn text-primary btn-flat btn-xs"><i class="fa fa-align-justify"></i> Detail</a>
                                </td>
                                <td>
                                    <form action="/jobs/suspend/{{ $job->id }}" method="POST">
                                    @csrf
                                        @if ($job->status == 'active')
                                        <button class="btn text-warning btn-flat btn-xs"><i class="fas fa-pause"></i> Suspend</button>
                                        @elseif ($job->status == 'suspended')
                                        <button class="btn text-success btn-flat btn-xs"><i class="fas fa-play"></i> Activate</button>
                                        @endif
                                    </form>
                                </td>
                                <td>
                                    <form action="/jobs/destroy/{{ $job->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn text-danger btn-flat btn-xs"><i class="fa fa-trash"></i> Hapus</button>
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
</main>
@endsection