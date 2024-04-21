@extends('frontend.layouts.app')
@section('title')
    {{ $category->title }} Etkinlikler - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span><a href="{{ route('bilgi-merkezi') }}">Bilgi Merkezi</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span><a href="{{ route('etkinlikler') }}">Toplantılar</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>{{ $category->title }}</span>
                        </div>
                        <h3 class="tp-breadcrumb__title" style="font-size: 30px">{{ $event->title }} </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-event-details__area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="tp-event-details__left-box">
                        <h4 class="tp-event-details__title">{{ $event->title }}</h4>
                        <div class="tp-event-details__text pb-25">
                            <p>{!! $event->event_body !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="tp-event-details__right-box">
                        <div class="tp-event-details__contact-box mb-30">
                            <ul>
                                <li>
                                    <div class="tp-event-details__contact-item d-flex align-items-start">
                                        <div class="tp-event-details__contact-icon">
                                            <span><i class="flaticon-time"></i></span>
                                        </div>
                                        <div class="tp-event-details__contact-text">
                                            <span>Etkinlik Zamanı:</span>
                                            @php
                                                $start_date = \Carbon\Carbon::parse($event->start_date);
                                                $end_date = \Carbon\Carbon::parse($event->end_date);
                                                $same_month = $start_date->month === $end_date->month;
                                            @endphp
                                            @if ($start_date->eq($end_date))
                                                <b>{{ $start_date->translatedFormat('j F Y l') }}</b>
                                            @elseif ($same_month)
                                                <b>{{ $start_date->translatedFormat('j') }} - {{ $end_date->translatedFormat('j F Y') }} {{ $start_date->translatedFormat('l') }}</b>
                                            @else
                                                <b>{{ $start_date->translatedFormat('j F Y') }} - {{ $end_date->translatedFormat('j F Y') }} {{ $start_date->translatedFormat('l') }}</b>
                                            @endif
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="tp-event-details__contact-item d-flex align-items-start">
                                        <div class="tp-event-details__contact-icon">
                                            <span><i class="flaticon-location"></i></span>
                                        </div>
                                        <div class="tp-event-details__contact-text">
                                            <span>Konum:</span>
                                          <b>{{ $event->event_place }}</b>
                                        </div>
                                    </div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
