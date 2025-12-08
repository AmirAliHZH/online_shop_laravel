<!DOCTYPE html>
<html lang="fa">

<head>
    @include('layout.head')
    @yield('head')
    @yield('css')
</head>

<body>
    @include('layout.header')
    @yield('body')
    @include('layout.footer')
    @yield('js')
</body>

</html>
