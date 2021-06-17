<!-- Navbar -->
<div
    class="nav-container h-100 w-100 <?= (Route::currentRouteName() == 'index' || Route::currentRouteName() == 'home.seeker' || Route::currentRouteName() == 'home.company') ? '' : 'nav-fill'; ?>">
    <div class="container">
        <nav
            class="row navbar navbar-expand-lg navbar-light <?= (Route::currentRouteName() == 'index' || Route::currentRouteName() == 'home.seeker' || Route::currentRouteName() == 'home.company') ? '' : 'nav-fill'; ?>">
            <div class="navbar-brand d-flex align-items-center">
                <div>
                    <a href="/">
                        <h3 class="d-inline mb-0"
                            style="<?= (Route::currentRouteName() == 'index') ? 'text-decoration:underline' : ''; ?>">
                            KerjaYuk
                        </h3>
                    </a>
                </div>

                <h4 class="mb-0 mx-2">/</h4>

                <div>
                    <a href="/cari">
                        <h5 class="mb-0"
                            style="<?= (Route::currentRouteName() == 'cari') ? 'text-decoration:underline' : ''; ?>">
                            CariYuk
                        </h5>
                    </a>
                </div>
            </div>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navb">
                @auth
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <?php if (Auth::user()->role == 'seeker') : ?>
                        <a href="/home-seeker"
                            class="nav-link <?= (Route::currentRouteName() == 'home.seeker') ? 'active' : ''; ?>">Beranda</a>
                        <?php elseif (Auth::user()->role == 'company') : ?>
                        <a href="/home-company"
                            class="nav-link <?= (Route::currentRouteName() == 'home.company') ? 'active' : ''; ?>">Beranda</a>
                        <?php endif ?>
                    </li>
                    <li class="nav-item mx-md-2">
                        <?php if (Auth::user()->role == 'seeker') : ?>
                        <a href="/jobs"
                            class="nav-link <?= (Route::currentRouteName() == 'jobs.index') ? 'active' : ''; ?>">Cari
                            Pekerjaan</a>
                        <?php elseif (Auth::user()->role == 'company') : ?>
                        <a href="/jobs/create"
                            class="nav-link <?= (Route::currentRouteName() == 'jobs.create') ? 'active' : ''; ?>">Tambah
                            Lowongan</a>
                        <?php endif ?>
                    </li>
                    <li class="nav-item mx-md-2">
                        <?php if (Auth::user()->role == 'seeker') : ?>
                        <a class="nav-link <?= (Route::currentRouteName() == 'users.show') ? 'active' : ''; ?>"
                            href="{{ route('requests.index') }}"> Riwayar Lamaran </a>
                        <?php endif ?>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link <?= (Route::currentRouteName() == 'users.show') ? 'active' : ''; ?>"
                            href="/users/<?= Auth::user()->id ?>"> Profil <?= Auth::user()->first_name ?> </a>
                    </li>
                </ul>

                <!-- Mobile Button -->
                <form action=""
                    class="nav-button d-flex flex-column align-items-start form-inline d-sm-block d-lg-none">
                    <a href="/logout" class="btn btn-red text-white btn-block">Keluar</a>
                </form>
                <!-- Desktop Button -->
                <form action="" class="form-inline d-none d-lg-block">
                    <a href="/logout" class="btn btn-red text-white">Keluar</a>
                </form>
                @endauth

                @guest
                <ul class="navbar-nav ml-auto mr-3">

                </ul>
                <!-- Mobile Button -->
                <form action=""
                    class="nav-button d-flex flex-column align-items-start form-inline d-sm-block d-lg-none">
                    <a href="/login" class="btn btn-grey btn-default ">Masuk</a> <br>
                    <?php if (Route::currentRouteName() != 'cari') : ?>
                    <a href="/register-seeker" class="btn btn-red text-white btn-block">Daftar Sebagai Seeker</a>
                    <a href="/register-company" class="btn btn-warning text-white btn-block">Daftar Sebagai Company</a>
                    <?php endif ?>
                </form>
                <!-- Desktop Button -->
                <form action="" class="form-inline d-none d-lg-block">
                    <a href="/login"
                        class="btn btn-default <?= (Route::currentRouteName() == 'index' || Route::currentRouteName() == 'home.seeker') ? 'btn-no-fill' : 'btn-grey'; ?>">Masuk</a>
                    <?php if (Route::currentRouteName() != 'cari') : ?>
                    <a href="/register-seeker" class="btn btn-red text-white">Daftar Sebagai Seeker</a>
                    <a href="/register-company" class="btn btn-warning text-white">Daftar Sebagai Company</a>
                    <?php endif ?>
                </form>
                @endguest
            </div>
        </nav>
    </div>
</div>
<!-- End Navbar -->