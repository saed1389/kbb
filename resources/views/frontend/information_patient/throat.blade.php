@extends('frontend.layouts.app')
@section('title')
    Boğaz - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span><a href="{{ route('hastalar-icin-bilgiler') }}">Hastalar İçin Bilgiler</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Boğaz</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Boğaz</h3>
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
                        <h1>
                            <span id="menuCaption">Boğaz</span>
                        </h1>
                        <div id="menuContent">
                            <div class="panel-group" id="accordion">
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga1"><strong><a href="#collapsea1" data-bs-toggle="collapse">Sık sık ortaya &ccedil;ıkan ağız yaralarının nedenleri nelerdir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea1">
                                        <div class="card-body">Herhangi bir nedenle mide i&ccedil;eriğinin yukarı ka&ccedil;ması durumunda refl&uuml; ger&ccedil;ekleşmiş olur. İki t&uuml;rl&uuml; refl&uuml; vardır.
                                            <ul>
                                                <li>Gastro&ouml;zofageal refl&uuml; (mide refl&uuml;s&uuml;) &ndash; mide i&ccedil;eriğinin yemek borusunun alt kısmına ka&ccedil;ması</li>
                                            </ul>
                                            <ul>
                                                <li>Laringofaringeal refl&uuml; (boğaz refl&uuml;s&uuml;) &ndash; mide i&ccedil;erinin boğaza, genize ve ses tellerine ka&ccedil;ışı<br />
                                                    Yemek borusunun alt kısmı mideden salgılanan asit ve sindirim enzimlerine kısmen de olsa dayanaklıdır. Mide i&ccedil;eriğinin g&uuml;n i&ccedil;inde 20-30 defaya kadar yemek borusunun alt kısmına ka&ccedil;ması neredeyse normaldir. Boğaz mide asidi ve sindirim enzimlerine dayanaksız olduğundan bu i&ccedil;eriğin boğaza temas etmesi boğazda ses tellerinde ve yemek borusunun girişinde &ouml;dem ve salgıların artmasına neden olur.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga2"><strong><a href="#collapsea2" data-bs-toggle="collapse">Refl&uuml; ne demektir?&nbsp;</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea2">
                                        <div class="card-body">
                                            <ul>
                                                <li>&Ouml;ğ&uuml;nler mideyi tam dolduracak kadar fazla yemeyin, tercihen az-az sık yemeye &ccedil;alışınız.</li>
                                            </ul>
                                            <ul>
                                                <li>Uyumadan &ouml;nceki 2-3 saat i&ccedil;inde bir şeyler yememeye &ccedil;alışınız.</li>
                                                <li>Y&uuml;ksek yastıkla yatmanız boğaza asit ka&ccedil;ışını &ouml;nleyecektir.</li>
                                                <li>Bel ve karın b&ouml;lgesini aşırı sıkan kıyafetler giymeyiniz.</li>
                                            </ul>
                                            <ul>
                                                <li>Tok karına spor yapmayınız. &Ouml;zellikle karın egzersizlerinden uzak durunuz.</li>
                                                <li>G&uuml;n i&ccedil;inde ve &ouml;zellikle uyku &ouml;ncesinde acılı, baharatlı, aşırı yağlı, asitli ve gazlı i&ccedil;ecekler, hazır meyve suları, koyu &ccedil;ay, kahve, &ccedil;ikolata ve kakao i&ccedil;eren yiyecek ve i&ccedil;ecekleri t&uuml;ketmemeye &ccedil;alışınız.</li>
                                                <li>Poğa&ccedil;a ve b&ouml;rek gibi yağlı hamurlu yiyeceklerden uzak durunuz.</li>
                                                <li>S&uuml;t, yoğurt, ayran t&uuml;ketmemeye &ccedil;alışınız.</li>
                                                <li>Portakal, Mandalina, Limon, Nar,&nbsp; Ekşi elma, Kivi t&uuml;ketmeyiniz.</li>
                                                <li>Sigara ve alkol t&uuml;ketmeyiniz.</li>
                                                <li>Yemeklere aşırı limon suyu ve sirke eklemeyiniz.</li>
                                                <li>Fast food ve kızartma yiyeceklerden ziyada ızgara ve haşlanmış yiyecekleri tercih ediniz.</li>
                                                <li>Yemeklerde ket&ccedil;ap ve mayonez kullanmayınız.</li>
                                                <li>G&uuml;n i&ccedil;inde 1.5 -2 lt su i&ccedil;meya &ccedil;alışınız.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga3"><strong><a href="#collapsea3" data-bs-toggle="collapse">Refl&uuml;m&uuml; tedavi etmek i&ccedil;in neler yapmalı? Neler yapmamalıyım?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea3">
                                        <div class="card-body">T&uuml;k&uuml;r&uuml;k bezi taşlarına ilişkin şik&acirc;yetler taşın yerine, tıkanıklığın dercesine, t&uuml;k&uuml;r&uuml;k salgı hızına ve bez dokusunda iltihap olup olmamasına g&ouml;re değişir. Tipik yakınma, &ouml;zellikle limon gibi t&uuml;k&uuml;r&uuml;k salgısını arttıran bir yiyecek yenildiğinde aniden taşın olduğu bezde, yani &ccedil;ene altında, dilaltında ya da kulak &ouml;n&uuml;nde ani şişme ve ağrıdır. Kanalda tam bir tıkanma yoksa s&ouml;z konusu şişlik bir iki saat i&ccedil;inde ortadan kalkar. Sonra tekrar t&uuml;k&uuml;r&uuml;k bezini uyaran bir yiyecek yenildiğinde şik&acirc;yet yeniden ortaya &ccedil;ıkar.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga4"><strong><a href="#collapsea4" data-bs-toggle="collapse">Yemek yerken &ccedil;enemin altında ağrılı şişlik oluşmasının nedeni nedir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea4">
                                        <div class="card-body">Tedavide taşla birlikte akut bakteriyel bir enfeksiyon varsa &ouml;ncelike s&ouml;z konusu enfeksiyon antibiyotikler, antienflamatuvar ila&ccedil;lar ve sıvı alımının arttırılmasıyla tedavi edilir. T&uuml;k&uuml;r&uuml;k bezi taşlarının klasik tedavisi, a&ccedil;ık cerrahi y&ouml;ntemlerdir. &Ccedil;ene altı t&uuml;k&uuml;r&uuml;k bezi kanalının i&ccedil;indeki taşlar ağız i&ccedil;indeki kanal ağzına yakınsa, ağız i&ccedil;inden &ccedil;ıkarılabilir. Ancak g&uuml;n&uuml;m&uuml;zde siyalendoskopi t&uuml;k&uuml;r&uuml;k bezi taşlarının tedavisinde yeni bir se&ccedil;enektir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga5"><strong><a href="#collapsea5" data-bs-toggle="collapse">T&uuml;k&uuml;r&uuml;k bezi taşı nasıl tedavi edilir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea5">
                                        <div class="card-body">Atrofik glossit dil yapisinda bulunan papillarda (dil y&uuml;zeyinizde bulunan k&uuml;&ccedil;&uuml;k &ccedil;ıkıntılar) atrofiye yol a&ccedil;an dilin enflamatuar bir hastalığıdır. Bu hastalıkta dil d&uuml;zg&uuml;n y&uuml;zeyli kırmızı g&ouml;r&uuml;n&uuml;r. Atrofik glossit nedenleri: Beslenme yetersizliği&nbsp; (demir eksikliği, d&uuml;ş&uuml;k B12 ve folik asit seviyeleri ve vitamin eksiklikleri), kuru ağız, Sj&ouml;gren sendromu, ağızda mantar enfeksiyonu, &Ccedil;&ouml;lyak hastalığı.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga6"><strong><a href="#collapsea6" data-bs-toggle="collapse">Atrofik glossit nedir, nedenleri nelerdir?&nbsp;</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea6">
                                        <div class="card-body">Horlama, nefes alma sırasında havanın dar bir alandan ge&ccedil;erken, &ccedil;evresindeki yumuşak dokuların titreşimiyle ortaya &ccedil;ıkan sestir. Darlık arttık&ccedil;a doğal olarak horlama da şiddetlenecektir. Horlamayı oluşturan darlık, sanılanın aksine sadece burundaki bir patolojiyle değil, genellikle &uuml;st solunum yolunun dil arkasında ve yutak &ccedil;evresindeki b&ouml;l&uuml;m&uuml;n&uuml;n daralmasıyla ilişkilidir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga7"><strong><a href="#collapsea7" data-bs-toggle="collapse">Horlama nedir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea7">
                                        <div class="card-body">&nbsp;</div>
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
