<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    @include('admin.layout.head')
    @yield('head')
    @yield('css')
</head>

<body class="light-theme">
    <div class="admin-wrapper">
        @include('admin.layout.sidebar')
        <div class="main-content">
            @include('admin.layout.header')

            @yield('body')
            @yield('modal')
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @yield('js')
</body>

</html>
