<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0">
                    <span class="d-none d-md-inline-block text-muted"><strong>TÜRK KULAK BURUN BOĞAZ VE BAŞ BOYUN CERRAHİSİ DERNEĞİ | Admin Panel</strong></span>
                </a>
            </div>
        </div>
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <i class='ti ti-layout-grid-add ti-md'></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                    <div class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                            <h5 class="text-body mb-0 me-auto">Kısayollar</h5>
                        </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container">
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                    <i class="ti ti-calendar fs-4"></i>
                                </span>
                                <a href="/" class="stretched-link" target="_blank">Website</a>
                                <small class="text-muted mb-0">Geri dön</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                    <i class="ti ti-file-invoice fs-4"></i>
                                </span>
                                <a href="{{ route('news.create') }}" class="stretched-link">Haber </a>
                                <small class="text-muted mb-0">Ekle</small>
                            </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                    <i class="ti ti-users fs-4"></i>
                                </span>
                                <a href="{{ route('events.create') }}" class="stretched-link">Etkinlik </a>
                                <small class="text-muted mb-0">Ekle</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                    <i class="ti ti-lock fs-4"></i>
                                </span>
                                <a href="{{ route('mailingUsers.bulkMail') }}" class="stretched-link">Toplu </a>
                                <small class="text-muted mb-0">Mail</small>
                            </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                <i class="ti ti-chart-bar fs-4"></i>
                            </span>
                                <a href="{{ route('members.applications') }}" class="stretched-link">Üye Başvuru </a>
                                <small class="text-muted mb-0">Listesi</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                <i class="ti ti-settings fs-4"></i>
                            </span>
                                <a href="{{ route('galleries.index') }}" class="stretched-link">Fotoğraf Galeri </a>
                                <small class="text-muted mb-0">Listesi</small>
                            </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                <i class="ti ti-help fs-4"></i>
                            </span>
                                <a href="javascript: void (0)" class="stretched-link">FAQs</a>
                                <small class="text-muted mb-0">FAQs & Articles</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                <i class="ti ti-square fs-4"></i>
                            </span>
                                <a href="javascript: void (0)" class="stretched-link">Modals</a>
                                <small class="text-muted mb-0">Useful Popups</small>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                   data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="@if(Auth::user()->profile_image)
                                                        {{ asset(Auth::user()->profile_image) }}
                                                        @else
                                                        {{ Auth::user()->gender == 1 ? asset('assets/img/avatars/14.png') : asset('assets/img/avatars/2.png') }}
                                                @endif" alt="" class="h-auto rounded">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3" style="margin-left: 1rem;">
                                <div class="avatar avatar-online">
                                    <img src="@if(Auth::user()->profile_image)
                                                        {{ asset(Auth::user()->profile_image) }}
                                                        @else
                                                        {{ Auth::user()->gender == 1 ? asset('assets/img/avatars/14.png') : asset('assets/img/avatars/2.png') }}
                                                @endif" alt class="h-auto rounded">
                                </div>
                            </div>
                            <div class="flex-grow-1" style="padding-top: 9px;">
                                <span class="fw-medium d-block">{{ Auth::user()->first_name. ' '.Auth::user()->last_name }}</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.profile', Auth::user()->id) }}">
                            <i class="ti ti-user-check me-2 ti-sm"></i>
                            <span class="align-middle">Profilim</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}">
                            <i class="ti ti-logout me-2 ti-sm"></i>
                            <span class="align-middle">Oturumu Kapat</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
