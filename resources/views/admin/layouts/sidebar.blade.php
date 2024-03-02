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

        <li class="menu-item @if(Request::segment(2) == 'news') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-news"></i>
                <div data-i18n="Layouts"><strong>Haber Yönetimi</strong></div>
                @php
                    $confirm = \App\Models\News::where('confirm', 0)->count();
                @endphp
                @if($confirm > 0)
                    <div class="badge bg-primary rounded-pill ms-auto">{{ $confirm }}</div>
                @endif
            </a>

            <ul class="menu-sub">

                <li class="menu-item @if(Request::segment(2) == 'news' && Request::segment(3) == 'create') active @endif">
                    <a href="{{ route('news.create') }}" class="menu-link">
                        <div data-i18n="Collapsed menu">Haber Ekle</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'news' && Request::segment('3') == null) active @endif">
                    <a href="{{ route('news.index') }}" class="menu-link">
                        <div data-i18n="Content navbar">Haber Listesi</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'news' && Request::segment('3') == 'confirm') active @endif">
                    <a href="{{ route('news.confirm') }}" class="menu-link">
                        <div data-i18n="Content navbar">Haber Onayı</div>
                        @if($confirm > 0)
                            <div class="badge bg-primary rounded-pill ms-auto">{{ $confirm }}</div>
                        @endif
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'events' || Request::segment(2) == 'zooms') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-components'></i>
                <div data-i18n="Front Pages"><strong>Etkinlik Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::segment(2) == 'events' && Request::segment(3) == 'create') active @endif">
                    <a href="{{ route('events.create') }}" class="menu-link" >
                        <div data-i18n="Landing">Etkinlik Ekle</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'events' && Request::segment(3) == null) active @endif">
                    <a href="{{ route('events.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Etkinlik Listesi</div>
                    </a>
                </li>

                <li class="menu-item @if(Request::segment(2) == 'zooms') active @endif">
                    <a href="{{ route('zooms.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Zoom/Webinar Listesi</div>
                    </a>
                </li>

            </ul>
        </li>
        @php
            $app = \App\Models\User::where('apply', 0)->where('status', 0)->count();
        @endphp
        <li class="menu-item @if(Request::segment(2) == 'users') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-users-group'></i>
                <div data-i18n="Front Pages"><strong>Üye Yönetimi</strong></div>
                @if($app > 0)
                    <div class="badge bg-primary rounded-pill ms-auto">{{ $app }}</div>
                @endif
            </a>
            <ul class="menu-sub" >
                <li class="menu-item @if(Request::segment(3) == 'members' && Request::segment(4) == 'create') active @endif">
                    <a href="{{ route('members.create') }}" class="menu-link" >
                        <div data-i18n="Landing">Yeni Üye Ekle</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'members' && Request::segment(4) == null) active @endif">
                    <a href="{{ route('members.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Üye Listesi</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'members' && Request::segment(4) == 'applications') active @endif">
                    <a href="{{ route('members.applications') }}" class="menu-link" >
                        <div data-i18n="Pricing">Üye Başvuru Listesi</div>
                        @if($app > 0)
                            <div class="badge bg-primary rounded-pill ms-auto">{{ $app }}</div>
                        @endif
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'members' && Request::segment(4) == 'suspend') active @endif">
                    <a href="{{ route('members.suspend') }}" class="menu-link" >
                        <div data-i18n="Pricing">Üyeliği Askıya Alınanlar</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'titles') active @endif">
                    <a href="{{ route('titles.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Üye Ünvanları</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'jobs') active @endif">
                    <a href="{{ route('jobs.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Üye Mesleklerı </div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(4) == 'bulkMail' && Request::segment(3) == 'mailingUsers') active @endif">
                    <a href="{{ route('mailingUsers.bulkMail') }}" class="menu-link" >
                        <div data-i18n="Pricing">Toplu Mail</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'mailingUsers' && Request::segment(4) == null) active @endif">
                    <a href="{{ route('mailingUsers.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Mailing Listesi</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'documents') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-file'></i>
                <div data-i18n="Front Pages"><strong>Belge Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::segment(2) == 'documents' && Request::segment(3) == 'create') active @endif">
                    <a href="{{ route('documents.create') }}" class="menu-link" >
                        <div data-i18n="Landing">Belge Ekle</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'documents' && Request::segment(3) == null) active @endif">
                    <a href="{{ route('documents.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Belge Listesi</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'comments') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-no-creative-commons'></i>
                <div data-i18n="Front Pages"><strong>Yorum Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::segment(2) == 'comments') active @endif">
                    <a href="{{ route('comments.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Yorum Listesi</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item @if(Request::segment(2) == 'photos') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-photo'></i>
                <div data-i18n="Front Pages"><strong>Foto, Video Galeri</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::segment(3) == 'images' && Request::segment(2) == 'photos') active @endif">
                    <a href="{{ route('images.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Fotoğraf Yükle</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'galleries' && Request::segment(2) == 'photos') active @endif">
                    <a href="{{ route('galleries.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Fotoğraf Galerileri</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'videos' && Request::segment(2) == 'photos') active @endif">
                    <a href="{{ route('videos.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Eğitim Videoları</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'torlak' && Request::segment(2) == 'photos') active @endif">
                    <a href="{{ route('torlak.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Torlak</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item @if(Request::segment(2) == 'scholarships') active @endif">
            <a href="{{ route('scholarships.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-certificate"></i>
                <div data-i18n="Email"><strong>Burs Başvuruları</strong></div>
            </a>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Apps & Pages">Ayarlar</span>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'menus') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-menu-2'></i>
                <div data-i18n="Front Pages"><strong>Menü Yönetimi</strong></div>
            </a>
            <ul class="menu-sub ">
                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(3) == 'create') active @endif">
                    <a href="{{ route('menus.create') }}" class="menu-link" >
                        <div data-i18n="Landing">Menü Ekle</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(3) == null) active @endif">
                    <a href="{{ route('menus.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Menü Listesi</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(3) == 'footer') active @endif">
                    <a href="{{ route('menus.footer-menu') }}" class="menu-link" >
                        <div data-i18n="Pricing">Footer Menu Yönetimi</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'news-categories') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-category'></i>
                <div data-i18n="Front Pages"><strong>Haber Kategori Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::segment(2) == 'news-categories') active @endif">
                    <a href="{{ route('news-categories.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Kategori Listesi</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'event-categories') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-calendar-event'></i>
                <div data-i18n="Front Pages"><strong>Etkinlik Kategori Yönetimi</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::segment(2) == 'event-categories') active @endif">
                    <a href="{{ route('event-categories.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Kategori Listesi</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item">
            <a href="{{ route('member-types.index') }}" class="menu-link">
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
            <a href="{{ route('admin.logout') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-logout"></i>
                <div data-i18n="Chat"><strong>Oturumu kapat</strong></div>
            </a>
        </li>

    </ul>


</aside>
