@extends('frontend.layouts.app')
@section('title')
    Dergiler - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('front/assets/css/other-page.css') }}" >
    @endpush
    <div class="tp-breadcrumb__area p-relative fix tp-breadcrumb-height" data-background="{{ asset('assets/img/pages/so-banner.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/pages/so-banner.jpg') }}&quot;);">
        <div class="tp-breadcrumb__shape-1 z-index-5">
            <img src="{{ asset('front/assets/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
        </div>
        <div class="tp-breadcrumb__shape-2 z-index-5">
            <img src="{{ asset('front/assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcrumb__content z-index-5">
                        <div class="tp-breadcrumb__list">
                            <span><a href="/">Anasayfa</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span> <a href="{{ route('bilgi-merkezi') }}">Bilgi Merkezi</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Dergiler</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Dergiler</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-mission-2__area tp-mission-2__space p-relative fix z-index">
        <div class="tp-mission-2__plr">
            <div class="container-fluid g-0">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <a href="https://www.turkarchotolaryngol.net" target="_blank">
                                <div class="tp-feature__wraper">
                                    <div class="tp-feature__shape-1">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__shape-2">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__item z-index">
                                        <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                            <h4 class="tp-feature__title-sm">Türk Otorinolarengoloji Arşivi</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <a href="http://www.kbbihtisas.org/v02/jvi.php?pdir=kbbihtisas&plng=tur&list=pub" target="_blank">
                                <div class="tp-feature__wraper">
                                    <div class="tp-feature__shape-1">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__shape-2">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__item z-index">
                                        <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                            <h5 class="tp-feature__title-sm">KBB İhtisas Dergisi</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <a href="https://dergi.kbb-bbc.org.tr" target="_blank">
                                <div class="tp-feature__wraper" style="height: 97px">
                                    <div class="tp-feature__shape-1">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__shape-2">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__item z-index">
                                        <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                            <h6 class="tp-feature__title-sm"><small>Kulak Burun Boğaz ve Baş Boyun Cerrahisi Dergisi</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <a href="https://kbb-forum.net/journal/index.php" target="_blank">
                                <div class="tp-feature__wraper">
                                    <div class="tp-feature__shape-1">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__shape-2">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__item z-index">
                                        <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                            <h4 class="tp-feature__title-sm">KBB-Forum</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <a href="https://www.kbbuygulamalari.org/jvi.asp?pdir=kbbu&plng=tur&list=pub" target="_blank">
                                <div class="tp-feature__wraper">
                                    <div class="tp-feature__shape-1">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__shape-2">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__item z-index">
                                        <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                            <h4 class="tp-feature__title-sm">Kulak Burun Boğaz Uygulamaları Dergisi</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <a href="https://turkishclinics.com/Log/trd/anaEkran.faces" target="_blank">
                                <div class="tp-feature__wraper">
                                    <div class="tp-feature__shape-1">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__shape-2">
                                        <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="tp-feature__item z-index">
                                        <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                            <h4 class="tp-feature__title-sm">Türk Rinoloji Dergisi</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
