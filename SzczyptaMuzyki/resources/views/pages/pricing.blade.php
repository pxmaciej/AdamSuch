@extends('layouts.app')
@section('content')
 <!--Page Title-->
 <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
    <div class="container">
        <div class="content-box">
            <h1>Cennik</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Główna</a></li>
                <li>Cennik</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- pricing-section -->
<section class="pricing-section sec-pad">
    <div class="container">
        <div class="sec-title centred">
            <h5>Cennik</h5>
            <h1>Cennik Tabela</h1>
        </div>
        <div class="inner-box">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-table">
                        <div class="table-header">
                            <h1>450zł<span></span></h1>
                            <h4>Warsztaty Stacjonarnie</h4>
                            <div class="text">Lorem ipsum dolor amet consectetur do adipisicing  sed.</div>
                        </div>
                        <div class="table-content">
                            <ul>
                                <li>Languages: English, Spanish</li>
                                <li>Cafeteria: Breakfast, Lunch</li>
                                <li>Sport games and activities</li>
                                <li>Camping on Mountains</li>
                                <li>School Bus</li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="/chceckoutws" class="theme-btn">Wybierz Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-table">
                        <div class="table-header">
                            <h1>450zł<span></span></h1>
                            <h4>Koncert</h4>
                            <div class="text">Lorem ipsum dolor amet consectetur do adipisicing  sed.</div>
                        </div>
                        <div class="table-content">
                            <ul>
                                <li>Languages: English, Spanish</li>
                                <li>Cafeteria: Breakfast, Lunch</li>
                                <li>Sport games and activities</li>
                                <li>Camping on Mountains</li>
                                <li>School Bus</li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="/chceckoutk" class="theme-btn">Wybierz Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-table">
                        <div class="table-header">
                            <h1>250zł<span></span></h1>
                            <h4>Warsztaty Online</h4>
                            <div class="text">Lorem ipsum dolor amet consectetur do adipisicing  sed.</div>
                        </div>
                        <div class="table-content">
                            <ul>
                                <li>Languages: English, Spanish</li>
                                <li>Cafeteria: Breakfast, Lunch</li>
                                <li>Sport games and activities</li>
                                <li>Camping on Mountains</li>
                                <li>School Bus</li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="/chceckoutwo" class="theme-btn">Wybierz Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing-section end -->
@endsection
