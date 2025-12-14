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
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @yield('js')
</body>

</html>
