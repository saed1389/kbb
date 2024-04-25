<header class="tp-header-height">
    <div id="header-sticky" class="tp-header__left-wrap p-relative">
        <div class="tp-header__logo">
            <a class="text-center" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" loading="lazy" class="logo" style="width: 75%;" >
            </a>
        </div>
        <div class="tp-header__right-wrap tp-header__plr">
            <div class="tp-header-top__area tp-header-top__hide tp-header-top__space theme-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-5 col-lg-7 col-md-8">
                            <div class="tp-header-top__left-box">
                                <ul>
                                    <li><span>Sosyal medyamıza bağlanın</span></li>
                                    <li>
                                        <div class="tp-header-top__social">
                                            <a href="https://www.facebook.com/T%C3%BCrk-Kulak-Burun-Bo%C4%9Faz-ve-Ba%C5%9F-Boyun-Cerrahisi-Derne%C4%9Fi-493168617369439/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/tkbbvebbcd/" target="_blank"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/tkbbvebbcd" target="_blank"><i class="fab fa-x"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-7 col-lg-5 col-md-4">
                            <div class="tp-header-top__right-box text-end">
                                <ul>
                                    <li><i class="fa-solid fa-envelope"></i><a href="mailto:kbb@kbb.org.tr"> kbb@kbb.org.tr</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-header__area tp-header__space">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xxl-10 col-xl-10 col-lg-10 d-none d-lg-block">
                            <div class="tp-header__main-menu">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        <li>
                                            <a href="/"><i class="fa fa-home"></i></a>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Derneğimiz <i class="fa fa-angle-down disable-arrow"></i></a>
                                            <ul class="submenu tp-submenu two-columns">
                                                <li><a href="{{ route('baskan') }}">Başkanlarımız</a></li>
                                                <li><a href="{{ route('yonetimkurulu') }}">Yönetim Kurulu</a></li>
                                                <li><a href="{{ route('kurullar') }}">Kurullar</a></li>
                                                <li><a href="{{ asset('uploads/Document/KBBC-DERNEK-TUZUK-202106291708.pdf') }}" download="">Tüzük</a></li>
                                                <li><a href="{{ route('tarihce') }}">Tarihçe</a></li>
                                                <li><a href="{{ route('iktisadi_isletme') }}">İktisadi İşletme</a></li>
                                                <li><a href="{{ route('kararlar') }}">Kararlar</a></li>
                                                <li><a href="{{ route('belgeler_yonetmelik_ve_yonergeler') }}">Yönetmelik ve Yönergeler</a></li>
                                                <li><a href="{{ route('tanitim-filmi') }}">Tanıtım Filmi</a></li>
                                                <li><a href="{{ asset('uploads/Document/KBB-BBC-KALITE-POLITIKASI-MISYON-VE-VIZYONUMUZ.pdf') }}" download="">Kalite Politikası Misyon ve Vizyonumuz</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Bilgi Merkezi <i class="fa fa-angle-down down disable-arrow"></i></a>
                                            <ul class="submenu tp-submenu three-columns">
                                                <li><a href="{{ route('haberler') }}">Haberler</a></li>
                                                <li><a href="{{ route('etkinlikler') }}">Toplantılar</a></li>
                                                <li><a href="{{ route('gecmis-kongre-program-ve-bildirikitaplari') }}">Geçmiş Kongre Program ve Bildiri Kitapları</a></li>
                                                <li><a href="{{ route('dergiler') }}">Dergiler</a></li>
                                                <li><a href="{{ route('hasta_bilgilendirme_brosurleri') }}">Hasta Bilgilendirme Broşürleri</a></li>
                                                <li><a href="{{ asset('uploads/Document/ucep.pdf') }}" download="">UÇEP</a></li>
                                                <li><a href="{{ route('belgeler-tipta-uzmanlik-egitimi-karnesi') }}">Tıpta Uzmanlık Eğitimi Karnesi</a></li>
                                                <li><a href="{{ route('onam_formlari') }}">Onam Formları</a></li>
                                                <li><a href="{{ route('kilavuzlar') }}">Kılavuzlar</a></li>
                                                <li><a href="{{ route('ttb-ucret-tarifesi') }}">TTB Ücret Tarifesi</a></li>
                                                <li><a href="{{ route('satin-alma-sureci') }}">Satın Alma Süreci</a></li>
                                                <li><a href="{{ route('uzmanlik_egitimi_kitablari') }}">KBB ve BBC Uzmanlık Eğitimi Kitabı - 1</a></li>
                                                <li><a href="{{ route('uzmanlik_egitimi_kitablari-1') }}">KBB ve BBC Uzmanlık Eğitimi Kitabı - 2</a></li>
                                                <li><a href="{{ route('linkler') }}">Linkler</a></li>
                                                <li><a href="{{ route('turk-kbb-bbc-dernegi-etik-kitabi') }}">Türk KBB-BBC Derneği Etik Kitabı</a></li>
                                                {{--<li><a href="#">Hukuk</a></li>--}}
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">KBB Okulları <i class="fa fa-angle-down down disable-arrow"></i></a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="http://kbbokullari.kbb.org.tr/ModuleList.aspx?module=2" target="_blank">Yüz Plastik Cerrahi Okulu</a></li>
                                                <li><a href="http://kbbokullari.kbb.org.tr/ModuleList.aspx?module=4" target="_blank">Baş Boyun ve Tiroid Cerrahisi Okulu</a></li>
                                                <li><a href="http://kbbokullari.kbb.org.tr/ModuleList.aspx?module=5" target="_blank">Laringoloji ve Foniatri Okulu</a></li>
                                                <li><a href="http://kbbokullari.kbb.org.tr/ModuleList.aspx?module=3" target="_blank">Otoloji ve Nörootoloji Okulu</a></li>
                                                <li><a href="http://kbbokullari.kbb.org.tr/ModuleList.aspx?module=6" target="_blank">Rinoloji-Rinoplasti-Alerji ve Uyku Okulu</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="http://www.kbbyeterlik.org.tr/" target="_blank">KBB Yeterlik</a></li>
                                        <li class="has-dropdown"><a href="#">Torlak <i class="fa fa-angle-down down disable-arrow"></i></a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="#">Eğitim Videoları</a></li>
                                                <li><a href="#">Kongreler</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Burs - Ödüller <i class="fa fa-angle-down down disable-arrow"></i></a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="{{ route('burslar') }}">Burslar</a></li>
                                                <li><a href="{{ route('oduller') }}">Ödüller</a></li>
                                                <li><a href="{{ route('proje-destek') }}">Proje Destek</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('asistan-okulu') }}">Asistan Okulu</a></li>
                                        <li><a href="{{ route('degisim-programi') }}">Değişim Programı</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-12">
                            <div class="tp-header__right-action">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="d-none d-xl-block">
                                        <div class="tp-header__icon-box">

                                            <div class="dropdown">
                                                <button class="search-open-btn"><i class="flaticon-loupe"></i></button>
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="flaticon-user"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    @if(Route::has('login'))
                                                        @auth
                                                            <li><a class="dropdown-item" >{{ @Auth::user()->titleName->title.' '.Auth::user()->first_name.' '.Auth::user()->last_name }}</a></li><br>
                                                            <li><a class="dropdown-item" href="@if(Auth::user()->type == 'admin') {{ route('admin.home') }} @elseif(Auth::user()->type == 'user') {{ route('user.home') }} @endif">Panel</a></li><br>
                                                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Oturumu kapat</a></li>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        @else
                                                            <li><a class="dropdown-item" href="">Üyelerimiz</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('register') }}">Yeni Üyelik</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('login') }}">Oturum aç</a></li>
                                                        @endauth
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tp-header-2__bar d-lg-none">
                                            <button class="tp-menu-bar" type="button"><span><i class="fa-solid fa-bars-staggered"></i></span></button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tp-header__tel-box d-flex align-items-center">

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area-end -->
        </div>
    </div>
</header>
