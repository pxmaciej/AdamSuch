@extends('layouts.app')
@section('content')

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Checkout Page</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Pages</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- checkout-section -->
    <section class="checkout-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 customer-column">
                    <div class="customer">Returning Customer? <a href="#">Click here to Login</a></div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 coupon-column">
                    <div class="coupon">Have a Coupon? <a href="#">Click here to enter your code</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                    <div class="inner-box">
                        <div class="billing-info">
                            <h4 class="sub-title">Billing Details</h4>
                            <form action="#" method="post" class="billing-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>First Name*</label>
                                        <div class="field-input">
                                            <input type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Last Name*</label>
                                        <div class="field-input">
                                            <input type="text" name="last_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Company Name*</label>
                                        <div class="field-input">
                                            <input type="text" name="company_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Email Address*</label>
                                        <div class="field-input">
                                            <input type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Phone Number*</label>
                                        <div class="field-input">
                                            <input type="text" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Country*</label>
                                        <div class="select-column select-box">
                                            <select class="selectmenu" id="ui-id-1" style="display: none;">
                                                <option selected="selected">Select Option</option>
                                                <option>United State</option>
                                                <option>Australia</option>
                                                <option>Canada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Address*</label>
                                        <div class="field-input">
                                            <input type="text" name="address" class="address">
                                            <input type="text" name="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Town/City*</label>
                                        <div class="field-input">
                                            <input type="text" name="town_city">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>State*</label>
                                        <div class="select-column select-box">
                                            <select class="selectmenu" id="ui-id-2" style="display: none;">
                                                <option selected="selected">Select Option</option>
                                                <option>United State</option>
                                                <option>Australia</option>
                                                <option>Canada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Zip Code*</label>
                                        <div class="field-input">
                                            <input type="text" name="zip">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="create-acc">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="radio" name="ship-same-address">
                                                    <span>Create an Account</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="additional-info">
                            <h4 class="sub-title">Additional Information</h4>
                            <div class="note-book">
                                <label>Order Notes</label>
                                <textarea name="note_box" placeholder="Notes about your order, e.g. special notes for your delivery"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                    <div class="inner-box">
                        <div class="order-info">
                            <h4 class="sub-title">Your Order</h4>
                            <div class="order-product">
                                <div class="single-item">
                                    <figure class="image-box"><a href="#"><img src="images/resource/shop/cart-1.png" alt=""></a></figure>
                                    <div class="text clearfix">
                                        <h4>Baby Toy Car</h4>
                                        <span>$50.00</span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <figure class="image-box"><a href="#"><img src="images/resource/shop/cart-2.png" alt=""></a></figure>
                                    <div class="text clearfix">
                                        <h4>Baby Shoe</h4>
                                        <span>$60.00</span>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <figure class="image-box"><a href="#"><img src="images/resource/shop/cart-3.png" alt=""></a></figure>
                                    <div class="text clearfix">
                                        <h4>Kids Toy Ship</h4>
                                        <span>$60.00</span>
                                    </div>
                                </div>
                                <div class="amount-box">
                                    <div class="text clearfix">
                                        <h4>Sub Total</h4>
                                        <span>$170.00</span>
                                    </div>
                                    <div class="text clearfix">
                                        <h4>Order Total</h4>
                                        <span class="order-parice">$160.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-info">
                            <div class="icon-box">
                                <div class="icon-1"></div>
                                <div class="icon-2"></div>
                            </div>
                            <h4>Payment Procees</h4>
                            <div class="payment-option">
                                <div class="option-block">
                                    <div class="checkbox">
                                        <label>
                                            <input name="pay-us" type="radio" checked="checked">
                                            <span>Direct Bank Transfer</span>
                                        </label>
                                    </div>
                                    <div class="text">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
                                </div>
                                <div class="option-block">
                                    <div class="radio-block">
                                        <div class="checkbox">
                                            <label>
                                                <input name="pay-us" type="radio">
                                                <span>Paypal <a href="#">What is paypal?</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-btn"><a href="#" class="theme-btn">Place Order</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout-section end -->

@endsection
