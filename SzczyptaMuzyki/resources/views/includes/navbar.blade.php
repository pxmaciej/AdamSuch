<header class="main-header">

    <div class="header-top">
        <div class="container">
            <div class="inner-container clearfix">
                <div class="social-links pull-left">
                    <ul class="social-list">
                    </ul>
                </div>
                <div class="header-info pull-right">
                    <ul class="info-list">
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:733 499 681">733 499 681</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@example.com">kontakt@szczyptamuzyki.pl</a>
                        </li>
                              <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                            <li>
                                <i class="fas fa-user"></i>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif




                    @else
                        <li class="dropdown">
                            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role == 'admin')
                                <a class=" dropdown-item" href="/dashadmin">Kokpit</a>

                                <a class=" dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                                <a class=" dropdown-item" href="/movielist">Lista Filmów</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="/"><img src="{{ asset('images/logo.png')}}" alt=""></a></figure>
                </div>
                <div class="nav-outer pull-right clearfix">
                    <div class="menu-area">
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="/">Strona Główna</a></li>
                                    <li><a href="/about">O Mnie</a></li>
                                    <li><a href="/class">Zajęcia</a>
                                    </li>
                                    <li><a href="/gallery">Galeria</a></li>
                                    <li><a href="/pricing">Cennik</a></li>
                                    <li><a href="/event">Nasze Wydarzenia</a></li>
                                    <li><a href="/contact">Kontakt</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box"><a href="/"><img src="images/small-logo.png" alt=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current dropdown"><a href="/">Strona Głowna</a></li>
                            <li class="dropdown"><a href="/about">O Mnie</a></li>
                            <li class="dropdown"><a href="/class">Zajęcia</a>
                            </li>
                            <li><a href="/gallery">Galeria</a></li>
                            <li><a href="/pricing">Cennik</a></li>
                            <li><a href="/event">Nasze Wydarzenia</a></li>
                            <li><a href="/contact">Kontakt</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div><!-- sticky-header end -->
</header>
