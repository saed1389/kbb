@extends('frontend.layouts.app')
@section('title')
    Etik ve Onur Kurulu Kararları - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
@endsection
@section('content')
    @push('styles')
        <style>
            .btn-slide, .btn-slide2 {
                position: relative;
                display: inline-block;
                height: 30px;
                width: 200px;
                line-height: 50px;
                padding: 0;
                border-radius: 50px;
                background: #fdfdfd;
                border: 2px solid #0099cc;
                margin: 10px;
                transition: .5s;
            }

            .btn-slide2 {
                border: 2px solid #efa666;
            }

            .btn-slide:hover {
                background-color: #0099cc;
            }

            .btn-slide2:hover {
                background-color: #efa666;
            }

            .btn-slide:hover span.circle, .btn-slide2:hover span.circle2 {
                left: 100%;
                margin-left: -45px;
                background-color: #fdfdfd;
                color: #0099cc;
            }

            .btn-slide2:hover span.circle2 {
                color: #efa666;
            }

            .btn-slide:hover span.title, .btn-slide2:hover span.title2 {
                left: 40px;
                opacity: 0;
            }

            .btn-slide:hover span.title-hover, .btn-slide2:hover span.title-hover2 {
                opacity: 1;
                left: 40px;
            }

            .btn-slide span.circle, .btn-slide2 span.circle2 {
                display: block;
                background-color: #0099cc;
                color: #fff;
                position: absolute;
                float: left;
                margin: 5px;
                line-height: 20px;
                height: 20px;
                width: 20px;
                top: 0;
                left: 0;
                transition: .5s;
                border-radius: 50%;
            }

            .btn-slide2 span.circle2 {
                background-color: #efa666;
            }

            .btn-slide span.title,
            .btn-slide span.title-hover, .btn-slide2 span.title2,
            .btn-slide2 span.title-hover2 {
                position: absolute;
                left: 90px;
                text-align: center;
                margin: 0 auto;
                font-size: 16px;
                font-weight: bold;
                color: #30abd5;
                transition: .5s;
            }

            .btn-slide2 span.title2,
            .btn-slide2 span.title-hover2 {
                color: #efa666;
                left: 80px;
                bottom: -11px;
            }

            .btn-slide span.title-hover, .btn-slide2 span.title-hover2 {
                left: 80px;
                opacity: 0;
            }

            .btn-slide span.title-hover, .btn-slide2 span.title-hover2 {
                color: #fff;
            }
            tr {
                vertical-align: middle;
            }
        </style>
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