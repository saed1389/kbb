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

<!-- preloader -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>
<!-- preloader end  -->

<!-- back-to-top-start  -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="far fa-angle-double-up"></i>
</button>
<!-- back-to-top-end  -->

<!-- search popup start -->
<div class="search__popup">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="search__wrapper">
                    <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                            <a href="/">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-50">
                                {{--<object data="{{ asset('assets/img/kbb-logo.svg') }}"/>--}}
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
                        <form action="#">
                            <div class="search__input">
                                <input class="search-input-field" type="text" placeholder="Type here to search...">
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
<!-- search popup end -->

<!-- tp-offcanvus-area-start -->
<div class="tpoffcanvas-area">
    <div class="tpoffcanvas">
        <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="tpoffcanvas__logo">
            <a href="/">
                <img src="{{ asset('front/assets/img/logo/footer-1.png') }}" alt="">
            </a>
        </div>
        <div class="tpoffcanvas__title">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima incidunt eaque a cumque, porro maxime autem sed.</p>
        </div>
        <div class="tp-main-menu-mobile d-xl-none"></div>
        <div class="tpoffcanvas__contact-info">
            <div class="tpoffcanvas__contact-title">
                <h5>Contact us</h5>
            </div>
            <ul>
                <li>
                    <i class="fa-light fa-location-dot"></i>
                    <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">Melbone st, Australia, Ny 12099</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:solaredge@gmail.com">themepure@gmail.com</a>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <a href="tel:+48555223224">+48 555 223 224</a>
                </li>
            </ul>
        </div>
        <div class="tpoffcanvas__input">
            <div class="tpoffcanvas__input-title">
                <h4>Get UPdate</h4>
            </div>
            <form action="#">
                <div class="p-relative">
                    <input type="text" placeholder="Enter mail">
                    <button>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="tpoffcanvas__social">
            <div class="social-icon">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- tp-offcanvus-area-end -->

@include('frontend.layouts.header')

@yield('content')

@include('frontend.layouts.footer')


<!-- JS here -->

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
