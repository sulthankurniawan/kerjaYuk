@extends('layouts.main')

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
                        <div class="card-header">Manage User</div>
                        <div class="card-body">
                            <p>
                                <a href="#">
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
                        <div class="card-header">Manage Company</div>
                        <div class="card-body">
                            <p>
                                <a href="#">
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
                        <div class="card-header">Manage Report</div>
                        <div class="card-body">
                            <p>
                                <a href="#">
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
</main>
@endsection