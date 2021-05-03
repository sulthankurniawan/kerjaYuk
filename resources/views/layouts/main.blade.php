<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ url("kerjayuk-template/libraries/bootstrap/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ url("kerjayuk-template/styles/main.css") }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url("kerjayuk-template/libraries/owl-carousel/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ url("kerjayuk-template/libraries/aos/css/aos.css") }}" />

    <script src="https://kit.fontawesome.com/eff0ae10a6.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>

<body>
    <!-- Navbar -->
    <div class="nav-container">
        <div class="container">
            <nav class="row navbar navbar-expand-lg navbar-light bg-white">
                <a href="{{ url("/") }}" class="navbar-brand">
                    <h4>KerjaYuk</h4>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
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
                    </ul>
                    <!-- Mobile Button -->
                    <form action=""
                        class="nav-button d-flex flex-column align-items-start form-inline d-sm-block d-md-none">
                        <button class="btn btn-login my-2 my-sm-0 btn-block">Masuk</button>
                        <button class="btn btn-register my-2 my-sm-0 btn-block">Mendaftar</button>
                    </form>

                    <!-- Desktop Button -->
                    <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 mx-2">Masuk</button>
                        <button class="btn btn-register btn-navbar-right my-2 my-sm-0 px-4 mx-2">Mendaftar</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navbar -->

    @yield('content')

    <!-- Footer -->
    <footer class="section-footer mt-5">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3 mb-3">
                            <h2>KerjaYuk</h2>
                            <p>We transform the way candidates find jobs and companies hire talent.</p>
                        </div>
                        <div class="col-4 col-lg-3">
                            <h5 class="font-weight-bold">About</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white">Contact Us</a></li>
                                <li><a href="#" class="text-white">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-4 col-lg-3">
                            <h5 class="font-weight-bold">Job Seeker</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white">Job Board</a></li>
                                <li><a href="#" class="text-white">Career Advice</a></li>
                                <li><a href="#" class="text-white">Jobseeker Help</a></li>
                            </ul>
                        </div>
                        <div class="col-4 col-lg-3">
                            <h5 class="font-weight-bold">Employer</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white">Post a Job</a></li>
                                <li><a href="#" class="text-white">Pricing</a></li>
                                <li><a href="#" class="text-white">Employer Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="{{ url("kerjayuk-template/libraries/jquery/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ url("kerjayuk-template/libraries/bootstrap/js/bootstrap.js") }}"></script>
    <script src="{{ url("kerjayuk-template/libraries/owl-carousel/js/owl.carousel.min.js") }}"></script>
    <script src="{{ url("kerjayuk-template/libraries/aos/js/aos.js") }}"></script>
    <script src="{{ url("kerjayuk-template/scripts/main.js") }}"></script>
</body>

</html>