@extends('frontend.layouts.app')
@section('title')
    Etik ve Onur Kurulu Kararları - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span><a href="{{ route('kararlar') }}"> Kararlar </a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Etik ve Onur Kurulu Kararları</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Etik ve Onur Kurulu Kararları</h3>
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
                                <a href="{{ asset('uploads/Document/Reklam-Ve-Duyurularda-Kullanilacak-Meslek-Unvani-Uzerine-2019214172645.docx') }}" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Reklam ve Duyurularda Kullanılacak Meslek Ünvanı Üzerine</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Dil-Ve-Konusma-Terapistlerine-Bazi-Istisnai-Tanilarda-Ilgili-Uzmanin-Yonlendirmesine-Gerek-Olmadan-Tedaviye-Baslamasina-Dair-201921417280.docx') }}" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Dil Ve Konuşma Terapistlerine Bazı İstisnai Tanılarda İlgili Uzmanın Yönlendirmesine Gerek Olmadan Tedaviye Başlamasına Dair</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Tabip-Disi-Meslek-Mensuplarinin-Gorev-Tanimlari-ve-Uygulama-Uzerine-2019214172827.docx') }}"  class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Tabip Dışı Meslek Mensuplarının Görev Tanımları ve Uygulama Üzerine</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/UAK-Etige-Aykiri-Davranislar-2019214172856.pdf') }}"  class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>ÜAK Etiğe Aykırı Davranışlar</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Bilimsel-Toplanti-Organizasyonlarinda-Uyulmasi-Gereken-Temel-Etik-Kurallar-2019214173033.pdf') }}" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Bilimsel Toplantı Organizasyonlarında Uyulması Gereken Temel Etik Kurallar</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-KBB-ve-BBC-Dernegi-Onur-ve-Etik-Kurulu-VI-Toplanti-Tutanagi-2019214173120.pdf') }}" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk KBB ve BBC Derneği Onur ve Etik Kurulu VI. Toplantı Tutanağı</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
