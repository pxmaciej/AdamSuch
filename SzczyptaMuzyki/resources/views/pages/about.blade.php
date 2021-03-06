@extends('layouts.app')
@section('content')

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>O nas</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Główna</a></li>
                    <li>O nas</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- about-section -->
    <section class="about-section style-two">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
            <div class="icon icon-3"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>O Nas</h5>
                            <h1>Nazywam się Adam pochodzę z Legnicy</h1>
                        </div>
                        <div class="bold-text">Od prawie dwudziestu lat moją pasją jest gra na bębnach afrykańskich różnego pochodzenia.</div>
                        <div class="text">
                            <p>Talent do gry na instrumentach perkusyjnych odkryłem w 2002 roku i kształciłem go od najlepszych instruktorów.
                                Doświadczenie zawodowe zdobywałem grając na bębnach podczas różnych imprez tematycznych i okolicznościowych z muzykami z całej Polski i Europy.
                                Moją pasję przełożyłem na pracę z dziećmi i młodzieżą.
                                Od kilku lat prowadzę warsztaty muzyczne dla dzieci w przedszkolach i szkołach w całej Polsce.
                                Nieustannie pragnę dzielić się swoją wiedzą i doświadczeniem z młodym pokoleniem.
                                Muzyka jest esencją mojego życia - miłość do niej pozwoliła mi przezwyciężyć wszystkie przeciwności losu.
                                Zapraszam do wspólnej podróży muzycznej.</p>
                        </div>
                        <div class="btn-box"><a href="/contact" class="theme-btn">Kontakt</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image image-1"><img src="images/resource/about-6.jpg" alt=""></figure>
                        <figure class="image image-2"><img src="images/resource/about-5.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- classes-section -->
    <section class="classes-section style-two sec-pad">
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
            <div class="sec-title centred">
                <h5>Zajęcia</h5>
                <h1>Edukacja dla Twojego<br />Dziecka</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="/class-details/1"><img src="images/resource/class-1.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="/class-details/1"><i class="flaticon-next"></i></a></div>
                            <h3><a href="/class-details/1">Warsztaty Stacjonarne</a></h3>
                            <div class="price"><s>750zł</s> 450zł</div>
                            <ul class="info-box">
                                <li>Wiek: <span>3-6 lat</span></li>
                                <li>Grupa: <span> 25</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="/class-details/2"><img src="images/resource/class-2.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="/class-details/2"><i class="flaticon-next"></i></a></div>
                            <h3><a href="/class-details/2">Koncert</a></h3>
                            <div class="price"><s>750zł</s> 450zł</div>
                            <ul class="info-box">
                                <li>Wiek: <span>od 3 Lat</span></li>
                                <li>Grupa: <span>25-*</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="/class-details/3"><img src="images/resource/class-3.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="/class-details/3"><i class="flaticon-next"></i></a></div>
                            <h3><a href="/class-details/3">Warsztaty Online</a></h3>
                            <div class="price"><s>450zł</s> 250zł</div>
                            <ul class="info-box">
                                <li>Wiek: <span>3-* lat</span></li>
                                <li>Grupa: <span>*</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- classes-section end -->


    <!-- our-teachers -->
    <section class="our-teachers style-three about-page sec-pad centred">
        <div class="container">
            <div class="sec-title">
                <h5>Prowadzący</h5>
                <h1>Nasz specjalista<br />od Muzyki</h1>
            </div>
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 block-column mx-auto">
                        <div class="teachers-block-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="#"><img src="images/resource/teacher-2.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="#">Adam Such</a></h3>
                                    <span class="designation">Instruktor</span>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-teachers end -->


    <!-- testimonial-video -->
    <section class="testimonial-video">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-y"></div>
        </div>
        <div class="outer-container clearfix">
            <div class="testimonial-column">
                <div class="testimonial-content">
                    <div class="sec-title style-two">
                        <h5>Opinie</h5>
                        <h1>Co o nas mówią</h1>
                    </div>
                    <div class="inner-content">
                        <div class="client-testimonial-carousel owl-carousel owl-theme">
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="author">British International School Gdańsk <span></span></div>
                                    <ul class="rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="text">Dziękujemy bardzo za przeprowadznie warsztatów o bębnach afrykańskich dla uczniów z British International School Gdańsk</div>
                                </div>
                            </div>
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="author">Bajkowe Prywatne przedszkole<span> nr 6</span></div>
                                    <ul class="rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="text">Przedskolaki, Dyrekcja i Nauczycielki Bajkowego Prywatnego Przedszkola w Jaśle składają serdeczne Podziękowanie za aktywne włączenie się do Akcji "Cała Polska Czyta Dzieciom"</div>
                                </div>
                            </div>
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="author">Publiczne przedszkole "Radość"<span> nr 27</span></div>
                                    <ul class="rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="text">Dziękujemy za warsztaty instrumentalno- muzyczne bębnów afrykańskich dla dzieci w przedszkolu Radość w Kaliczy. Zajęcia były bardzo twórcze i zachęciły do wspólnej zabawy.</div>
                                </div>
                            </div>
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="author">Misiowa Akademia Przedszkole Niepubliczne<span></span></div>
                                    <ul class="rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="text">Podziękowania dla Adama za wprowadzenie w swiat afrykańskich rytmów i wywołanie uśmiechów na twarzach przedszkolaków</div>
                                </div>
                            </div>
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="author">Publiczna Szkoła Podstawowa w Mierzynie<span></span></div>
                                    <ul class="rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="text">Warsztaty były bardzo ciekawe i twórcze.</div>
                                </div>
                            </div>
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="author">Szkrabik<span> Barbara Ławorynowicz</span></div>
                                    <ul class="rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="text">Podziękowania za przeprowadznie warsztatów gry na bębnach dla przedszkolaków</div>
                                </div>
                            </div>

                        </div>

                        <!--Client Thumbs Carousel-->
                        <div class="client-thumb-outer">
                            <div class="client-thumbs-carousel owl-carousel owl-theme">
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="images/resource/testimonial-1.jpg" alt=""></figure>
                                </div>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="images/resource/testimonial-2.png" alt=""></figure>
                                </div>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="images/resource/testimonial-3.jpg" alt=""></figure>
                                </div>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="images/resource/testimonial-4.jpg" alt=""></figure>
                                </div>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="images/resource/testimonial-5.jpg" alt=""></figure>
                                </div>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="images/resource/testimonial-6.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-column">
                <div class="video-inner" style="background-image: url(images/background/video-bg.jpg);">
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-video end -->


    <!-- fact-counter -->
    <section class="fact-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="icon-box"><i class="flaticon-calendar"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="125">0</span>
                        </div>
                        <div class="text">Ilość Zajęć</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="icon-box"><i class="flaticon-boy"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="750">0</span>
                        </div>
                        <div class="text">Przeprowadzonych Warsztatów</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-counter end -->


    <!-- activities-section -->
    <section class="activities-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box clearfix">
                        <figure class="image"><img src="images/resource/activities-2.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="title-box">
                            <div class="sec-title style-two">
                                <h5>Aktywności</h5>
                                <h1>Aktywności podczas warsztatów</h1>
                            </div>
                            <div class="text"> O ile nie każde ucho słyszy subtelności linii melodycznej, o tyle rytm i wibracja odczuwane są nawet przez niesłyszących.</div>
                        </div>
                        <div class="inner-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="flaticon-abc-block"></i></div>
                                        <h3><a href="/pricing">Rozwija skupienie, wydłuża czas koncentracji</a></h3>
                                        <div class="text">Rytm bębna potrafi wprowadzić w trans, co było i jest nadal stosowane od tysięcy lat przez kultury pierwotne podczas wszelakich rytuałów plemiennych</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="flaticon-teddy-bear"></i></div>
                                        <h3><a href="#">Integracja grupy poprzez wspólną kreatywność</a></h3>
                                        <div class="text">Wiele osób uczestniczących w warsztatach podchodzi z pewną dozą dystansu i nieśmiałości. Jednak wspólny rytm jest tak porywający, że osoby takie szybko przełamują swoje wyobrażenia o sobie i dają się ponieść wspólnemu bębnieniu</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="far fa-laugh-wink"></i></div>
                                        <h3><a href="/pricing">Relaksacja, redukcja napięcia emocjonalnego</a></h3>
                                        <div class="text">Każdego dnia doświadczamy najróżniejszych sytuacji stresogennych. Pozwólmy napięciom wybrzmieć się na membranie</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="single-item wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="fas fa-running"></i></div>
                                        <h3><a href="/pricing">Poprawienie koordynacji ruchowej</a></h3>
                                        <div class="text">W trakcie bębnienia obie ręce mają do wykonania tak wiele różnych zadań, że mózg zmuszony jest zwiększyć przepływ impulsów pomiędzy półkulami</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- activities-section end -->
@endsection
