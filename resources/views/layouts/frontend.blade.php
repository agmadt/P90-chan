<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>P-90 Chan - @yield('title')</title>
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
    <header class="header-two">
        <div class="header-logo-menu sticker">
            <div class="container">
                <div class="logo-menu-bg">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="logo">
                                <a href="{{ route('index') }}">
                                    @if (!empty($siteSetting['setting_logo_header']))
                                        <img src="{{ asset('img/' . $siteSetting['setting_logo_header']) }}" class="img-responsive">
                                    @else
                                        <h2>Logo</h2>
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 hidden-sm hidden-xs">
                            <div class="mainmenu-area">
                                <div class="mainmenu">
                                    <nav>
                                        <ul id="nav">
                                            <li class="current"><a href="{{ route('index') }}">Beranda</a></li>
                                            <li><a href="{{ route('about') }}">Tentang</a></li>
                                            <li><a href="{{ route('news') }}">Berita</a></li>
                                            <li><a href="{{ route('donation') }}">Donasi</a></li>
                                            <li><a href="{{ route('contact-us') }}">Kontak Kami</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <ul class="header-search">
                                    <li class="search-menu">
                                        <i id="toggle-search" class="fa fa-search"></i>
                                    </li>
                                </ul>
                                <div class="search">
                                    <div class="search-form">
                                        <form id="search-form" action="{{ route('search') }}" method="GET">
                                            <input type="search" placeholder="Cari.." name="query" />
                                            <button type="submit">
                                                <span><i class="fa fa-search"></i></span>
                                            </button>
                                        </form>                                
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li class="current"><a href="{{ route('index') }}">Beranda</a></li>
                                    <li><a href="{{ route('about') }}">Tentang</a></li>
                                    <li><a href="{{ route('news') }}">Berita</a></li>
                                    <li><a href="{{ route('donation') }}">Donasi</a></li>
                                    <li><a href="{{ route('contact-us') }}">Kontak Kami</a></li>
                                </ul>
                            </nav>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-info-container text-center section-padding">
                        <div class="footer-logo">
                            <a href="{{ route('index') }}">
                                @if (!empty($siteSetting['setting_logo_footer']))
                                        <img src="{{ asset('img/' . $siteSetting['setting_logo_footer']) }}" class="img-responsive">
                                @else
                                    PAMBAYI LOGO
                                @endif
                            </a>
                        </div>
                        <div class="footer-info">
                            @if (!empty($siteSetting['setting_address']))
                                <span><i class="fa fa-map-marker"></i>{{ $siteSetting['setting_address'] }}</span>
                            @endif
                            @if (!empty($siteSetting['setting_email']))
                                <span><i class="fa fa-envelope"></i>{{ $siteSetting['setting_email'] }}</span>
                            @endif
                            @if (!empty($siteSetting['setting_phone']))
                                <span><i class="fa fa-phone"></i>{{ $siteSetting['setting_phone'] }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-container">
                        <div class="row">
                            <div class="col-md-6">
                                <span>&copy; 2018 <a href="#">Pambayi</a>. All rights reserved</span>
                            </div>
                            <div class="col-md-6">
                                <div class="social-links">
                                    @if (!empty($siteSetting['setting_facebook_url']))
                                        <a href="{{ $siteSetting['setting_facebook_url'] }}"><i class="fa fa-facebook"></i></a>
                                    @endif
                                    @if (!empty($siteSetting['setting_twitter_url']))
                                        <a href="{{ $siteSetting['setting_twitter_url'] }}"><i class="fa fa-twitter"></i></a>
                                    @endif
                                    @if (!empty($siteSetting['setting_instagram_url']))
                                        <a href="{{ $siteSetting['setting_instagram_url'] }}"><i class="fa fa-instagram"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    @yield('extrascripts')
</body>
</html>
