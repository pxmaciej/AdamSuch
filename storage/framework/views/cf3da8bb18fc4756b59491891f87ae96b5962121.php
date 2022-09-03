<?php $__env->startSection('content'); ?>

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Koszyk</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Główna</a></li>
                    <li>Koszyk</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- checkout-section -->
    <!-- checkout-section -->
    <section class="checkout-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                    <div class="inner-box">
                        <div class="billing-info">
                            <h4 class="sub-title">Informacje do Zamówienia</h4>
                            <form action="<?php echo e(route('billing.store')); ?>" method="post" class="billing-form">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="z24_id_sprzedawcy" value="TWOJ_ID">
                                <input type="hidden" name="z24_crc" value="KLUCZ_ZAKUPU">
                                <input type="hidden" name="z24_return_url" value="szczyptamuzyki.pl">
                                <input type="hidden" name="z24_language" value="pl">
                                <input type="hidden" name="z24_nazwa" value="Koncert">
                                <input type="hidden" name="z24_kwota" value="45000"><!--KWOTA W GROSZACH-->
                                <input type="submit" id="submit-form" class="invisible" />
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Imię</label>
                                        <div class="field-input">
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Nazwisko</label>
                                        <div class="field-input">
                                            <input type="text" name="last_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Nazwa Firmy</label>
                                        <div class="field-input">
                                            <input type="text" name="company_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Email Adres</label>
                                        <div class="field-input">
                                            <input type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Numer Telefonu</label>
                                        <div class="field-input">
                                            <input type="text" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Adres</label>
                                        <div class="field-input">
                                            <input type="text" name="address" class="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Miasto</label>
                                        <div class="field-input">
                                            <input type="text" name="town_city">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Kod Pocztowy</label>
                                        <div class="field-input">
                                            <input type="text" name="zip">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Notatki</label>
                                        <div class="additional-info">
                                        <div class="note-book">
                                         <textarea name="note_box" placeholder="Notatki dotyczące zamówienia"></textarea>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                    <div class="inner-box">
                        <div class="order-info">
                            <h4 class="sub-title">Zamównie</h4>
                            <div class="order-product">
                                <div class="single-item">
                                    <figure class="image-box"><a href="#"><img src="images/resource/shop/cart-2.jpg" alt=""></a></figure>
                                    <div class="text clearfix">
                                        <h4>Koncert</h4>
                                        <span>450.00zł</span>
                                    </div>
                                </div>
                                <div class="amount-box">
                                    <div class="text clearfix">
                                        <h4>Podsumowanie</h4>
                                        <span>450.00zł</span>
                                    </div>
                                    <div class="text clearfix">
                                        <h4>Do zapłaty</h4>
                                        <span class="order-parice">450.00zł</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-info">
                            <div class="icon-box">
                                <div class="icon-1"></div>
                                <div class="icon-2"></div>
                            </div>
                            <h4>Proces Płatności</h4>
                            <div class="payment-option">
                                <div class="option-block">
                                    <div class="checkbox">
                                        <label>
                                            <input name="pay-us" type="radio" checked="checked">
                                            <span>Przelew 24</span>
                                        </label>
                                    </div>
                                    <div class="text">Po zakupie powrócisz na naszą strone WWW</div>
                                </div>
                                <div class="order-btn"><label for="submit-form" class="theme-btn">Składam Zamówienie</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout-section end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/test/Documents/work/AdamSuch/resources/views//pages/chceckouta.blade.php ENDPATH**/ ?>