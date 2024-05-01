@extends('frontend.layouts.app')
@section('title')
    Dernek Başkanımızdan 29 Ekim Cumhuriyet Bayramı Kutlama Mesajı - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('front/assets/css/other-page.css') }}">
    @endpush
    <div class="tp-breadcrumb__area p-relative fix tp-breadcrumb-height"
         data-background="{{ asset('assets/img/pages/so-banner.jpg') }}"
         style="background-image: url(&quot;{{ asset('assets/img/pages/so-banner.jpg') }}&quot;);">
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
                            <span>Dernek Başkanımızdan 29 Ekim Cumhuriyet Bayramı Kutlama Mesajı</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Dernek Başkanımızdan 29 Ekim Cumhuriyet Bayramı Kutlama Mesajı</h3>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
