@extends('frontend.layouts.app')
@section('title')
    Burun - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Burun</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Burun</h3>
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
                            <span id="menuCaption">Burun</span>
                        </h1>
                        <div id="menuContent">
                            <div class="panel-group" id="accordion">
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga1"><strong><a href="#collapsea1" data-toggle="collapse">Burnumdan nefes alamamam ne gibi sorunlara yol açar?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea1">
                                        <div class="card-body">Kronik rinosinüzit en az 12 hafta süren ve aşağıdaki belirtilerden en az iki tane olan bir durum anlamına gelir: 1. Burun tıkanıklığı, 2. Burun veya geniz akıntısı, 3. Yüz ağrısı, yüzde basınç, ya da "doluluk", 4. Koku duyusunda azalma. Akut rinosinüzit genellikle soğuk algınlığı nedeniyle meydana gelen sinüslerin geçici bir enfeksiyonudur.&nbsp; Kronik rinosinüzit,&nbsp; soğuk algınlığını takiben meydana gelen ve belirli bir tedavi yaklaşımı gerektiren daha kalıcı bir sorundur. Belirtileri daha düşük dereceli olduğundan hem hastalar hemde sağlık sağlayıcıları tarafından göz ardı edilebilir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga2"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea2">Sinüzit nedir? Sinüzitli olduğumu nasıl anlarım?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea2">
                                        <div class="card-body">Kronik rinosinüzitin potansiyel tedavileri şunlardır: 1. Yaşam tarzı değişiklikleri; 2. Günlük tuzlu su ile burun yıkama; 3. Kortizon içeren burun spreyleri ve hapları; 4. Antibiyotikler; 5. Montelukast içeren ilaçlar.&nbsp;<br>
                                            Cerrahi; ilaç kullanımının allerji veya başka bir nedenden ötürü mümkün olmadığı veya ilaçlarla yeterince kontrol sağlanmayan hastalarda ve sinüs boşluklarını tıkayan mukus ve polipleri temizleyip sinüs açıklıklarını yeniden açmak için hekiminiz size cerrahi önerecektir. Ameliyatın yararlı olduğu durumlar şunlardır:
                                            <ul>
                                                <li>Kronik rinosinüzit belirtileri yukarıda belirtilen tıbbi tedavilerle yeterli iyileşmediğinde,</li>
                                                <li>Nazal polipler mevcutken glikokortikoid(steroid) tedavisi ile poliplerin yeterince küçülmediği durumda,</li>
                                                <li>Alerjik fungal rinosinüzit olduğunda,</li>
                                                <li>Paranazal sinüs bilgisayarlı tomografide sinüslerin drenajını engelleyen yapıların olması,</li>
                                                <li>Sinüs drenajında zorluk veya&nbsp; burun tıkanıklığına neden olan ciddi septum deviasyonu olduğunda,</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga3"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea3">Sinüzit kalıcı ve iyileşmeyen bir hastalık mı? Sinüzit tedavisi için hastalar neler yapabilir?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea3">
                                        <div class="card-body">Burun septumu, burun boşluğunu ortadan ikiye bölen bir duvardır. Septumun ön kısmı kıkırdaktan, arka kısmı ise kemikten oluşmuştur. İdeal koşullarda septumun orta hatta bulunması, sağ ve sol burun boşluklarının da eşit genişlikte olması gerekir. Ancak çoğu kişide septum tam olarak orta hatta değildir, hafif eğrilikler vardır. Bu tür hafif eğrlikler herhangi bir şikâyete neden olmaz. Septumun tamamı veya bir parçasının belirgin eğri olup orta hattan kayması ve solunumu etkiler duruma gelmesi hastalık olarak tanımlanır.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga4"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea4">Neden burnumdan nefes alamıyorum?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea4">
                                        <div class="card-body">Burun içi boru gibi bir boşluk olmayıp her iki tarafta üçer adet konka adı verilen etler de bulunur. Septumdaki eğrilikle birlikte konkalarda büyüme ve şişlik yani hipertrofi olursa burun tıkanıklığı daha belirgin hale gelir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga5"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea5">Burnumdan nefes alamamamın nedeni burun eti problemi mi kemik problemi mi?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea5">
                                        <div class="card-body">Çoğu burun kanaması, burun ön bölümünde bulunan kılcal bir damarın çatlaması nedeniyle tek taraflı olur. Kanamaların çoğunluğunu bu tip kanamalar oluşturur. Sıklıkla kuru iklimlerde veya kış aylarında kuru ve sıcak oda havası nedeniyle burun içini kaplayan mukozanın kuruması sonucunda oluşan kabuklanmalar ile olur. Bu bölgedeki damarlar oldukça ince ve yüzeyde olduklarından burun sümkürülmesi, çocuklarda burun ile oynama ve hatta ufak dokunuşla dahi kanayabilir. Bu tip kanamalar genellikler tek taraflı bazen iki taraflı da olabilir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga6"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea6">Neden SIK SIK burnum kanıyor?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea6">
                                        <div class="card-body">Burun kanamasının beyinden geldiği inanışı: Burun kanamaları burun kökenlidir. Kafa içi, beyin ile burun arasında bir travma söz konusu değilse irtibat yoktur. Bu inanıştan dolayı birçok hasta nöroloji ve beyin cerrahi Uzmanlarına gereksiz bir şekilde başvurmaktadır.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga7"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea7">Burnumdan gelen kan beyin kanaması nedeniyle olabilir mi?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea7">
                                        <div class="card-body">Koku alma bozukluğuna yol açan nedenler arasında en sık olarak burun ve sinüs hastalıkları gelir.&nbsp; Allerjik rinit, Nazal polipler, sinüzit, ileri derecede burun kemiği ve kıkırdağı eğrilikleri, burun travmaları, burun eti büyümeleri, çocuklarda geniz eti sık rastlanılan burun kaynaklı koku alma bozukluğu nedenleridir. Bunun dışında üst solunum yolu viral enfeksiyonları ve kafa travmaları da en sık koku alma bozukluğu nedenleri arasında yer alan durumlardır.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga8"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea8">Neden koku alamıyorum?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea8">
                                        <div class="card-body">Koku alma bozukluklarının tedavisinde öncelikle kişinin mevcut koku alma bozukluğunu detaylı bir şekilde sorgulayarak işlemlerimize başlamalıyız. Koku alma bozukluğunun şiddeti, nasıl ortaya çıktığı, sürekli mi aralıklı mı olup olmadığı,&nbsp; ne kadar süreden beri var olduğu, gibi pek çok soru ile hastalığın nedeni hakkında bilgi edinilir. Bu ön hazırlık sonrası detaylı bir KBB muayenesi yapılır. Bu KBB muayenesinde mutlaka koku alanı endoskopisi de yapılmalıdır. Koku alanı endoskopisi bizlere koku alma bozukluğunun iletim tipi bir kayıp olduğu konusunda bilgi verir. KBB muayenesinden sonra Koku Eşik, Koku Ayırtetme, Koku Tanımlama ve Koku Hedonik Skala testlerini yapmak gerekir. Koku ile ilgili tüm bu testler Koku alma bozukluğunun türü hakkında bizi bilgilendirir. Daha sonra Koku alanının tomografi ile görüntülenmesi ve koku soğancığının hacmini MR ile değerlendirme aşamasına geçilir. Bu aşamalarda koku alma bozukluğunun iletim tip mi yoksa sinirsel bir soruna mı bağlı olduğu netleştirilmemişse Koku uyaranı ile oluşan elektriksel aktivite kaydının yapıldığı olfaktometre ile beyindeki koku bölgelerine sinyalin ulaşıp ulaşmadığı değerlendirilir. Haritalandırmanın yapılması için de fonksiyonel MR kullanılır.<br>
                                            &nbsp;</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga9"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea9">Koku alma bozukluklarına yol açan hastalıkların tanısı nasıl konulur?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea9">
                                        <div class="card-body">Tedavi aşamasında 3 temel seçenek kullanılır. İlaç tedavisi, cerrahi tedavi ve rehabilitatif terapi. A vitamini koku alma bozukluğu tedavisinde sıklıkla kullanılır, bunun dışında nedene yönelik olarak diğer ilaçlar da kullanılır. İlaç tedavisinin bir sonuç vermediği durumlarda cerrahi tedavi ile koku alanı önündeki blokajı kaldırmak gerekir..</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga10"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea10">Koku alma bozukluğunun tedavisi nedir?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea10">
                                        <div class="card-body">Burun estetiği ameliyatı esnasında burun içi de ayrıntılı olarak değerlendirilir. Burun bölmesi kıkırdağı burun dışını şekillendirmek için kullanıldığından burun bölmesindeki eğrilikler gibi tıkanıklık yaratan sebepler burun bölmesi kıkırdağı alınırken giderilir. Bunun haricinde kronik sinüzit, burun etlerinde (konka) büyüme gibi ek problemleri de varsa aynı seansta giderilir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga11"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea11">Burun estetiği operasyonu burun tıkanıklığımı giderir mi?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea11">
                                        <div class="card-body">Burun yüzün tam ortasında bulunur ve yüzün estetik görünümünün önemli bir parçasıdır. Burunla ilgili problemler kişiden kişiye farklıdır ve genellikle kişinin yüz yapısına özeldir. Bu yüzden burun estetiği ameliyatı da kişiye ve yüze özel tasarlanarak yapılmalıdır. Hastaların ameliyat olmadan önce fotoğrafları çekilerek burun ve yüz analizlerinin doğru bir şekilde yapılması gerekmektedir. Bütün bu ameliyat öncesi doğru planlamanın amacı hastanın yüzüne, cinsiyetine, beklentisine uygun, sağlıklı nefes alabildiği güzel bir buruna kavuşmasıdır.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga12"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea12">Burun estetiği ameliyatının başarısını etkileyen faktörler nelerdir?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea12">
                                        <div class="card-body">Burun estetiği sonrası yüzde morarma ve şişme her ameliyatın sonrasında az veya çok görülür. Ameliyat sonrası yaklaşık 48 saat boyunca aralıklı buz uygulaması yapılır bu esnada hasta başı dik pozisyonda yatmalıdır. Nihayetinde oluşan şişlik ve morluk çoğunlukla 7-10. gün geçmiş olur. Ameliyat sonrası uzun bir süre yakın temas sporlarından kaçınılmalı, mümkün mertebe burun darbelere karşı muhafaza edilmelidir. Ameliyat sonrası bir aya kadar devam eden burun içi kabuklanma için tuzlu su solüsyonları ve nemlendirici spreyler önerilmektedir. Yaz dönemi ameliyat olan hastaların en az 3 ay boyunca direkt güneş ışığından uzak durmaları ve güneşten korunmak için şapka ve yüksek faktörlü güneş kremleri kullanmaları gerekmektedir. Burun estetiği ameliyatı sonrası 6 ay boyunca gözlük kullanmaktan sakınılmalıdır.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga13"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea13">Burun estetiği ameliyatı öncesi ve sonrası hastaların uyması gereken kurallar nelerdir?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea13">
                                        <div class="card-body">Burunla ilgili problemler kişiden kişiye çok farklıdır ve genellikle kişiye ve yüz yapısına özeldir. Her burun yapısı ve yüz yapısının farklı olmasından dolayı rinoplasti (burun estetiği) ameliyatı da kişiye ve yüze özel tasarlanarak yapılmalıdır.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga14"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea14">Burun estetiği ameliyatında burnumu şekillendirirken nelere dikkat ediyorlar?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea14">
                                        <div class="card-body">Ameliyat sonrası genellikle burun içine yerleştirilen tamponlar, doktorunuzun kararına bağlı olarak ortalama 2-7 gün arasında alınır. Yeniden şekillendiren burun şeklini desteklemesi için burun sırtına alüminyum plaka ya da alçı uygulanır ve 1. hafta alınır. Açık teknikle yapılan ameliyatlarda burun ön kısıma atılan dikişler 7. gün alınır. Ameliyat sonrası 24 saat göz etrafına buz uygulaması, saatte ortalama 20 dk şeklinde uygulanır. Göz etrafındaki şişlik ve morluk 1. hafta sonunda çoğunlukla geçmiş olur ancak bu süre 2 haftaya kadarda uzayabilmektedir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga15"><strong><a class="collapsed" data-toggle="collapse" href="#collapsea15">Burun estetiği ameliyatı sonrası hastaların uyması gereken kurallar nelerdir?</a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea15">
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
