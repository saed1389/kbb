@extends('user.layouts.app')
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
                                    <h5 class="text-white mb-0 mt-2">{{ @Auth::user()->titleName->title.' '.Auth::user()->first_name. ' '. Auth::user()->last_name }}</h5>
                                    <small>{{ Auth::user()->email }}</small>
                                </div>
                                <div class="row" style="--bs-gutter-x: 0rem !important;">
                                    <div class="col-lg-9 col-md-9 col-12 order-2 order-md-1">
                                        <h6 class="text-white mt-0 mt-md-3 mb-3">&nbsp;</h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-medium me-0 website-analytics-text-bg">Haberlerim</p>
                                                        <p class="mb-0">{{ $myNews }} Adet</p>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex mb-4 align-items-center">
                                                        <p class="mb-0 fw-medium me-0 website-analytics-text-bg @if($point < 0 ) text-danger @else text-success @endif">Yeterlik</p>
                                                        <p class="mb-0 @if($point < 0 ) text-danger @else text-success @endif">{{ $point }} </p>
                                                    </li>
                                                    <li class="d-flex align-items-center mb-2">
                                                        <p class=""></p>
                                                        <p class=""></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                        <img src="{{ Auth::user()->profile_image ? asset(Auth::user()->profile_image) : asset('assets/img/logo.png') }}" alt="" width="140" class="card-website-analytics-img rounded">
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
                                                        <p class="mb-0 fw-medium me-0 website-analytics-text-bg"><i class="ti ti-news ti-md"></i> Eğitim</p>
                                                        <p class="mb-0">...</p>
                                                    </li>
                                                    <li class="d-flex align-items-center mb-2">
                                                        <p class="mb-0 fw-medium me-0 website-analytics-text-bg"><i class="ti ti-pencil"></i> Görevlerim</p>
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
                            <h4 class="ms-1 mb-0">{{ $allNews }}</h4>
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
                            <h4 class="ms-1 mb-0">{{ $allEvents }}</h4>
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
                            <h4 class="ms-1 mb-0">{{ $allComments }}</h4>
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
                            <h4 class="ms-1 mb-0">{{ $allUsers }}</h4>
                        </div>
                        <h5 class="mb-1">Toplam Kullanıcı</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <h5 class="card-header">Son Eklediğim Haberler</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Haber Başlığı</th>
                                <th>Oluşturma</th>
                                <th>Hit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lastNews as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ route('news.edit', $item->id) }}">{{ $item->title }}</a></td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->hit }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
