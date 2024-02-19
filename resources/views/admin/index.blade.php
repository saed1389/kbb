@extends('admin.layouts.app')
@section('title') @endsection
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-white mb-0 mt-2">{{ Auth::user()->titleName->title.' '.Auth::user()->first_name. ' '. Auth::user()->last_name }}</h5>
                                    <small>{{ Auth::user()->email }}</small>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                        <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">Haberlerim</p>
                                                        <p class="mb-0">113 Adet</p>
                                                    </li>
                                                    <li class="d-flex align-items-center mb-2">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">Duyurularım</p>
                                                        <p class="mb-0">0 Adet</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">Etkinliklerim</p>
                                                        <p class="mb-0">0 Adet</p>
                                                    </li>
                                                    <li class="d-flex align-items-center mb-2">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">Aktif Üye</p>
                                                        <p class="mb-0">4327 Adet</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                        <img src="{{ Auth::user()->profile_image ? Auth::user()->profile_image : asset('assets/img/logo.png') }}" alt="" width="170" class="card-website-analytics-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-white mb-0 mt-2">Hakkımda</h5>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <h6 class="text-white mt-0 mt-md-3 mb-3">&nbsp;</h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg"><i class="ti ti-news ti-md"></i> Eğitim</p>
                                                        <p class="mb-0">...</p>
                                                    </li>
                                                    <li class="d-flex align-items-center mb-2">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg"><i class="ti ti-pencil"></i> Görevlerim</p>
                                                        <p class="mb-0">...</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg"><i class="ti ti-map-pin"></i> Adres</p>
                                                        <p class="mb-0">...</p>
                                                    </li>
                                                    <li class="d-flex align-items-center mb-2">
                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg"><i class="ti ti-activity"></i> Hakkımda</p>
                                                        <p class="mb-0"> ...</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-news ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">42</h4>
                        </div>
                        <h5 class="mb-1">Toplam Haber</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-warning"><i class="ti ti-calendar ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">8</h4>
                        </div>
                        <h5 class="mb-1">Toplam Etkinlik</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-danger"><i class="ti ti-message-2 ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">27</h4>
                        </div>
                        <h5 class="mb-1">Toplam Yorum</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-info"><i class="ti ti-users ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">13</h4>
                        </div>
                        <h5 class="mb-1">Toplam Kullanıcı</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <h5 class="card-header">Son Eklediğim Haberler</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <caption class="ms-4">List of Projects</caption>
                            <thead>
                            <tr>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Users</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><i class="ti ti-brand-angular ti-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                <td>Albert Cook</td>
                                <td>

                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <h5 class="card-header">Son Eklediğim Etkinlikler</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <caption class="ms-4">List of Projects</caption>
                            <thead>
                            <tr>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Users</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><i class="ti ti-brand-angular ti-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                <td>Albert Cook</td>
                                <td>

                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
