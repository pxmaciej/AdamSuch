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


<!-- event-page-section -->
<section class="event-page-section">
    <div class="container">
        <div class="row">

  @forelse ($savedevents as $event)
            <div class="col-xl-6 col-lg-12 col-md-12 event-block">
                <div class="event-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="event-details.html"><img src="storage/events/{{$event->img_name}}" alt=""></a></figure>
                        <div class="content-box">
                            <div class="date">10 July, 2019</div>
                            <h3><a href="event-details.html">{{$event->title}}</a></h3>
                            <div class="text">{{$event->body}}</div>
                        </div>
                    </div>
                </div>
            </div>
    @empty
    @endforelse
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
            <h5>Testimonials</h5>
            <h1>Happy Parents Say</h1>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Lorem ipsum dolor sit amet con adipicing elit usmod in tempor incidunt enim minim quis nostrud exer tation lamco laboris nis aliquipcommodo spiciatis unde omnis iste natus error sit voluptatem.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-4.png" alt=""></figure>
                        <h5>Hattie Bradly</h5>
                        <span class="designation">Kids Father</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Lorem ipsum dolor sit amet con adipicing elit usmod in tempor incidunt enim minim quis nostrud exer tation lamco laboris nis aliquipcommodo spiciatis unde omnis iste natus error sit voluptatem.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-5.png" alt=""></figure>
                        <h5>Natasha Ros</h5>
                        <span class="designation">Kids Mothre</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Lorem ipsum dolor sit amet con adipicing elit usmod in tempor incidunt enim minim quis nostrud exer tation lamco laboris nis aliquipcommodo spiciatis unde omnis iste natus error sit voluptatem.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-4.png" alt=""></figure>
                        <h5>Hattie Bradly</h5>
                        <span class="designation">Kids Father</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Lorem ipsum dolor sit amet con adipicing elit usmod in tempor incidunt enim minim quis nostrud exer tation lamco laboris nis aliquipcommodo spiciatis unde omnis iste natus error sit voluptatem.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-5.png" alt=""></figure>
                        <h5>Natasha Ros</h5>
                        <span class="designation">Kids Mothre</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Lorem ipsum dolor sit amet con adipicing elit usmod in tempor incidunt enim minim quis nostrud exer tation lamco laboris nis aliquipcommodo spiciatis unde omnis iste natus error sit voluptatem.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-4.png" alt=""></figure>
                        <h5>Hattie Bradly</h5>
                        <span class="designation">Kids Father</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="text">Lorem ipsum dolor sit amet con adipicing elit usmod in tempor incidunt enim minim quis nostrud exer tation lamco laboris nis aliquipcommodo spiciatis unde omnis iste natus error sit voluptatem.</div>
                    <div class="author-info">
                        <figure class="author-thumb"><img src="images/resource/testimonial-5.png" alt=""></figure>
                        <h5>Natasha Ros</h5>
                        <span class="designation">Kids Mothre</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-style-two end -->



@endsection
