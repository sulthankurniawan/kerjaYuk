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
    @include('includes.guest.navbar')

    @yield('content')

    @include('includes.footer')
    @include('includes.scripts')
</body>

</html>