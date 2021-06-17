@extends('layouts.main_sidebar')

@section('title')
KerjaYuk | Manage Report
@endsection

@section('content')
<main>
    <section class="section-manage-report">
        <div class="container">
            <h3 class="pt-3 font-weight-600">Manage Report</h3>

            {{-- <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="form-inline my-2 my-lg-0">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" placeholder="Search..."
                                aria-label="Search" />
                        </div>
                        <div class="col col-xs-6 text-right">
                            <a href="#" class="btn btn-sm btn-primary btn-create">Tambah User</a>
                        </div>
                    </div>
                </div>
            </div> --}}

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
                                <th>Nama Pelapor</th>
                                <th>Perusahaan yang dilaporkan</th>
                                <th>Alasan Pelapor</th>
                                <th>Tanggal</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>PT. Espay Debit Indonesia</td>
                                <td>This is a fake account</td>
                                <td>17/01/21</td>
                                <td>
                                    <a href="#" class="btn text-success btn-flat btn-xs" data-toggle="modal"><i
                                            class="fas fa-check"></i></a>
                                </td>
                                <td>
                                    <a href="#" class="btn text-danger btn-flat btn-xs" data-toggle="modal"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>PT. Espay Debit Indonesia</td>
                                <td>This is a fake account</td>
                                <td>17/01/21</td>
                                <td>
                                    <a href="#" class="btn text-success btn-flat btn-xs" data-toggle="modal"><i
                                            class="fas fa-check"></i></a>
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