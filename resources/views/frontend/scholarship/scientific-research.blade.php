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
                            <span> <a href="{{ route('burs_oduller') }}"> Burs Oduller</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span> <a href="{{ route('proje-destek') }}"> Proje Destek</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Bilimsel Araştırma Destekleme Koordinasyon Birimi Formları</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Bilimsel Araştırma Destekleme Koordinasyon Birimi Formları</h3>
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
                                <h5>Başvuru Belgeleri</h5>
                                <li class="li-item">
                                    <strong>Başvuruda Kullanılacak Belgeler</strong>
                                    <ul class="under-list">
                                        <li><p><a href="{{ asset('uploads/Document/Basvuru-Belgeleri.doc') }}" download="">Başvuru Belgeleri</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Basvuru-Formu.doc') }}" download="">Başvuru Formu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Basvuru-Kabul-Tutanagi.doc') }}" download="">Başvuru Kabul Tutanağı</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Basvuru-Kurallari.doc') }}" download="">Başvuru Kuralları</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Basvuru-Yonergesi.doc') }}" download="">Başvuru Yönergesi</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Butce-Olusturma.doc') }}" download="">Bütçe Oluşturma</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Calisma-protokolu-ve-cizelgesi.doc') }}" download="">Çalışma protokolü ve çizelgesi</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Kabul-ve-taahhut-formu.doc') }}" download="">Kabul ve taahhüt formu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Yayin-olarak-kabul-etme-yonergesi.doc') }}" download="">Yayın olarak kabul etme yönergesi</a></p></li>
                                    </ul>
                                </li>

                                <li class="li-item">
                                    <strong class="strong">Proje Yürütme ile İlgili Belgeler</strong>
                                    <ul class="under-list ">
                                        <li><p><a href="{{ asset('uploads/Document/Ek-Sure-Talep-Formu.doc') }}" download="">Ek Süre Talep Formu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Proje-Ara-Rapor-Formu.doc') }}" download="">Proje Ara Rapor Formu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Proje-Butce-Sonlandirma-Formu.doc') }}" download="">Proje Bütçe Sonlandırma Formu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Proje-Ek-Sure-Talep-Yonergesi.doc') }}" download="">Proje Ek Süre Talep Yönergesi</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Proje-Kapatma-Raporu.doc') }}" download="">Proje Kapatma Raporu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Proje-Satin-Alma-Talebi.doc') }}" download="">Proje Satın Alma Talebi</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Proje-Sonlandirma-Degerlendirme-Formu.doc') }}" download="">Proje Sonlandırma Değerlendirme Formu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Proje-Sonuc-Raporu.doc') }}" download="">Proje Sonuç Raporu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Proje-Sozlesme.doc') }}" download="">Proje Sözleşme</a></p></li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="alternating-colors">
                                <li class="li-item">
                                    <h5>Hakemlik ile İlgili Belgeler</h5>
                                    <ul class="under-list">
                                        <li><p><a href="{{ asset('uploads/Document/Hakem-Basvuru-Formu.doc') }}" download="">Hakem Başvuru Formu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Hakem-Belirleme-Kurallari.doc') }}" download="">Hakem Belirleme Kuralları</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Hakem-Degerlendirme-Formu.doc') }}" download="">Hakem Değerlendirme Formu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Hakem-Gizlilik-Taahhutnamesi.doc') }}" download="">Hakem Gizlilik Taahhütnamesi</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Hakem-Gorevden-Cekme-Yazisi.doc') }}" download="">Hakem Görevden Çekme Yazısı</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Hakem-Gorevlendirme-Yazisi.doc') }}" download="">Hakem Görevlendirme Yazısı</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Hakeme-Gonderme-Kurallari.doc') }}" download="">Hakeme Gönderme Kuralları</a></p></li>
                                    </ul>
                                </li>
                                <li class="li-item">
                                    <h5>Koordinasyon Birimine Ait Belgeler</h5>
                                    <ul class="under-list">
                                        <li><p><a href="{{ asset('uploads/Document/Birim-Faaliyet-Bildirim-Raporu.doc') }}" download="">Birim Faaliyet Bildirim Raporu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Birim-Toplanti-Tutanagi.doc') }}" download="">Birim Toplantı Tutanağı</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Faaliyet-Raporu.doc') }}" download="">Faaliyet Raporu</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Proje-Basvuru-Ilani.doc') }}" download="">Proje Başvuru İlanı</a></p></li>
                                        <li><p><a href="{{ asset('uploads/Document/Proje-Kapatma-Bildirim-Formu.doc') }}" download="">Proje Kapatma Bildirim Formu</a></p></li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
