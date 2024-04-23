@extends('frontend.layouts.app')
@section('title')
    Bilgi Merkezi - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Bilgi Merkezi</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Bilgi Merkezi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-mission-2__area tp-mission-2__space p-relative fix z-index">
        <div class="tp-mission-2__plr">
            <div class="container-fluid g-0">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm"><a href="{{ route('haberler') }}">Haberler</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h5 class="tp-feature__title-sm"><a href="{{ route('etkinlikler') }}">Toplantılar</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper" style="height: 97px">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h6 class="tp-feature__title-sm"><a href="{{ route('gecmis-kongre-program-ve-bildirikitaplari') }}"><small>Geçmiş Kongre Program ve Bildiri Kitapları</small></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                             data-wow-delay=".3s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm"><a href="{{ route('dergiler') }}">Dergiler</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm"><a href="{{ route('hasta_bilgilendirme_brosurleri') }}"><small>Hasta Bilgilendirme Broşürleri</small></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm"><a href="{{ asset('uploads/Document/ucep.pdf') }}" download="">UÇEP</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm"><a href="{{ route('belgeler-tipta-uzmanlik-egitimi-karnesi') }}"><small>Tıpta Uzmanlık Eğitimi Karnesi</small></a> </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm"><a href="{{ route('onam_formlari') }}">Onam Formları</a> </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm"><a href="{{ route('tanitim-filmi') }}">Kılavuzlar</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm">  <a href="{{ asset('uploads/Document/KBB-BBC-KALITE-POLITIKASI-MISYON-VE-VIZYONUMUZ.pdf') }}" download="">TTB Ücret Tarifesi</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm">  <a href="{{ asset('uploads/Document/KBB-BBC-KALITE-POLITIKASI-MISYON-VE-VIZYONUMUZ.pdf') }}" download="">Satın Alma Süreci</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper" style="height: 97px">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm"><a href="{{ asset('uploads/Document/KBB-BBC-KALITE-POLITIKASI-MISYON-VE-VIZYONUMUZ.pdf') }}" download=""><small>KBB ve BBC Uzmanlık Eğitimi Kitabı - 1</small></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper" style="height: 97px">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm">  <a href="{{ asset('uploads/Document/KBB-BBC-KALITE-POLITIKASI-MISYON-VE-VIZYONUMUZ.pdf') }}" download=""><small>KBB ve BBC Uzmanlık Eğitimi Kitabı - 2</small></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm">  <a href="{{ asset('uploads/Document/KBB-BBC-KALITE-POLITIKASI-MISYON-VE-VIZYONUMUZ.pdf') }}" download=""> Linkler</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm">  <a href="{{ asset('uploads/Document/KBB-BBC-KALITE-POLITIKASI-MISYON-VE-VIZYONUMUZ.pdf') }}" download=""><small>Türk KBB-BBC Derneği Etik Kitabı</small></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-feature__wraper">
                                <div class="tp-feature__shape-1">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-1.png') }}" alt="">
                                </div>
                                <div class="tp-feature__shape-2">
                                    <img src="{{ asset('front/assets/img/feature/fea-shape-2.png') }}" alt="">
                                </div>
                                <div class="tp-feature__item z-index">
                                    <div class="tp-feature__content d-flex align-items-center justify-content-between">
                                        <h4 class="tp-feature__title-sm">  <a href="{{ asset('uploads/Document/KBB-BBC-KALITE-POLITIKASI-MISYON-VE-VIZYONUMUZ.pdf') }}" download="">Hukuk</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
