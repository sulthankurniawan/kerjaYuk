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

            <div class="card card-body border-0">
                <div class="card-header text-center border-bottom-0 px-0 mb-3">
                    <!-- <img src="{{ url("img/illustration/avatars/user-1.jpg") }}" alt="Foto Profil" class="image-cover profile-picture"> -->
                </div>
                <form action="" method="">
                    <div class="form-group">
                        <label for="nama_pendaftar">Nama Pendaftar:</label>
                        <input type="text" class="form-control" id="nama_pendaftar" placeholder="Nama Pendaftar"
                            name="nama_pendaftar">
                    </div>
                    <div class="form-group">
                        <label for="program_studi">Program Studi:</label>
                        <input type="text" class="form-control" id="program_studi" placeholder="Program Studi"
                            name="program_studi">
                    </div>
                    <div class="form-group">
                        <label for="program_studi">Lampiran:</label>
                        <div class="attachment-list px-2 py-3" style="background-color: #DDDEDF;height:unset;">
                            <div class=" row">
                                <div class="col-6 col-lg-4">
                                    <div class="attachment-items bg-white p-2 d-flex flex-column justify-content-between"
                                        style="min-height: 100px;">
                                        <a class="mb-0 stretched-link text-dark text-decoration-none"
                                            style="font-size:12px;" href="../../documents/test.pdf"
                                            target="_blank">Muhammad
                                            Fachrian CV</a>
                                        <span class="font-weight-bold" style="font-size:14px;">PDF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-green btn-block mb-2 mb-md-0 mt-4">Hubungi via Whatsapp</a>
                    <button type="submit" class="btn btn-orange btn-block mb-2 mb-md-0 btn-confirm" href="#">Tambah
                        ke Wishlist</button>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection