@extends('frontend.layouts.app')
@section('title')
    Alt Bilim Dalları - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span><a href="{{ route('yoresel-dernekler-ve-alt-bilimdallari') }}">Yöresel Dernekler ve Alt Bilim Dalları</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Alt Bilim Dalları</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Alt Bilim Dalları</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-about__area tp-about__space">
        <div class="container">
            <div class="row align-items-xl-start align-items-center">
                <div class="col-xl-12 col-lg-12 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: tpfadeRight;">
                    <div class="tp-about__right-side tp-about__right-box">
                        <div class="tp-about__content">
                            <div class="tp-about__text">
                                {!! $setting !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
