@extends('layouts.app')
@section('content')

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Contact</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-info-section -->
    <section class="contact-info-section sec-pad centred">
        <div class="container">
            <div class="sec-title">
                <h5>Contact</h5>
                <h1>Get In Touch</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-address"></i></div>
                            <h3>Our Location</h3>
                            <div class="text">16/14 Babor Road, Shyamoly<br />Dhaka.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-vintage-hand-phone"></i></div>
                            <h3>Phone Number</h3>
                            <div class="text">
                                <a href="tel:(+55)654-545-5418">(+55) 654 - 545 - 5418</a><br />
                                <a href="tel:(+55)654-545-1235">(+55)  654 - 545 - 1235</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-mail"></i></div>
                            <h3>Email Address</h3>
                            <div class="text">
                                <a href="mailto:info@example.com">info@example.com</a><br />
                                <a href="mailto:info@templatepath.com">info@templatepath.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->


    <!-- contact-form-section -->
    <section class="contact-form-section sec-pad">
        <div class="container">
            <div class="sec-title centred">
                <h5>Inquary</h5>
                <h1>Leave a Message</h1>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 form-column">
                    <div class="contact-form">
                        <form method="post" action="sendemail.php" id="contact-form" class="default-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name*" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email*" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone number" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Write here message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                    <button type="submit" class="theme-btn" name="submit-form">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form-section end -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="map-column">
            <div class="google-map-area">
                <div
                    class="google-map"
                    id="contact-google-map"
                    data-map-lat="40.712776"
                    data-map-lng="-74.005974"
                    data-icon-path="images/icons/map-marker.png"
                    data-map-title="Brooklyn, New York, United Kingdom"
                    data-map-zoom="12"
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </div>
    </section>
    <!-- google-map-section end -->

@endsection
