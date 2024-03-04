@extends('frontend.layouts.app')
@section('title') Anasayfa @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('front/assets/css/slippry.css') }}">
        <style>
            /* News */
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
        </style>
    @endpush
    <main>
        <div class="tp-mission-2__area tp-mission-2__space p-relative fix z-index">
            <div class="container">

                        <div class="row">
                            <div class="col-md-9">
                                <div class="card">
                                <div class="card-body">
                                    <section id="news-demo" >
                                        <article>
                                            <div class="text-content">
                                                <h6 class="space">İstanbul Kulak Burun Boğaz ve Baş Boyun Cerrahisi Uzmanları Derneği’nin 16. Kongre İhalesi Gerçekleştirildi</h6>
                                            </div>
                                            <div class="image-content"><img src="https://slippry.com/assets/img/image-1.jpg" alt="demo1_1"></div>
                                        </article>
                                        <article>
                                            <div class="text-content">
                                                <h6 class="space">İstanbul Kulak Burun Boğaz ve </h6>
                                            </div>
                                            <div class="image-content"><img src="https://slippry.com/assets/img/image-2.jpg" alt="demo1_1"></div>
                                        </article>
                                        <article>
                                            <div class="text-content">
                                                <h6 class="space">İstanbul Kulak Burun Boğaz ve Baş Boyun Cerrahisi Uzmanları Derneği’nin 16. Kongre İhalesi Gerçekleştirildi</h6>
                                            </div>
                                            <div class="image-content"><img src="https://slippry.com/assets/img/image-3.jpg" alt="demo1_1"></div>
                                        </article>
                                    </section>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <ul id="portfolio-demo" style="margin-top: 50px">
                                            <li title="This is caption 1 <a href='#link'>Even with links!</a>">
                                                <a href="#slide1"><img src="{{ asset('front/assets/img/IFOS2026.png') }}" alt="demo1_1"></a>
                                            </li>
                                            <li title="This is caption 2">
                                                <a href="#slide2"><img src="{{ asset('front/assets/img/IFOS2026.png') }}"  alt="demo1_2"></a>
                                            </li>
                                        </ul>
                                    </div>
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
                        <div class="col-md-8">
                            <div class="row">
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
                                                <h4 class="tp-feature__title-sm">Medical & <br> Treatment</h4>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-stethoscope"></i>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="tp-feature__text">
                                                <p>Charity is the act of extending <br> love and kindness others</p>
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
                                                <h4 class="tp-feature__title-sm">Education & <br>Healthy Food</h4>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-diet"></i>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="tp-feature__text">
                                                <p>Charity is the act of extending <br> love and kindness others</p>
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
                                                <h4 class="tp-feature__title-sm">Bring People <br>Together</h4>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-handshake"></i>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="tp-feature__text">
                                                <p>Charity is the act of extending <br> love and kindness others</p>
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
                                                <h4 class="tp-feature__title-sm">Medical & <br> Treatment</h4>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-stethoscope"></i>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="tp-feature__text">
                                                <p>Charity is the act of extending <br> love and kindness others</p>
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
                                                <h4 class="tp-feature__title-sm">Education & <br>Healthy Food</h4>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-diet"></i>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="tp-feature__text">
                                                <p>Charity is the act of extending <br> love and kindness others</p>
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
                                                <h4 class="tp-feature__title-sm">Bring People <br>Together</h4>
                                                <div class="tp-feature__icon">
                                            <span>
                                                <i class="flaticon-handshake"></i>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="tp-feature__text">
                                                <p>Charity is the act of extending <br> love and kindness others</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="tp-mission-2__left-box">


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="tp-feature-2__area tp-feature-2__bg pt-120 pb-90" data-background="{{ asset('front/assets/img/cta/cta-bg-2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30 ">
                        <div class="tp-feature-2__item text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="tp-feature-2__icon">
                                <span><i class="flaticon-agree"></i></span>
                            </div>
                            <h4 class="tp-feature-2__title-sm">Support Always</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                        <div class="tp-feature-2__item text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="tp-feature-2__icon">
                                <span><i class="flaticon-pray"></i></span>
                            </div>
                            <h4 class="tp-feature-2__title-sm">Give Prayers</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                        <div class="tp-feature-2__item text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature-2__icon">
                                <span><i class="flaticon-volunteer"></i></span>
                            </div>
                            <h4 class="tp-feature-2__title-sm">Our Volunteers</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                        <div class="tp-feature-2__item text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                            <div class="tp-feature-2__icon">
                                <span><i class="flaticon-world-blood-donor-day"></i></span>
                            </div>
                            <h4 class="tp-feature-2__title-sm">World Donation</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    @push('scripts')
        <script src="{{ asset('front/assets/js/slippry.min.js') }}"></script>
        <script>
            jQuery('#news-demo').slippry({
                // general elements & wrapper
                slippryWrapper: '<div class="sy-box news-slider" />', // wrapper to wrap everything, including pager
                elements: 'article', // elments cointaining slide content

                // options
                adaptiveHeight: false, // height of the sliders adapts to current
                captions: false,

                // pager
                pagerClass: 'news-pager',

                // transitions
                transition: 'horizontal', // fade, horizontal, kenburns, false
                speed: 1200,
                pause: 8000,

                // slideshow
                autoDirection: 'prev'
            });
        </script>
        <script>
            jQuery('#portfolio-demo').slippry({
                // general elements & wrapper
                slippryWrapper: '<div class="sy-box portfolio-slider" />', // wrapper to wrap everything, including pager

                // options
                adaptiveHeight: false, // height of the sliders adapts to current slide
                start: 'random', // num (starting from 1), random
                loop: true, // first -> last & last -> first arrows
                captionsSrc: 'li',
                captions: 'custom', // Position: overlay, below, custom, false
                captionsEl: '.external-captions',

                // transitions
                transition: 'fade', // fade, horizontal, kenburns, false
                easing: 'linear', // easing to use in the animation [(see... [jquery www])]
                continuous: true,

                // slideshow
                auto: true
            });
        </script>
    @endpush
@endsection
