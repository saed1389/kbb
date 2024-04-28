@extends('frontend.layouts.app')
@section('title')
    Kongre Şartnameleri - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Kongre Şartnameleri</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Kongre Şartnameleri</h3>
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
                                <a href="{{ asset('uploads/Document/41-Ulusal-KBB-BBC-Kongre-Sartnamesi-2019214173441.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>41. Ulusal KBB BBC Kongre Şartnamesi</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/40-Ulusal-KBB-BBC-Kongre-Sartnamesi-2019214173533.docx') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>40. Ulusal KBB BBC Kongre Şartnamesi</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/39-Ulusal-KBB-Kongresi-Sartnameleri-2019214173559.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>39. Ulusal KBB Kongresi Şartnameleri</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/38-Ulusal-KBB-Kongresi-Sartnameleri-2019214173628.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>38. Ulusal KBB Kongresi Şartnameleri</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/37-Ulusal-KBB-Kongresi-Sartnameleri-201921417378.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>37. Ulusal KBB Kongresi Şartnameleri</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/36-Ulusal-KBB-Kongresi-Sartnameleri-2019214173741.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>36. Ulusal KBB Kongresi Şartnameleri</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/35-Ulusal-KBB-Kongresi-Sartnameleri-201921417387.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>35. Ulusal KBB Kongresi Şartnameleri</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/bos-2019214173955.docx') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>34. Ulusal KBB Kongresi Şartnameleri</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/33-Ulusal-KBB-Kongresi-Sartnameleri-2019214174011.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>33. Ulusal KBB Kongresi Şartnameleri</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
