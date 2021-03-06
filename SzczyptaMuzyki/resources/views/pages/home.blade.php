@extends('layouts.app')
@section('content')
<!-- page wrapper -->
    <section class="main-slider">
        <div class="main-slider-carousel owl-carousel owl-theme nav-style-one">

            <div class="slide" style="background-image:url(images/main-slider/slider-1.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h3>Najlepszy Wybór</h3>
                        <h1 class="text-white">Edukacja Muzyczna Dzieci</h1>
                        <div class="btn-box"><a href="/contact" class="theme-btn">Kontakt</a></div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(images/main-slider/slider-2.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h3>Warsztaty</h3>
                        <h1 class="text-white">Warsztaty Online!</h1>
                        <div class="btn-box"><a href="/contact" class="theme-btn">Kontakt</a></div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(images/main-slider/slider-3.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h3>Wyjątkowa Oferta</h3>
                        <h1 class="text-white">Kreatywne zajęcia dla Twojego dziecka</h1>
                        <div class="btn-box"><a href="/contact" class="theme-btn">Kontakt</a></div>
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
                            <h5>Informacje</h5>
                            <h1>Witamy w serwisie Szczypta muzyki</h1>
                        </div>
                        <div class="bold-text">„Muzyka to najlepszy język do poruszania serc ludzi na całym świecie.”<p class="font-italic text-right">Jimmy Page</p></div>
                        <div class="text">
                            <p>Strona <strong> SZCZYPTA MUZYKI </strong> powstała z pasji do muzyki oraz potrzeby szerzenia edukacji muzycznej wśród najmłodszych dzieci.
                                Oferta skierowana jest dla dzieci zarówno w szkole, jak i w przedszkolu.
                                Warsztaty mają na celu pobudzenie u dzieci kreatywności i twórczości w kontakcie z muzyką.
                                W ofercie zarówno warsztaty stacjonarne z możliwością dojazdu do placówki w dowolnym miejscu w Polsce jak i - warsztaty on-line.
                                Serdecznie zapraszam!</p>
                        </div>
                        <div class="btn-box"><a href="/class" class="theme-btn">Warsztaty</a></div>
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
                    <div class="inner-content warsztaty mt-2">
                        <div class="sec-title style-two pt-4">
                            <h5>Usługi</h5>
                            <h1>Warsztaty Muzyczne</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 carousel-column">
                    <div class="carousel-content">
                        <div class="services-carousel owl-carousel owl-theme">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="fas fa-music"></i></div>
                                    <h3><a href="#">Koncerty</a></h3>
                                    <div class="text">Wybierz nadchodzące wydarzenie i obejrzyj je na własnym ekranie</div>
                                </div>
                            </div>
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="fas fa-graduation-cap"></i></div>
                                    <h3><a href="#">Lekcje Online</a></h3>
                                    <div class="text">Zobaczcie nasze warsztaty internetowe wypełnione dobrą zabawą</div>
                                </div>
                            </div>
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-drum"></i></div>
                                    <h3><a href="#">Lekcje Rytmiki</a></h3>
                                    <div class="text">Pobudź kreatywność biorąc instrument do rąk</div>
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
                <h5>Zajęcia</h5>
                <h1>Edukacja dla twojego<br />Dziecka</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="/class-details/1"><img src="images/resource/class-5.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="/class-details/1"><i class="flaticon-next"></i></a></div>
                            <h3><a href="/class-details/1">Warsztaty gry na bębnach</a></h3>
                            <div class="price"><s>750zł</s> 450zł</div>
                            <div class="text">Warsztaty to niepowtarzalna okazja do zrozumienia, wygrywania i przeżywania energetycznych rytmów z Afryki Zachodniej.</div>
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
                            <div class="text">Wspólne bębnienie jest ponad podziałami kulturowymi i społecznymi, gdyż nie używa się w nim słów, a rytm rozumie i czuje każdy.</div>
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
                            <div class="text">Dzięki prezentacjom nt. Afryki uruchamiamy wyobraźnię dzieci, dlatego bęben staje się nie tylko instrumentem muzycznym a jest sposobem na przeniesienie się do świata odległej kultury.</div>
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
                            <h5>Warsztaty Muzyczne</h5>
                            <h1>Warsztaty Online<br />są dla Ciebie Jeśli:</h1>
                        </div>
                        <div class="inner-box">
                            <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="fas fa-hourglass-end"></i></div>
                                <h3>Cenisz sobie czas</h3>
                                <div class="text">Nie możesz lub nie chcesz brać udziału w systematycznych lekcjach stacjonarnych</div>
                            </div>
                            <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="fas fa-home"></i></div>
                                <h3>Lubisz ćwiczyć w domu</h3>
                                <div class="text">Potrzebujesz powtórzyć poznane już techniki gry na bębnach</div>
                            </div>
                            <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="fas fa-coins"></i></div>
                                <h3>Chcesz zaoszczędzić</h3>
                                <div class="text">Zainwestuj mniej niż w zajęcia stacjonarne</div>
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
                <h5>Instruktor</h5>
                <h1>Nasz Instruktor<br />Poprowadzi cię przez Muzykę</h1>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 block-column">
                    <div class="teachers-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-holder">
                                <figure class="image-box"><a href="#"><img src="images/resource/teacher-2.png" alt=""></a></figure>
                            </div>
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
    </section>
    <!-- our-teachers end -->


    <!-- event-section -->
    <section class="event-section" style="background-image: url(images/background/event-bg.jpg);">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
        </div>
        <div class="container">
            <div class="sec-title centred">
                <h5>Wydarzenia</h5>
                <h1>Nasze Wydarzenia</h1>
            </div>
            <div class="row">
        @forelse ($savedevents as $event)
                <div class="col-xl-6 col-lg-12 col-md-12 event-block">
                    <div class="event-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="event-details.html"><img src="storage/events/{{$event->img_name}}" alt=""></a></figure>
                            <div class="content-box">
                                <div class="date">{{$event->start_date}}</div>
                                <h3><a href="event-details.html">{{$event->title}}</a></h3>
                                <div class="text">{{$event->content}}</div>
                            </div>
                        </div>
                    </div>
                </div>
        @empty
        @endforelse
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
                            <h5>Opinie</h5>
                            <h1>Co o nas mówią:</h1>
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
                                    <h4>Jak wziąć udział w warsztatach?</h4>
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
                                    <h4>Na jak długo uzyskam dostęp?</h4>
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
                                    <h4>Czy mogę zmienić termin warsztatów?</h4>
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
                <h3>Dołącz do Zajęć</h3>
                <h1>WYBIERZ SIĘ ZE MNĄ<br />W NIEPOWTARZALNĄ MUZYCZNĄ PODRÓŻ!</h1>
                <div class="text">Indywidualne Lekcje Gry Online<br />Warsztaty Muzyczne Online</div>
                <div class="btn-box"><a href="/pricing" class="theme-btn">Dołącz Teraz</a></div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- gallery-section -->
    <section class="gallery-section sec-pad centred">
        <div class="container-fluid">
            <div class="sec-title">
                <h5>Galeria</h5>
                <h1>Nasza Foto Galeria</h1>
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
                <div class="gallery-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </div>
                </div>
                <div class="gallery-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </div>
                </div>
                <div class="gallery-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/6.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery-section end -->
@endsection





