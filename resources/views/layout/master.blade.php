<!DOCTYPE html>
<html lang="fa">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{asset("assets/js/app.js")}}"></script>
    @yield('js')
</body>

</html>
