@extends('layouts.auth')

@section('title')
Kerjayuk | Forgot Password
@endsection

@section('content')
<section class="section-forget-password">
    <div class="container my-lg-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-7 mx-auto h-100">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <form>
                                    <div class="form-group">
                                        <div style="text-align:center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                                fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                        </div>
                                        <div class="text-center mt-4">
                                            <h5 style="margin-top: -20px;" class="font-weight-600">Lupa Kata Sandi</h5>
                                        </div>
                                        <p style="margin-top: 20px; color: #828282;">
                                            Login ID atau email Anda harus sama dengan yang Anda gunakan waktu mendaftar
                                            di
                                            Kerjayuk.com
                                        </p>
                                        <form>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Email Address">
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-red">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection