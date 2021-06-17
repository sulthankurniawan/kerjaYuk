<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes.styles')

    <script src="https://kit.fontawesome.com/eff0ae10a6.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper layout-sidebar">
        <!-- Sidebar  -->
        @include('includes.sidebar')

        <!-- Page Content  -->
        <div id="content">
            @include('includes.sidebar_header')
            <!-- Navbar -->
            @include('includes.sidebar_navbar')
            <!-- End Navbar -->
            @yield('content')
        </div>
    </div>


    @include('includes.scripts')
</body>

</html>