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
                            <h1>650zł<span> <s>950zł</s></span></h1>
                            <h4>Warsztaty Stacjonarnie</h4>
                            <div class="text">
                                Warsztaty to niepowtarzalna okazja do zrozumienia, wygrywania i przeżywania energetycznych rytmów z Afryki Zachodniej.<br>
                                <strong>*Większa ilość grup cena indywidualna proszę o kontakt telefoniczny</strong>
                            </div>
                        </div>
                        <div class="table-content">
                            <ul>
                                <li>Dojazd</li>
                                <li>Instrumenty dla grupy</li>
                                <li>45 minut zajęć</li>
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
                            <h1>650zł<span> <s>950zł</s></span></h1>
                            <h4>Koncert</h4>
                            <div class="text">Wspólne bębnienie jest ponad podziałami kulturowymi i społecznymi, gdyż nie używa się w nim słów, a rytm rozumie i czuje każdy.</div>
                        </div>
                        <div class="table-content">
                            <ul>
                                <li>Dojazd</li>
                                <li>Sala</li>
                                <li>120 minut zajęć</li>
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
                            <h1>450zł<span> <s>650zł</s></span></h1>
                            <h4>Warsztaty Online</h4>
                            <div class="text">Dzięki prezentacjom nt. Afryki uruchamiamy wyobraźnię dzieci, dlatego bęben staje się nie tylko instrumentem muzycznym a jest sposobem na przeniesienie się do świata odległej kultury.</div>
                        </div>
                        <div class="table-content">
                            <ul>
                                <li>Ćwiczenia w domu</li>
                                <li>Kontakt z Instruktorem</li>
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
