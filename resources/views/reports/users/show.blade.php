@extends('layouts.main')

@section('title')
KerjaYuk | Info Pendaftar
@endsection

@section('content')
<!-- Main -->
<main>
    <section class="section-info-pendaftar">
        <div class="container">
            <!-- Store message here -->
            <div class="message" data-message=""></div>
            <!-- End Message Storage -->

            <div class="card card-body">
                <h5 class="body-default font-weight-600">Detail Pelapor:</h5>
                <ul class="list-group mb-3 ml-3">
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">Nama: </span>
                            </div>
                            <div class="w-100">
                                <p class="mb-0">{{ $whistleblower->first_name }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">Email: </span>
                            </div>
                            <div class="w-100">
                                <a href="mailto: {{ $whistleblower->email }}" style="color:black">{{ $whistleblower->email }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">Telepon: </span>
                            </div>
                            <div class="w-100">
                                <a href="https://api.whatsapp.com/send?phone={{ $whistleblower->phone }}" style="color:black">{{ $whistleblower->phone }}</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <br>
                <h5 class="body-default font-weight-600">Detail Lowongan yang Dilaporkan:</h5>
                <ul class="list-group mb-3 ml-3">
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">Pekerjaan: </span>
                            </div>
                            <div class="w-100">
                                <p class="mb-0">{{ $reported_user->first_name }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">Email: </span>
                            </div>
                            <div class="w-100">
                                <a href="mailto: {{ $reported_user->email }}" style="color:black">{{ $reported_user->email }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">Telepon:</i></span>
                            </div>
                            <div class="w-100">
                                <a href="https://api.whatsapp.com/send?phone={{ $reported_user->phone }}" style="color:black">{{ $reported_user->phone }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">Kategori: </i></span>
                            </div>
                            <div class="w-100">
                                <p class="mb-0">{{ $report->category }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">Deskripsi: </i></span>
                            </div>
                            <div class="w-100">
                                <p class="mb-0">{{ $report->description }}</p>
                            </div>
                        </div>
                    </li>
                </ul>

                <a href="/home-admin" class="btn btn-red btn-block mb-2 mb-md-0">Kembali</a>

            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection