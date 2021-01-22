@extends('layouts.app')
@section('content')


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Our Gallery</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Pages</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- portfolio-section -->
    <section class="gallery-page-section">
        <div class="container">
            <div class="sortable-masonry">
                <div class="filters">
                    <ul class="filter-tabs filter-btns centred clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        <li class="filter" data-role="button" data-filter=".children">Children</li>
                        <li class="filter" data-role="button" data-filter=".nature ">Nature</li>
                        <li class="filter" data-role="button" data-filter=".program">Program</li>
                        <li class="filter" data-role="button" data-filter=".library">Library</li>
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all program children nature">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/6.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all children library">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all program nature">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all branding library">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/9.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all program children nature">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/10.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all children program library">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/11.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/11.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all program children nature">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/12.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/12.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all children library">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/13.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/13.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all program nature">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/14.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/14.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-section end -->


@endsection
