@extends('frontend.layouts.app')
@section('title')
    Arama - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Arama</span>
                        </div>
                        <h3 class="tp-breadcrumb__title" style="font-size: 30px">Arama Sonucu: {{ $searchTerm }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-blog-2__area pt-75 pb-50">
        <div class="container">
            <div class="row">
                <h5 class="mb-4">Sonuç sayısı: {{ $results->count() }}</h5>
                @if ($results->isEmpty())
                    <h2>Sonuç bulunamadı.</h2>
                @else
                    <ul>
                        @foreach ($results as $result)
                            @if ($result->source === 'news')
                                <li>Haberler: <a href="{{ $result->news_href ? $result->news_href : route('haber', $result->slug) }}">{{ $result->title }}</a></li>
                            @elseif ($result->source === 'event')
                                <li>Etkinlikler: <a href="{{ $result->event_href ? $result->event_href : route('etkinlik.event', $result->slug) }}">{{ $result->title }}</a></li>
                            @elseif ($result->source === 'user')
                                <li>Üyeler: <a href="{{ route('kullanici', [$result->id, $result->slug]) }}">{{ @$result->titleName->title .' '. $result->first_name. ' '.$result->last_name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
