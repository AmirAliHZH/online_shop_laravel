<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    @include('layout.head')
    @yield('head')
    @yield('css')
</head>

<body class="light-theme">
    @include('layout.header')
    @yield('body')
    @include('layout.footer')
    @yield('modal')
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @yield('js')
</body>

</html>
