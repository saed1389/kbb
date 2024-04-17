@extends('frontend.layouts.app')
@section('title')
    Yönetim Kurulu Kararları - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Yönetim Kurulu Kararları</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Yönetim Kurulu Kararları</h3>
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
                    <th>Tarih</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-29012016-2019214161818.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>29.01.2016</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-24022015-2019214162235.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>24.02.2015</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-24112015-2019214162324.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>24.11.2015</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="#" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>12.11.2015</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-12112015-2019214163140.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>28.10.2015</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-28102015-2019214163232.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>15.10.2015</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-15102015-2019214163326.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>17.08.2015</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-17082015-2019214163415.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>27.05.2015</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-27052015-2019214163453.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>07.04.2015</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-07042015-2019214171725.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>16.03.2015</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-16032015-2019214171853.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>29.01.2015</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-09122014-2019214172034.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>09.12.2014</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-27112014-201921417222.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>27.11.2014</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-08112014-2019214172226.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>08.11.2014</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-09102014-201921417231.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>09.10.2014</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-03092014-2019214172339.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>03.09.2014</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-07082014-201921417246.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>07.08.2014</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-24052014-2019214172433.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>24.05.2014</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-08052014-2019214172455.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>08.05.2014</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Turk-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Dernegi-Yonetim-Kurulu-Toplantisi-Kararlari-15042014-2019214172514.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Yönetim Kurulu Toplantısı Kararları</td>
                        <td>15.04.2014</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
