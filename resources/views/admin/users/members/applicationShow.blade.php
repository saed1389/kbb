@extends('admin.layouts.app')
@section('title')
    Başvuru Bilgileri
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}" />
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header"> {{ $user->titleName->title.' '.$user->first_name.' '.$user->last_name }} Bilgileri</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('members.index') }}">Üye Yönetimi  </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('members.applications') }}">Başvuru Listesi </a>
                                </li>
                                <li class="breadcrumb-item active">{{ $user->titleName->title.' '.$user->first_name.' '.$user->last_name }}</li>

                            </ol>
                        </nav>
                    </div>
                    <div class="content-wrapper">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="user-profile-header-banner">
                                            <img src="{{ asset('assets/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top">
                                        </div>
                                        <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                                            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                                                <img src="{{ $user->gender == 1 ? asset('assets/img/avatars/14.png') : asset('assets/img/avatars/2.png') }}" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                                            </div>
                                            <div class="flex-grow-1 mt-3 mt-sm-5">
                                                <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                                    <div class="user-profile-info">
                                                        <h4>{{ $user->titleName->title.' '.$user->first_name.' '.$user->last_name }}</h4>
                                                        <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                                            <li class="list-inline-item d-flex gap-1">
                                                                <i class='ti ti-color-swatch'></i> {{ @$user->jobName->job }}
                                                            </li>
                                                            <li class="list-inline-item d-flex gap-1">
                                                                <i class='ti ti-map-pin'></i> {{ $user->workCity->province_name }}
                                                            </li>
                                                            <li class="list-inline-item d-flex gap-1">
                                                                <i class='ti ti-calendar-event'></i> Başvuru: {{ date('d/m/Y H:i:s') }}
                                                            </li>
                                                        </ul>

                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                                        <li class="nav-item me-2"><a class="nav-link active" href="javascript:void(0);"><i class='ti-xs ti ti-user-check me-1'></i> Profil</a></li>
                                        {{--<li class="nav-item mt-1">
                                            <label class="switch switch-success switch-lg">
                                                <input type="checkbox" class="switch-input active" name="status" id="status" data-id="{{ $user->id }}" value="{{ $user->id }}" @checked($user->apply == 1)>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on">
                                                        <i class="ti ti-check"></i>
                                                    </span>
                                                    <span class="switch-off">
                                                        <i class="ti ti-x"></i>
                                                    </span>
                                                </span>
                                            </label>
                                        </li>--}}
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <small class="card-text text-uppercase">Genel bilgi</small>
                                                    <ul class="list-unstyled mb-4 mt-3">
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-user text-heading"></i><span class="fw-medium mx-2 text-heading"><strong>Ad Soyad:</strong></span> <span>{{ $user->first_name. ' '.$user->last_name }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-check text-heading"></i><span class="fw-medium mx-2 text-heading"><strong>Ünvan:</strong></span> <span>{{ $user->titleName->title }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-user text-heading"></i><span class="fw-medium mx-2 text-heading"><strong>Anne Adı:</strong></span> <span>{{ $user->mother_name }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-user text-heading"></i><span class="fw-medium mx-2 text-heading"><strong>Baba Adı:</strong></span> <span>{{ $user->father_name }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-gender-genderfluid"></i><span class="fw-medium mx-2 text-heading"><strong>Cinsiyet:</strong></span> <span>{{ $user->gender == 1 ? 'Erkek' : 'Kadın' }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tool"></i>
                                                            <span class="fw-medium mx-2 text-heading">
                                                                <strong>Mesleginiz:</strong>
                                                            </span>
                                                            <span>
                                                                @if($user->occupation == 1)
                                                                    Sağlık Bakanlığı Eğitim Hastanesi
                                                                @elseif($user->occupation == 2)
                                                                    Özel Hastane
                                                                @elseif($user->occupation == 3)
                                                                    Diğer
                                                                @elseif($user->occupation == 4)
                                                                    Üniversite Hastanesi
                                                                @elseif($user->occupation == 5)
                                                                    Vakıf Üniversitesi
                                                                @elseif($user->occupation == 6)
                                                                    Sağlık Bakanlığı Devlet Hastanesi
                                                                @elseif($user->occupation == 7)
                                                                    SSK Eğitim Hastanesi
                                                                @elseif($user->occupation == 8)
                                                                    Özel Muayenehane
                                                                @endif
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-cards"></i><span class="fw-medium mx-2 text-heading"><strong>T.C. Kimlik Nu:</strong></span> <span>{{ $user->tc_card_no }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-calendar-event"></i><span class="fw-medium mx-2 text-heading"><strong>Doğum Tarihi:</strong></span> <span>{{ $user->birthday_date }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-world"></i><span class="fw-medium mx-2 text-heading"><strong>Uyruk:</strong></span> <span>{{ $user->countryName->country_name }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tooltip"></i><span class="fw-medium mx-2 text-heading"><strong>Çalışma Durumu:</strong></span> <span>{{ $user->working_status == 1 ? 'Emekli' : 'Aktif Çalışan' }}</span></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled mb-4 mt-3">
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-compass"></i><span class="fw-medium mx-2 text-heading"><strong>Kurum Adı:</strong></span> <span>{{ $user->company_name }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="fa fa-address-book"></i><span class="fw-medium mx-2 text-heading"><strong>İş Adresi:</strong></span> <span>{{ $user->work_address }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="fa fa-city"></i><span class="fw-medium mx-2 text-heading"><strong>İş İl:</strong></span> <span>{{ $user->workCity->province_name }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="fa fa-city"></i><span class="fw-medium mx-2 text-heading"><strong>İş İlçe:</strong></span> <span>{{ $user->workSate->city_name }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-phone"></i><span class="fw-medium mx-2 text-heading"><strong>İş Telefonu:</strong></span> <span>{{ $user->work_tel }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="fa fa-address-book"></i><span class="fw-medium mx-2 text-heading"><strong>Ev Adresi:</strong></span> <span>{{ $user->home_address }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="fa fa-city"></i><span class="fw-medium mx-2 text-heading"><strong>Ev İl:</strong></span> <span>{{ $user->homeCity->province_name }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="fa fa-city"></i><span class="fw-medium mx-2 text-heading"><strong>Ev İlçe:</strong></span> <span>{{ $user->homeSate->city_name }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="fa fa-mobile-screen"></i><span class="fw-medium mx-2 text-heading"><strong>Cep Telefonu:</strong></span> <span>{{ $user->mobile }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="fa fa-phone-alt"></i><span class="fw-medium mx-2 text-heading"><strong>Ev Telefonu:</strong></span> <span>{{ $user->home_tel }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="fa fa-envelope"></i><span class="fw-medium mx-2 text-heading"><strong>E-Posta:</strong></span> <span>{{ $user->email }}</span></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/pages-profile.js') }}"></script>

    @endpush
@endsection
