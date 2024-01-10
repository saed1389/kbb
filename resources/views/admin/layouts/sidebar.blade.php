<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo ">
        <a href="{{ route('admin.home') }}" class="app-brand-link">
            <img src="{{ asset('assets/img/kbb-logo.svg') }}" class="w-100">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>


    <ul class="menu-inner py-1">
        <li class="menu-item @if(Request::segment(2) == 'home') active @endif">
            <a href="{{ route('admin.home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards"><strong>Anasayfa</strong></div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-news"></i>
                <div data-i18n="Layouts"><strong>Haber Yönetimi</strong></div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item">
                    <a href="layouts-collapsed-menu.html" class="menu-link">
                        <div data-i18n="Collapsed menu">Haber Ekle</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-content-navbar.html" class="menu-link">
                        <div data-i18n="Content navbar">Haber Listesi</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-components'></i>
                <div data-i18n="Front Pages"><strong>Etkinlik Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="front-pages/landing-page.html" class="menu-link" >
                        <div data-i18n="Landing">Etkinlik Ekle</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Etkinlik Listesi</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'users') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-users-group'></i>
                <div data-i18n="Front Pages"><strong>Üye Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="front-pages/landing-page.html" class="menu-link" >
                        <div data-i18n="Landing">Yeni Üye Ekle</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Üye Listesi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Üye Başvuru Listesi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Üyeliği Askıya Alınanlar</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'titles') active @endif">
                    <a href="{{ route('titles.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Üye Ünvanları</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Toplu Mail</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Mailing Listesi</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-file'></i>
                <div data-i18n="Front Pages"><strong>Belge Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="front-pages/landing-page.html" class="menu-link" >
                        <div data-i18n="Landing">Belge Ekle</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Belge Listesi</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-no-creative-commons'></i>
                <div data-i18n="Front Pages"><strong>Yorum Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Yorum Listesi</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-photo'></i>
                <div data-i18n="Front Pages"><strong>Foto Galeri</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Fotoğraf Yükle</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Fotoğraf Galerileri</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item">
            <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-certificate"></i>
                <div data-i18n="Email"><strong>Burs Başvuruları</strong></div>
            </a>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Apps & Pages">Ayarlar</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-menu-2'></i>
                <div data-i18n="Front Pages"><strong>Menü Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="front-pages/landing-page.html" class="menu-link" >
                        <div data-i18n="Landing">Menü Ekle</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Menü Listesi</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-category'></i>
                <div data-i18n="Front Pages"><strong>Haber Kategori Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="front-pages/landing-page.html" class="menu-link" >
                        <div data-i18n="Landing">Kategori Ekle</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Kategori Listesi</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-calendar-event'></i>
                <div data-i18n="Front Pages"><strong>Etkinlik Kategori Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="front-pages/landing-page.html" class="menu-link" >
                        <div data-i18n="Landing">Kategori Ekle</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="front-pages/pricing-page.html" class="menu-link" >
                        <div data-i18n="Pricing">Kategori Listesi</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item">
            <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings-2"></i>
                <div data-i18n="Email"><strong>Üyelik Tipi Yönetimi</strong></div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Email"><strong>Sistem Ayarları</strong></div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-chat.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-logout"></i>
                <div data-i18n="Chat"><strong>Oturumu kapat</strong></div>
            </a>
        </li>

    </ul>


</aside>
