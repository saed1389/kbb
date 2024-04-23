@extends('frontend.layouts.app')
@section('title')
    Baş Boyun Onam Formları - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span><a href="{{ route('onam_formlari') }}"> Onam Formları</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Baş Boyun Onam Formları</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Baş Boyun Onam Formları</h3>
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
                                <a href="{{ asset('uploads/Document/Acik-Septoplasti-2019214175732.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Ağız içerisinden kitle eksizyonu</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/bos-2019214175835.docx') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Boyun disseksiyonu</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Burundan-yabanci-cisim-cikartilmasi-2019214175941.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Damaktan kitle eksizyonu</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Eksternal-sinus-cerrahisi-(caldwell---frontal)-201921418016.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Dil kökü askısı</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Endoskopik-DSR-201921418051.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Dilden kitle eksizyonu</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Endoskopik-Sinus-Cerrahisi-201921418115.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Dudak tümörü</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Konka-mudahalesi-201921418137.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Fleksıbl bakı - Nazofarenks burun gırtlak biyopsi</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Lateral-Rinotomi---Sinus-Tumor-Cerrahisi-201921418158.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Glossektomi</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Nazal-sinesi-acilmasi-201921418221.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Parotidektomi</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Nazoalveolar-kist-eksizyonu-201921418253.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Parsiyel larenjektomi</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Septoplasti-201921418333.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Submandibular gland eksizyonu</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Septorinoplasti-201921418358.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Süspansiyon larengoskopi</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Oroantral-fistul-onarimi-201921418421.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Tiroidektomi</td>
                    </tr>

                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Oroantral-fistul-onarimi-201921418421.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Total larenjektomi</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Oroantral-fistul-onarimi-201921418421.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Trakeal rezeksiyon anastomoz</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Oroantral-fistul-onarimi-201921418421.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Trakeostomi revizyonu</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Oroantral-fistul-onarimi-201921418421.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Tiroidektomi</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Oroantral-fistul-onarimi-201921418421.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Üst dudak tümör eksizyonu</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Oroantral-fistul-onarimi-201921418421.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Voice protez takılması</td>
                    </tr>
                    <tr>
                        <td>
                            <div id="wrap">
                                <a href="{{ asset('uploads/Document/Oroantral-fistul-onarimi-201921418421.pdf') }}" download="" class="btn-slide2">
                                    <span class="circle2"><i class="fa fa-download"></i></span>
                                    <span class="title2">İndir</span>
                                    <span class="title-hover2">Buraya Tıkla</span>
                                </a>
                            </div>
                        </td>
                        <td>Yüzden eksizyonel biyopsi</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
