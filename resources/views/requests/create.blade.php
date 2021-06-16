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
                            <div class="logo-wrapper">
                                <img src="{{ url("img/illustration/company/telkom.png") }}" alt="Telkom Logo"
                                    class="w-100">
                            </div>
                            <h4 class="font-weight-600">Human Resource</h4>
                            <p class="mb-3 mb-md-2">Telkom Indonesia</p>
                            <div class="row w-100">
                                <div class="col-4 d-flex justify-content-center text-center">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-briefcase mr-0 mr-md-2 mb-2 mb-md-0"></i>Full-Time</span>
                                </div>
                                <div class="col-4 d-flex justify-content-center text-center border-left">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-map-marker-alt mr-0 mr-md-2 mb-2 mb-md-0"></i>
                                        Jakarta Pusat</span>
                                </div>
                                <div class="col-4 d-flex justify-content-center text-center border-left">
                                    <span class="body-default font-secondary d-flex flex-column d-md-inline"><i
                                            class="fas fa-user-friends mr-0 mr-md-2 mb-2 mb-md-0"></i>220
                                        Applicant</span>
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
                                            <p class="mb-0">Muhammad Fachrian</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center pl-0 pt-1">
                                    <div class="d-flex w-100">
                                        <div class="h-100 list-bullet-icons">
                                            <span><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <div class="w-100">
                                            <p class="mb-0">mfachrian04@gmail.com</p>
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
                                            <p class="mb-0 d-block">Telkom University</p>
                                            <p class="mb-0 d-block">Bachelor’s Degree in Computer
                                                Science/Information</p>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <p class="font-secondary">Lulus</p>
                                                </div>
                                                <div class="col">
                                                    <p class="font-secondary">Agustus 2011</p>
                                                </div>
                                            </div>
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
                                        <div class="w-100">
                                            <p class="mb-0 d-block">Witel Bogor</p>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <p class="font-secondary">Lulus</p>
                                                </div>
                                                <div class="col">
                                                    <p class="font-secondary">Jan 2008 - Des 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <form action="">
                                <p align="center">Masukkan nomor telepon anda agar pihak perusahaan dapat
                                    menghubungi
                                </p>
                                <div class="form-group">
                                    <input type="tel" class="form-control text-center" id="exampleFormControlInput1"
                                        placeholder="Masukkan Nomor Telepon">
                                </div>

                                <hr class="hr my-4">

                                <div class="form-group">
                                    <h5 class="body-default font-weight-600">Resume / CV</h5>
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
                                </div>

                                <div class="form-group">
                                    <label for="promosi">Buat promosi Anda (Rekomendasi)</label>
                                    <textarea class="form-control" id="promosi" rows="5"
                                        placeholder="Beri tahu mengapa Anda paling cocok untuk peran ini. Tunjukkan keterampilan khusus dan cara Anda berkontribusi"></textarea>
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