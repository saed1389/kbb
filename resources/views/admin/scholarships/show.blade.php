@extends('admin.layouts.app')
@section('title')
    Burs Başvuruları
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}" />
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header"> {{ $scholarship->name}} Bilgileri</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('scholarships.index') }}">Burs Başvuruları Listesi  </a>
                                </li>
                                <li class="breadcrumb-item active">{{ $scholarship->name}}</li>

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
                                                <img src="{{  asset('assets/img/avatars/2.png') }}" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                                            </div>
                                            <div class="flex-grow-1 mt-3 mt-sm-5">
                                                <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                                    <div class="user-profile-info">
                                                        <h4>{{ $scholarship->name}}</h4>
                                                        <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                                            <li class="list-inline-item d-flex gap-1">
                                                                <i class='ti ti-color-swatch'></i> {{ $scholarship->email }}
                                                            </li>
                                                            <li class="list-inline-item d-flex gap-1">
                                                                <i class='ti ti-map-pin'></i> {{ $scholarship->address }}
                                                            </li>
                                                            <li class="list-inline-item d-flex gap-1">
                                                                <i class='ti ti-calendar-event'></i> Başvuru: {{ date('d/m/Y H:i:s', strtotime($scholarship->created_at)) }}
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
                                        <li class="nav-item me-2"><a class="nav-link active" href="javascript:void(0);"><i class='ti-xs ti ti-user-check me-1'></i> Burs Başvuru</a></li>
                                        {{--<li class="nav-item mt-1">
                                            <label class="switch switch-success switch-lg">
                                                <input type="checkbox" class="switch-input active" name="status" id="status" data-id="{{ $scholarship->id }}" value="{{ $scholarship->id }}" @checked($scholarship->apply == 1)>
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
                                                <div class="col-md-5">
                                                    <small class="card-text text-uppercase">Genel bilgi</small>
                                                    <ul class="list-unstyled mb-4 mt-3">
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-user text-heading"></i><span class="fw-medium mx-2 text-heading"><strong>Ad Soyad:</strong></span> <span>{{ $scholarship->name }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-check text-heading"></i><span class="fw-medium mx-2 text-heading"><strong>Ünvan:</strong></span> <span>{{ $scholarship->titleName->title }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-user text-heading"></i><span class="fw-medium mx-2 text-heading"><strong>Yurtiçi Çalıştığı Kurum:</strong></span> <span>{{ $scholarship->domesticCompany }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-user text-heading"></i><span class="fw-medium mx-2 text-heading"><strong>Pozisyon:</strong></span> <span>{{ $scholarship->position }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-gender-genderfluid"></i><span class="fw-medium mx-2 text-heading"><strong>Telefon Numarası:</strong></span> <span>{{ $scholarship->phoneNumber }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-cards"></i><span class="fw-medium mx-2 text-heading"><strong>Cep Telefonuu:</strong></span> <span>{{ $scholarship->mobilePhone }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-calendar-event"></i><span class="fw-medium mx-2 text-heading"><strong>Mezun Olduğu Üniversite:</strong></span> <span>{{ $scholarship->university }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-world"></i><span class="fw-medium mx-2 text-heading"><strong>Mezuniyet Tarihi:</strong></span> <span>{{ $scholarship->dateOfGraduation }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tooltip"></i><span class="fw-medium mx-2 text-heading"><strong>Uzmanlık Sınav Tarihi:</strong></span> <span>{{ $scholarship->expertiseTestDate }}</span></li>

                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tooltip"></i><span class="fw-medium mx-2 text-heading"><strong>Uzmanlığı Aldığı Kurum:</strong></span> <span>{{ $scholarship->specializedInstitution }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tooltip"></i><span class="fw-medium mx-2 text-heading"><strong>Dernek Üye No:</strong></span> <span>{{ $scholarship->associationNo }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tooltip"></i><span class="fw-medium mx-2 text-heading"><strong>Çalışma Süresince Üzerinde Çalışacağı Alan:</strong></span> <span>{{ $scholarship->workingArea }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tooltip"></i><span class="fw-medium mx-2 text-heading"><strong>Çalışma Süresince Üzerinde Çalışacağı Detaylı Proje:</strong></span> <span>{{ $scholarship->detailedProject }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tooltip"></i><span class="fw-medium mx-2 text-heading"><strong>Adayın Eğitim Alacağı Kurum:</strong></span> <span>{{ $scholarship->candidateEducation }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tooltip"></i><span class="fw-medium mx-2 text-heading"><strong>Eğitim Başlama Tarih:</strong></span> <span>{{ $scholarship->educationStartDate }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tooltip"></i><span class="fw-medium mx-2 text-heading"><strong>Eğitim Bitiş Tarihi:</strong></span> <span>{{ $scholarship->educationCompletionDate }}</span></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-tooltip"></i><span class="fw-medium mx-2 text-heading"><strong>Önerilen Burs Süresi:</strong></span> <span>{{ $scholarship->scholarshipDuration }}</span></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-7">
                                                    <ul class="list-unstyled mb-4 mt-3">
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Tıp ve Uzmanlık Diploması:</strong></span><a href="{{ asset($scholarship->medicalSpecialty) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Türk KBB ve BBC Derneği Yeterlik Belgesi (Yazılı ve Sözlü):</strong></span> <a href="{{ asset($scholarship->KBBQualificationCertificate) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Özgeçmiş (Tıp ve Uzmanlık Diplomaları, Yayınlar, Bildiriler, Alınan Eğitimler, Ödüller vs.):</strong></span> <a href="{{ asset($scholarship->personCV) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Gidilen ülkenin geçerli dilini biliyorsanız belgeleri:</strong></span> <a href="{{ asset($scholarship->currentLanguage) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>İngilizce - Yabancı Dil Seviye Belgesi:</strong></span> <a href="{{ asset($scholarship->englishForeign) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Diğer Dil - 1 - Yabancı Dil Seviye Belgesi:</strong></span> <a href="{{ asset($scholarship->foreignLanguage1) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Diğer Dil - 2 - Yabancı Dil Seviye Belgesi:</strong></span> <a href="{{ asset($scholarship->foreignLanguage2) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Diğer Dil - 3 - Yabancı Dil Seviye Belgesi:</strong></span> <a href="{{ asset($scholarship->foreignLanguage3) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Diğer Dil - 4 - Yabancı Dil Seviye Belgesi:</strong></span> <a href="{{ asset($scholarship->foreignLanguage4) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Başka bir kurumdan burs veya yardım almadığınıza dair belge (kendi imzalı belgeniz):</strong></span> <a href="{{ asset($scholarship->otherScholarship) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Referans Mektubu – 1:</strong></span> <a href="{{ asset($scholarship->referenceLetter1) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Referans Mektubu – 2:</strong></span> <a href="{{ asset($scholarship->referenceLetter2) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Referans Mektubu – 3:</strong></span> <a href="{{ asset($scholarship->referenceLetter3) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Referans Mektubu – 4:</strong></span> <a href="{{ asset($scholarship->referenceLetter4) }}" class="btn btn-success btn-sm">İndir</a></li>
                                                        <li class="d-flex align-items-center mb-3"><i class="ti ti-file"></i><span class="fw-medium mx-2 text-heading"><strong>Kurum Kabul Yazısı:</strong></span> <a href="{{ asset($scholarship->institutionLetter) }}" class="btn btn-success btn-sm">İndir</a></li>
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
