@extends('frontend.layouts.app')
@section('title')
    Proje Destek - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span><a href="{{ route('burs_oduller') }}">Burs Oduller</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Proje Destek</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Proje Destek</h3>
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
                        <p><strong>T&uuml;rk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Bilimsel Araştırma Destekleme Koordinasyon Birimi</strong><br />
                            <br />
                            Kulak Burun Boğaz Hastalıkları Topluluğunun Değerli &Uuml;yeleri,<br />
                            <br />
                            T&uuml;rk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği t&uuml;zel yapısı altında &ldquo;<strong>T&Uuml;RK KULAK BURUN BOĞAZ VE BAŞ BOYUN CERRAHİSİ DERNEĞİ BİLİMSEL ARAŞTIRMA DESTEKLEME KOORDİNASYON BİRİMİ&rdquo;&nbsp;</strong>20 Mayıs 2020 tarihinde<strong>&nbsp;</strong>oluşturulmuş ve faaliyetlerine başlamış bulunmaktadır. Bilimsel ama&ccedil;lı &ccedil;alışmalarınıza kısa s&uuml;rede mali destek sağlanması planlanmaktadır. Derneğimizin her d&ouml;nem i&ccedil;in &ouml;ng&ouml;rd&uuml;ğ&uuml; b&uuml;t&ccedil;e kapsamında sınırlı sayıda &ccedil;alışmaya deste olunacaktır. Bu nedenle proje başvurusunda bulunacak meslektaşlarımızın y&ouml;nerge be belgeleri iyi incelemeleri gerekmektedir. Proje başvuruları, bağımsız akran değerlendirmesi sonucunda sıralama yapılarak en başarılı &ccedil;alışmalar belirlenecektir. Sonu&ccedil;lar Derneğimiz sayfasında ilan edilecektir. Proje başvuruları ilk ilandan sonraki &uuml;&ccedil; ay boyunca ger&ccedil;ekleştirilebilecektir. Proje başvuru, başvuru değerlendirme y&ouml;nergelerini ve belgelerini sitede bulabilirsiniz.<br />
                            <br />
                            Sizlerin de katkıları ile T&uuml;rk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği Bilimsel Araştırma Destekleme Koordinasyon Birimi gelecekte arzu ettiğimiz d&uuml;zeye gelecektir. Bu nedenle sistem ile ilgili geribildirimleriniz mail aracılığı ile bekliyoruz.<br />
                            <br />
                            Projelerinizi başvurularınızın kabul edilebilmesi i&ccedil;in y&ouml;nergede yer alan belgelerin kullanılması gerekmektedir.<br />
                            <br />
                            Soru ve sorunlarınız i&ccedil;in y&ouml;nergedeki birim sekreterya mailini kullanabilirsiniz.<br />
                            <br />
                            &Ccedil;alışmanızda başarılar diler,<br />
                            <br />
                            Saygılarımızı sunarız.<br />
                            <br />
                            <strong>T&uuml;rk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği</strong><br />
                            <br />
                            <strong>&nbsp;Bilimsel Araştırma Destekleme Koordinasyon Birimi Y&ouml;netimi</strong></p>

                        <p><strong>&nbsp;<a href="{{ asset('uploads/Document/BILIMSEL-ARASTIRMA-DESTEKLEME-KOORDINASYON-BIRIMI-CALISMA-YONERGESI-2021102514817.pdf') }}" target="_blank">Bilimsel Araştırma Destekleme Koordinasyon Birimi &Ccedil;alışma Y&ouml;nergesi i&ccedil;in tıklayınız.</a></strong></p>

                        <p>&nbsp;<a href="{{ route('bilimsel-arastirma-destekleme-koordinasyon-birimi-formlari') }}"><strong>Bilimsel Araştırma Destekleme Koordinasyon Birimi Formları</strong></a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
