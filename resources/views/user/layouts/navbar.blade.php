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
                        <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id) }}">
                            <i class="ti ti-user-check me-2 ti-sm"></i>
                            <span class="align-middle">Profilim</span>
                        </a>
                    </li>
                   {{-- <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                            <i class="ti ti-settings me-2 ti-sm"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>--}}

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('user.logout') }}">
                            <i class="ti ti-logout me-2 ti-sm"></i>
                            <span class="align-middle">Oturumu Kapat</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->

        </ul>
    </div>

</nav>
