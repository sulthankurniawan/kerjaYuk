@extends('layouts.main_sidebar')

@section('title')
KerjaYuk | Manage User
@endsection

@section('content')
<main>
    <section class="section-manage-user">
        <div class="container">
            <h3 class="pt-3 font-weight-600">Manage User</h3>

            <div class="card card-body">
                <div class="row mb-4">
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
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>No Telepon</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama1</td>
                                <td>Nama2</td>
                                <td>Nama@gmail.com</td>
                                <td>Perumahan telkom mulyaharja</td>
                                <td>1/1/1999</td>
                                <td>Perempuan</td>
                                <td>+6281234567890</td>
                                <td>
                                    <a href="#" class="btn btn-flat btn-xs" data-toggle="modal"><i
                                            class="fa fa-pencil"></i></a>
                                </td>
                                <td>
                                    <a href="#" class="btn text-danger btn-flat btn-xs" data-toggle="modal"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection