<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('includes.head')


</head>
<body class="boxed_wrapper">

        <main>
                @include('includes.navbar')
                @yield('content')
                @include('includes.footer')
        </main>


        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fa fa-arrow-up"></i>
        </button>



        <!-- jequery plugins -->
        <script src="js/jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="js/owl.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/parallax.min.js"></script>

        <!-- main-js -->
        <script src="js/script.js"></script>
</body>
</html>
