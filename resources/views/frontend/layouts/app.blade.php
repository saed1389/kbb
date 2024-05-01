<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/img/logo/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/slick.css') }}">
    @if(!request()->is('etkinlik-takvim'))
    <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css') }}">
    @else
        <link href="https://cdn.jsdelivr.net/npm/flaticon-test-uicons@1.7.2/css/all/all.min.css" rel="stylesheet">
    @endif
    <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
    @stack('styles')
</head>
<body>
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="far fa-angle-double-up"></i>
</button>
<div class="search__popup">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="search__wrapper">
                    <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                            <a href="/">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-50">
                            </a>
                        </div>
                        <div class="search__close">
                            <button type="button" class="search__close-btn search-close-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="search__form">
                        <form action="{{ route('search') }}" method="get">
                            <div class="search__input">
                                <input class="search-input-field" type="text" name="ara" placeholder="Aramak için buraya yazınız...">
                                <span class="search-focus-border"></span>
                                <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tpoffcanvas-area">
    <div class="tpoffcanvas">
        <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="tpoffcanvas__logo">
            <a href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-50">
            </a>
        </div>
        <div class="tp-main-menu-mobile d-xl-none"></div>
        <div class="tpoffcanvas__contact-info">
            <div class="tpoffcanvas__contact-title">
                <h5>Bize Ulaşın</h5>
            </div>
            <ul>
                <li>
                    <i class="fa-light fa-location-dot"></i>
                    <a href="javascript:void (0)" >Çobançeşme Sanayi Cad. No:44 Nish İstanbul A Blok Daire: 8 Yenibosna-İstanbul</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:kbb@kbb.org.tr">kbb@kbb.org.tr</a>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <a href="tel:+902122344481">90 (212) 234 44 81</a>
                </li>
            </ul>
        </div>
        <div class="tpoffcanvas__social">
            <div class="social-icon">
                <a href="https://twitter.com/tkbbvebbcd" target="-_blank"><i class="fab fa-x"></i></a>
                <a href="https://www.instagram.com/tkbbvebbcd/" target="-_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/T%C3%BCrk-Kulak-Burun-Bo%C4%9Faz-ve-Ba%C5%9F-Boyun-Cerrahisi-Derne%C4%9Fi-493168617369439/" target="-_blank"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
@include('frontend.layouts.header')
@yield('content')
@include('frontend.layouts.footer')
<script src="{{ asset('front/assets/js/jquery.js') }}"></script>
<script src="{{ asset('front/assets/js/waypoints.js') }}"></script>
<script src="{{ asset('front/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/assets/js/slick.js') }}"></script>
<script src="{{ asset('front/assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('front/assets/js/purecounter.js') }}"></script>
<script src="{{ asset('front/assets/js/wow.js') }}"></script>
<script src="{{ asset('front/assets/js/nice-select.js') }}"></script>
<script src="{{ asset('front/assets/js/swiper-bundle.js') }}"></script>
<script src="{{ asset('front/assets/js/isotope-pkgd.js') }}"></script>
<script src="{{ asset('front/assets/js/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('front/assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('front/assets/js/main.js') }}"></script>
@stack('scripts')
</body>
</html>
