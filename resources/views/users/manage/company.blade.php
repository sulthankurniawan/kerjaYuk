@extends('layouts.main_sidebar')

@section('title')
KerjaYuk | Kelola Company
@endsection

@section('content')
<main>
    <section class="section-manage-user">
        <div class="container">
            <h3 class="pt-3 font-weight-600">Kelola Company</h3>

            <div class="card card-body">
                <!-- <div class="row mb-4">
                    <div class="col-3">
                        <form action="" class="d-flex align-items-center h-100">
                            <div class="form-group mb-0">
                                <input type="search" name="search" id="search" placeholder="Search..."
                                    class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="col-9 text-right">
                        <a href="#" class="btn btn-sm btn-primary btn-create">Tambah User</a>
                    </div>
                </div> -->

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                                <th>Nama Perusahaan</th>
                                <th>Email</th>
                                <th>No Telepon</th>
                                <th>Industri</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->company}}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->industry }}</td>
                                <td>{{ $user->status }}</td>
                                <td>
                                    <form action="/users/suspend/{{ $user->id }}" method="POST">
                                    @csrf
                                        @if ($user->status == 'active')
                                        <button class="btn text-warning btn-flat btn-xs"><i class="fas fa-pause"></i> Suspend</button>
                                        @elseif ($user->status == 'suspended')
                                        <button class="btn text-success btn-flat btn-xs"><i class="fas fa-play"></i> Activate</button>
                                        @endif
                                    </form>
                                </td>
                                <td>
                                    <form action="/users/{{ $user->id }}" method="POST">
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