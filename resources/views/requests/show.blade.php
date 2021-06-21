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
                <h5 class="body-default font-weight-600">Informasi Pelamar:</h5>
                <ul class="list-group mb-3 ml-3">
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px"><i class="fas fa-user"></i></span>
                            </div>
                            <div class="w-100">
                                <p class="mb-0">{{ $request->first_name }} {{ $request->last_name }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="w-100">
                                <a href="mailto: {{ $request->email }}" style="color:black">{{ $request->email }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px"><i class="fas fa-phone"></i></span>
                            </div>
                            <div class="w-100">
                                <a href="https://api.whatsapp.com/send?phone={{ $request->phone }}" style="color:black">{{ $request->phone }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">
                                    <i class=" fas fa-graduation-cap"></i>
                                </span>
                            </div>
                            <div class="w-100">
                                <p class="mb-0 d-block">{{ $request->institution }}</p>
                                <p class="mb-0 d-block">{{ $request->education }} {{ $request->major }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1 w-100">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                            </div>
                            @foreach ($experiences as $experience)
                            <div class="w-100">
                                <p class="mb-0 d-block">{{ $experience->company_name }}</p>
                                <div class="row">
                                    <div class="col-auto">
                                        <p class="font-secondary">{{ $experience->start_period }} - {{ $experience->end_period }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1 w-100">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px">
                                    <i class="fas fa-shapes"></i>
                                </span>
                            </div>
                            @foreach ($expertices as $expertice)
                            <div class="w-100">
                                <p class="mb-0 d-block"> {{ $expertice->tool_name }}</p>
                                <div class="row">
                                    <div class="col-auto">
                                        <p class="font-secondary"> {{ $expertice->level }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                        <div class="d-flex w-100">
                            <div class="h-100 list-bullet-icons">
                                <span style="margin-right:5px"><i class='fab fa-google-drive'></i></span>
                            </div>
                            <div class="w-100">
                                <a href="{{ $request->link }}" style="color:black">{{ $request->link }}</a>
                            </div>
                        </div>
                    </li>
                </ul>

                <form action="/requests/respond/{{ $request->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="respond">Berikan Balasan Kepada Pelamar:</label>
                        <textarea type="text" class="form-control" id="respond" rows="4" name="respond"> </textarea>
                    </div>
                    <button type="submit" class="btn btn-red btn-block mb-2 mb-md-0">Kirim</button>
                </form>

            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection