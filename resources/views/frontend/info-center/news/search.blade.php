@extends('frontend.layouts.app')
@section('title')
    Haberlerde ara - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span><a href="{{ route('haberler') }}">Tüm Haberler</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Haberlerde ara</span>
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
                <h5 class="mb-4">Sonuç sayısı: {{ $news->count() }}</h5>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Haber Başlığı</th>
                        <th>Tarih</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ $item->news_href ? $item->news_href : route('haber', $item->slug) }}">{{ $item->title }}</a></td>
                            <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {{ $news->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
