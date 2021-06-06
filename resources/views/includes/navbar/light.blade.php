<!-- Navbar -->
<div class="nav-container h-100 w-100 nav-fill">
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light nav-fill">
            <a href="{{ url("/") }}" class="navbar-brand">
                <h3>KerjaYuk</h3>
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="/" class="nav-link active">Beranda</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Cari Pekerjaan</a>
                    </li>
                    @auth
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="/history"> Riwayat Lamaran </a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="/profile/<?= Auth::user()->id ?>"> Profil <?= Auth::user()->name ?> </a>
                    </li>
                    @endauth
                </ul>

                @auth
                <!-- Mobile Button -->
                <form action="" class="nav-button d-flex flex-column align-items-start form-inline d-sm-block d-lg-none">
                    <a href="/logout" class="btn btn-red text-white btn-block">Keluar</a>
                </form>
                <!-- Desktop Button -->
                <form action="" class="form-inline d-none d-lg-block"> 
                    <a href="/logout" class="btn btn-red text-white">Keluar</a>
                </form>
                @endauth

                @guest
                <!-- Mobile Button -->
                <form action="" class="nav-button d-flex flex-column align-items-start form-inline d-sm-block d-lg-none">
                    <a href="/login" class="btn btn-default btn-grey btn-block">Masuk</a>
                    <a href="/register-seeker" class="btn btn-red text-white btn-block">Daftar Sebagai Seeker</a>
                    <a href="/register-company" class="btn btn-warning text-white btn-block">Daftar Sebagai Company</a>
                </form>
                <!-- Desktop Button -->
                <form action="" class="form-inline d-none d-lg-block">
                    <a href="/login" class="btn btn-default btn-grey">Masuk</a>
                    <a href="/register-seeker" class="btn btn-red text-white">Daftar Sebagai Seeker</a>
                    <a href="/register-company" class="btn btn-warning text-white">Daftar Sebagai Company</a>
                </form>
                @endguest
            </div>
        </nav>
    </div>
</div>
<!-- End Navbar -->