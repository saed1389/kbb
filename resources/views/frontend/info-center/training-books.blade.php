@extends('frontend.layouts.app')
@section('title')
    Uzmanlık Eğitimi Kitabları - 1 - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span><a href="{{ route('bilgi-merkezi') }}"> Bilgi Merkezi</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Uzmanlık Eğitimi Kitabları - 1</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Uzmanlık Eğitimi Kitabları - 1</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-team-2__area pt-50 pb-90">
        <div class="container">
            <div class="row">
                <table class="table table-striped">
                    <thead>
                    <th>#</th>
                    <th>Belge Bilgileri</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Uzmanlik-Egitimi-2018-201921595736.pdf') }}"  class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Kulak Burun Boğaz ve Baş Boyun Cerrahisi Uzmanlık Eğitimi 2018</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
