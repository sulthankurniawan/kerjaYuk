<div class="nav-container nav-fill d-block d-md-none">
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light nav-fill">
            <a href="../../pages/seeker/index.html" class="navbar-brand">
                <h3><a href="/" class="font-secondary">KerjaYuk</a></h3>
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="list-unstyled components sidebar-items body-default border-bottom-0 mb-0">
                    <li class="<?= (Route::currentRouteName() == 'home.admin') ? 'active' : ''; ?> px-2 py-3 d-flex align-items-center">
                        <i class="fas fa-home mr-3"></i><a href="/home-admin" class="font-secondary">Beranda</a>
                    </li>
                    <li class="<?= (Route::currentRouteName() == 'jobs.index') ? 'active' : ''; ?> px-2 py-3 d-flex align-items-center">
                        <i class="fas fa-briefcase mr-3"></i><a href="/jobs" class="font-secondary">Kelola Pekerjaan</a>
                    </li>
                    <li class="<?= (Route::currentRouteName() == 'users.seeker') ? 'active' : ''; ?> px-2 py-3 d-flex align-items-center">
                        <i class="fas fa-user mr-3"></i><a href="/users/seeker" class="font-secondary">Kelola Seeker</a>
                    </li>
                    <li class="<?= (Route::currentRouteName() == 'users.company') ? 'active' : ''; ?> px-2 py-3 d-flex align-items-center">
                        <i class="fas fa-building mr-3"></i><a href="/users/company" class="font-secondary">Kelola Company</a>
                    </li>
                    <hr>
                </ul>
                <!-- Mobile Button -->
                <form action=""
                    class="nav-button d-flex flex-column align-items-start form-inline d-sm-block d-lg-none">
                    <a href="/logout" class="btn btn-red text-white btn-block">Keluar</a>
                </form>

                <!-- Desktop Button -->
                <form action="/logout" class="form-inline d-none d-lg-block">
                    <button class="btn btn-red text-white">Keluar</button>
                </form>
            </div>
        </nav>
    </div>
</div>