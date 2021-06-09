<!-- Navbar -->
<div class="nav-container h-100 w-100 <?= (Route::currentRouteName() == 'index' || Route::currentRouteName() == 'home.seeker') ? '' : 'nav-fill'; ?>">
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light <?= (Route::currentRouteName() == 'index' || Route::currentRouteName() == 'home.seeker') ? '' : 'nav-fill'; ?>">
            <a href="/" class="navbar-brand">
                <h3>KerjaYuk</h3>
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        @auth
                        <?php if (Auth::user()->role == 'seeker') : ?>
                        <a href="/home-seeker" class="nav-link active">Beranda</a>
                        <?php elseif (Auth::user()->role == 'company') : ?>
                        <a href="/home-company" class="nav-link active">Beranda</a>
                        <?php endif ?>
                        @endauth
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="/jobs" class="nav-link">Cari Pekerjaan</a>
                    </li>
                    @auth
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="/history"> Riwayat Lamaran </a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="/profile/<?= Auth::user()->id ?>"> Profil <?= Auth::user()->first_name ?> </a>
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
                    <a href="/login" class="btn btn-grey btn-default ">Masuk</a> <br>
                    <a href="/register-seeker" class="btn btn-red text-white btn-block">Daftar Sebagai Seeker</a>
                    <a href="/register-company" class="btn btn-warning text-white btn-block">Daftar Sebagai Company</a>
                </form>
                <!-- Desktop Button -->
                <form action="" class="form-inline d-none d-lg-block">
                    <a href="/login" class="btn btn-default <?= (Route::currentRouteName() == 'index' || Route::currentRouteName() == 'home.seeker') ? 'btn-no-fill' : 'btn-grey'; ?>">Masuk</a>
                    <a href="/register-seeker" class="btn btn-red text-white">Daftar Sebagai Seeker</a>
                    <a href="/register-company" class="btn btn-warning text-white">Daftar Sebagai Company</a>
                </form>
                @endguest
            </div>
        </nav>
    </div>
</div>
<!-- End Navbar -->