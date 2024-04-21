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
                        <h3 class="tp-breadcrumb__title" style="font-size: 30px">{{ $category->title }} </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-blog-2__area pt-75 pb-50">
        <div class="container">
            <div class="row">
                <h5 class="mb-4">{{ date('Y') }} Yılı Toplantıları</h5>
                <div class="tp-event__area pt-40 pb-90">
                    <div class="container">
                        <div class="row">
                            @foreach($events as $item)
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".3s">
                                    <div class="tp-event__wrapper">
                                        <div class="tp-event__item">
                                            <div class="tp-event__content">
                                                <div class="tp-event__meta">
                                                    @php
                                                        $start_date = \Carbon\Carbon::parse($item->start_date);
                                                        $end_date = \Carbon\Carbon::parse($item->end_date);
                                                        $same_month = $start_date->month === $end_date->month;
                                                    @endphp
                                                    @if ($start_date->eq($end_date))
                                                        <span><i class="far fa-clock"></i>{{ $start_date->translatedFormat('j F Y l') }}</span>
                                                    @elseif ($same_month)
                                                        <span><i class="far fa-clock"></i>{{ $start_date->translatedFormat('j') }} - {{ $end_date->translatedFormat('j F Y') }} {{ $start_date->translatedFormat('l') }}</span>
                                                    @else
                                                        <span><i class="far fa-clock"></i>{{ $start_date->translatedFormat('j F Y') }} - {{ $end_date->translatedFormat('j F Y') }} {{ $start_date->translatedFormat('l') }}</span>
                                                    @endif
                                                    <div class="mt-2">
                                                        @if($item->event_place)
                                                            <span><i class="fal fa-map-marker-alt"></i>{{ $item->event_place }}</span>
                                                        @endif
                                                    </div>

                                                </div>
                                                <a href="{{ $item->event_href ? $item->event_href : route('etkinlik.event', $item->slug) }}"><h4 class="tp-event__title" style="font-size: 16px">{{ $item->title }}</h4></a>
                                                <div class="tp-event__link">
                                                    <a href="{{ $item->event_href ? $item->event_href : route('etkinlik.event', $item->slug) }}">Devamı<i class="fal fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                {{--<table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Etkinlik Başlığı</th>
                        <th>Tarih</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ $item->event_href ? $item->event_href : route('etkinlik', $item->slug) }}">{{ $item->title }}</a></td>
                            @php
                                $start_date = \Carbon\Carbon::parse($item->start_date);
                                $end_date = \Carbon\Carbon::parse($item->end_date);
                                $same_month = $start_date->month === $end_date->month;
                            @endphp
                            @if ($start_date->eq($end_date))
                                <td>{{ $start_date->translatedFormat('j F Y l') }}</td>
                            @elseif ($same_month)
                                <td>{{ $start_date->translatedFormat('j') }} - {{ $end_date->translatedFormat('j F Y') }} {{ $start_date->translatedFormat('l') }}</td>
                            @else
                                <td>{{ $start_date->translatedFormat('j F Y') }} - {{ $end_date->translatedFormat('j F Y') }} {{ $start_date->translatedFormat('l') }}</td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>--}}
            </div>
        </div>
    </div>
@endsection
