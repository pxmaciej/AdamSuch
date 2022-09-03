<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


</head>
<body class="boxed_wrapper">
        <main>
            <?php echo $__env->make('includes.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('includes.cookie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </main>
            <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fa fa-arrow-up"></i>
        </button>
    </div>


        <!-- jequery plugins -->
        <script src="<?php echo e(secure_asset('js/jquery.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('js/bootstrap.min.js')); ?>"></script>

        <script src="<?php echo e(secure_asset('js/owl.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('js/wow.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('js/validation.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('js/jquery.fancybox.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('js/appear.js')); ?>"></script>
        <script src="<?php echo e(secure_asset('js/parallax.min.js')); ?>"></script>
        <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
        <!-- main-js -->
        <script src="<?php echo e(secure_asset('js/script.js')); ?>"></script>
        <script>
        window.addEventListener("cookieAlertAccept", function() {
            alert("cookies accepted")
        })
        </script>
</body>
</html>
<?php /**PATH /Users/test/Documents/work/AdamSuch/resources/views/layouts/app.blade.php ENDPATH**/ ?>