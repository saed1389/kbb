@extends('frontend.layouts.app')
@section('title')
    Türk KBB ve BBC Derneği Kısa Süreli Yurt Dışı Değişim Programı Koşullar - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('front/assets/css/other-page.css') }}" >
        <style>
            li {
                list-style: auto;
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
                            <span><a href="{{ route('burs_oduller') }}">Burs Oduller</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span><a href="{{ route('burslar') }}">Bursler</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Türk KBB ve BBC Derneği Kısa Süreli Yurt Dışı Değişim Programı Koşullar</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Türk KBB ve BBC Derneği Kısa Süreli Yurt Dışı Değişim Programı Koşullar</h3>
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
                        <ol>
                            <li>T&uuml;rk KBB ve BBC Derneği, yurt i&ccedil;inde &ccedil;alışan &uuml;yelerine, yurt dışında bilgi ve g&ouml;rg&uuml;lerini artırmaları, d&ouml;nd&uuml;klerinde bu bilgilerini paylaşmaları amacıyla karşılıksız olarak kısa s&uuml;reli yurt&nbsp;dışı değişim programı oluşturmuştur. Bu kapsamda, KBB Hastalıkları uzmanlık alanındaki konularda, T&uuml;rk KBB BBC Derneği tarafından &ouml;nceden irtibat kurulan ve belirlenen Amerika Birleşik Devletleri ve Avrupa &uuml;lkelerindeki merkezlerde g&ouml;zlemci olarak kısa s&uuml;reli&nbsp; eğitimler ger&ccedil;ekleştirilecektir</li>
                            <li>Burs i&ccedil;in başvuran aday Kulak Burun Boğaz Hastalıkları dalında uzmanlık &ouml;ğrencisi veya KBB Hastalıkları uzmanı olmalıdır.</li>
                            <li>KBB uzmanı adayların T&uuml;rk KBB ve BBC Derneği&rsquo;ne &uuml;ye ve aidatlarını d&uuml;zenli yatırmış olmaları gereklidir.</li>
                            <li>Adayın T&uuml;rk KBB ve BBC Derneği Yeterlik yazılı ve s&ouml;zl&uuml; sınavlarından ge&ccedil;miş olması &ouml;ncelikli bir &ouml;zellik olarak değerlendirilecektir.</li>
                            <li>Başka bir kurumdan destek alan adaylara bu burs verilmeyecektir.</li>
                            <li>Burs verilecek KBB alanlarının se&ccedil;iminde T&uuml;rk KBB ve BBC Derneği yetkilidir.</li>
                            <li>Aday başvurusunda ayrıntılı &ouml;zge&ccedil;mişini (tıp ve uzmanlık diplomaları, yayınlar, bildiriler, alınan eğitimler, &ouml;d&uuml;ller vs.) iletmelidir.</li>
                            <li>Burslar do&ccedil;ent, yardımcı do&ccedil;ent, uzman ve son yıl uzmanlık &ouml;ğrencilerine verilecektir.</li>
                            <li>Aday, yurt dışında faaliyetlerini y&uuml;r&uuml;tebilmesi i&ccedil;in iyi d&uuml;zeyde İngilizce bildiğini&nbsp;belgelendirmek zorundadır. Adayın, herhangi bir zamanda TOEFL (CBT 222, PBT &cedil;560, IBT 84), &Uuml;DS, KPDS veya YDS&rsquo; den 65 puan veya &uuml;zeri veya &Ouml;SYM Yabancı Dil Sınavları Eşdeğerlikleri Tablosuna g&ouml;re eşdeğer puan almış olması ve bunu belgelendirmesi gerekmektedir.</li>
                            <li>Aday İngilizce dışında gidilecek &uuml;lkenin ge&ccedil;erli dilini de biliyorsa buna dair belge sunmalıdır.</li>
                            <li>Aday eğitim hastanelerinde &ccedil;alışıyorsa eğitim sorumlusu ve idari sorumludan, &uuml;niversite de &ouml;ğretim &uuml;yesi olarak &ccedil;alışıyorsa Anabilim Dalı&rsquo;ndan izin belgesi almalıdır.</li>
                            <li>Aday, gerek g&ouml;r&uuml;ld&uuml;ğ&uuml;nde, T&uuml;rk KBB ve BBC Derneği y&ouml;netim kurulu tarafından oluşturulacak bir kurul tarafından s&ouml;zl&uuml; g&ouml;r&uuml;şmeye alınır.</li>
                            <li>Hangi adaylara burs verileceği T&uuml;rk KBB ve BBC Derneği Y&ouml;netim Kurulu tarafından saptanır. G&ouml;r&uuml;şme sonu&ccedil;ları T&uuml;rk KBB ve BBC Derneği Y&ouml;netim Kurulu tarafından ilan edilir.</li>
                            <li>Burs miktarı ulaşım ve&nbsp; barınma giderlerinin karşılığını i&ccedil;erir. Burs kapsamında bursiyerin ulaşım ve konaklama giderleri T&uuml;rk KBB ve BBC Derneği tarafından karşılanır. Programa devam etme zorunluğu vardır.</li>
                            <li>Adayın yurt dışında eğitime başlayacağı tarih T&uuml;rk KBB ve BBC Derneği tarafından belirlenecektir.</li>
                            <li>Burs s&uuml;resi iki-d&ouml;rt haftadır.</li>
                            <li>Burs s&uuml;resinin bitiminde adayın rapor d&uuml;zenlemesi ve T&uuml;rk KBB ve BBC Derneği Y&ouml;netim Kurulu&rsquo;na g&ouml;ndermesi gereklidir. Gerekli g&ouml;r&uuml;ld&uuml;ğ&uuml;nde aday sunum i&ccedil;in y&ouml;netim kurulu toplantısına &ccedil;ağrılabilir.</li>
                            <li>Bursa hak kazanan aday T&uuml;rk KBB ve BBC Derneği tarafından belirlenecek tarihte bursu kullanmaya başlamakla y&uuml;k&uuml;ml&uuml;d&uuml;r.</li>
                            <li>&nbsp;Aday burs aldığı s&uuml;re&ccedil;te araştırmalara katılır ve bu konuda yayın yaparsa yapacağı yayınların sonunda bu konuda T&uuml;rk KBB ve BBC Derneği&rsquo;nden burs almış olduğunu belirtilmelidir.</li>
                            <li>&nbsp;Başvuru i&ccedil;in gerekli olan bilgiler, dernek merkezine g&ouml;nderilecektir. Başvuru evraklarının dijital ortamda ki halleri (Word, PDF, JPEG vs.) de bir flash bellek veya cd ile dernek merkezine g&ouml;nderilen evrakların i&ccedil;erisinde bulunacaktır. (&Ccedil;oban&ccedil;eşme Sanayi Cad. No:11 Nish İstanbul A Blok Daire: 8 Yenibosna-İstanbul)</li>
                        </ol>
                        <div class="text-center"><strong><a href="{{ asset('uploads/Document/TKBBBBCD_ KISA SÜRELİ YURT DIŞI DEĞİŞİM PROGRAMI BAŞVURU FORMU.doc') }}">KISA SÜRELİ YURT DIŞI DEĞİŞİM PROGRAMI BAŞVURU FORMU</a> </strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
