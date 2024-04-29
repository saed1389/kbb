@extends('frontend.layouts.app')
@section('title')
    Kulak - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Kulak</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Kulak</h3>
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
                            <span id="menuCaption">Kulak</span>
                        </h1>
                        <div id="menuContent">
                            <div class="panel-group" id="accordion">
                                <div class="card mt-2">
                                    <div class="card-header" id="headinga1"><strong><a href="#collapsea1" data-bs-toggle="collapse">Kulak zarımın arkasında neden sıvı birikti? Erişkinlerde ser&ouml;z otitin nedenleri nelerdir? </a></strong></div>

                                    <div class="collapse in panel-collapse" id="collapsea1">
                                        <div class="card-body">Problemin kulak zarındaki delik ile sınırlı olduğu durumlarda sadece kulağın sudan korunması ile iltihaplanmalar izlenmiyorsa ameliyat hastanın tercihi doğrultusunda yapılmaktadır. Basit zar deliklerinde işitme kaybı %30 civarında olup bu hastalar mutlaka ameliyat olması gereken grupta değillerdir. Buna karşın kolestatoma gelişmiş, orta kulak ve i&ccedil; kulak kemiklerini eriten iltihap varlığında hayati tehlikelere varan sorunlar olabilme ihtimali mevcut olup bu hastaların mutlaka ameliyat olmaları gerekmektedir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga2"><strong><a class="collapsed" data-bs-toggle="collapse" href="#collapsea2">Orta kulak iltihabı ge&ccedil;iriyorum neler yapmalıyım? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea2">
                                        <div class="card-body">Bir sabah uyandığınızda ya da g&uuml;n i&ccedil;inde, &ouml;rneğin telefonla konuşurken gelen sesleri az duyduğunuzu ya da hi&ccedil; duymadığınızı fark ettiyseniz, bu durumun birka&ccedil; nedeni olabilir. Kulak kiri gibi basit bir şekilde d&uuml;zelebilecek bir sorun olabileceği gibi, ani işitme kaybı adı verilen ve acil olarak tedavi gerektiren bir durumla da karşı karşıya olabilirsiniz. En kısa zamanda bir kulak burun boğaz hastalıkları uzmanına başvurmanızı &ouml;neririz.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga3"><strong><a class="collapsed" href="#collapsea3" data-bs-toggle="collapse">Kulak zarı delikse nelere dikkat edilmeli? Ne gibi sorunlarla karşılaşabilirim? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea3">
                                        <div class="card-body">D&uuml;nyada 100000&#39;de 10-20 arasında g&ouml;r&uuml;len, nedeni bilinmeyen ani işitme kayıpları kulak burun boğaz hastalıkları pratiği i&ccedil;erisinde acil değerlendirme ve tedavi gerektiren durumlardan olup, işitme kaybına ilk g&uuml;nlerde m&uuml;dahale edilmezse işitme kaybınız kalıcı hale gelebilir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga4"><strong><a class="collapsed" href="#collapsea4" data-bs-toggle="collapse">Kulağım aniden tıkandı a&ccedil;ılmıyor. Nasıl a&ccedil;malıyım? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea4">
                                        <div class="card-body">Normal olarak dış kulak yolunda mantar sporları mevcuttur. Kulağa su ka&ccedil;ırılması, nem gibi fakt&ouml;rler sonucu &uuml;reme vasatı bulurlar. &Ouml;zellikle deniz, havuz ve hamam tatilleri esnasında ve sonrasında sık g&ouml;r&uuml;l&uuml;r. Kronik akıntılı orta kulak iltihaplarının seyri esnasında da sık g&ouml;r&uuml;l&uuml;r. Lokal antibiyotik kullanımı hastalığa vasat hazırlayabilir, ancak sistemik ila&ccedil;ların bu t&uuml;r bir yan etkisi yoktur. Tek veya iki taraflı g&ouml;r&uuml;lebilirler. Kaşıntı, k&ouml;t&uuml; kokulu akıntı, işitme kaybı, bazen ağrı şik&acirc;yetleri yapar. Otomikoz tedaviye diren&ccedil;li olabilir, tekrarlarla seyredebilir. Hastalık ila&ccedil;la iyi oluyor, ancak sık sık tekrarlıyorsa her su ile temas riski &ouml;ncesi dış kulak yolunu asidifiye etmelidir. &Ouml;rneğin banyolardan 15 dakika &ouml;nce 5-10 damla alkol borik solusyonu damlatmak gibi. Dış kulak yolu ve zar sağlamsa bu işlem ağrı yapmaz. Tedavi planlamasında mantar t&uuml;r&uuml;n&uuml;n bir &ouml;nemi yoktur, bu nedenle k&uuml;lt&uuml;r gerekmez. Tedavide antibiyotik kullanımının yeri yoktur. Mantar enfeksiyonları kulak zarında ve dış kulak yolunda kalıcı hasar oluşturmazlar. Oluşturdukları işitme kaybı tedavi ile d&uuml;zelir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga5"><strong><a class="collapsed" href="#collapsea5" data-bs-toggle="collapse">Ani işitme kaybı nedir?&nbsp; </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea5">
                                        <div class="card-body">Kulak &ccedil;ınlaması, hastanın herhangi bir dış uyaran olmadan ses işitmesi halidir. Kulak &ccedil;ınlaması sadece hastanın hissettiği subjektif tinnitus ve muayene eden hekim de duyabildiği objektif tinnitus olmak &uuml;zere iki gruba ayrılır. S&uuml;rekli veya gelip ge&ccedil;ici olabilir.&nbsp;<br />
                                            S&uuml;rekli kulak &ccedil;ınlaması araştırılması gereken bir şikayettir. Genellikle işitme kaybı ile birliktedir; ancak hastalar bunun farkında olmayabilirler. Bu hastalarda işitme kaybının varlığı odiolojik testlerle tespit edilebilir. İki taraflı olanları daha &ccedil;ok yaşlanma tipi işitme kaybı ile birlikte bulunur. Hastayı rahatsız edecek kadar şiddetli olabilir. &Ouml;zellikle geceleri sessiz ortamda rahatsız eder. Tek taraflı kulak &ccedil;ınlamaları muhakkak araştırılmalıdır. Altından t&uuml;m&ouml;r &ccedil;ıkabilir. Bu patolojilerin varlığı odiolojik testlerle ortaya konulsa bile kesin tanı ancak BT ve MR gibi g&ouml;r&uuml;nt&uuml;leme y&ouml;ntemleri ile konabilir. Kulak &ccedil;ınlaması aspirin, digoksin ve streptomisin gibi ila&ccedil;ların intoksikasyon belirtisi ve akustik travmaya bağlı işitme kayıplarının ilk bulgusu olabilir. İşitme kaybı olmaksızın seyreden kulak &ccedil;ınlamaları aortadan kafa i&ccedil;indekilere kadar her t&uuml;rl&uuml; damardaki aterosklerotik değişikliklere bağlı olarak ortaya &ccedil;ıkabilir. Kulak boyundaki b&uuml;y&uuml;k damarlara olduk&ccedil;a yakındır ve kan akımının &ccedil;ıkardığı sesleri duyabilir Bu tip kulak &ccedil;ınlamaları daha &ccedil;ok uğultu şeklinde tarif edilir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga6"><strong><a class="collapsed" href="#collapsea6" data-bs-toggle="collapse">Kulak mantarı i&ccedil;in neler yapmalıyım? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea6">
                                        <div class="card-body">Sebep tam olarak ortaya konulamıyor ise spesifik tedavisi yoktur. Kan akımını d&uuml;zenleyici ila&ccedil;lar yaygın olarak kullanılmaktadır. Kayde değer herhangi bir yan etkileri olmayan bu preparatın, &ouml;ncelikle denenmesinde fayda vardır. Etkinin değerlendirilmesi en az bir aylık kesintisiz tedavi sonucunda yapılır. Tinnutusun geceleri sessiz ortamda verdiği rahatsızlık&nbsp; bir radyo vasıtasıyla baskılanma yoluna gidilebilir. Hastalar kulak &ccedil;ınlamasının kendilerinde dayanılmaz bir sıkıntı yaptığını ifade edebilirler. Bu hastalarda iyi bir anamnezle sıkıntının kaynağının başka bir fakt&ouml;r olduğu tespit edilebilir. Bir başka ifade ile sıkıntılı d&ouml;nemlerde zaten var olan &ccedil;ınlama daha &ccedil;ok rahatsızlık verebilir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga7"><strong><a class="collapsed" href="#collapsea7" data-bs-toggle="collapse">Kulak &ccedil;ınlamasının nedeni nedir? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea7">
                                        <div class="card-body">İşitme kayıplı bireylerde işitme kaybının olumsuz etkilerini &ouml;nlemek veya gidermek amacıyla kullanılan ve kişinin ihtiyacı olan d&uuml;zeyde işitebilmesini sağlayan cihazlara işitme cihazı denilmektedir. İşitme cihazının verilebilmesi i&ccedil;in sağlık kurumlarında işitme kaybının tipinin ve derecesinin odyolojik testler ile belirlenmesi gerekmektedir. Testler sonucuna g&ouml;re kişinin kaybına uygun cihaz &ouml;nerilmektedir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga8"><strong><a class="collapsed" href="#collapsea8" data-bs-toggle="collapse">Kulak &ccedil;ınlamamı nasıl durdurabilirim? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea8">
                                        <div class="card-body">İşitme kaybınızın tipine ve derecesine g&ouml;re, sizin i&ccedil;in en uygun işitme cihazını, sadece kulak burun boğaz hekimi &ouml;nerebilir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga9"><strong><a class="collapsed" href="#collapsea9" data-bs-toggle="collapse">İşitme cihazına ihtiyacım var mı? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea9">
                                        <div class="card-body">Problemin kulak zarındaki delik ile sınırlı olduğu durumlarda sadece kulağın sudan korunması ile iltihaplanmalar izlenmiyorsa ameliyat hastanın tercihi doğrultusunda yapılmaktadır. Basit zar deliklerinde işitme kaybı %30 civarında olup bu hastalar mutlaka ameliyat olması gereken grupta değillerdir. Buna karşın kolestatoma gelişmiş, orta kulak ve i&ccedil; kulak kemiklerini eriten iltihap varlığında hayati tehlikelere varan sorunlar olabilme ihtimali mevcut olup bu hastaların mutlaka ameliyat olmaları gerekmektedir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga10"><strong><a class="collapsed" href="#collapsea10" data-bs-toggle="collapse">Hangi işitme cihazı bana en uygun cihazdır? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea10">
                                        <div class="card-body">Kolesteatom orta kulakta tekrarlayan iltihabi durumlar sonucunda veya &ouml;staki t&uuml;p&uuml; &ccedil;alışmasında yetersizlik olduğu durumlarda oluşur. &Ouml;staki t&uuml;p&uuml; orta kulak basıncını eşitlemek i&ccedil;in genizden hava ge&ccedil;işini sağlayan, orta kulak ile genzimiz arasında belli durumlarda a&ccedil;ılıp kapanma g&ouml;revi olan bir t&uuml;pt&uuml;r. Alerji, nezle veya sin&uuml;zit gibi nedenlerle &ouml;staki t&uuml;p&uuml; yetersiz &ccedil;alıştığında orta kulaktaki hava v&uuml;cut tarafından emilir, kulakta kısmi bir vakum (negatif basın&ccedil;) meydana gelir. Negatif basın&ccedil;, kulak zarını i&ccedil;eri doğru &ccedil;ekerek zarda bir cep ya da kese oluşturur&nbsp; (&ouml;zellikle ge&ccedil;mişteki kulak iltihapları sebebiyle kulak zarının zayıfladığı b&ouml;lgeler bu negatif basınca daha dayanıksızdır) . Oluşan bu kese veya cebin i&ccedil;erine yavaş yavaş kulak kirleri birikmeye başlar. Zamanla bu kese veya cep kendi kendini temizleyememeye başlar bu da kolestatom dediğimiz iltihabın temellerini hazırlamış olur.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga11"><strong><a class="collapsed" href="#collapsea11" data-bs-toggle="collapse">Kulak zarı yapımı (timpanoplasti) ameliyatı hangi durumda yapılır? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea11">
                                        <div class="card-body">Kronik orta kulak iltihabı kolestatomlu olsun olmasın cerrahi tedaviyi gerektirir. Cerrahi tedavi &ccedil;oğunlukla genel anestezi (narkoz) altında yapılır. Cerrahinin temel amacı kolesteatom ve enfeksiyonu temizlemek ve enfeksiyonsuz kuru bir kulak elde etmektir. İşitmenin korunması veya d&uuml;zeltilmesi tedavide ikincil ama&ccedil;tır.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga12"><strong><a class="collapsed" href="#collapsea12" data-bs-toggle="collapse">Kolesteatom nedir?&nbsp; </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea12">
                                        <div class="card-body">İ&ccedil; kulak kire&ccedil;lenmesi olarak bilinen otoskleroz hastalığı işitme kaybının sık g&ouml;r&uuml;len nedenlerinden birisidir. Otoskleroz hastalığında, &uuml;zengi kemik&ccedil;iğinin i&ccedil; kulak ile komşu olduğu duvarda yapısal kire&ccedil;lenme sonucu katılaşma olur ve &uuml;zengi kemiğinde hareket kısıtlanması meydana gelir. Buna bağlı olarak ses dalgaları i&ccedil; kulak sıvılarına yeterli d&uuml;zeyde iletilemez ve iletim tipi denilen işitme kaybı meydana gelir. Bu durumda i&ccedil; kulak sağlamdır. Yalnızca sesler iletilememektedir. Ancak hastalığın ilerleyen d&ouml;nemlerinde bu kire&ccedil;lenme i&ccedil; kulak duvarını da etkileyebilmektedir ve sinirsel tip işitme kaybı da oluşabilmektedir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga13"><strong><a class="collapsed" href="#collapsea13" data-bs-toggle="collapse">Kolesteatoma nasıl tedavi edilir?&nbsp; </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea13">
                                        <div class="card-body">Otoskleroz &ouml;n tanısı konulan hastalarda, hastalığın şiddeti ve hastanın tercihlerine g&ouml;re tedavi planı yapılmaktadır. Yeni başlayan ve klinik olarak kişiyi &ccedil;ok fazla etkilemeyen durumlarda hasta işitme testleriyle takip edilebilir. İşitme kaybı sosyal yaşantısını etkileyen hastalar i&ccedil;in, ameliyat ya da işitme cihazları ile rehabilitasyon tercih edilebilir. Bunların dışında hastalığın ilerlemesini yavaşlatan sodyum flor&uuml;r gibi bazı ila&ccedil; tedavileri de mevcuttur ancak bu ila&ccedil;lar &ccedil;ok tercih edilen tedavi y&ouml;ntemi değildir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga14"><strong><a class="collapsed" href="#collapsea14" data-bs-toggle="collapse">Kulakta kire&ccedil;lenme olması ne demektir? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea14">
                                        <div class="card-body">Vertigo, denge sisteminde ortaya &ccedil;ıkan fonksiyon bozukluğu sonucu baş d&ouml;nmesi olarak adlandırılır. Vertigo sırasında hastalar &ccedil;evredeki eşya veya insanların etrafında d&ouml;nd&uuml;ğ&uuml;n&uuml; ifade ederler. Vertigo bir hastalık değildir; bir bulgudur. Bu nedenle hangi hastalığın vertigoya neden olduğu araştırılarak tanıya gidilmelidir. Vertigoya neden olan her hastalığın tedavisi farklıdır. Bu nedenle vertigonun tedavisi altta yatan hastalık tespit edildikten sonra yapılmalıdır.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga15"><strong><a class="collapsed" href="#collapsea15" data-bs-toggle="collapse">Kulak kire&ccedil;lenmesi i&ccedil;in hangi tedaviler uygulanmaktadır? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea15">
                                        <div class="card-body">İ&ccedil; kulağın iki b&ouml;l&uuml;m&uuml; ve iki farklı g&ouml;revi vardır. Salyangoz kısım ses iletimi ve işitmeden sorulmudur. Labirent kısmı ise başın &ccedil;evreye g&ouml;re yatay, dikey ve a&ccedil;ısal hareketlerine dair &uuml;st merkezlere veri yollar. Bunu da utrik&uuml;l, sakk&uuml;l adlı yapılar ve yarım daire kanalları aracılığı ile yapar. Labirenti etkileyen hastalıklar, ila&ccedil;lar ve enfeksiyonlar bu veri akışını bozacağından vertigoyla sonu&ccedil;lanacaktır.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga16"><strong><a class="collapsed" href="#collapsea16" data-bs-toggle="collapse">Vertigo ne demektir? Bu bir hastalık mı? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea16">
                                        <div class="card-body">Denge hissimiz aşağıdaki sistemlerin karışık bir ilişkisi sonucu ger&ccedil;ekleşir: İ&ccedil; kulaklar, hareketin y&ouml;n&uuml;n&uuml; belirler; d&ouml;nme, &ouml;n-arka, yan-yan, yukarı aşağı gibi. G&ouml;zler, v&uuml;cudun boşlukta nerede olduğunu (ayakta, ters d&ouml;nm&uuml;ş gibi) ve hareketin y&ouml;n&uuml;n&uuml; g&ouml;r&uuml;r. Doku alıcıları, eklem ve omurga gibi organlarda bulunur, v&uuml;cudun hangi b&ouml;lgesinin yere değdiğini ve &uuml;&ccedil; boyutlu olarak vğcudun &ccedil;evreye g&ouml;re pozisyonunu algılar. Kas ve eklem his alıcıları, v&uuml;cudun hangi kısımlarının hareket ettiğini algılar. Merkez&icirc; sinir sistemi (beyin ve omurilik), diğer d&ouml;rt sistemden gelen b&uuml;t&uuml;n bulguları değerlendirerek, aradaki ilişkiyi sağlar. Bu sistemlerden herhangi birindeki bozukluk kendini baş d&ouml;nmesi olarak g&ouml;sterecektir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga17"><strong><a class="collapsed" href="#collapsea17" data-bs-toggle="collapse">Baş d&ouml;nmesinin kulak ile ilişkisi nedir? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea17">
                                        <div class="card-body">Meniere Hastalığı, ataklar halinde ortaya &ccedil;ıkan, kulakta &ccedil;ınlama, uğultu, dolgunluk hissi, işitme kaybı ve baş d&ouml;nmesi ile ortaya &ccedil;ıkan bir hastalıktır. Hastada atak sırasında bulantı kusma g&ouml;r&uuml;lebilir. İşitme kaybı ilk ataklarda ge&ccedil;icidir, tipik olarak d&uuml;ş&uuml;k frekansları yani kalın sesleri i&ccedil;erir ve atak sonrası işitme normale d&ouml;ner. Ancak atak sayısı arttık&ccedil;a kalıcı işitme kayıpları da g&ouml;r&uuml;lebilir. Bazı hastalarda bilin&ccedil; kaybı olmadan d&uuml;şmeler ortaya &ccedil;ıkabilir. Meniere yaklaşık hastaların &uuml;&ccedil;te birinde &ccedil;ift taraflı olabilmektedir. Meniere hastalığının kesin nedeni bilinmemektedir. İ&ccedil; kulakta bir &#39;şişme&#39; olduğu d&uuml;ş&uuml;n&uuml;lmekte, bu şişmenin normalde birbirine karışmaması gereken farklı tuzlar i&ccedil;eren endolenf ve perilenf sıvılarının birbirine bir şekilde karışmasıyla, endolenf sıvısının emilimindeki bir bozuklukla ortaya &ccedil;ıkabileceği d&uuml;ş&uuml;n&uuml;lmektedir.&nbsp;<br />
                                            <br />
                                            Tedavi hastalarda &ouml;ncelikle tıbbi tedavi g&uuml;ndeme gelmelidir, bu da iki aşamaya sahiptir: Atak tedavisi ve &ouml;nleyici tedavi. Atak tedavisinde hastanın bulantı kusması da varsa hastaneye yatırılıp damardan atağı yatıştırıcı serum tedavileri verilebilir. Atak sonrası ise &ouml;nleyici tedaviler verilir. &Ouml;nleyici tedavide ilk basamak yaşam bi&ccedil;imi değişiklikleridir. Hastaya tuzsuz yemesi, sigara i&ccedil;iyorsa sigarayı bırakması, stresten uzak durması &ouml;nerilir. Ayrıca ataklar arasında i&ccedil; kulağı g&uuml;&ccedil;lendirerek atakların sayısını azaltmak ve ataksız periyodları uzatmak i&ccedil;in &ccedil;eşitli ila&ccedil; tedavileri de verilebilmektedir. Bu tedavilere rağmen ataklar kontrol altına alınamadıysa kulak enjeksiyonu tedavisi g&uuml;ndeme gelebilir. Burada işitmesi bozulmamış bir hastada &ouml;ncelikle orta kulağa kortizon enjeksiyonları uygulanmaktır. Bu işlem poliklinik ortamında lokal anestezi ile yapılabilir. Atakları hala kontrol altına alınamamış, kalıcı işitme kaybı olan olgularda ise orta kulağa az &ouml;nce tarif edilen y&ouml;ntemle gentamisin enjeksiyonları yapılabilir. Gentamisin &ouml;zellikle denge siniri &uuml;zerine toksik bir antibiyotiktir. Hasta kulaktaki bozulmuş denge sistemi iptal edilerek atakların &ouml;n&uuml;ne ge&ccedil;ilebilir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga18"><strong><a class="collapsed" href="#collapsea18" data-bs-toggle="collapse">Baş d&ouml;nmesi sadece kulaktan mı kaynaklanır? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea18">
                                        <div class="card-body">İla&ccedil; tedavilerinden yarar g&ouml;rmeyen hastalarda cerrahi tedaviler uygulanabilir. Endolenfatik kese cerrahisi, vestib&uuml;ler n&ouml;rektomi adı verilen denge sinirinin kesilmesi ve Labirentektomi denilen hasta taraftaki i&ccedil; kulağın b&uuml;t&uuml;n işitme ve denge fonksiyonlarının sonlandırılması başlıca cerrahi tedavilerdir. Y&uuml;ksek başarı oranına rağmen meniere hastalığı ameliyatları &ouml;zel bir eğitim ve konsantrasyon gerektiren, riskli ameliyatlardır.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga19"><strong><a class="collapsed" href="#collapsea19" data-bs-toggle="collapse">Meniere Hastalığı neden oluşur? Nasıl tedavi edilir? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea19">
                                        <div class="card-body">Halk arasında &quot;kristal kayması&quot; denen ve baş d&ouml;nmesinin ana sebebi olduğu sanılan hastalık aslında pozisyonel baş d&ouml;nmesi (Benign pozisyonel paroksismal vertigo) olarak tanımlanır. Normal koşulda hepimizin kulağında kristaller vardır. Bu kristaller utrik&uuml;l ve sakk&uuml;l dediğimiz yapılarda t&uuml;yl&uuml; h&uuml;crelerin &uuml;zerindeki bir jel tabakasının i&ccedil;inde yer alırken yarım daire kanalları i&ccedil;inde yer almazlar. Bir şekilde bu kristaller yarım daire kanallarına ka&ccedil;arsa hastada baş d&ouml;nmesi meydana gelir. Tipik olarak bu baş d&ouml;nmesi ani baş hareketleriyle ortaya &ccedil;ıkar. Saniyeler kadar kısa s&uuml;rer, &ccedil;ok şiddetli olabilir, bulantı-kusma eşlik edebilir. Bu hastalığın bilinen nedenleri arasında kafaya alınan darbeler, uzamış yatak istirahati, ge&ccedil;irilmiş bazı kulak ameliyatları sayılabilir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga20"><strong><a class="collapsed" href="#collapsea20" data-bs-toggle="collapse">Meniere Hastalığının cerrahi tedavisi mevcut mu? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea20">
                                        <div class="card-body">Kristal Kayması Hastalığı&#39;nın tanısında &ouml;yk&uuml; &ccedil;ok &ouml;nemlidir. Bu hastalıktan ş&uuml;phelenildiğinde &#39;Dix-Hallpike&#39; manevrası denilen bir manevrayla tanı konmaktadır. Bu manevrayla tanı koyulunca tedavide &#39;Epley&#39; manevrası olarak adlandırılan bir manevrayla yer &ccedil;ekiminden yararlanılarak kristaller yerine oturtulur ve hasta b&ouml;ylece tedavi edilmiş olur. Bir tek tedavi manevrasının bile etkinliği &ccedil;ok y&uuml;ksektir. Epley tedavi manevrası hastaya 10 gece boyunca hangi pozisyonda uyuyacağı konusunda bilgi verilir. 10. geceden sonra hasta normal pozisyonda uyuyabilir. Pozisyonel baş d&ouml;nmesi tedavisinde ila&ccedil; tedavisinin yeri &ccedil;ok k&uuml;&ccedil;&uuml;kt&uuml;r. Nadiren tanı-tedavi manevralarında hasta aşırı bulantı-kusma yaşarsa bulantı kesici ila&ccedil;lardan yararlanılabilir.</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga21"><strong><a class="collapsed" href="#collapsea21" data-bs-toggle="collapse">Pozisyonel baş d&ouml;nmesi neden olur? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea21">
                                        <div class="card-body">&nbsp;</div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" id="headinga22"><strong><a class="collapsed" href="#collapsea22" data-bs-toggle="collapse">Pozisyonel baş d&ouml;nmesi nasıl tedavi edilir? </a></strong></div>

                                    <div class="collapse panel-collapse" id="collapsea22">
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
