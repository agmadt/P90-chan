<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>P-90 Chan</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/frontend/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/bootstrap-toggle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/meanmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/preview.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/responsive.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/frontend/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>
    <div id="app">
        
        <header class="header-two">
            <!--Logo Mainmenu Start-->
            <div class="header-logo-menu sticker">
                <div class="container">
                    <div class="logo-menu-bg">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="logo">
                                    <a href="index.html">
                                        <h2>Logo</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-9 hidden-sm hidden-xs">
                                <div class="mainmenu-area">
                                    <div class="mainmenu">
                                        <nav>
                                            <ul id="nav">
                                                <li class="current"><a href="index.html">Beranda</a></li>
                                                <li><a href="about.html">Tentang</a></li>
                                                <li><a href="about.html">Berita</a></li>
                                                <li><a href="about.html">Donasi</a></li>
                                                <li><a href="about.html">Kontak Kami</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <ul class="header-search">
                                        <li class="search-menu">
                                            <i id="toggle-search" class="fa fa-search"></i>
                                        </li>
                                    </ul>
                                    <!--Search Form-->
                                    <div class="search">
                                        <div class="search-form">
                                            <form id="search-form" action="#">
                                                <input type="search" placeholder="Search here..." name="search" />
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </form>                                
                                        </div>
                                    </div>
                                    <!--End of Search Form-->
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <!--End of Logo Mainmenu-->
            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="current"><a href="index.html">Beranda</a></li>
                                        <li><a href="about.html">Tentang</a></li>
                                        <li><a href="about.html">Berita</a></li>
                                        <li><a href="about.html">Donasi</a></li>
                                        <li><a href="about.html">Kontak Kami</a></li>
                                    </ul>
                                </nav>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area end -->  
        </header>

        <div class="slider-area slider-three-area">
            <div class="preview-2">
                <div id="nivoslider" class="slides">    
                    <img src="img/slider/5.jpg" alt="" title="#slider-1-caption1"/>
                    <img src="img/slider/6.jpg" alt="" title="#slider-1-caption2"/>
                </div> 
                <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-content hidden-xs">
                                        <p class="sub-title">Your Child can be a genius</p>
                                        <h1 class="title1">best Education for <br> Kids perfectly</h1>
                                        <div class="banner-readmore">
                                            <a title="Read more" href="#">Enroll your child</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-content hidden-xs">
                                        <p class="sub-title">Learn computer with fun</p>
                                        <h1 class="title1">best Education for<br> Kids perfectly</h1>
                                        <div class="banner-readmore">
                                            <a title="Read more" href="#">Enroll your child</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

        <main>
            @yield('content')
        </main>
    </div>
    <script type="text/javascript" src="{{ asset('js/frontend/vendor/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/bootstrap-toggle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.meanmenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.mixitup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.scrollUp.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.nivo.slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/venobox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/custom.js') }}"></script>
</body>
</html>
