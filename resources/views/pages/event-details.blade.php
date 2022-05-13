@extends('layouts.app')

@section('content')
  <!--Page Title-->
  <section class="page-title centred" style="background-image: url(../images/background/page-title.jpg);">
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
                        <figure class="image-box"><img src="../storage/events/{{$event->img_name}}" alt=""></figure>
                        <div class="date">{{$event->start_date}}</div>
                        <h1>{{$event->title}}</h1>
                        <div class="bold-text">{{$event->content}}</div>

                        <div class="text">
                            <p>{{$event->body}}</p>
                        </div>
                        <ul class="social-style-one clearfix">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="event-details-sidebar">
                    <div class="inner-box">
                        <h3>Informacje Na Temat Wydarzenia:</h3>
                        <div class="text"></div>
                        <ul class="info-list">
                            <li>
                                <h5>Zaczynamy:</h5>
                                <span>{{$event->start_date}}</span>
                            </li>
                            <li>
                                <h5>Godzina:</h5>
                                <span>{{$event->time_event}}</span>
                            </li>
                            <li>
                                <h5>Lokalizacja:</h5>
                                <span>{{$event->location_event}}</span>
                            </li>
                            <li>
                                <h5>Telefon:</h5>
                                <a href="tel:(+48)733 499 681">(45) 733 499 681</a>
                            </li>
                            <li>
                                <h5>Email:</h5>
                                <a href="mailto:kontakt@szczyptamuzyki.pl">kontakt@szczyptamuzyki.pl</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- event-details end -->
@endsection
