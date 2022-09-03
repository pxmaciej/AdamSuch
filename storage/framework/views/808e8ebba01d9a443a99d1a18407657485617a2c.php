<?php $__env->startSection('content'); ?>
 <!--Page Title-->
 <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
    <div class="container">
        <div class="content-box">
            <h1>Nasze Wydarzenia</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Główna</a></li>
                <li>Wydarzenia</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- event-page-section -->
<section class="event-page-section">
    <div class="container">
        <div class="row">

  <?php $__empty_1 = true; $__currentLoopData = $savedevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-xl-6 col-lg-12 col-md-12 event-block">
                <div class="event-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="/event-details/<?php echo e($event->id); ?>"><img src="storage/events/<?php echo e($event->img_name); ?>" alt=""></a></figure>
                        <div class="content-box">
                            <div class="date"><?php echo e($event->start_date); ?></div>
                            <h3><a href="/event-details/<?php echo e($event->id); ?>"><?php echo e($event->title); ?></a></h3>
                            <div class="text"><?php echo e($event->content); ?></div>
                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>
        </div>
    </div>
</section>
<!-- event-page-section end -->


<!-- testimonial-style-two -->
<section class="testimonial-style-two">
    <div class="anim-icon">
        <div class="icon icon-1 float-bob-y"></div>
    </div>
    <div class="container">
        <div class="sec-title centred">
            <h5>Opinie</h5>
            <h1>Co o nas mówią</h1>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Warsztaty były bardzo ciekawe i twórcze.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-4.png" alt=""></figure>
                        <h5>Publiczna Szkoła Podstawowa w Mierzynie</h5>
                        <span class="designation"></span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Dziękujemy bardzo za przeprowadznie warsztatów o bębnach afrykańskich dla uczniów z British International School Gdańsk.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-5.png" alt=""></figure>
                        <h5>British International School Gdańsk</h5>
                        <span class="designation">Kids Mothre</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Przedskolaki, Dyrekcja i Nauczycielki Bajkowego Prywatnego Przedszkola w Jaśle składają serdeczne Podziękowanie za aktywne włączenie się do Akcji "Cała Polska Czyta Dzieciom".</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-4.png" alt=""></figure>
                        <h5>Bajkowe Prywatne przedszkole</h5>
                        <span class="designation">nr 6</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Podziękowania dla Adama za wprowadzenie w swiat afrykańskich rytmów i wywołanie uśmiechów na twarzach przedszkolaków.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-5.png" alt=""></figure>
                        <h5>Misiowa Akademia Przedszkole Niepubliczne</h5>
                        <span class="designation"></span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Dziękujemy za warsztaty instrumentalno- muzyczne bębnów afrykańskich dla dzieci w przedszkolu Radość w Kaliczy. Zajęcia były bardzo twórcze i zachęciły do wspólnej zabawy.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-4.png" alt=""></figure>
                        <h5>Publiczne przedszkole "Radość"</h5>
                        <span class="designation">nr 27</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Podziękowania za przeprowadznie warsztatów gry na bębnach dla przedszkolaków.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-5.png" alt=""></figure>
                        <h5>Szkrabik</h5>
                        <span class="designation">Barbara Ławorynowicz</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-style-two end -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/test/Documents/work/AdamSuch/resources/views/pages/event.blade.php ENDPATH**/ ?>