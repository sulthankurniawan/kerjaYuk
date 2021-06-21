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
                <ul class="list-group mb-3 ml-3">
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

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="respond">Respond dari Pelamar:</label>
                        <textarea type="text" class="form-control" id="respond" rows="4" name="respond" disabled>{{ $request->respond }}</textarea>
                    </div>
                </form>

                <p>Lamaran dibuat pada {{ $request->created_at }}</p>

            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection