@extends('layouts.app')
@section('content')
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


<!-- event-details -->
<section class="event-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="event-details-content">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/event-details.jpg" alt=""></figure>
                        <div class="date">10 July, 2019</div>
                        <h1>Imagination Classes.</h1>
                        <div class="bold-text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim idest laborum sed ux perspiciatis unde omnis iste natuserror sit voluptatem accusantium. dolore laudantium totam rem aperiam eaque.</div>
                        <div class="countdown-box">
                            <h3>Upcoming Event:</h3>
                            <div class="countdown-timer">
                                <div class="countdown-container">
                                    <div class="default-coundown">
                                        <div class="countdown time-countdown" data-countdown-time="2016/09/28"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore.</p>
                        </div>
                        <h2>Facilities</h2>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div>
                        <ul class="list-item">
                            <li>Aliquam sit amet mi vitae turpis gravida vulputate.</li>
                            <li>Proin a orci nec sapien condimentum imperdiet.</li>
                            <li>Suspendisse viverra lectus eu augue efficitur pulvinar.</li>
                        </ul>
                        <ul class="social-style-one clearfix">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <div class="map-inner">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="event-details-sidebar">
                    <div class="inner-box">
                        <h3>Event Informations</h3>
                        <div class="text">Lorem ipsum dolor sit amet consectur pisicelit sed do eiusmo tempor incidie labore magna.</div>
                        <ul class="info-list">
                            <li>
                                <h5>Start Date:</h5>
                                <span>20 July, 2019</span>
                            </li>
                            <li>
                                <h5>Time Duration:</h5>
                                <span>9.00AM to 12.00PM</span>
                            </li>
                            <li>
                                <h5>Location:</h5>
                                <span>1201 Park Street, Fifth Avenue.</span>
                            </li>
                            <li>
                                <h5>Phone:</h5>
                                <a href="tel:(88)657524332">(88) 657 524 332</a>
                            </li>
                            <li>
                                <h5>Email:</h5>
                                <a href="mailto:info@example.com">info@example.com</a>
                            </li>
                        </ul>
                        <div class="btn-box"><a href="#" class="theme-btn">Book Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- event-details end -->



@endsection
