@extends('frontend.layouts.app')
@section('title')
    Yeterlik Yürütme Kurulu - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span><a href="{{ route('dernegmz') }}">Derneğimiz</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span><a href="{{ route('kurullar') }}"> Kurullar </a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Yeterlik Yürütme Kurulu</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Yeterlik Yürütme Kurulu</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-team-2__area pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 offset-md-4 col-sm-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                    <div class="tp-team-2__wrapper">
                        <div class="tp-team-2__border"></div>
                        <div class="tp-team-2__item text-center">
                            <div class="tp-team-2__thumb">
                                <img style="width: 50%;" src="{{ asset($baskan->image) }}" alt="">
                            </div>
                            <div class="tp-team-2__content">
                                <div class="tp-team-2__author-info">
                                    <a>
                                        <h4 class="tp-team-2__author-name">Başkan</h4>
                                    </a>
                                    <span>{{ $baskan->name }}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($directors as $item)
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s; animation-name: tpfadeUp;">
                        <div class="tp-team-2__wrapper">
                            <div class="tp-team-2__item text-center">
                                <div class="tp-team-2__thumb" style="height: 200px" >
                                    <img src="{{ asset($item->image) }}" alt="" style="width: 60%;">
                                </div>
                                <div class="tp-team-2__content">
                                    <div class="tp-team-2__author-info">
                                        <a>
                                            <h4 class="tp-team-2__author-name">{{ $item->position }}</h4>
                                        </a>
                                        <span>{{ $item->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
