@extends('layouts.app')
@section('content')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(../images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>{{$class->warsztaty_nazwa}}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Główna</a></li>
                    <li>Warsztaty</li>
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
                                    <h5>Opis</h5>
                                    <h1>{{$class->warsztaty_nazwa}}</h1>
                                </div>
                                <div class="bold-text">{{$class->opis_krotki}}</div>
                                <div class="info-box">
                                    <ul class="clearfix">
                                        <li>
                                            <figure class="thumb-box"><img src="images/resource/author-thumb.png" alt=""></figure>
                                            <h6>Instruktor</h6>
                                            <h5>Adam Such</h5>
                                        </li>
                                        <li>
                                            <h6>Grupa</h6>
                                            <h5>{{$class->rozmiar_grup}}</h5>
                                        </li>
                                        <li>
                                            <h6>Cena</h6>
                                            <h5>{{$class->cena}}</h5>
                                        </li>
                                        <li class="btn-box"><a href="/pricing" class="theme-btn">Cennik</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3>Opis Warsztatów</h3>
                                <div class="text">
                                    <p>{{$class->opis_warsztatow}}</p>
                                </div>
                                <figure class="image-box"><img src="../storage/class/{{$class->file_img}}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="class-details-sidebar">
                        <div class="inner-box">
                            <h3>Informacje</h3>
                            <div class="text">{{$class->informacje}}</div>
                            <ul class="info-list">
                                <li>
                                    <h5>Wiek Grup:</h5>
                                    <span>{{$class->cena}}</span>
                                </li>
                                <li>
                                    <h5>Rozmiar Grupy</h5>
                                    <span>{{$class->rozmiar_grup}}</span>
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
