@extends('frontend.layouts.app')
@section('title')
    KBB Tümörleri - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>KBB Tümörleri</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">KBB Tümörleri</h3>
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
                            <span id="menuCaption">KBB T&#252;m&#246;rleri</span>
                        </h1>
                        <div id="menuContent">
                            <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga1"><strong><a href="#collapsea1" data-toggle="collapse">Kötü huylu tümörlerde sadece tümörün çıkarılması yeterli midir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea1">
                                        <div class="card-body">Gırtlak kanseri erken evrede tedavi edildiğinde gırtlağın büyük kısmı korunur ve mükemmele yakın bir ses elde edilebilir. Bunun yanında çok ileri evrelerde gırtlağı korumak her zaman mümkün olamayabilir ve gırtlağın tamamının alınması gerekebilir. Bu durumda, yani gırtlağının tamamı alınan hastada üst solunum yolunun devamlılığı bozulduğundan hasta boğaza açılan kalıcı bir delik vasıtasıyla nefes almak zorunda kalır.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga2"><strong><a href="#collapsea2" data-toggle="collapse">Gırtlak kanseri nedeniyle ameliyat olan bir hastanın boğazında kalıcı delik olur mu?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea2">
                                        <div class="card-body">Gırtlak kanserinin erken evre ameliyatlarını gırtlakta sadece hastalıklı ses teli kısmının alınması, gırtlağın dikey ya da yatay eksende kısmi olarak alınması oluşturur. Bu hastalarda ameliyatta alınan doku miktarı arttıkça bozulmakla beraber her zaman hastalarda konuşma fonksiyonları korunmaktadır. Diğer bir deyişle ses performansı azalsa da mutlaka korunmaktadır. Bunun yanında ileri evrelerde gırtlağın tamamının alındığı hastalarda ana ses organı olan gırtlak ve ses telleri alınıp soluk borusu boyuna açılmakta hastanın doğal ve klasik yollarla ses çıkarması ve konuşması kaybolmaktadır, ancak bu hastalarda dahi gerek yemek borusu yoluyla konuşma rehabilitasyonlarıyla, gerek ek cerrahi müdahalelerle, gerek konuşma protezleri ve elektrolarinks gibi cihazlarla da olsa bir şekilde hastaya konuşma yeteneğini yeniden kazandırmak mümkündür. Yani gırtlak kanseri sonrası her hasta mutlaka bir şekilde konuşabilir, sosyal iletişimini sürdürmeye devam edebilir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga3"><strong><a href="#collapsea3" data-toggle="collapse">Gırtlak kanseri nedeniyle ameliyat olan bir hasta bir daha konuşamaz mı?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea3">
                                        <div class="card-body">Nazofarenks boğazın burun boşluğuna açılan kısmıdır. En üstteki kısım olması itibariyle 'üst yutak', ya da halk arasında 'geniz' olarak da ifade edilir. Kafa tabanında yer alır ve önde buruna aşağıda boğaza her iki yanda ise östaki tüpü ile orta kulağa uzanır. Bu bölgede oluşan kanserlere "nazofarenks kanserleri" denir.<br>
                                            Geniz tümörleri bulunduğu bölge itibariyle genizle ilgili özel bulgular vermez, ancak kitlenin etkileri kulakta (Östaki tüpü ağzının kitle tarafından tıkanmasıyla kulakta işitme azlığı, tıkanıklık hissi) ve burunda (tek taraflı burun tıkanıklığı, kanlı burun akıntısı) görülebilir. Bunun yanı sıra bazen tek bulgu boyunda ele gelen bir şişlik ya da çift görme olabilir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga4"><strong><a href="#collapsea4" data-toggle="collapse">Geniz tümörlerinin bulguları nelerdir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea4">
                                        <div class="card-body">Bu bölge komşulukları itibariyle cerrahiye uygun değildir. Bu nedenle geniz tümörlerinde standart tedavi yöntemi cerrahi değil ışın tedavisidir. Hem geniz bölgesi, hem de tanı anında boyunda lenf bezlerine yayılım yaklaşık %70 oranında görüldüğünden boyun da ışın tedavisi alanı içine dahil edilmektedir. Son yıllarda ışın tedavisi ile birlikte ilaç tedavisi(Kemoterapi) de tedavide kullanılmaktadır.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga5"><strong><a href="#collapsea5" data-toggle="collapse">Geniz tümörleri nasıl tedavi edilmektedir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea5">
                                        <div class="card-body">Vücudumuzdaki ana tükürük bezleri, tıp dilinde majör tükürük bezleri olarak da adlandırılan kulak önü (parotis), çene altı (submandibuler) ve dilaltı (sublingual) tükürük bezleridir. Tükürük bezi tümörlerinde tanıda önce hastanın şikâyetleri dinlenir. Tipik olarak iyi huylu tükürük bezi tümörü, en sık yerleştiği kulak önü tükürük bezinde yavaş yavaş büyür. Genellikle hastanın kulak memesi altında ya da önünde hareket edebilen bir topak olarak hissedilir ve ağrı yapmaz. Bazen hastalar söz konusu kitleyi fark eder etmez başvurur, bazen de birkaç yıl boyunca iyice büyümesine izin verip kozmetik bir sorun yaratınca hekime gelirler. Kötü huylu tümörler ise daha hızlı büyürler, bunlar sert, ellediğimizde hareket yeteneği az ya da hiç hareket etmeyen kitleler olarak karşımıza çıkabilirler. Bu nedenle kulak memesi çevresinde giderek büyüyen bir kitle fark edildiğinde bir Kulak Burun Boğaz uzmanına başvurulması önerilir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga6"><strong><a href="#collapsea6" data-toggle="collapse">Kulak memesi altında büyümekte olan bir kitle önemli midir?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea6">
                                        <div class="card-body">Kulak çınlamasının birçok sebebi mevcuttur. Kesin mekanizmaları hala tam olarak anlaşılamamıştır. Sık görülen sebepleri arasında kulak kiri, ani işitme kaybı, Meniere hastalığı (iç kulakta basınç artışı), gürültüye bağlı işitme kayıpları, yaşlılığa bağlı işitme kayıpları, kalıtsal iç kulak hastalıkları, kafa travmaları, kulağa zararlı ilaç kullanımları (bazı antibiyotikler, kemoterapi ilaçları, aspirin, kinin, diüretikler), otoskleroz (orta kulak kemikçiklerinin kireçlenmesi), kardiyovasküler hastalıklar, santral sinir sistemi hastalıkları, metabolik hastalıklar tinnitusun tespit edilebilen sebepleri olarak sayılabilir. Ayrıca çok nadir olarak işitme ve denge sinirine ait tümörlerde de çınlama görülebilmektedir. Detaylı kulak burun boğaz muayenesine ek olarak şüphe halinde doktorunuz tarafından istenecek odyolojik ve radyolojik (MR ve Tomografi) tetkiklerle kolayca tanısı konmakta ve tedavisi düzenlenebilmektedir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga7"><strong><a href="#collapsea7" data-toggle="collapse">Kulak çınlaması bir tümörün bulgusu olabilir mi?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea7">
                                        <div class="card-body">Çoğu burun kanaması, burun ön bölümünde bulunan kılcal bir damarın çatlaması nedeniyle tek taraflı olur. Kanamaların çoğunluğunu bu tip kanamalar oluşturur. Sıklıkla kuru iklimlerde veya kış aylarında kuru ve sıcak oda havası nedeniyle burun içini kaplayan mukozanın kuruması sonucunda oluşan kabuklanmalar ile olur. Bu tip kanamalar genellikler tek taraflı bazen iki taraflı da olabilir. Bu tip kanamalarda kanamanın kontrolü kolaydır, kendiliğinden bile durabilir. Arka burun kanamaları, sıklıkla orta ve ileri yaşlarda ve özellikle hipertansiyon hastalığı olanlarda görülür ve şiddeti burun ön kanamalarına göre daha fazladır Bunun dışındaki burun kanaması sebepleri; kaşıntıya yol açan alerji, enfeksiyon veya kuruluk durumlarında burnun karıştırılması. Üst solunum yolu enfeksiyonları, nezle, grip, sinüzit gibi enfeksiyonlar Kuvvetli burun sümkürme sonucu yaşlı veya genç hastalarda burun damarlarının çatlaması, buruna sıkılan kortizonlu ilaçlar, kokain kullanımı, buruna darbe alınması, burun kırıkları, yüz ve kafatası kırıkları, Burundaki kıkırdak ve kemik eğrilikleri sayılabilir. Burun, burun boşlukları ve genzin iyi ve kötü huylu tümörleri de yoğun burun kanamalarına neden olmaktadır. Bu tür hastalarda burun kanamaları genellikle tek taraflıdır. Kanamalar yanı sıra sürekli tek taraflı kötü kokulu akıntı da görülmektedir.</div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga8"><strong><a href="#collapsea8" data-toggle="collapse">Burun kanaması bir tümörün bulgusu olabilir mi?</a></strong></div>
                                    <div class="collapse in panel-collapse" id="collapsea8">
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
