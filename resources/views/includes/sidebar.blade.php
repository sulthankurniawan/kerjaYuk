<nav id="sidebar" class="bg-white border-right container d-none d-md-block">
    <div class="sidebar-header text-center">
        <h3><a href="/" class="font-weight-700" style="color:black">KerjaYuk</a></h3>
    </div>

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

    <ul class="list-unstyled">
        <li>
            <a href="/logout" class="btn btn-red button-cta text-white">Keluar</a>
        </li>
    </ul>
</nav>