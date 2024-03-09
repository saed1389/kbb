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
                width: 95%;
                position: relative;
                max-width: 100%;
                margin: auto;
                background: #fff;
                box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
                padding: 25px;
                border-radius: 25px;
                height: 400px;
                transition: all 0.3s;
            }
            .swiper-pagination-vertical.swiper-pagination-bullets, .swiper-vertical>.swiper-pagination-bullets {
                right: 30px;
            }
            @media screen and (max-width: 992px) {
                .blog-slider {
                    max-width: 680px;
                    height: 400px;
                }
            }
            @media screen and (max-width: 768px) {
                .blog-slider {
                    min-height: 500px;
                    height: auto;
                    margin: 180px auto;
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
                width: 600px;
                flex-shrink: 0;
                height: 300px;
                background-image: linear-gradient(147deg, #b1c8ea 0%, #3126a7 74%);
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
                    height: 270px;
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
                font-size: 24px;
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
                height: 30px;
                width: 30px;
                color: white;
                padding-top: 3px;
                border-radius: 50%;
                box-shadow: 0px 0px 20px rgb(176, 203, 236);
            }
            @media screen and (max-width: 768px) {
                .blog-slider__pagination .swiper-pagination-bullet-active {
                    height: 11px;
                    width: 30px;
                }
            }
        </style>
    @endpush
    <main>
        <div class="tp-mission-2__area tp-mission-2__space p-relative fix z-index" style="background: aliceblue;">
            <div class="container">

                <div class="blog-slider">
                    <div class="blog-slider__wrp swiper-wrapper">
                        <div class="blog-slider__item swiper-slide">
                            <div class="blog-slider__img">

                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp" loading="lazy" alt="">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="blog-slider__content">
                                <span class="blog-slider__code">26 December 2019</span>
                                <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                                <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
                            </div>
                        </div>
                        <div class="blog-slider__item swiper-slide">
                            <div class="blog-slider__img">
                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/jason-leung-798979-unsplash.webp" loading="lazy" alt="">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="blog-slider__content">
                                <span class="blog-slider__code">26 December 2019</span>
                                <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
                                <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
                            </div>
                        </div>

                        <div class="blog-slider__item swiper-slide">
                            <div class="blog-slider__img">
                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/alessandro-capuzzi-799180-unsplash.webp" loading="lazy" alt="">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </div>
                            <div class="blog-slider__content">
                                <span class="blog-slider__code">26 December 2019</span>
                                <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                                <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
                            </div>
                        </div>

                    </div>
                    <div class="blog-slider__pagination"></div>
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
                <div class="tp-brand-2__border">
                    <div class="row">
                        <div class="col-12">
                            <div class="tp-brand-2__wrapper">
                                <div class="swiper-container tp-brand-2__active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-ef8dcc84b935d910a" aria-live="polite" style="transform: translate3d(-235.2px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="0" style="width: 235.2px;" role="group" aria-label="1 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-1.png') }}" alt="">
                                            </div>
                                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="1" style="width: 235.2px;" role="group" aria-label="2 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-2.png') }}" alt="">
                                            </div>
                                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="2" style="width: 235.2px;" role="group" aria-label="3 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-3.png') }}" alt="">
                                            </div>
                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 235.2px;" role="group" aria-label="4 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-4.png') }}" alt="">
                                            </div>
                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 235.2px;" role="group" aria-label="5 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-2.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 235.2px;" role="group" aria-label="6 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-1.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="1" style="width: 235.2px;" role="group" aria-label="7 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-2.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="2" style="width: 235.2px;" role="group" aria-label="8 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-3.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="3" style="width: 235.2px;" role="group" aria-label="9 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-4.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="4" style="width: 235.2px;" role="group" aria-label="10 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-2.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 235.2px;" role="group" aria-label="11 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-1.png') }}" alt="">
                                            </div>
                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 235.2px;" role="group" aria-label="12 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-2.png') }}" alt="">
                                            </div>
                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 235.2px;" role="group" aria-label="13 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-3.png') }}" alt="">
                                            </div>
                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 235.2px;" role="group" aria-label="14 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-4.png') }}" alt="">
                                            </div>
                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 235.2px;" role="group" aria-label="15 / 15">
                                            <div class="tp-brand-2__item text-center">
                                                <img src="{{ asset('front/assets/img/brand/brand-2-2.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
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

                // autoHeight: true,
                pagination: {
                    el: '.blog-slider__pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '">' + (index + 1) + "</span>";
                    },
                }
            });
        </script>
    @endpush
@endsection
