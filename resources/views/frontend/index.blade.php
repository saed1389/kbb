@extends('frontend.layouts.app')
@section('title') Anasayfa @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <style>
            .news-slider {
               margin-top: 20px;
            }
            .news-slider .text-content {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(255, 255, 255, 0.75);
                padding: 1em;
                width: 75%;
                height: auto;
            }
            .news-slider .text-content h2 {
                margin: 0;
            }
            .news-slider .text-content p {
                margin: 1em 0;
            }
            .news-slider .text-content a.button-link {
                padding: 0.25em 0.5em;
                position: absolute;
                bottom: 1em;
                right: 1em;
            }
            .news-slider .image-content {
                line-height: 0;
            }
            .news-slider .image-content img {
                max-width: 100%;
            }
            .news-slider .news-pager {
                text-align: left;
                display: block;
                margin: 0.2em 0 0;
                padding: 0;
                list-style: none;
            }
            .news-slider .news-pager li {
                display: inline-block;
                padding: 0.6em;
                margin: 0 0 0 1em;
            }
            .news-slider .news-pager li.sy-active a {
                color: white;
                background:#076bae ;
                padding: 5px 10px;
            }
            .news-slider .news-pager li a {
                font-weight: 500;
                text-decoration: none;
                display: block;
                color: #222;
            }
            .sy-pager li {
                width: 15px;
                height: 15px;
            }
            .sy-pager li.sy-active a {
                background-color: #076bae;
            }

            .sy-pager {
                margin: 1em 0 10px;

            }
            .swiper-pagination-vertical.swiper-pagination-bullets, .swiper-vertical>.swiper-pagination-bullets {
                right: var(--swiper-pagination-right,25px) !important;
                left: var(--swiper-pagination-left,auto) !important;
            }
            /* Responsive styles */
            @media (min-width: 768px) {
                .news-slider article {
                    flex-wrap: nowrap;
                }

                .news-slider .text-content,
                .news-slider .image-content {
                    flex: 0 0 50%;
                }
            }

            @media (min-width: 992px) {
                .news-slider .text-content {
                    flex: 0 0 30%;
                }

                .news-slider .image-content {
                    flex: 0 0 70%;
                }
            }

            /* Portfolio */
            .portfolio .sy-controls {
                display: block;
            }
            .portfolio .sy-pager {
                margin: 1.5em 0;
            }
            .portfolio .external-captions {
                background-color: #fff;
                padding: 1em;
            }

            .blog-slider {
                width: 100%;
                position: relative;
                max-width: 100%;
                margin: auto;
                background: #fff;
                box-shadow: 0px 14px 80px rgb(4 4 4 / 32%);
                padding: 25px;
                border-radius: 25px;
                height: 400px;
                transition: all 0.3s;
            }

            .blog-slider-1 {
                width: 100%;
                position: relative;
                max-width: 100%;
                margin: auto;
                background: #fff;
                box-shadow: 0px 14px 80px rgb(4 4 4 / 32%);
                border-radius: 25px;
                transition: all 0.3s;
            }
            .swiper-pagination-vertical.swiper-pagination-bullets, .swiper-vertical>.swiper-pagination-bullets {
                right: 30px;
            }
            @media screen and (max-width: 992px) {
                .blog-slider {
                    max-width: 680px;
                    height: 500px;
                    top: 0 !important;
                }
            }
            @media screen and (max-width: 768px) {
                .blog-slider {
                    margin-top: 100px;
                }
            }
            @media screen and (max-height: 500px) and (min-width: 992px) {
                .blog-slider {
                    height: 350px;
                }
            }
            .blog-slider__item {
                display: flex;
                align-items: center;
            }
            @media screen and (max-width: 768px) {
                .blog-slider__item {
                    flex-direction: column;
                }
            }
            .blog-slider__item.swiper-slide-active .blog-slider__img img {
                opacity: 1;
                transition-delay: 0.3s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > * {
                opacity: 1;
                transform: none;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(1) {
                transition-delay: 0.3s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(2) {
                transition-delay: 0.4s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(3) {
                transition-delay: 0.5s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(4) {
                transition-delay: 0.6s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(5) {
                transition-delay: 0.7s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(6) {
                transition-delay: 0.8s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(7) {
                transition-delay: 0.9s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(8) {
                transition-delay: 1s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(9) {
                transition-delay: 1.1s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(10) {
                transition-delay: 1.2s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(11) {
                transition-delay: 1.3s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(12) {
                transition-delay: 1.4s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(13) {
                transition-delay: 1.5s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(14) {
                transition-delay: 1.6s;
            }
            .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(15) {
                transition-delay: 1.7s;
            }
            .blog-slider__img {
                width: 700px;
                flex-shrink: 0;
                height: 300px;
                background-image: linear-gradient(147deg, #ffffff 0%, #ffffff 74%);
                box-shadow: 4px 13px 30px 1px rgb(38 60 80 / 20%);
                border-radius: 20px;
                transform: translateX(-80px);
                overflow: hidden;
            }
            .blog-slider__img:after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                /*background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);*/
                border-radius: 20px;
                opacity: 0.8;
            }
            .blog-slider__img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                opacity: 0;
                border-radius: 20px;
                transition: all 0.3s;
            }
            @media screen and (max-width: 768px) {
                .blog-slider__img {
                    transform: translateY(-50%);
                    width: 90%;
                }
            }
            @media screen and (max-width: 576px) {
                .blog-slider__img {
                    width: 95%;
                }
            }
            @media screen and (max-height: 500px) and (min-width: 992px) {
                .blog-slider__img {
                    height: 245px;
                }
            }
            .blog-slider__content {
                padding-right: 25px;
            }
            @media screen and (max-width: 768px) {
                .blog-slider__content {
                    margin-top: -80px;
                    text-align: center;
                    padding: 0 30px;
                }
            }
            @media screen and (max-width: 576px) {
                .blog-slider__content {
                    padding: 0;
                }
            }
            .blog-slider__content > * {
                opacity: 0;
                transform: translateY(25px);
                transition: all 0.4s;
            }
            .blog-slider__code {
                color: #7b7992;
                margin-bottom: 15px;
                display: block;
                font-weight: 500;
            }
            .blog-slider__title {
                font-size: 18px;
                font-weight: 700;
                color: #0d0925;
                margin-bottom: 20px;
            }
            .blog-slider__text {
                color: #4e4a67;
                margin-bottom: 30px;
                line-height: 1.5em;
            }
            .blog-slider__button {
                display: inline-flex;
                /*background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);*/
                padding: 15px 35px;
                border-radius: 50px;
                color: #fff;
                box-shadow: 4px 13px 30px 1px rgb(38 60 80 / 20%);
                text-decoration: none;
                font-weight: 500;
                justify-content: center;
                text-align: center;
                letter-spacing: 1px;
            }
            @media screen and (max-width: 576px) {
                .blog-slider__button {
                    width: 100%;
                }
            }
            .blog-slider .swiper-container-horizontal > .swiper-pagination-bullets, .blog-slider .swiper-pagination-custom, .blog-slider .swiper-pagination-fraction {
                bottom: 10px;
                left: 0;
                width: 100%;
            }
            .blog-slider__pagination {
                position: absolute;
                z-index: 21;
                right: 20px;
                width: 11px !important;
                text-align: center;
                left: auto !important;
                top: 50%;
                bottom: auto !important;
                transform: translateY(-50%);
            }
            @media screen and (max-width: 768px) {
                .blog-slider__pagination {
                    transform: translateX(-50%);
                    left: 50% !important;
                    top: 205px;
                    width: 100% !important;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .swiper-pagination-vertical.swiper-pagination-bullets, .swiper-vertical>.swiper-pagination-bullets {
                    top: 55% !important;
                }
            }
            .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
                margin: 8px 0;
            }

            .swiper-container-vertical>.swiper-pagination-bullets {
                right: 30px;
            }
            @media screen and (max-width: 768px) {
                .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
                    margin: 0 5px;
                }
            }
            .blog-slider__pagination .swiper-pagination-bullet {
                width: 20px;
                height: 20px;
                display: block;
                border-radius: 50%;
                background: #062744;
                opacity: 0.2;
                color: white;
                transition: all 0.3s;
            }
            .blog-slider__pagination .swiper-pagination-bullet-active {
                opacity: 1;
                background: #3126a6;
                height: 20px !important;
                width: 20px !important;
                color: white;
                padding-top: 0;
                border-radius: 50%;
                box-shadow: 0px 0px 20px rgb(176, 203, 236);
            }
            @media screen and (max-width: 768px) {
                .blog-slider__pagination .swiper-pagination-bullet-active {
                    height: 11px;
                    width: 30px;
                }
            }
            /* First we style the container element.  */
            .calendar{
                margin:.25em 10px 10px 0;
                padding-top:5px;
                float:left;
                width:80px;
                background:#ededef;
                background: -webkit-gradient(linear, left top, left bottom, from(#ededef), to(#ccc));
                background: -moz-linear-gradient(top,  #ededef,  #ccc);
                font:bold 30px/40px Arial Black, Arial, Helvetica, sans-serif;
                text-align:center;
                color:#000;
                text-shadow:#fff 0 1px 0;
                border-radius:3px;
                position:relative;
                box-shadow:0 2px 2px #888;
            }

            /* Em element is also styled, it contains the month’s name. */
            .calendar em{
                display:block;
                font:normal bold 11px/30px Arial, Helvetica, sans-serif;
                color:#fff;
                text-shadow:#00365a 0 -1px 0;
                background:#04599a;
                background:-webkit-gradient(linear, left top, left bottom, from(#04599a), to(#00365a));
                background:-moz-linear-gradient(top,  #04599a,  #00365a);
                border-bottom-right-radius:3px;
                border-bottom-left-radius:3px;
                border-top:1px solid #00365a;
            }

            /* Now I am styling the pseudo elements. Container’s pseudo elements (:before and :after) are used to create thos circles, "holes in te paper". */
            .calendar:before, .calendar:after{
                content:'';
                float:left;
                position:absolute;
                top:5px;
                width:8px;
                height:8px;
                background:#111;
                z-index:1;
                border-radius:10px;
                box-shadow:0 1px 1px #fff;
            }
            .calendar:before{left:11px;}
            .calendar:after{right:11px;}

            /*…and em’s pseudo elements are used to create the rings: */
            .calendar em:before, .calendar em:after{
                content:'';
                float:left;
                position:absolute;
                top:-5px;
                width:4px;
                height:14px;
                background:#dadada;
                background:-webkit-gradient(linear, left top, left bottom, from(#f1f1f1), to(#aaa));
                background:-moz-linear-gradient(top,  #f1f1f1,  #aaa);
                z-index:2;
                border-radius:2px;
            }
            .calendar em:before{left:13px;}
            .calendar em:after{right:13px;}
            .margin {
                margin-left: 50px;
            }
            .dropdown-item {
                font-size: 14px !important;
                margin-bottom: 7px;
            }

            .swiper-slide {
                background-position: center;
                background-size: cover;
                padding-top: 60px;
                height: 270px;
            }
            .swiper-slide img {
                display: block;
                width: 100%;
            }

            .popover {
                max-width: 320px;
                top: 125px !important;
                background-color: #fff;
                padding: 7px;
                opacity: 0.9 !important;
                padding-top: 10px;
                -webkit-box-shadow: 8px 8px 21px rgba(23,23,23,.29);
                -moz-box-shadow: 8px 8px 21px rgba(23,23,23,.29);
                box-shadow: 8px 8px 21px rgba(23,23,23,.29);
                border:0px;
            }
            .popover-title
            {   font-family: 'PF DinDisplay Pro Medium';
                color: #4284C3;
                background-color: #fff;
                border: none;
                font-size: 18px;

                padding-bottom: 0px !important;

            }
            .popover hr
            {
                margin: 10px 0px 0px 0px;
            }
            .popover-body {
                color: #000;
                font-size: 15px;
                padding: 3px 15px;
                padding-bottom: 30px;
                font-family: 'PF DinDisplay Pro Regular';
            }
            .bs-popover-auto[x-placement^=bottom] .arrow::before, .bs-popover-bottom .arrow::before{
                border-color:transparent;
            }
            .popover-body i {
                padding-right: 10px;
                color: #377fd0 !important;
            }
            .popover-body a {

                color: #dc71a2;
            }
            #events :focus {
                outline: -webkit-focus-ring-color auto 0px;
            }
            .popover-header {
                font-family: 'PF DinDisplay Pro Bold';
                border:0px;
                padding: .5rem .75rem;
                margin-bottom: 0;
                color: #076bae;
                font-size: 1rem;
                background-color: #ffffff;
            }
            .event {
                width: 98px;
                height: 99px;
                margin: 0 auto;
                text-align: center;
                background-repeat:no-repeat;
                background-size:cover;
                -moz-transition: all 0.3s;
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
            }
        </style>
    @endpush
    <main>
        <div class="tp-mission-2__area tp-mission-2__space p-relative fix z-index" style="background: aliceblue;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="blog-slider">
                            <div class="blog-slider__wrp swiper-wrapper">
                                @foreach($sliders as $slider)
                                    <div class="blog-slider__item swiper-slide">
                                        <div class="blog-slider__img">
                                            <img src="{{ asset('uploads/news/crop/'.$slider->cropImage) }}" loading="lazy" alt="">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </div>
                                        <div class="blog-slider__content">
                                            <div class="blog-slider__title">{{ $slider->title }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="blog-slider__pagination"></div>
                        </div>
                    </div>
                    <div class="col-md-2">

                        <div class="blog-slider-1 mt-5">
                            <img class="rounded mt-20" src="{{ asset('front/assets/images/Logo-2.jpeg') }}" alt="">
                            <hr>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="padding-top: 0px !important;">
                                        <img src="{{ asset('front/assets/img/IFOS2026.png') }}" />
                                    </div>
                                    <div class="swiper-slide" style="padding-top: 0px !important;">
                                        <img src="{{ asset('front/assets/img/kbb_201120231317.jpg') }}" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            {{--<img class="rounded" src="{{ asset('front/assets/img/IFOS2026.png') }}" alt="">--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tp-mission-2__area tp-mission-2__space p-relative fix z-index grey-bg">
            <div class="tp-mission-2__shape">
                <img src="{{ asset('front/assets/img/mission/mission-shape-1.png') }}" alt="">
            </div>
            <div class="tp-mission-2__plr">
                <div class="container-fluid g-0">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="tp-mission-2__left-box">

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 mb-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-feature__wraper" style="padding: 17px 17px 25px 30px">
                                            <div class="tp-feature__item z-index">
                                                <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                    <h4 class="tp-feature__title-sm">Onam Formları</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-feature__wraper" style="padding: 17px 17px 25px 30px">
                                            <div class="tp-feature__item z-index">
                                                <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                    <h4 class="tp-feature__title-sm">Başkana Ulaş</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-feature__wraper" style="padding: 17px 17px 25px 30px">
                                            <div class="tp-feature__item z-index">
                                                <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                    <h4 class="tp-feature__title-sm">Bir Fikrim Var</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-feature__wraper" style="padding: 17px 17px 25px 30px">
                                            <div class="tp-feature__item z-index">
                                                <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                    <h4 class="tp-feature__title-sm">KBB Doktor Bul</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-feature__wraper" style="padding: 17px 17px 25px 30px">
                                            <div class="tp-feature__item z-index">
                                                <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                    <h4 class="tp-feature__title-sm">Bize Ulaşın</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                    <div class="tp-feature__wraper">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                <h4 class="tp-feature__title-sm">Online Kütüphane</h4>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-book"></i>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".5s">
                                    <div class="tp-feature__wraper">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                <h5 class="tp-feature__title-sm">Hasta Bilgilendirme Broşürleri</h5>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-diet"></i>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".7s">
                                    <div class="tp-feature__wraper">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                <h6 class="tp-feature__title-sm">Yöresel Dernekler ve Alt Birim Dalları</h6>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-map"></i>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".3s">
                                    <div class="tp-feature__wraper">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                <h4 class="tp-feature__title-sm">Toplantı Takvimi</h4>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-calendar"></i>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".5s">
                                    <div class="tp-feature__wraper">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                <h4 class="tp-feature__title-sm">Başkanımızın 100.yıl mesajı</h4>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-handshake"></i>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".7s">
                                    <div class="tp-feature__wraper">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                <h4 class="tp-feature__title-sm">Turkish Archives of <span style="font-size: 13px">Otorhinolaryngology</span></h4>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-giving"></i>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tp-feature-2__area tp-feature-2__bg pt-120 pb-90" data-background="{{ asset('front/assets/images/hastalar_bilgilendirme.jpg') }}" style="background-repeat: no-repeat; background-position: center;">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="tp-donate__section-title pb-50">
                            <h5 class="tp-section-title" style="color: white; position: relative; z-index: 99; font-size: 35px">Hastalar için Bilgilendirme</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md mb-30 ">
                        <div class="tp-feature-2__item text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="tp-feature-2__icon">
                                <span><img src="{{ asset('front/assets/images/kbbkulak.png') }}" ></span>
                            </div>
                            <h4 class="tp-feature-2__title-sm">Kulak</h4>
                        </div>
                    </div>
                    <div class="col-md mb-30">
                        <div class="tp-feature-2__item text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="tp-feature-2__icon">
                                <span><img src="{{ asset('front/assets/images/kbbburun.png') }}" ></span>
                            </div>
                            <h4 class="tp-feature-2__title-sm">Burun</h4>
                        </div>
                    </div>
                    <div class="col-md mb-30">
                        <div class="tp-feature-2__item text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature-2__icon">
                                <span><img src="{{ asset('front/assets/images/kbbbogaz.png') }}" ></span>
                            </div>
                            <h4 class="tp-feature-2__title-sm">Boğaz</h4>
                        </div>
                    </div>
                    <div class="col-md mb-30">
                        <div class="tp-feature-2__item text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                            <div class="tp-feature-2__icon">
                                <span><img src="{{ asset('front/assets/images/kbbpediatrik.png') }}" ></span>
                            </div>
                            <h4 class="tp-feature-2__title-sm">Pediatrik KBB</h4>
                        </div>
                    </div>
                    <div class="col-md mb-30">
                        <div class="tp-feature-2__item text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                            <div class="tp-feature-2__icon">
                                <span><img src="{{ asset('front/assets/images/kbbtumor.png') }}" ></span>
                            </div>
                            <h4 class="tp-feature-2__title-sm">KBB Tümörler</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tp-brand-2__area">
            <div class="container">
                <div class="swiper mySwiper1 swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper margin" id="swiper-wrapper-8a33a79be24f729c" aria-live="polite">
                        <div class="swiper-slide swiper-slide-active" style="width: 389.25px; margin-right: 80px;" role="group" aria-label="1 / 9">
                            <div class="col-12">
                                <a data-container="#events" data-html="true" data-placement="bottom" data-trigger="focus" data-toggle="popover" tabindex="0" title="Doğu Marmara KBB BBC Derneği Eğitim Toplantısı <hr>"
                                   data-bs-content="<i class='fa fa-calendar' aria-hidden='true'></i> 18 Nisan 2024 Perşembe<br><i class='fa fa-map-marker' aria-hidden='true'></i>  Ramada By Wyndham Sakarya <br><i class='fa fa-link' aria-hidden='true'></i> <a href='/etkinlik/dogu-marmara-kbb-bbc-dernegi-egitimtoplantis-199' target='_blank'>Detay</a><br>">
                                    <p class="calendar"> <em>Mart</em>7 <br><span style="font-size: 15px">2024</span></p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="width: 389.25px; margin-right: 80px;" role="group" aria-label="2 / 9">
                            <div class="col-12">
                                <a data-container="#events" data-html="true" data-placement="bottom" data-trigger="focus" data-toggle="popover" tabindex="0" title="Doğu Marmara KBB BBC Derneği Eğitim Toplantısı <hr>"
                                   data-bs-content="<i class='fa fa-calendar' aria-hidden='true'></i> 18 Nisan 2024 Perşembe<br><i class='fa fa-map-marker' aria-hidden='true'></i>  Ramada By Wyndham Sakarya <br><i class='fa fa-link' aria-hidden='true'></i> <a href='/etkinlik/dogu-marmara-kbb-bbc-dernegi-egitimtoplantis-199' target='_blank'>Detay</a><br>">
                                    <p class="calendar"> <em>Mart</em>7 <br><span style="font-size: 15px">2024</span></p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 389.25px; margin-right: 80px;" role="group" aria-label="3 / 9">
                            <div class="col-12">
                                <p class="calendar"> <em>Mart</em>7 <br><span style="font-size: 15px">2024</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 389.25px; margin-right: 80px;" role="group" aria-label="4 / 9">
                            <div class="col-12">
                                <p class="calendar"> <em>Mart</em>7 <br><span style="font-size: 15px">2024</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 389.25px; margin-right: 80px;" role="group" aria-label="5 / 9">
                            <div class="col-12">
                                <p class="calendar"> <em>Mart</em>7 <br><span style="font-size: 15px">2024</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 389.25px; margin-right: 80px;" role="group" aria-label="6 / 9">
                            <div class="col-12">
                                <p class="calendar"> <em>Mart</em>7 <br><span style="font-size: 15px">2024</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 389.25px; margin-right: 80px;" role="group" aria-label="7 / 9">
                            <div class="col-12">
                                <p class="calendar"> <em>Mart</em>7 <br><span style="font-size: 15px">2024</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 389.25px; margin-right: 80px;" role="group" aria-label="8 / 9">
                            <div class="col-12">
                                <p class="calendar"> <em>Mart</em>7 <br><span style="font-size: 15px">2024</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="9 / 9" style="width: 389.25px; margin-right: 80px;">
                            <div class="col-12">
                                <p class="calendar"> <em>Mart</em>7 <br><span style="font-size: 15px">2024</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </main>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script id="rendered-js" >
            var swiper = new Swiper('.blog-slider', {
                spaceBetween: 30,
                lazy: true,
                slidesPerView: 1,
                direction: "vertical",
                effect: 'fade',
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },

                pagination: {
                    el: '.blog-slider__pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '">' + (index + 1) + "</span>";
                    },
                }
            });
        </script>
        <script>
            var swiper = new Swiper(".mySwiper1", {
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                breakpoints: {
                    "@0.00": {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    "@0.50": {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    "@0.75": {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    "@1.00": {
                        slidesPerView: 4,
                        spaceBetween: 50,
                    },
                    "@1.50": {
                        slidesPerView: 5,
                        spaceBetween: 70,
                    },

                },
            });
        </script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                effect: "flip",
                lazy: true,
                grabCursor: true,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

        <script>
            $(document).ready(function() {
                $('[data-toggle="popover"]').popover({
                    placement: 'bottom',
                    html: true,
                    template: '<div class="popover" role="tooltip">' +
                        '<div class="arrow"></div>' +
                        '<h3 class="popover-header"></h3>' +
                        '<div class="popover-body"></div>' +
                        '</div>'
                }).on('hide.bs.popover', function () {
                    if ($(".popover:hover").length) {
                        return false;
                    }
                });
                $('body').on('click', function(e) {
                    $('[data-toggle=popover]').each(function() {
                        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                            $(this).popover('hide');
                        }
                    });
                });
            });
        </script>
        <script>
            // JavaScript code to handle sticky menu and logo size change on scroll
            document.addEventListener('DOMContentLoaded', function() {
                var headerSticky = document.getElementById('header-sticky');
                var logo = headerSticky.querySelector('.logo');

                window.addEventListener('scroll', function() {
                    if (window.scrollY > 100) { // Change 100 to the scroll position where you want the change to happen
                        headerSticky.classList.add('scrolled'); // Add a class to the header for styling purposes

                        // Adjust the logo size when scrolled
                        logo.style.width = '50%'; // Adjust the size as needed
                    } else {
                        headerSticky.classList.remove('scrolled'); // Remove the class when not scrolled

                        // Reset the logo size to its original size
                        logo.style.width = '75%'; // Adjust to the original size
                    }
                });
            });
        </script>
    @endpush
@endsection
