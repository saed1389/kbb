@extends('frontend.layouts.app')
@section('title')
    Hastalar İçin Bilgiler - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Hastalar İçin Bilgiler</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Hastalar İçin Bilgiler</h3>
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
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm"><a href="{{ route('kulak') }}"> Kulak</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h5 class="tp-feature__title-sm"><a href="{{ route('burun') }}"> Burun</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper" style="height: 97px">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h6 class="tp-feature__title-sm"><a href="{{ route('bogaz') }}"> Boğaz</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <h4 class="tp-feature__title-sm"><a href="{{ route('pediatrikkbb') }}"> Pediatrik KBB</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h5 class="tp-feature__title-sm"><a href="{{ route('kbbtumorleri') }}"> KBB Tümörleri</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection