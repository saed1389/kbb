<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
        <a href="{{ url('/') }}" class="app-brand-link">
            <img src="{{ asset('assets/img/kbb-logo.svg') }}" alt="" class="w-100">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item @if(Request::segment(2) == 'home') active @endif">
            <a href="{{ route('user.home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards"><strong>Anasayfa</strong></div>
            </a>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'news') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-news"></i>
                <div data-i18n="Layouts"><strong>Haber Yönetimi</strong></div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item @if(Request::segment(2) == 'news' && Request::segment(3) == 'create') active @endif">
                    <a href="{{ route('userCreate.news') }}" class="menu-link">
                        <div data-i18n="Collapsed menu">Haber Ekle</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'news' && Request::segment('3') == null) active @endif">
                    <a href="{{ route('userIndex.news') }}" class="menu-link">
                        <div data-i18n="Content navbar">Haber Listesi</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'profile' || Request::segment(2) == 'profile-edit-photo' || Request::segment(2) == 'profile-edit') active @endif">
            <a href="{{ route('user.profile', Auth::user()->id) }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-user"></i>
                <div data-i18n="Chat"><strong>Profili Düzenle </strong></div>
            </a>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'userCompetences') active @endif">
            <a href="{{ route('userCompetences.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-file"></i>
                <div data-i18n="Chat"><strong>KBB Yeterlik </strong></div>
            </a>
        </li>

        <li class="menu-item @if(Request::segment(2) == 'schools') active @endif">
            <a href="{{ route('schools.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-building"></i>
                <div data-i18n="Chat"><strong>KBB Okulları </strong></div>
            </a>
        </li>
        <li class="menu-item @if(Request::segment(2) == 'news') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-news"></i>
                <div data-i18n="Layouts"><strong>Torlak</strong></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::segment(2) == 'news' && Request::segment(3) == 'create') active @endif">
                    <a href="{{ route('videos-user') }}" class="menu-link">
                        <div data-i18n="Collapsed menu">Eğitim Videoları</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'news' && Request::segment('3') == null) active @endif">
                    <a href="{{ route('congresses-user') }}" class="menu-link">
                        <div data-i18n="Content navbar">Kongreler</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="{{ route('user.logout') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-logout"></i>
                <div data-i18n="Chat"><strong>Oturumu kapat</strong></div>
            </a>
        </li>
    </ul>
</aside>
