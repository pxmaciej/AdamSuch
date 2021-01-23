@extends('layouts.app')
@section('content')
<!-- page wrapper -->

    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- search-box-layout -->
    <div class="wraper_flyout_search">
        <div class="table">
            <div class="table-cell">
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-close">
                    <span class="flyout-search-close-line"></span>
                    <span class="flyout-search-close-line"></span>
                </div>
                <div class="flyout_search">
                    <div class="flyout-search-title">
                        <h4>Wyszukaj</h4>
                    </div>
                    <div class="flyout-search-bar">
                        <form role="search" method="get" action="#">
                            <div class="form-row">
                                <input type="search" placeholder="Type to search..." value="" name="s" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-box-layout end -->

    <!-- main-slider -->
    <section class="main-slider">
        <div class="main-slider-carousel owl-carousel owl-theme nav-style-one">
            <div class="slide" style="background-image:url(images/main-slider/slider-1.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h3>Najlepszy Wybór</h3>
                        <h1>Edukacja Muzyczna Dzieci</h1>
                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim idest laborum</div>
                        <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(images/main-slider/slider-2.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h3>Best Choise</h3>
                        <h1>Make Your Children's Life Special</h1>
                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim idest laborum</div>
                        <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(images/main-slider/slider-3.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h3>Best Choise</h3>
                        <h1>Make Your Children's Life Special</h1>
                        <div class="text">Cupidatat non proident sunt culpa qui officia deserunt<br />mollit anim idest laborum</div>
                        <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-slider end -->


    <!-- about-section -->
    <section class="about-section">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
            <div class="icon icon-2 wow zoomIn" data-wow-delay="00ms" data-wow-duration="1500ms"></div>
            <div class="icon icon-3"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image image-1"><img src="images/resource/about-1.jpg" alt=""></figure>
                        <figure class="image image-2"><img src="images/resource/about-2.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>About Us</h5>
                            <h1>Welcome to Kidko Kindergarten</h1>
                        </div>
                        <div class="bold-text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim idest laborum</div>
                        <div class="text">
                            <p>Cupidatat non proident sunt culpa qui officia deserunt mollit anim idest laborum sed ut perspiciatis unde omnis iste natuserror sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        </div>
                        <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- service-section -->
    <section class="service-section sec-pad" style="background-image: url(images/background/service-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content">
                        <div class="sec-title style-two">
                            <h5>Services</h5>
                            <h1>Best Services for Kids</h1>
                        </div>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam.</div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 carousel-column">
                    <div class="carousel-content">
                        <div class="services-carousel owl-carousel owl-theme">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-bus-1"></i></div>
                                    <h3><a href="#">Bus Service</a></h3>
                                    <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim.</div>
                                </div>
                            </div>
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-running"></i></div>
                                    <h3><a href="#">Sports Training</a></h3>
                                    <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim.</div>
                                </div>
                            </div>
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-drum"></i></div>
                                    <h3><a href="#">Music Training</a></h3>
                                    <div class="text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->


    <!-- classes-section -->
    <section class="classes-section sec-pad">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
        </div>
        <div class="container">
            <div class="sec-title centred">
                <h5>Classess</h5>
                <h1>Education for Your<br />Children</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="class-details.html"><img src="images/resource/class-1.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a></div>
                            <h3><a href="class-details.html">Music Lessons</a></h3>
                            <div class="price">$480</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div>
                            <ul class="info-box">
                                <li>Age: <span>2-4 Years</span></li>
                                <li>Size: <span>12 Seats</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="class-details.html"><img src="images/resource/class-2.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a></div>
                            <h3><a href="class-details.html">Paper Plates Art</a></h3>
                            <div class="price">$580</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div>
                            <ul class="info-box">
                                <li>Age: <span>2-4 Years</span></li>
                                <li>Size: <span>12 Seats</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="class-details.html"><img src="images/resource/class-3.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a></div>
                            <h3><a href="class-details.html">Education Lessons</a></h3>
                            <div class="price">$550</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div>
                            <ul class="info-box">
                                <li>Age: <span>2-4 Years</span></li>
                                <li>Size: <span>12 Seats</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- classes-section end -->


    <!-- feature-section -->
    <section class="feature-section">
        <div class="anim-icon">
            <div class="icon icon-1"></div>
            <div class="icon icon-2"></div>
        </div>
        <div class="image-column" style="background-image: url(images/background/feature-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 inner-column">
                    <div class="inner-content">
                        <div class="sec-title style-two">
                            <h5>Facilities</h5>
                            <h1>Best Facilities<br />for Kids</h1>
                        </div>
                        <div class="inner-box">
                            <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="flaticon-bus"></i></div>
                                <h3><a href="#">Transportation</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididunt labore.</div>
                            </div>
                            <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="flaticon-console"></i></div>
                                <h3><a href="#">Outdoor Games</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididunt labore.</div>
                            </div>
                            <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="flaticon-harvest"></i></div>
                                <h3><a href="#">Nutritious Food</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididunt labore.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section end -->


    <!-- our-teachers -->
    <section class="our-teachers sec-pad centred">
        <div class="container">
            <div class="sec-title">
                <h5>Teachers</h5>
                <h1>World Best Teacher<br />Will Teach</h1>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 block-column">
                    <div class="teachers-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-holder">
                                <figure class="image-box"><a href="#"><img src="images/resource/teacher-1.png" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Kevin Spacey</a></h3>
                                <span class="designation">Teacher</span>
                                <ul class="social-list">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 block-column">
                    <div class="teachers-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-holder">
                                <figure class="image-box"><a href="#"><img src="images/resource/teacher-2.png" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Catherine Jones</a></h3>
                                <span class="designation">Teacher</span>
                                <ul class="social-list">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 block-column">
                    <div class="teachers-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-holder">
                                <figure class="image-box"><a href="#"><img src="images/resource/teacher-3.png" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">John Travolta</a></h3>
                                <span class="designation">Teacher</span>
                                <ul class="social-list">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-teachers end -->


    <!-- event-section -->
    <section class="event-section" style="background-image: url(images/background/event-bg.jpg);">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
        </div>
        <div class="container">
            <div class="sec-title centred">
                <h5>Events</h5>
                <h1>Our Events</h1>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 event-block">
                    <div class="event-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="event-details.html"><img src="images/resource/event-1.jpg" alt=""></a></figure>
                            <div class="content-box">
                                <div class="date">10 July, 2019</div>
                                <h3><a href="event-details.html">Imagination Classes.</a></h3>
                                <div class="text">Lorem ipsum dolor amet consectur pisicelit sed eiusmod tempor indie</div>
                                <div class="location"><i class="flaticon-pin"></i>Location: <span>NEW YORK</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 event-block">
                    <div class="event-block-one wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="event-details.html"><img src="images/resource/event-2.jpg" alt=""></a></figure>
                            <div class="content-box">
                                <div class="date">12 July, 2019</div>
                                <h3><a href="event-details.html">Music Classes.</a></h3>
                                <div class="text">Lorem ipsum dolor amet consectur pisicelit sed eiusmod tempor indie</div>
                                <div class="location"><i class="flaticon-pin"></i>Location: <span>NEW YORK</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 event-block">
                    <div class="event-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="event-details.html"><img src="images/resource/event-3.jpg" alt=""></a></figure>
                            <div class="content-box">
                                <div class="date">13 July, 2019</div>
                                <h3><a href="event-details.html">Paper Plates Art.</a></h3>
                                <div class="text">Lorem ipsum dolor amet consectur pisicelit sed eiusmod tempor indie</div>
                                <div class="location"><i class="flaticon-pin"></i>Location: <span>NEW YORK</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 event-block">
                    <div class="event-block-one wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="event-details.html"><img src="images/resource/event-4.jpg" alt=""></a></figure>
                            <div class="content-box">
                                <div class="date">14 July, 2019</div>
                                <h3><a href="event-details.html">Numbers Matching.</a></h3>
                                <div class="text">Lorem ipsum dolor amet consectur pisicelit sed eiusmod tempor indie</div>
                                <div class="location"><i class="flaticon-pin"></i>Location: <span>NEW YORK</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event-section end -->


    <!-- testimonial-faq -->
    <section class="testimonial-faq">
        <div class="anim-icon">
            <div class="icon icon-1"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 testimonial-column">
                    <div class="testimonial-content">
                        <div class="sec-title style-two">
                            <h5>Testimonials</h5>
                            <h1>Happy Parents Say</h1>
                        </div>
                        <div class="inner-content">
                            <div class="client-testimonial-carousel owl-carousel owl-theme">
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="author">Hattie Bradly <span>/ Kids Fathre</span></div>
                                        <ul class="rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet consectetr adipicing elit usmod tempor incidunt enim minim quis nostrud nis exer tation ullamco laboris nis aliquip commodo per</div>
                                    </div>
                                </div>
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="author">Jesscia Brown <span>/ Kids Mother</span></div>
                                        <ul class="rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet consectetr adipicing elit usmod tempor incidunt enim minim quis nostrud nis exer tation ullamco laboris nis aliquip commodo per</div>
                                    </div>
                                </div>
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="author">Christine Eve <span>/ Kids Mother</span></div>
                                        <ul class="rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet consectetr adipicing elit usmod tempor incidunt enim minim quis nostrud nis exer tation ullamco laboris nis aliquip commodo per</div>
                                    </div>
                                </div>
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="author">Hattie Bradly <span>/ Kids Fathre</span></div>
                                        <ul class="rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet consectetr adipicing elit usmod tempor incidunt enim minim quis nostrud nis exer tation ullamco laboris nis aliquip commodo per</div>
                                    </div>
                                </div>
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="author">Jesscia Brown <span>/ Kids Mother</span></div>
                                        <ul class="rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet consectetr adipicing elit usmod tempor incidunt enim minim quis nostrud nis exer tation ullamco laboris nis aliquip commodo per</div>
                                    </div>
                                </div>
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="author">Christine Eve <span>/ Kids Mother</span></div>
                                        <ul class="rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet consectetr adipicing elit usmod tempor incidunt enim minim quis nostrud nis exer tation ullamco laboris nis aliquip commodo per</div>
                                    </div>
                                </div>

                            </div>

                            <!--Client Thumbs Carousel-->
                            <div class="client-thumb-outer">
                                <div class="client-thumbs-carousel owl-carousel owl-theme">
                                    <div class="thumb-item">
                                        <figure class="thumb-box"><img src="images/resource/testimonial-1.png" alt=""></figure>
                                    </div>
                                    <div class="thumb-item">
                                        <figure class="thumb-box"><img src="images/resource/testimonial-2.png" alt=""></figure>
                                    </div>
                                    <div class="thumb-item">
                                        <figure class="thumb-box"><img src="images/resource/testimonial-3.png" alt=""></figure>
                                    </div>
                                    <div class="thumb-item">
                                        <figure class="thumb-box"><img src="images/resource/testimonial-1.png" alt=""></figure>
                                    </div>
                                    <div class="thumb-item">
                                        <figure class="thumb-box"><img src="images/resource/testimonial-2.png" alt=""></figure>
                                    </div>
                                    <div class="thumb-item">
                                        <figure class="thumb-box"><img src="images/resource/testimonial-3.png" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 faq-column">
                    <div class="faq-content">
                        <div class="sec-title style-two">
                            <h5>Faq’s</h5>
                            <h1>Frequntly Ask Questions</h1>
                        </div>
                        <ul class="accordion-box active-block">
                            <li class="accordion block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Is There a Sleep or Rtest Time?</h4>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Children in Need Armistice Day?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Is Outdoor Play Supervised?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-faq end -->


    <!-- cta-section -->
    <section class="cta-section centred">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
            <div class="icon icon-2 rotate-me"></div>
        </div>
        <div class="parallax-scene parallax-scene-1 parallax-icon">
            <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
        </div>
        <div class="container">
            <div class="content-box">
                <h3>Join with Kidko</h3>
                <h1>Enrol Your Child<br />in Kidko</h1>
                <div class="text">Cupidatat non proident sunt culpa qui officia<br />deserunt mollit anim idest laborum </div>
                <div class="btn-box"><a href="#" class="theme-btn">Enrol Now</a></div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- gallery-section -->
    <section class="gallery-section sec-pad centred">
        <div class="container-fluid">
            <div class="sec-title">
                <h5>Gallery</h5>
                <h1>Photo Gallery</h1>
            </div>
            <div class="gallery-carousel owl-carousel owl-theme">
                <div class="gallery-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </div>
                </div>
                <div class="gallery-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </div>
                </div>
                <div class="gallery-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery-section end -->


    <!-- news-section -->
    <section class="news-section">
        <div class="anim-icon">
            <div class="icon icon-1 wow zoomIn" data-wow-delay="00ms" data-wow-duration="1500ms"></div>
        </div>
        <div class="container">
            <div class="sec-title centred">
                <h5>Our Blog</h5>
                <h1>News & Article</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="images/resource/news-1.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">The Indoor Activities for Everyone</a></h3>
                                <ul class="info-box">
                                    <li>20 July, 2019</li>
                                    <li>5 Comments</li>
                                </ul>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div>
                                <div class="link-btn wow zoomIn" data-wow-delay="00ms" data-wow-duration="1500ms"><a href="blog-details.html"><i class="flaticon-next"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="images/resource/news-2.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">We Make Difference in the Life Child</a></h3>
                                <ul class="info-box">
                                    <li>19 July, 2019</li>
                                    <li>7 Comments</li>
                                </ul>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div>
                                <div class="link-btn wow zoomIn" data-wow-delay="200ms" data-wow-duration="1500ms"><a href="blog-details.html"><i class="flaticon-next"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="images/resource/news-3.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">Kids Grooming with New Lessons</a></h3>
                                <ul class="info-box">
                                    <li>18 July, 2019</li>
                                    <li>4 Comments</li>
                                </ul>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div>
                                <div class="link-btn wow zoomIn" data-wow-delay="400ms" data-wow-duration="1500ms"><a href="blog-details.html"><i class="flaticon-next"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->



@endsection
<!--Scroll to top-->




