@extends('layouts.main')

@section('title')
KerjaYuk | Request Job
@endsection

@section('content')
<main>
    <section class="section-job-detail-seeker-v2 section-job-request">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="wrapper d-flex flex-column justify-content-center align-items-center">
                            <!-- <div class="logo-wrapper">
                                <img src="{{ url("img/illustration/company/telkom.png") }}" alt="Telkom Logo"
                                    class="w-100">
                            </div> -->
                            <h4 class="font-weight-600">{{ $job->name }}</h4>
                            <p class="mb-3 mb-md-2">{{ $job->company }}</p>
                            <div class="row w-100">
                                <div class="col-4 d-flex justify-content-center text-center">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-briefcase mr-0 mr-md-2 mb-2 mb-md-0"></i>{{ $job->type }}</span>
                                </div>
                                <div class="col-4 d-flex justify-content-center text-center border-left">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-map-marker-alt mr-0 mr-md-2 mb-2 mb-md-0"></i>{{ $job->area }}</span>
                                </div>
                                <div class="col-4 d-flex justify-content-center text-center border-left">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-user-friends mr-0 mr-md-2 mb-2 mb-md-0"></i>{{ $total_applicants }} yang telah daftar</span>
                                </div>
                            </div>
                        </div>

                        <div class="content">
                            <h5 class="body-default font-weight-600">Informasi Pribadi:</h5>
                            <ul class="list-group mb-3 ml-3">
                                <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                                    <div class="d-flex w-100">
                                        <div class="h-100 list-bullet-icons">
                                            <span><i class="fas fa-user"></i></span>
                                        </div>
                                        <div class="w-100">
                                            <p class="mb-0">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                                    <div class="d-flex w-100">
                                        <div class="h-100 list-bullet-icons">
                                            <span><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <div class="w-100">
                                            <p class="mb-0">{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                                    <div class="d-flex w-100">
                                        <div class="h-100 list-bullet-icons">
                                            <span><i class="fas fa-phone"></i></span>
                                        </div>
                                        <div class="w-100">
                                            <p class="mb-0">{{ Auth::user()->phone }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                                    <div class="d-flex w-100">
                                        <div class="h-100 list-bullet-icons">
                                            <span>
                                                <i class=" fas fa-graduation-cap"></i>
                                            </span>
                                        </div>
                                        <div class="w-100">
                                            <p class="mb-0 d-block">{{ Auth::user()->institution }}</p>
                                            <p class="mb-0 d-block">{{ Auth::user()->education }} {{ Auth::user()->major }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1 w-100">
                                    <div class="d-flex w-100">
                                        <div class="h-100 list-bullet-icons">
                                            <span>
                                                <i class="fas fa-briefcase"></i>
                                            </span>
                                        </div>
                                        @foreach ($experiences as $experience)
                                        <div class="w-100">
                                            <p class="mb-0 d-block">$experience->company_name</p>
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
                                            <span>
                                                <i class="fas fa-shapes"></i>
                                            </span>
                                        </div>
                                        @foreach ($expertices as $expertice)
                                        <div class="w-100">
                                            <p class="mb-0 d-block">{{ $expertice->tool_name }}</p>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <p class="font-secondary">{{ $expertice->level }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>

                            <form action="/requests" method="POST">
                            @csrf

                                <hr class="hr my-4">

                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control text-center" id="exampleFormControlInput1" placeholder="Tautan Google Drive" name="job_id" value="{{ $job->id }}" hidden>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 class="body-default font-weight-600">Tautan Google Drive Menuju Berkas Yang dapat Dilihat Perusahaan</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control text-center" id="exampleFormControlInput1" placeholder="Tautan Google Drive" name="link">
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <h5 class="body-default font-weight-600">Link Google Drive Menuju Berkas</h5>
                                    <input type="file" id="actual-btn" accept=".pdf, .doc, .docx" hidden
                                        maxlength="10000" />
                                    <label for="actual-btn" class="file-label btn btn-red mr-1"><i
                                            class="fas fa-upload mr-2"></i>Choose File</label>
                                    <span id="file-chosen">No file chosen</span>
                                    <p class="body-small font-secondary">Acceptable file types are DOC, DOCX, PDF,
                                        and
                                        RTF.
                                        Max
                                        file size is 10 MB.</p>
                                </div> -->

                                <div class="form-group">
                                    <label for="promosi">Promosikan Diri Anda (Rekomendasi)</label>
                                    <textarea class="form-control" id="promosi" rows="5" name="pitch" placeholder="Beri tahu mengapa Anda paling cocok untuk peran ini. Tunjukkan keterampilan khusus dan cara Anda berkontribusi"></textarea>
                                </div>

                                <div class="button-controls d-block d-lg-none">
                                    <input type="submit" class="btn btn-red px-4 btn-block">
                                </div>

                                <div class="button-controls d-none d-lg-block">
                                    <input type="submit" class="btn btn-red px-4">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection