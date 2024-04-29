@extends('frontend.layouts.app')
@section('title')
    Pediatrik KBB - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Pediatrik KBB</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Pediatrik KBB</h3>
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
                            <span id="menuCaption">Pediatrik KBB</span>
                        </h1>
                        <div id="menuContent">
                            <div class="panel-group" id="accordion">
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga1"><strong><a href="#collapsea1" data-toggle="collapse">Çocuklarda sinüzit olur mu?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea1">
                                        <div class="card-body">Alerjik nezle burun ve üst solunum yollarının tekrarlayan bir hastalığı olup, burun tıkanıklığı, hapşırık, burun akıntısı, burun kaşıntısı, damakta kaşıntı gibi bulgularla ortaya çıkmaktadır. Ülkemizde alerjik burun hastalığı çocuklarda %10-15 oranlarında görülebilmektedir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga2"><strong><a href="#collapsea2" data-toggle="collapse">Çocuklarda alerjik burun hastalığı (saman nezlesi) olur mu?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea2">
                                        <div class="card-body">Çocuklar en sık geçirdikleri üst solunum yolu enfeksiyonlarında özellikle burunda ortaya çıkan ödem ve akıntılara, bademcik ve geniz eti büyümelerine bağlı horlayabilmektedir. Horlama eşlik eden nefes durma (apne) ataklarıyla görülüyorsa tehlikeli olabilmektedir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga3"><strong><a href="#collapsea3" data-toggle="collapse">Çocuklar uykuda neden horlar? Horlamak ne zaman tehlikelidir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea3">
                                        <div class="card-body">Bademcik ve geniz etlerinin büyümesi ve sık iltihaplanması çocuklarda işitme kayıpları, ortodontik bozukluklar, yüz gelişiminde bozukluklar, konuşma bozukluğu, horlama, ağızdan soluma, gece öksürükleri, burun akıntıları gibi problemlere yol açabilmektedir. Bademcik ve geniz eti büyümeleri üst solunum yolunu daraltacak boyuta ulaştığında horlama ve apne dediğimiz uykuda nefessiz kalma gibi ciddi sorunlar başlatır. Ayrıca romatizmal ateş olarak bilinen hastalık A grubu beta hemolitik streptokoklara karşı oluşturulan antikorların yol açtığı bir komplikasyondur. Kalp kapakçıklarında bozukluklara yol açabilmektedir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga4"><strong><a href="#collapsea4" data-toggle="collapse">Bademcik geniz eti problemleri hangi sağlık sorunlarına yol açar?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea4">
                                        <div class="card-body">Büyüyen bademcik ve geniz eti uykuda nefes durmalarına yol açmıyorsa geniz eti ve bademcik ameliyatı 2 yaşından sonraya bırakılabilir, ancak uyku esnasında ciddi nefes durma atakları izleniyorsa ameliyat geciktirilmeden yapılmalıdır.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga5"><strong><a href="#collapsea5" data-toggle="collapse">Çocuğum hangi yaşta bademcik geniz eti ameliyatı olmalı?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea5">
                                        <div class="card-body">Sık geçirilen ateşli bademcik iltihabı atakları, uykuda nefes durmaları, bademcik çevresinde abse oluşma öyküsü, bademciğe ait kötü huylu tümör şüphesi durumlarında ameliyat zorunluluk; sık bademcik iltihabına bağlı olarak ateşli havale geçirme öyküsü, kulakta sık sıvı birikimleri, büyüme gelişme gerilikleri oluşturan sık enfeksiyonlar, bademcik kist ve taşları ise hastanın ameliyattan büyük yarar göreceği durumlardır.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga6"><strong><a href="#collapsea6" data-toggle="collapse">Çocuğum bademcik geniz eti ameliyatı olması gerekli mi? Hangi durumlarda bu ameliyat zorunluluktur?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea6">
                                        <div class="card-body">Bademcik ve geniz eti ameliyatı sonrası en çok dikkat edilmesi gereken risk kanamadır. Bu amaçla ebeveynlerin çok dikkatli olması, özellikle ağız ve burundan çok miktarda taze kan gelmesi gibi durumlarda hemen doktoruna başvurması gerekmektedir. Ameliyat sonrası riskleri azaltmak için çocuğun bir kaç gün ağır fiziksel aktivitelerden uzak tutularak dinlendirilmesi. Bir hafta kadar da çok sıcak ve sert yiyeceklerden kaçınılması. Ameliyat sonrası verilecek yemek listesine uyulması ve hastaneden çıkışta verilen reçetedeki ilaçların düzenli kullanılması gerekmektedir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga7"><strong><a href="#collapsea7" data-toggle="collapse">Bademcik ve geniz eti ameliyatı geçirenler nelere dikkat etmelidir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea7">
                                        <div class="card-body">Bademcik ve geniz eti vücudun mikroplara karşı savunmasında rolü olan lenfoid sistemin elemanlarıdır. Bademcik ve geniz eti ameliyatı sonrası bu dokuların yerine görev yapacak çok fazla dokunun vücutta bulunması nedeniyle uzun vadede bağışıklık sisteminde olumsuz bir etki görülmemektedir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga8"><strong><a href="#collapsea8" data-toggle="collapse">Bademcik ameliyatı olanlar daha kolay mı hasta olur?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea8">
                                        <div class="card-body">Kulakta sıvı birikimi, ateş ve ağrı olmaksızın kulak zarının arkasında, orta kulak boşluğunda sıvı birikmesidir. Orta kulağın havalanmasını, orta kulağı geniz boşluğuna bağlayan östaki borusu adlı bir tüp sağlar. Östaki borusunun işlevini yeteri kadar yapamadığı durumlarda orta kulak havalanması bozulacağından orta kulak boşluğunda sıvı birikimi başlar. Nezle, grip, sinüzit gibi üst solunum yolu enfeksiyonları ve alerji sonrasında görülebilir. İlaç tedavisi ile düzelmeyen kulakta sıvı birikimi çocuklarda sıklıkla büyümüş ve iltihaplı geniz eti ile birlikte görülür.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga9"><strong><a href="#collapsea9" data-toggle="collapse">Çocuğumun kulak zarının arkasında neden sıvı birikimi oldu?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea9">
                                        <div class="card-body">Kulakta sıvı birikiminin tedavisi öncelikle ilaç tedavisidir. Üst solunum yolu hastalıkları aynı zamanda tedavi edilir. İlaç tedavisi sırasında hasta takibe alınır. Kontrollerle kulakta sıvı varlığı ve işitme değerlendirilir. Kulakta sıvı birikimi ilaç tedavileri ile düzelmiyorsa kulak tüpü takılması kararı alınır Çocuklarda genel anestezi ile uygulanır. Bu işlem esnasında kulak zarına çok küçük bir delik oluşturularak orta kulaktaki sıvı boşaltılır. Kulak zarı ve orta kulak değerlendirilir. Bazı hastalarda bu işlem bile yeterli olabilmektedir. Bazı hastalarda ise bu aşamadan sonra kulak zarına tüp takılması gerekebilir. Çocuklarda varsa aynı seansta geniz eti de alınabilir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga10"><strong><a href="#collapsea10" data-toggle="collapse">Kulak zarı arkasında sıvı birikimi nasıl tedavi edilir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea10">
                                        <div class="card-body">İlaç tedavisine yanıt vermeyen,uğun işitmesinde ciddi probleme yol açarak dil ve zeka gelişimini azaltmaya başlayan kulakta sıvı birikimlerinin tedavisinde kulak zarına tüp takılması ameliyatı yapılabilir. İdeal sonuç için çocuğun en az 3-4 yaşında olması tercih edilir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga11"><strong><a href="#collapsea11" data-toggle="collapse">Kulak zarına tüp takılması ameliyatı hangi durumda ve hangi yaşta yapılabilir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea11">
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
