<!DOCTYPE html>
<html lang="en">

<head>
    @include('panitia.layout.head')
    <title>@yield('title')</title>
</head>

<body class="font-Montserrat">
    @include('panitia.layout.navbar')
    @include('panitia.layout.sidebar')
    @yield('content')
    @include('panitia.layout.scripts')
    @include('sweetalert::alert')
</body>

</html>