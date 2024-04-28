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
                <li class="menu-item @if(Request::segment(2) == 'news' && Request::segment('3') == 'order') active @endif">
                    <a href="{{ route('news.order') }}" class="menu-link">
                        <div data-i18n="Content navbar">Manşeti Yönet</div>
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
        @php
            $comments = \App\Models\Comment::where('status', 0)->count();
        @endphp
        <li class="menu-item @if(Request::segment(2) == 'comments') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-no-creative-commons'></i>
                <div data-i18n="Front Pages"><strong>Yorum Yönetimi</strong></div>
                @if($comments > 0)
                    <div class="badge bg-primary rounded-pill ms-auto">{{ $comments }}</div>
                @endif
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::segment(2) == 'comments') active @endif">
                    <a href="{{ route('comments.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Yorum Listesi</div>
                        @if($comments > 0)
                            <div class="badge bg-primary rounded-pill ms-auto">{{ $comments }}</div>
                        @endif
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item @if(Request::segment(2) == 'photos') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-photo'></i>
                <div data-i18n="Front Pages"><strong>Torlak</strong></div>
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
        @php
            $vote = \App\Models\Competence::where('vote', 0)->where('status', 0)->where('edit_request', 0)->count();
            $request = \App\Models\Competence::where('status', 1)->count();
            $school = \App\Models\School::where('status', 0)->count();
            $contact = \App\Models\Contact::where('status', 0)->get();
        @endphp
        <li class="menu-item @if(Request::segment(2) == 'competences-unconfirmed' || Request::segment(2) == 'competencesList' || Request::segment(2) == 'competencesPoint' || Request::segment(2) == 'competences-edit-request') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-file"></i>
                <div data-i18n="Layouts"><strong>KBB Yeterlik</strong></div>
                @if($vote > 0 || $request > 0)
                    <div class="badge bg-primary rounded-pill ms-auto">{{ $vote + $request }}</div>
                @endif
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(Request::segment(2) == 'competencesPoint' && Request::segment(3) == null) active @endif">
                    <a href="{{ route('competencesPoint.index') }}" class="menu-link">
                        <div data-i18n="Collapsed menu">Yeterlik Puan</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'competencesList') active @endif">
                    <a href="{{ route('competence-list') }}" class="menu-link">
                        <div data-i18n="Collapsed menu">Onaylanmış Liste</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'competences-unconfirmed') active @endif">
                    <a href="{{ route('unconfirmed-list') }}" class="menu-link">
                        <div data-i18n="Content navbar">Onaylanmamış Liste</div>
                        @if($vote > 0)
                            <div class="badge bg-primary rounded-pill ms-auto">{{ $vote }}</div>
                        @endif
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'competences-edit-request') active @endif">
                    <a href="{{ route('competences-edit-request') }}" class="menu-link">
                        <div data-i18n="Content navbar">Düzenleme isteği</div>
                        @if($request > 0)
                            <div class="badge bg-primary rounded-pill ms-auto">{{ $request }}</div>
                        @endif
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'competencesPoint' && Request::segment(3) == 'member-list') active @endif">
                    <a href="{{ route('competences.member-list') }}" class="menu-link">
                        <div data-i18n="Content navbar">Üye Listesi</div>
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
        <li class="menu-item @if(Request::segment(2) == 'school-list') active @endif">
            <a href="{{ route('schools-list') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-building"></i>
                <div data-i18n="Chat"><strong>KBB Okulları </strong></div>

            </a>
        </li>
        <li class="menu-item @if(Request::segment(2) == 'contacts') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ti ti-message'></i>
                <div data-i18n="Front Pages"><strong>Mesajlar</strong></div>
                @if($contact->count() > 0)
                    <div class="badge bg-primary rounded-pill ms-auto">{{ $contact->count() }}</div>
                @endif
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::segment(3) == 'president-contact' && Request::segment(2) == 'contacts') active @endif">
                    <a href="{{ route('president-contact') }}" class="menu-link" >
                        <div data-i18n="Pricing">Başkana ulaş</div>
                        @if($contact->count() > 0)
                            <div class="badge bg-primary rounded-pill ms-auto">{{ $contact->where('type', 3)->count() }}</div>
                        @endif
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'new-idea' && Request::segment(2) == 'contacts') active @endif">
                    <a href="{{ route('new-idea') }}" class="menu-link" >
                        <div data-i18n="Pricing">Bir fikrim var</div>
                        @if($contact->count() > 0)
                            <div class="badge bg-primary rounded-pill ms-auto">{{ $contact->where('type', 2)->count() }}</div>
                        @endif
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'contact-us' && Request::segment(2) == 'contacts') active @endif">
                    <a href="{{ route('contact-us') }}" class="menu-link" >
                        <div data-i18n="Pricing">Bize ulaşın</div>
                        @if($contact->count() > 0)
                            <div class="badge bg-primary rounded-pill ms-auto">{{ $contact->where('type', 1)->count() }}</div>
                        @endif
                    </a>
                </li>
            </ul>
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
                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(3) == null) active open @endif">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Customer"> Derneğimiz</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(3) == 'presidents') active @endif">
                            <a href="{{ route('presidents.index') }}" class="menu-link" >
                                <div data-i18n="Landing">Başkanlarımız</div>
                            </a>
                        </li>
                        <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(3) == 'committees') active open @endif">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <div data-i18n="Customer Details">Kurullar</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(4) == 'directors') active @endif">
                                    <a href="{{ route('directors.index') }}" class="menu-link" >
                                        <div data-i18n="Landing">Yönetim Kurulu</div>
                                    </a>
                                </li>
                                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(4) == 'check' ||  Request::segment(4) == 'checkEdit') active @endif">
                                    <a href="{{ route('committees.check') }}" class="menu-link">
                                        <div data-i18n="Overview">Denetleme Kurulu</div>
                                    </a>
                                </li>
                                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(4) == 'advice' || Request::segment(4) == 'adviceEdit') active @endif">
                                    <a href="{{ route('committees.advice') }}" class="menu-link">
                                        <div data-i18n="Security">Danışma Kurulu</div>
                                    </a>
                                </li>
                                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(4) == 'honor' || Request::segment(4) == 'honorEdit') active @endif">
                                    <a href="{{ route('committees.honor') }}" class="menu-link">
                                        <div data-i18n="Address & Billing">Onur ve Etik Kurulu</div>
                                    </a>
                                </li>
                                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(4) == 'qualification' || Request::segment(4) == 'qualificationEdit') active @endif">
                                    <a href="{{ route('committees.qualification') }}" class="menu-link">
                                        <div data-i18n="Notifications">Yeterlik Yürütme Kurulu</div>
                                    </a>
                                </li>
                                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(4) == 'history-committees' || Request::segment(4) == 'history-committeesEdit') active @endif">
                                    <a href="{{ route('history-committees.index') }}" class="menu-link">
                                        <div data-i18n="Notifications">Geçmiş Dönemler Yönetim Kurulları</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(3) == 'economic-business') active @endif">
                            <a href="{{ route('committees.economicBusiness') }}" class="menu-link" >
                                <div data-i18n="Landing">İktisadi İşletme</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'assistant-school') active @endif">
                    <a href="{{ route('menu.assistantSchool') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-building"></i>
                        <div data-i18n="Chat">Asistan Okulu</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'exchange-program') active @endif">
                    <a href="{{ route('menu.exchangeProgram') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-building"></i>
                        <div data-i18n="Chat">Değişim Programı</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'local-associations') active @endif">
                    <a href="{{ route('menu.localAssociations') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-building"></i>
                        <div data-i18n="Chat">Yöresel Dernekler</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(3) == 'sub-branches') active @endif">
                    <a href="{{ route('menu.subBranches') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-building"></i>
                        <div data-i18n="Chat">Alt Bilim Dalları</div>
                    </a>
                </li>
                {{--<li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(3) == 'create') active @endif">
                    <a href="{{ route('menus.create') }}" class="menu-link" >
                        <div data-i18n="Landing">Menü Ekle</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(3) == null) active @endif">
                    <a href="{{ route('menus.index') }}" class="menu-link" >
                        <div data-i18n="Pricing">Menü Listesi</div>
                    </a>
                </li>--}}
                {{--<li class="menu-item @if(Request::segment(2) == 'menus' && Request::segment(3) == 'footer') active @endif">
                    <a href="{{ route('menus.footer-menu') }}" class="menu-link" >
                        <div data-i18n="Pricing">Footer Menu Yönetimi</div>
                    </a>
                </li>--}}
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
            <a href="{{ route('settings.index') }}" class="menu-link">
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
