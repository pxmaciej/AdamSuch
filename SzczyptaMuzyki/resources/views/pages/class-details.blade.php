@extends('layouts.app')
@section('content')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Class Details</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Classes</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- class-details -->
    <section class="class-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="class-details-content">
                        <div class="inner-box">
                            <div class="upper-content">
                                <div class="sec-title style-two">
                                    <h5>Description</h5>
                                    <h1>Drawing & Painting</h1>
                                </div>
                                <div class="bold-text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim idest laborum sed ux perspiciatis unde omnis iste natuserror sit voluptatem accusantium. dolore laudantium totam rem aperiam eaque.</div>
                                <div class="info-box">
                                    <ul class="clearfix">
                                        <li>
                                            <figure class="thumb-box"><img src="images/resource/author-thumb.png" alt=""></figure>
                                            <h6>Teacher</h6>
                                            <h5>Kevin Spacey</h5>
                                        </li>
                                        <li>
                                            <h6>Category</h6>
                                            <h5>Mathematics</h5>
                                        </li>
                                        <li>
                                            <h6>Cost</h6>
                                            <h5>$480</h5>
                                        </li>
                                        <li class="btn-box"><a href="#" class="theme-btn">Read More</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3>Class Description</h3>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore.</p>
                                </div>
                                <figure class="image-box"><img src="images/resource/class-details.jpg" alt=""></figure>
                                <h3>Requirements</h3>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                </div>
                                <ul class="list">
                                    <li>Aliquam sit amet mi vitae turpis gravida vulputate.</li>
                                    <li>Proin a orci nec sapien condimentum imperdiet.</li>
                                    <li>Suspendisse viverra lectus eu augue efficitur pulvinar.</li>
                                    <li>Mauris a purus ut mauris sodales ultrices.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="class-details-sidebar">
                        <div class="inner-box">
                            <h3>Informations</h3>
                            <div class="text">Lorem ipsum dolor sit amet consectur pisicelit sed do eiusmo tempor incidie labore magna.</div>
                            <ul class="info-list">
                                <li>
                                    <h5>Age Group:</h5>
                                    <span>2 to 3 years old</span>
                                </li>
                                <li>
                                    <h5>Class Size:</h5>
                                    <span>20 kids in one class</span>
                                </li>
                                <li>
                                    <h5>Session Timing:</h5>
                                    <span>9.00AM to 12.30PM</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- class-details end -->


    <!-- fact-counter -->
    <section class="fact-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="icon-box"><i class="flaticon-two-users"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="200">0</span>
                        </div>
                        <div class="text">Teacher & Staffs</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="icon-box"><i class="flaticon-calendar"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="125">0</span>
                        </div>
                        <div class="text">Total Sessions</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="icon-box"><i class="flaticon-boy"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="750">0</span>
                        </div>
                        <div class="text">Total Students</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box"><i class="flaticon-flask"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="200">0</span>
                        </div>
                        <div class="text">Labs Project</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-counter end -->
@endsection
