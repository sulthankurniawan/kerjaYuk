<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes.styles')

    <title>@yield('title')</title>
</head>

<body>
    @include('includes.user.navbar')

    @yield('content')

    @include('includes.footer')
    @include('includes.scripts')
</body>

</html>