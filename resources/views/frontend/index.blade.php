@php use Illuminate\Support\Carbon; @endphp
@extends('frontend.layouts.app')
@section('title') Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği | Anasayfa @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('front/assets/css/index.css') }}" >
    @endpush
    <main>
        <div class="tp-mission-2__area tp-mission-2__space p-relative fix z-index" style="background: aliceblue;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mb-5">
                        <div class="blog-slider">
                            <div class="blog-slider__wrp swiper-wrapper">
                                @foreach($sliders as $slider)
                                    <div class="blog-slider__item swiper-slide">
                                        <a href="{{ route('haber', $slider->slug) }}">
                                        <div class="blog-slider__img">
                                            <img src="{{ asset('uploads/news/crop/'.$slider->cropImage) }}" loading="lazy" alt="">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </div>
                                        </a>
                                        <div class="blog-slider__content">
                                            <div class="blog-slider__title"><a href="{{ route('haber', $slider->slug) }}">{{ $slider->title }}</a></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="blog-slider__pagination"></div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-5 center">
                        <div class="blog-slider-1">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('front/assets/img/IFOS2026.png') }}" loading="lazy" alt="" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('front/assets/img/kbb_201120231317.jpg') }}" loading="lazy" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tp-mission-2__area tp-mission-2__space p-relative fix z-index tp-about-kbb">
            <div class="tp-mission-2__shape">
                <img src="{{ asset('front/assets/img/mission/mission-shape-1.png') }}" loading="lazy" alt="">
            </div>
            <div class="tp-mission-2__plr">
                <div class="container-fluid g-0">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                    <div class="tp-feature__wraper" style="background-image: url({{ asset('front/assets/images/online-kutuphaneyazisiz.png') }}); background-size: cover; background-position: center;">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center" style="height: 90px; place-content: center;">
                                                <h4 class="tp-feature__title-sm text-white" style="background-color: rgb(29 38 73 / 61%); padding: 5px; border-radius: 5px; position: absolute; bottom: 0;"><a href="{{ route('online-kutuphane') }}">Online kütüphane</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                    <div class="tp-feature__wraper" style="background-image: url({{ asset('front/assets/images/hasta-bilgilendirmeyazisiz.png') }}); background-size: cover; background-position: center;">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center" style="height: 90px; place-content: center;">
                                                <h5 class="tp-feature__title-sm text-white" style="background-color: rgb(29 38 73 / 61%); padding: 5px; border-radius: 5px; position: absolute; bottom: 0;">
                                                    <a href="{{ route('hasta_bilgilendirme_brosurleri') }}">Hasta bilgilendirme</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                    <div class="tp-feature__wraper" style="background-image: url({{ asset('front/assets/images/dernekleryazisiz.png') }}); background-size: cover; background-position: center;">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center" style="height: 90px; place-content: center;">
                                                <h6 class="tp-feature__title-sm text-white" style="background-color: rgb(29 38 73 / 61%); padding: 5px; border-radius: 5px; position: absolute; bottom: 0; text-align-last: center;">
                                                    <a href="{{ route('yoresel-dernekler-ve-alt-bilimdallari') }}">Yöresel dernekler ve alt birim dalları</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                    <div class="tp-feature__wraper" style="background-image: url({{ asset('front/assets/images/toplanti-takvimiyazisiz.png') }}); background-size: cover; background-position: center;">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center" style="height: 90px; place-content: center;">
                                                <h4 class="tp-feature__title-sm text-white" style="background-color: rgb(29 38 73 / 61%); padding: 5px; border-radius: 5px; position: absolute; bottom: 0;">
                                                    <a href="{{ route('etkinlik-takvim') }}">Toplantı takvimi</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s" >
                                    <div class="tp-feature__wraper" style="background-image: url({{ asset('front/assets/images/baskanyazisiz.png') }}); background-size: cover; background-position: center;">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center" style="height: 90px; place-content: center;">
                                                <h4 class="tp-feature__title-sm text-white" style="background-color: rgb(29 38 73 / 61%); padding: 5px; border-radius: 5px; position: absolute; bottom: 0;">
                                                    <a href="{{ route('dernek-baskanimizdan-29-ekim-cumhuriyet-bayram') }}">Başkanımızın 100.yıl mesajı</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                    <div class="tp-feature__wraper" style="background-image: url({{ asset('front/assets/images/turk-kbb-arsiv.png') }}); background-size: cover; background-position: center;">
                                        <div class="tp-feature__shape-1">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__shape-2">
                                            <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" loading="lazy" alt="">
                                        </div>
                                        <div class="tp-feature__item z-index">
                                            <div class="tp-feature__content d-flex align-items-center" style="height: 90px; place-content: center; text-align: -webkit-center;">
                                                <h4 class="tp-feature__title-sm text-white" style="background-color: rgb(29 38 73 / 61%); padding: 5px; border-radius: 5px; position: absolute; bottom: 0;">
                                                    <a href="https://www.turkarchotolaryngol.net/" target="_blank">Türk KBB arşivi</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="tp-mission-2__left-box">

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 mb-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-feature__wraper" style="padding: 20px 17px 20px 25px;">
                                            <div class="tp-feature__item z-index">
                                                <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                    <h4 class="tp-feature__title-sm"><a href="{{ route('onam_formlari') }}">Onam formları</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-feature__wraper" style="padding: 20px 17px 20px 25px;">
                                            <div class="tp-feature__item z-index">
                                                <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                    <h4 class="tp-feature__title-sm"><a href="{{ route('baskana-ulas') }}">Başkana ulaş</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-feature__wraper" style="padding: 20px 17px 20px 25px;">
                                            <div class="tp-feature__item z-index">
                                                <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                    <h4 class="tp-feature__title-sm"><a href="{{ route('bir-fikrim-var') }}">Bir fikrim var</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-feature__wraper" style="padding: 20px 17px 20px 25px;">
                                            <div class="tp-feature__item z-index">
                                                <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                    <h4 class="tp-feature__title-sm"><a href="{{ route('uye-listesi') }}">KBB doktor bul</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-feature__wraper" style="padding: 20px 17px 20px 25px;">
                                            <div class="tp-feature__item z-index">
                                                <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                                    <h4 class="tp-feature__title-sm"><a href="{{ route('bize-ulasin') }}">Bize ulaşın</a></h4>
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
        <div class=" fix p-relative pt-120 pb-120">
            <div class="tp-about-2__text-box d-none d-xl-block">
                <h5 class="tp-about-2__big-text" style="position: absolute; left: 150px">KBB</h5>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeLeft;">
                        <div class="tp-about-2__main-thumb p-relative text-center text-lg-end">
                            <img src="{{ asset('front/assets/images/ee.png') }}" loading="lazy" alt="">
                            <div class="tp-about-2__thumb-sm">
                                <img src="{{ asset('front/assets/images/Logo-2.jpeg') }}" loading="lazy" alt="" style="width: 95%;">
                                <div class="tp-about-2__icon">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=PO_fBTkoznc">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="tp-about-2__thumb-border"></div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: tpfadeRight;">
                        <div class="tp-about-2__right-box">
                            <div class="tp-about-2__section-title pb-25">
                                <span class="tp-section-subtitle-2">Hakkımızda</span>
                                <h2 >Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği</h2>
                            </div>
                            <div class="tp-about-2__text">
                                <p>Kulak Burun Boğaz ve Baş
                                    Boyun Cerrahisi alanında,
                                    Eğitim, araştırma, koruyucu
                                    hekimlik ve hasta hizmetini
                                    geliştirmek,
                                    Üyelerimizin mesleki
                                    saygınlığını ve özlük haklarını
                                    iyileştirmek,
                                    Bir meslek örgütü olarak
                                    alanımızla ilgili sağlık
                                    politikalarını toplum yararına
                                    etkilemektir.
                                </p>
                            </div>
                            <div class="tp-about-2__wraper pb-40 d-flex justify-content-between">
                                <div class="tp-about-2__list-item d-flex align-items-start">
                                    <div class="tp-about-2__list-icon">
                                        <i class="flaticon-check-mark-black-outline"></i>
                                    </div>
                                    <div class="tp-about-2__list-content">
                                        <h4 class="tp-about-2__title-sm">KBB YETERLİK</h4>
                                        <p>Yeterlik sınavları aracılığıyla yeterlik belgelendirmenizi hesaplamak için üye olunuz.</p>
                                    </div>
                                </div>
                                <div class="tp-about-2__list-item d-flex align-items-start">
                                    <div class="tp-about-2__list-icon">
                                        <i class="flaticon-check-mark-black-outline"></i>
                                    </div>
                                    <div class="tp-about-2__list-content">
                                        <h4 class="tp-about-2__title-sm">TORLAK</h4>
                                        <p>Türk Oto Rino Laringoloji Akademisi Eğitimleri ve Kongre haberleri için üye olunuz.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-cta-2__area pb-115">
            <div class="tp-cta-2__bg p-relative fix" data-background="{{ asset('front/assets/img/cta/cta-bg-1.png') }}">
                <div class="container">
                    <h3 style="color:whitesmoke; text-align-last: center;">Etkinlik Takvimi</h3>
                    <div class="swiper mySwiper1 swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper margin" id="swiper-wrapper-8a33a79be24f729c" aria-live="polite">
                            @foreach($events as $event)
                                @php
                                    $startDate = Carbon::parse($event->start_date);
                                @endphp
                                <div class="swiper-slide swiper-slide-active" style="width: 389.25px; margin-right: 80px; height: 250px !important;" role="group" aria-label="{{ $loop->iteration }} / {{ $events->count() }}">
                                    <div class="col-12">
                                        <a data-container="#events" data-html="true" data-placement="bottom" data-trigger="focus" data-toggle="popover" tabindex="0" title="{{ $event->title }} <hr>"
                                           data-bs-content="<i class='fa fa-calendar' aria-hidden='true'></i> {{ $formattedStartDate = $startDate->translatedFormat('j F Y l') }}<br><i class='fa fa-map-marker' aria-hidden='true'></i>  {{ $event->event_place }} <br><i class='fa fa-link' aria-hidden='true'></i> <a href='{{ $event->event_href ? $event->event_href : route('etkinlik.event', $event->slug) }}' target='_blank'>Detay</a><br>">
                                            <p class="calendar"> <em>{{ $formattedStartDate = $startDate->translatedFormat('F') }}</em>{{ date('d', strtotime($event->start_date)) }} <br><span style="font-size: 15px">{{ date('Y', strtotime($event->start_date)) }}</span></p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="service" class="tp-service-3__area tp-service-3__space">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-service-3__section-title text-center pb-50">
                            <span class="tp-section-subtitle-3">Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği</span>
                            <h4 class="tp-section-title">Hastalar için Bilgilendirme</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-service-3__item p-relative">
                            <div class="tp-service-3__thumb-box p-relative">
                                <div class="tp-service-3__thumb">
                                    <img src="{{ asset('front/assets/images/kulak.jpg') }}" loading="lazy" alt="">
                                </div>
                                <div class="tp-service-3__icon">
                                    <span><i class="fa fa-ear-listen" style="font-weight: 300;"></i></span>
                                </div>
                            </div>
                            <div class="tp-service-3__content text-center">
                                <a href="{{ route('kulak') }}"><h4 class="tp-service-3__title-sm">Kulak</h4></a>
                                <div class="tp-service-3__shape">
                                    <img src="{{ asset('front/assets/img/service/service-shape.png') }}" loading="lazy" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-service-3__item p-relative">
                            <div class="tp-service-3__thumb-box p-relative">
                                <div class="tp-service-3__thumb">
                                    <img src="{{ asset('front/assets/images/burun.jpg') }}" loading="lazy" alt="">
                                </div>
                                <div class="tp-service-3__icon">
                                    <span><i class="fi fi-tr-nose"></i></span>
                                </div>
                            </div>
                            <div class="tp-service-3__content text-center">
                                <a href="{{ route('burun') }}"><h4 class="tp-service-3__title-sm">Burun</h4></a>
                                <div class="tp-service-3__shape">
                                    <img src="{{ asset('front/assets/img/service/service-shape.png') }}" loading="lazy" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-service-3__item p-relative">
                            <div class="tp-service-3__thumb-box p-relative">
                                <div class="tp-service-3__thumb">
                                    <img src="{{ asset('front/assets/images/bogaz.jpg') }}" loading="lazy" alt="">
                                </div>
                                <div class="tp-service-3__icon">
                                    <span><i class="fi fi-ts-head-side-cough"></i></span>
                                </div>
                            </div>
                            <div class="tp-service-3__content text-center">
                                <a href="{{ route('bogaz') }}"><h4 class="tp-service-3__title-sm">Boğaz</h4></a>
                                <div class="tp-service-3__shape">
                                    <img src="{{ asset('front/assets/img/service/service-shape.png') }}" loading="lazy" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-service-3__item p-relative">
                            <div class="tp-service-3__thumb-box p-relative">
                                <div class="tp-service-3__thumb">
                                    <img src="{{ asset('front/assets/images/pediatrik.jpg') }}" loading="lazy" alt="">
                                </div>
                                <div class="tp-service-3__icon">
                                    <span><i class="fi fi-ts-child-head"></i></span>
                                </div>
                            </div>
                            <div class="tp-service-3__content text-center">
                                <a href="{{ route('pediatrikkbb') }}"><h4 class="tp-service-3__title-sm">Pediatrik KBB</h4></a>
                                <div class="tp-service-3__shape">
                                    <img src="{{ asset('front/assets/img/service/service-shape.png') }}" loading="lazy" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-service-3__item p-relative">
                            <div class="tp-service-3__thumb-box p-relative">
                                <div class="tp-service-3__thumb">
                                    <img src="{{ asset('front/assets/images/tumor.jpg') }}" loading="lazy" alt="">
                                </div>
                                <div class="tp-service-3__icon">
                                    <span><i class="fi fi-tr-disease"></i></span>
                                </div>
                            </div>
                            <div class="tp-service-3__content text-center">
                                <a href="{{ route('kbbtumorleri') }}"><h4 class="tp-service-3__title-sm">KBB Tümörler</h4></a>
                                <div class="tp-service-3__shape">
                                    <img src="{{ asset('front/assets/img/service/service-shape.png') }}" loading="lazy" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @if($popup->popupStatus == 1 || $popup->popupEnd_date >= \Illuminate\Support\Carbon::now() || $popup->popupEnd_date == null)
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <a href="{{ $popup->popupHref }}" target="_blank">
                            <img src="{{ $popup->popupImage }}" style="width: 100%;">
                        </a>
                    </div>
                    <div class="modal-footer text-center" style="justify-content: center;">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
        <script src="{{ asset('front/assets/js/index.js') }}"></script>
        <script>
            $(document).ready(function(){
                $("#staticBackdrop").modal('show');
            });
        </script>
    @endpush
@endsection
