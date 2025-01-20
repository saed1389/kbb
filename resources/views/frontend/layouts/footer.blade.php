<footer>
    <!-- footer-area-start -->
    <div class="tp-footer__area">
        <div class="tp-footer__bg" data-background="{{ asset('front/assets/images/footer.jpg') }}" style="background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-45 wow tpfadeUp" data-wow-duration=".9s"
                         data-wow-delay=".3s">
                        <div class="tp-footer__widget footer-col-1">
                            <div class="tp-footer__logo">
                                <a href="/">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-50">
                                </a>
                            </div>
                            <div class="tp-footer__text">
                                <p> <i class="flaticon-location" style="color: #fe7f4c"></i> &nbsp; Çobançeşme Sanayi Cad. No:44 <br> Nish İstanbul A Blok Daire: 8
                                    <br> Yenibosna-İstanbul</p>
                            </div>
                            <div class="tp-footer__contact-list">
                                <div class="tp-footer__contact-item pb-20 d-flex about-items-center">
                                    <div class="tp-footer__icon">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                    <div class="tp-footer__text">
                                        <a href="mailto:kbb@kbb.org.tr">kbb@kbb.org.tr</a>
                                    </div>
                                </div>
                                <div class="tp-footer__contact-item d-flex about-items-center">
                                    <div class="tp-footer__icon">
                                        <i aria-hidden="true" class="flaticon-phone"></i>
                                    </div>
                                    <div class="tp-footer__text">
                                        <a href="tel:+902122344481">90 (212) 234 44 81</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 mb-45 wow tpfadeUp" data-wow-duration=".9s"
                         data-wow-delay=".5s">
                        <div class="tp-footer__widget footer-col-2">
                            <h4 class="tp-footer__widget-title">Derneğimiz</h4>
                            <div class="tp-footer__list">
                                <ul>
                                    <li><a href="{{ route('baskan') }}">Başkanlarımız</a></li>
                                    <li><a href="{{ route('yonetimkurulu') }}">Yönetim Kurulu</a></li>
                                    <li><a href="{{ route('kurullar') }}">Kurullar</a></li>
                                    <li><a href="{{ asset('uploads/Document/KBBC-DERNEK-TUZUK-202106291708.pdf') }}" download="">Tüzük</a></li>
                                    <li><a href="{{ route('tarihce') }}">Tarihçe</a></li>
                                    <li><a href="{{ route('iktisadi_isletme') }}">İktisadi İşletme</a></li>
                                    <li><a href="{{ route('kararlar') }}">Kararlar</a></li>
                                    <li><a href="{{ route('belgeler_yonetmelik_ve_yonergeler') }}">Yönetmelik ve Yönergeler</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-45 wow tpfadeUp" data-wow-duration=".9s"
                         data-wow-delay=".7s">
                        <div class="tp-footer__widget footer-col-3">
                            <h4 class="tp-footer__widget-title">Bilgi Merkezi</h4>
                            <div class="tp-footer__list">
                                <ul>
                                    <li><a href="{{ route('haberler') }}">Haberler</a></li>
                                    <li><a href="{{ route('etkinlikler') }}">Toplantılar</a></li>
                                    <li><a href="{{ route('gecmis-kongre-program-ve-bildirikitaplari') }}">Geçmiş Kongre Program ve Bildiri Kitapları</a></li>
                                    <li><a href="{{ route('hasta_bilgilendirme_brosurleri') }}">Hasta Bilgilendirme Broşürleri</a></li>
                                    <li><a href="{{ asset('uploads/Document/ucep.pdf') }}" download="">UÇEP</a></li>
                                    <li><a href="{{ route('belgeler-tipta-uzmanlik-egitimi-karnesi') }}">Tıpta Uzmanlık Eğitimi Karnesi</a></li>
                                    <li><a href="{{ route('onam_formlari') }}">Onam Formları</a></li>
                                    <li><a href="{{ route('kilavuzlar') }}">Kılavuzlar</a></li>
                                    <li><a href="{{ route('satin-alma-sureci') }}">Satın Alma Süreci</a></li>
                                    <li><a href="{{ route('belgeler-tipta-uzmanlik-egitimi-karnesi') }}">KBB ve BBC Uzmanlık Eğitimi Kitabı</a></li>
                                    <li><a href="{{ route('linkler') }}">Linkler</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 mb-45 wow tpfadeUp" data-wow-duration=".9s"
                         data-wow-delay=".7s">
                        <div class="tp-footer__widget footer-col-3">
                            <h4 class="tp-footer__widget-title">Üyelik</h4>
                            <div class="tp-footer__list">
                                <ul>
                                    <li><a href="{{ route('uye-listesi') }}">Üyelerimiz</a></li>
                                    <li><a href="{{ route('register') }}">Yeni Üyelik</a></li>
                                    <li><a href="{{ route('uyelik-kosullari') }}">Üyelik Koşulları</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-area-end -->

    <!-- copyright-area-start -->
    <div class="tp-copyright__area tp-copyright__bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="tp-copyright__text text-center text-sm-start">
                        <span>© Copyright {{ date('Y') }} by <a href="https://www.digicyp.com" target="_blank">DigiCyp</a></span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="tp-copyright__social text-center text-sm-end">
                        <a href="https://www.facebook.com/T%C3%BCrk-Kulak-Burun-Bo%C4%9Faz-ve-Ba%C5%9F-Boyun-Cerrahisi-Derne%C4%9Fi-493168617369439/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/tkbbvebbcd/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/tkbbvebbcd" target="_blank"><i class="fab fa-x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright-area-end -->

</footer>
