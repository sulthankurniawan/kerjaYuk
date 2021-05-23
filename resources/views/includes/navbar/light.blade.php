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
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Cari Pekerjaan</a>
                    </li>
                    {{-- <li class="nav-item mx-md-2">
                        <span class="nav-link profile">Halo, Arya</span>
                    </li> --}}
                </ul>
                <!-- Mobile Button -->
                <form action=""
                    class="nav-button d-flex flex-column align-items-start form-inline d-sm-block d-lg-none">
                    <button class="btn btn-red text-white btn-block">Keluar</button>
                </form>

                <!-- Desktop Button -->
                <form action="" class="form-inline d-none d-lg-block"> <button
                        class="btn btn-red text-white">Keluar</button>
                </form>
            </div>
        </nav>
    </div>
</div>
<!-- End Navbar -->