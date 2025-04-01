@extends('frontend.layouts.app')
@section('title')
    BİLGİ MERKEZİ - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Tüm Haberler</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Tüm Haberler</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-blog-2__area pt-75 pb-90">
        <div class="container">
            <div class="row">
                @foreach($news as $item)
                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-blog-2__item">
                            <div class="tp-blog-2__thumb p-relative">
                                <img src="{{ asset('uploads/news/crop/'.$item->cropImage) }}" alt="">
                                <div class="tp-blog-2__icon">
                                    <a class="popup-image" href="{{ asset('uploads/news/original/'.$item->image) }}"><i class="fa-sharp fa-solid fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="tp-blog-2__content">
                                <a href="{{ $item->news_href ? $item->news_href :route('haber', $item->slug) }}" @if($item->new_page == 1) target="_blank" @endif><h4 class="tp-blog-2__title-sm">{{ Str::limit($item->title, '50', '...') }}</h4></a>
                                <span class="tp-blog-2__meta">{{ date('d/m/Y', strtotime($item->created_at)) }}</span>
                                <a href="{{ route('haber', $item->slug) }}" @if($item->new_page == 1) target="_blank" @endif>
                                    <div class="tp-blog-2__link text-center">
                                        <span>Devamı<i class="flaticon-arrow-right"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $news->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
