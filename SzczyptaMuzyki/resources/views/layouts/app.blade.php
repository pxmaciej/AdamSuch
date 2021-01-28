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
            @include('includes.footer')
        </main>
            <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fa fa-arrow-up"></i>
        </button>
    </div>


        <!-- jequery plugins -->
        <script src="{{ asset('js/jquery.js')}}"></script>
        <script src="{{ asset('js/popper.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>

        <script src="{{ asset('js/owl.js')}}"></script>
        <script src="{{ asset('js/wow.js')}}"></script>
        <script src="{{ asset('js/validation.js')}}"></script>
        <script src="{{ asset('js/jquery.fancybox.js')}}"></script>
        <script src="{{ asset('js/appear.js')}}"></script>
        <script src="{{ asset('js/parallax.min.js')}}"></script>

        <!-- main-js -->
        <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>
