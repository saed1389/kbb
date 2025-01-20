@extends('frontend.layouts.app')
@section('title')
    Geçmiş Kongre Program ve Bildiri Kitapları - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span> <a href="{{ route('bilgi-merkezi') }}">Bilgi Merkezi</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Geçmiş Kongre Program ve Bildiri Kitapları</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Geçmiş Kongre Program ve Bildiri Kitapları</h3>
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
                        <div class="col-md-6">
                            <ol class="alternating-colors">
                                <li class="li-item">
                                    <strong class="strong">9. Koklear İmplantasyon Otoloji-Nörootoloji Odyoloji Kongresi</strong>
                                    <p class="under-list" ><a href="{{ asset('uploads/Document/History/9.-Koklear-implantasyon-Otoloji-Norootoloji-Odyoloji-Kongresi.pdf') }}" >9. Koklear İmplantasyon Otoloji-Nörootoloji Odyoloji Kongresi</a></p>
                                </li>
                                <li class="li-item">
                                    <strong>11. Türk Rinoloji Kongresi</strong>
                                    <ul class="under-list">
                                        <li><p><a href="{{ asset('uploads/Document/History/11.Turk-Rinoloji-Kongresi-bildiri-kitabi.pdf') }}" >Türk Rinoloji Kongre Bildiri Kitabı</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/History/11.Turk-Rinoloji-Kongresi-program.pdf') }}" >Türk Rinoloji Kongre Cep Programı</a></p></li>
                                    </ul>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">13. Türk Rinoloji & 5. Ulusal Otoloji Nörootoloji & 1. Ulusal Baş Boyun Cerrahisi Kongresi</strong>
                                    <p class="under-list"><a href="{{ asset('uploads/Document/History/13.-Türk Rinoloji-5.-Ulusal-Otoloji-Nörootoloji-1.-Ulusal-Bas-Boyun-Cerrahisi-Kongresi.pdf') }}" >13. Türk Rinoloji & 5. Ulusal Otoloji Nörootoloji & 1. Ulusal Baş Boyun Cerrahisi Kongresi</a></p>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">32. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <p class="under-list"><a href="https://kbb.org.tr/kongreler/2010/" target="_blank">32. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</a></p>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">34. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <p class="under-list"><a href="https://kbb.org.tr/kongreler/2012/" target="_blank">34. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</a></p>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">35. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <p class="under-list"><a href="https://kbb.org.tr/kongreler/2013/" target="_blank">35. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</a></p>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">36. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <p class="under-list"><a href="https://kbb.org.tr/kongreler/2014/" target="_blank">36. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</a></p>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">37. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <ul class="under-list ">
                                        <li><p><a href="{{ asset('uploads/Document/History/37.-Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Kongresi-bildiri-kitabi.pdf') }}" >Türk Ulusal KBB BBC Kongresi Bildiri Kitabı</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/History/37.-Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Kongresi-program.pdf') }}" >Türk Ulusal KBB BBC Kongresi Bilimsel Programı</a></p></li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="alternating-colors">
                                <li class="li-item">
                                    <strong class="strong">38. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <ul class="under-list">
                                        <li><p><a href="{{ asset('uploads/Document/History/38.-Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Kongresi-bildiri-kitabi.pdf') }}" >Türk Ulusal KBB BBC Kongresi Bildiri Kitabı</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/History/38.-Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Kongresi-program.pdf') }}" >Türk Ulusal KBB BBC Kongresi Bilimsel Programı</a></p></li>
                                    </ul>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">39. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <ul class="under-list">
                                        <li><p><a href="{{ asset('uploads/Document/History/39.-Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Kongresi-bildiri-kitabi.pdf') }}" >Türk Ulusal KBB BBC Kongresi Bildiri Kitabı</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/History/39.-Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Kongresi-program.pdf') }}" >Türk Ulusal KBB BBC Kongresi Bilimsel Programı</a></p></li>
                                    </ul>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">40. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <p class="under-list"><a href="{{ asset('uploads/Document/History/40.-Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Kongresi-program.pdf') }}" >40. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</a></p>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Sanal Kongresi</strong>
                                    <p class="under-list"><a href="{{ asset('uploads/Document/History/Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Sanal-Kongresi-bildiri-kitabi.pdf') }}" >Türk Ulusal KBB BBC Sanal Kongresi Bildiri Kitabı </a></p>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">41. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <p class="under-list"><a href="{{ asset('uploads/Document/History/41-Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Kongresi-2022318181041.pdf') }}" >41. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi </a></p>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">42. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <p class="under-list"><a href="{{ asset('uploads/Document/History/42-Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Kongresi-202112616464.pdf') }}" >42. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi </a></p>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">43. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <p class="under-list"><a href="{{ asset('uploads/Document/History/43-Turk-Ulusal-Kulak-Burun-Bogaz-ve-Bas-Boyun-Cerrahisi-Kongresi-24052023.pdf') }}" >43. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi </a></p>
                                </li>
                                <li class="li-item">
                                    <strong class="strong">44. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi</strong>
                                    <p class="under-list"><a href="{{ asset('uploads/Document/History/44_KBB 2023-web press_07122023.pdf') }}" >44. Türk Ulusal Kulak Burun Boğaz ve Baş Boyun Cerrahisi Kongresi </a></p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
