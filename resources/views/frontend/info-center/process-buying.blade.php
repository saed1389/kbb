@extends('frontend.layouts.app')
@section('title')
    Satın Alma Süreci - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Satın Alma Süreci</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Satın Alma Süreci</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-team-2__area pt-50 pb-90">
        <div class="container">
            <div class="row">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=4734&MevzuatTur=1&MevzuatTertip=5" target="_blank" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-link"></i></span>
                                    <span class="title2">Bağlantı</span>
                                    <span class="title-hover2"> Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>KAMU İHALE KANUNU </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=12917&MevzuatTur=7&MevzuatTertip=5" target="_blank"  class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-link"></i></span>
                                    <span class="title2">Bağlantı</span>
                                    <span class="title-hover2"> Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>MAL ALIMI İHALELERİ UYGULAMA YÖNETMELİĞİ</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=13354&MevzuatTur=9&MevzuatTertip=5" target="_blank"  class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-link"></i></span>
                                    <span class="title2">Bağlantı</span>
                                    <span class="title-hover2"> Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>KAMU İHALE GENEL TEBLİĞİ</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=4713&MevzuatTur=7&MevzuatTertip=5" target="_blank"  class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-link"></i></span>
                                    <span class="title2">Bağlantı</span>
                                    <span class="title-hover2"> Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>MAL ALIMLARI DENETİM MUAYENE VE KABUL İŞLEMLERİNE DAİR YÖNETMELİK</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
