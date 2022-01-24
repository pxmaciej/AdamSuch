<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>
<body class="boxed_wrapper">
        <main>
            @include('includes.search')
            @include('includes.navbar')
            @yield('content')
            @include('includes.cookie')
            @include('includes.footer')
        </main>
            <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fa fa-arrow-up"></i>
        </button>
    </div>


        <!-- jequery plugins -->
        <script src="{{ secure_asset('js/jquery.js')}}"></script>
        <script src="{{ secure_asset('js/popper.min.js')}}"></script>
        <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>

        <script src="{{ secure_asset('js/owl.js')}}"></script>
        <script src="{{ secure_asset('js/wow.js')}}"></script>
        <script src="{{ secure_asset('js/validation.js')}}"></script>
        <script src="{{ secure_asset('js/jquery.fancybox.js')}}"></script>
        <script src="{{ secure_asset('js/appear.js')}}"></script>
        <script src="{{ secure_asset('js/parallax.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
        <!-- main-js -->
        <script src="{{ secure_asset('js/script.js')}}"></script>
        <script>
        window.addEventListener("cookieAlertAccept", function() {
            alert("cookies accepted")
        })
        </script>
</body>
</html>
