@extends('frontend.layouts.app')
@section('title')
    Ödüller - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>Ödüller</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Ödüller</h3>
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
                        <p>OTOLOJİ &ndash; N&Ouml;ROOTOLOJİ&nbsp;</p>

                        <p>1</p>

                        <p>[SB-042]<br />
                            Nikeloksit Nanokaplamalı Basın&ccedil; Eşitleme Tu¨pleri Otopatojenik Bakteriyel Suşlara Bağlı Biyofilm Oluşumunu Azaltmaktadır</p>

                        <p>Onur &Ccedil;elik1, G&ouml;rkem Eskiizmir1, Rengin Eltem2, Ali &Ouml;zer3, Cenk Kumruoğlu3, Cevat &Ccedil;elenk1, &Ccedil;ağdaş Devrim Son4, Kerim Yapıcı5<br />
                            1Manisa Celal Bayar &Uuml;niversitesi, Tıp Fak&uuml;ltesi, Kulak Burun Boğaz Hastalıkları Anabilim Dalı, MANİSA<br />
                            2Ege &Uuml;niversitesi, M&uuml;hendislik Fak&uuml;ltesi, Biyom&uuml;hendislik Anabilim Dalı, İZMİR<br />
                            3Sivas Cumhuriyet &Uuml;niversitesi, M&uuml;hendislik Fak&uuml;ltesi, Metalurji ve Malzeme M&uuml;hendisliği B&ouml;l&uuml;m&uuml;, SİVAS<br />
                            4Ortadoğu Teknik &Uuml;niversitesi, Fen ve Edebiyat Fak&uuml;ltesi, Biyoloji B&ouml;l&uuml;m&uuml;, ANKARA<br />
                            5S&uuml;leyman Demirel &Uuml;niversitesi, M&uuml;hendislik Fak&uuml;ltesi, Temel İşlemler Ve Termodinamik Anabilim Dalı, ISPARTA</p>

                        <p>2<br />
                            [SB-033]<br />
                            &Ccedil;apraz Bağlı Hyal&uuml;ronik Asitin Vestib&uuml;ler ve Koklear Toksisite Modelinde İ&ccedil; Kulak Etkilerinin İncelenmesi</p>

                        <p>Erdal Erko&ccedil;1, Aslı &Ccedil;aki·r &Ccedil;eti·n1, Serpi·l Mungan Durankaya1, G&uuml;nay Ki·rki·m1, Serap Ci·laker Mi·&ccedil;i·li·2, Pembe Keski·noğlu3, Osman Yi·lmaz4, Enis Alpin G&uuml;neri1<br />
                            1Dokuz Eyl&uuml;l &Uuml;niversitesi, Kulak Burun Boğaz Ana Bilim Dalı, İzmir<br />
                            2Dokuz Eyl&uuml;l &Uuml;niversitesi, Histoloji ve Embriyoloji Ana Bilim Dalı, İzmir<br />
                            3Dokuz Eyl&uuml;l &Uuml;niversitesi, Tıbbi Bioistatistik Ana Bilim Dalı, İzmir<br />
                            4Dokuz Eyl&uuml;l &Uuml;niversitesi, Laboratuar Hayvanları Ana Bilim Dalı, İzmir</p>

                        <p><br />
                            3</p>

                        <p>[SB-035]<br />
                            Fasiyal Sinir Hasarında Mezenkimal K&ouml;k H&uuml;cre ve Kolekalsiferol&uuml;n Rejenerasyona Etkisinin Araştırılması</p>

                        <p>Onur Nursa&ccedil;an1, Mustafa Erkan1, Furkan Şan2, Zeynep Bur&ccedil;in G&ouml;nen3, Mehmet Fatih Yetkin4, Arzu Yay5, G&ouml;zde &Ouml;zge &Ouml;nder5, Şaban Murat &Uuml;nl&uuml;6, Alperen Vural1, &Ccedil;ağlar Sevim6, Deniz Avcı7, Mehmet Ilhan Şahin1<br />
                            1Erciyes &Uuml;niversitesi, Kulak Burun Boğaz Hastalıkları Ana Bilim Dalı, Kayseri<br />
                            2Sivas Numune Devlet Hastanesi, Kulak Burun Hastalıkları, Sivas<br />
                            3Erciyes &Uuml;niversitesi, Genom ve K&ouml;k H&uuml;cre Merkezi, Kayseri<br />
                            4Erciyes &Uuml;niversitesi, N&ouml;roloji Anabilim Dalı, Kayseri<br />
                            5Erciyes &Uuml;niversitesi, Histoloji Ana Bilim Dalı, Kayseri<br />
                            6Erciyes &Uuml;niversitesi, Makine M&uuml;hendisliği, Kayseri<br />
                            7Nevşehir Devlet Hastanesi, Kulak Burun Hastalıkları, Nevşehir</p>

                        <p><br />
                            3</p>

                        <p>[SB-051]<br />
                            Cisplatin ototoksisitesinde intratimpanik deksametazon ve nimodipinin koruyucu etkinliğinin rat modeli &uuml;zerinde incelenmesi</p>

                        <p>Murat Kılı&ccedil;1, Serdar Ensari1, K&uuml;rşat Murat &Ouml;zcan1, Hacı H&uuml;seyin Dere1, Cemile Merve Seymen2, &Ccedil;iğdem Elmas2<br />
                            1SB&Uuml; Ankara Numune Eğitim ve Araştırma Hastanesi, Kulak Burun Boğaz Kliniği,Ankara<br />
                            2Gazi &Uuml;niversitesi Tıp Fak&uuml;ltesi, Histoloji ve Embrioloji AD, Ankara</p>

                        <p>BAŞ BOYUN CERRAHİSİ<br />
                            1</p>

                        <p>[SB-017]<br />
                            Tavşanlarda Fasiyal Sinirin Akut Hasarında Titanyum T&uuml;pte Hazırlanan Trombositten Zengin Fibrinin Rejenerasyona Olan Etkilerinin Değerlendirilmesi</p>

                        <p>Fatma Şent&uuml;rk1, Osman Bahadır1, Ahmet Ayar2, Engin Yenilmez3, Osman Aktaş2, Ayşe Firuze Akt&uuml;rk Bıyık3, Esra Ercan4<br />
                            1Karadeniz Teknik &Uuml;niversitesi Tıp Fak&uuml;ltesi Kulak Burun Boğaz Hastalıkları Anabilim Dalı, Trabzon<br />
                            2Karadeniz Teknik &Uuml;niversitesi Tıp Fak&uuml;ltesi Fizyoloji Anabilim Dalı, Trabzon<br />
                            3Karadeniz Teknik &Uuml;niversitesi Tıp Fak&uuml;ltesi Histoloji ve Embriyoloji Anabilim Dalı, Trabzon<br />
                            4Karadeniz Teknik &Uuml;niversitesi Diş Hekimliği Fak&uuml;ltesi Periodontoloji Anabilim Dalı, Trabzon</p>

                        <p><br />
                            2<br />
                            [SB-025]<br />
                            Pediatrik Disfaji Hastalarında Yutma Terapisinin Etkinliğinin Ultrasonografi ile Değerlendirilmesi</p>

                        <p>Osman G&uuml;l1, &Ouml;mer Erdur2, Mehmet &Ouml;zt&uuml;rk3, Kayhan &Ouml;zt&uuml;rk4<br />
                            1Beyhekim Devlet Hastanesi, KBB Kliniği, Konya<br />
                            2Sel&ccedil;uk &Uuml;niversitesi, KBB Ana Bilim Dalı, Konya<br />
                            3Sel&ccedil;uk &Uuml;niversitesi, Radyoloji Ana Bilim Dalı, Konya<br />
                            4Karatay &Uuml;niversitesi, KBB Ana Bilim Dalı, Konya</p>

                        <p>3<br />
                            [SB-008]<br />
                            Sağlıklı bireylerde orofarengeal y&uuml;ksek-risk human papilloma vir&uuml;s prevalansı</p>

                        <p>Erdem Mengi1, C&uuml;neyt Orhan Kara1, Yeliz Arman Karakaya2, Ferda Bir2<br />
                            1Pamukkale &Uuml;niversitesi, Kulak Burun Boğaz Hastalıkları Ana Bilim Dalı<br />
                            2Pamukkale &Uuml;niversitesi, Patoloji Ana Bilim Dalı</p>

                        <p><br />
                            Genel KBB<br />
                            3<br />
                            [SB-020]<br />
                            Ulusal Kulak Burun Boğaz Yayınlarında Kendine Atfın ve Konuyla İlgili Hekimlerimizin Tutumlarının Araştırılması</p>

                        <p>&Ouml;mer Faruk Zengin, Taner Kemal Erdağ<br />
                            Dokuz Eyl&uuml;l &Uuml;niversitesi, Kulak Burun Boğaz Hastalıkları Ana Bilim Dalı, İzmir</p>

                        <p><br />
                            Rinoloji<br />
                            1<br />
                            [SB-073]<br />
                            Deneysel Alerjik Rinit Oluşturulan Sı&ccedil;anlarda Sistemik Ve İntranazal BCG Tedavisinin Karşılaştırılması</p>

                        <p>Cihan T&uuml;rker, Erol Keleş, İrfan Kaygusuz, Turgut Karlıdağ, Abdulvahap Akyiğit, G&ouml;khan Artaş, Tuncay Kuloğlu, Nevin İlhan, Şinasi Yal&ccedil;ın<br />
                            Fırat &Uuml;niversitesi, KBB Ana Bilim Dalı, Elazığ</p>

                        <p>2<br />
                            [SB-067]<br />
                            Fonksiyonel Endoskopik Sin&uuml;s Cerrahisi Sonrası Submukozal PRP Enjeksiyonunun Yara İyileşmesi &Uuml;zerine Etkilerinin Değerlendirilmesi: Deneysel &Ccedil;alışma</p>

                        <p>Uğur Yildirim, &Ouml;zg&uuml;r Kemal, Abdurrahman Aksoy, Efe Karaca, &Ouml;zlem Terzi, Sinan Atmaca<br />
                            Ondokuz Mayıs &Uuml;niversitesi Tıp Fak&uuml;ltesi, Kulak Burun Boğaz Ana Bilim Dalı, Samsun</p>

                        <p><br />
                            3<br />
                            [SB-068]<br />
                            Septorinoplasti Teknikleri ve Poly-p-Dioxanone Plak Kullanımının Maksillofasiyal Gelişim &Uuml;zerine Etkisi: Deneysel &Ccedil;alışma</p>

                        <p>Burak Numan Uğurlu1, Hatice &Ccedil;elik1, Sevim Aslan Felek2, Nazan &Ccedil;iledağ3, Hıdır Kaygusuz3, G&uuml;lay Aktar Uğurlu1<br />
                            1Ankara Eğitim ve Araştırma Hastanesi, KBB Kliniği, Ankara<br />
                            2Hitit &Uuml;niversitesi Erol Ol&ccedil;ok Eğitim ve Araştırma Hastanesi, KBB Kliniği, &Ccedil;orum<br />
                            3Dr. Abdurrahman Yurtaslan Onkoloji Eğitim ve Araştırma Hastanesi, Radyoloji Kliniği, Ankara</p>

                        <p>POSTER<br />
                            3</p>

                        <p>[PB-004]<br />
                            Amikasin Ototoksisitesinde Kreatin&#39;in Koruyucu Etkisi</p>

                        <p>Emre Apaydın1, Elif Dağlı1, Sevin&ccedil; Bayrak1, Ekrem Said Kankılı&ccedil;1, Hasan Şahin2, Aydın Acar1<br />
                            1SB&Uuml; Ke&ccedil;i&ouml;ren Eğitim ve Araştırma Hastanesi, KBB Ana Bilim Dalı, Ankara<br />
                            2&Ouml;zel G&uuml;ven Hastanesi, Odyoloji Ana Bilim Dalı, Ankara</p>

                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-gallery-3__area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225046__10_.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225046__10_.jpeg') }}">
                                <svg id="body" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery">
                                        <g id="_02_hover" data-name="02 + hover">
                                            <g id="go_icon" data-name="go icon">
                                                <image id="right-arrow" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225047__11_.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225047__11_.jpeg') }}">
                                <svg id="body2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery2">
                                        <g id="_03_hover" data-name="02 + hover">
                                            <g id="go_icon2" data-name="go icon">
                                                <image id="right-arrow2" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225047__12_.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225047__12_.jpeg') }}">
                                <svg id="body3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery3">
                                        <g id="_04_hover" data-name="02 + hover">
                                            <g id="go_icon3" data-name="go icon">
                                                <image id="right-arrow4" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225047__13_.jpeg.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225047__13_.jpeg') }}">
                                <svg id="body5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery5">
                                        <g id="_02_hover5" data-name="02 + hover">
                                            <g id="go_icon5" data-name="go icon">
                                                <image id="right-arrow5" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225048__14_.jpeg.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225048__14_.jpeg') }}">
                                <svg id="body9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery9">
                                        <g id="_09_hover" data-name="02 + hover">
                                            <g id="go_icon9" data-name="go icon">
                                                <image id="right-arrow9" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.2s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225048__15_.jpeg.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225048__15_.jpeg') }}">
                                <svg id="body8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery8">
                                        <g id="_08_hover" data-name="02 + hover">
                                            <g id="go_icon8" data-name="go icon">
                                                <image id="right-arrow8" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.3s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225048__16_.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225048__16_.jpeg') }}">
                                <svg id="body7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery7">
                                        <g id="_07_hover5" data-name="02 + hover">
                                            <g id="go_icon7" data-name="go icon">
                                                <image id="right-arrow7" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.5s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225049__17_.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225049__17_.jpeg') }}">
                                <svg id="body6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery6">
                                        <g id="_06_hover" data-name="02 + hover">
                                            <g id="go_icon6" data-name="go icon">
                                                <image id="right-arrow6" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.7s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225049__18_.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225049__18_.jpeg') }}">
                                <svg id="body1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery1">
                                        <g id="_01_hover" data-name="02 + hover">
                                            <g id="go_icon1" data-name="go icon">
                                                <image id="right-arrow1" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="2s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225050__199_.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225050__199_.jpeg') }}">
                                <svg id="body1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery1">
                                        <g id="_01_hover" data-name="02 + hover">
                                            <g id="go_icon1" data-name="go icon">
                                                <image id="right-arrow1" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="2.2s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225050__20_.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225050__20_.jpeg') }}">
                                <svg id="body1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery1">
                                        <g id="_01_hover" data-name="02 + hover">
                                            <g id="go_icon1" data-name="go icon">
                                                <image id="right-arrow1" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="2.4s">
                    <div class="tp-gallery-3__item p-relative">
                        <img src="{{ asset('uploads/awards/20191116225050__bildiri_.jpeg') }}" alt="">
                        <div class="tp-gallery-3__icon">
                            <a class="popup-image" href="{{ asset('uploads/awards/20191116225050__bildiri_.jpeg') }}">
                                <svg id="body1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="51" viewBox="0 0 49 51">
                                    <g id="gallery1">
                                        <g id="_01_hover" data-name="02 + hover">
                                            <g id="go_icon1" data-name="go icon">
                                                <image id="right-arrow1" width="49" height="51" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAzCAYAAAA+VOAXAAAD3klEQVRogdWa24tWZRTGf/PNOH5MY2VREXagojOohNpEh8nEylDRP6XoRugiIagbb7LTRaRmmUVpSVSEFRFFanlAAqOLqCghFZrRrxlnHB9Z9Wx4+XJqZtqnb8EHL/ju7frxrPWuZ+/ZXZKoMLqALIEmMOpUZgHjSVq9wBj/3PdX9FRJANwGXAFcBXzv5G4FhoGfgeuAi4DvnGvs/wX4HbgZeKdqiEhoK3A9cMKJxXrCic4BrgSOAUPAjYb7AbgGuASYC7xcZTmtBXZ4LZdWFuMuKdrWaWTXzK9Sid3AdqAF/ArcBPQB37rErgV+An4EbnBfRKnd5esz6DVVQpwEHgOOApcBlwJH/G+3AMf9i7LqNuBbbfcINXoaFSSfxlGvjyUAeH3c6ziVbgfeBO4GfgMOJHvHq4aYSgwAG4B7fHq9DbwE/OFrR+sMEfPgYeApYJHLL3poE7Ar2ddVZ4hlwDNW4AzwIfACcNA9dLH3NasedpPFoJt+AXDKR/HzwCHvvzy9rm4QFwDLgfVx/vv4fRd4DtiX7Evzrl1P3AE8boBo4vcMcLhtX+qdVBcl+oGlwBNu4rAXO4EXgT3n2T+WrHvqAhHH6JNWIhL8yE38zST707wbdYAIBdYBC32M7rACYT/OTnJNX7IerxIivNAKKxAAI8D7wEYD/Ftk5dRVtRJLgEcTgFDgWT87/Fdk5k9V9cSFLqH1ngNRQjs9B/ZO8R6txKK3iOeJkn9LJe3R33Fa0nZJd0qaNY08mpJ2SXpa0tVlAvRKekjS55LOSDopaZOkgRneb162LgugIWmVpINWYNQKLMrj/mVBDEr61ACnJL0qabGk2Z0A0S9pbaJAlNCWvBQoCyIU+DIpodfdxLkoUDREn6SVkr6SNCFpSNIrBsj9/ysKYoWk/W3H6OKiFC/ipg8kTZwdo6FATydAxABakzRxS9JreTdx0RD3epBF/ClpqxVodgLEHCuQ9cCQS2hJ0cnnCbFc0r6kid8wQHcnQESSD0r6LPFChR2jRUB02wsdsgIjkraV0cR5QkQTf5J4oS15eqGiIbImPmCAYUmbixxkRUCkXuh04oV6OwGiaSvxhZt4OJnElSU/XYhHyvRCRUDcL2l3WxNP95m4Moi+SbxQbRSYCkTqhUbcxANleKE8IPo9yOK1ytnEC830rUQlEOGF9lqBseS9UGle6P9AxB/ml3kST7iJN1uBRl0BUogYVquTSTxiN1qJF5opxH3JI2WrzAeavCAGz+OFajGJp/pr+LuJhX7b/IH/wLG/wLfiuUc0c78/M4jPdj4Gvu4kgIjsU6F5/tKl8wI4B64Oiv+C2BAeAAAAAElFTkSuQmCC"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
