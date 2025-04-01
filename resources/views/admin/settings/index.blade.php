@extends('admin.layouts.app')
@section('title')
    Sistem Ayarları
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}"/>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-5">
            <h5 class="card-header"> Sistem Ayarları</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Sistem Ayarları</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="content-wrapper">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Popup Ayarları</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Genel Ayarlar </button>
                                        </li>
                                        {{--<li class="nav-item" role="presentation">
                                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                                        </li>--}}
                                    </ul>
                                    <form method="post" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row">
                                                    <h5>Popup 1 Ayarları</h5>
                                                    <div class="col-md-6">
                                                        <div class="mb-4">
                                                            <div>
                                                                <label for="title" class="form-label">Başlık</label>
                                                                <input type="text" class="form-control" id="title" name="title" value="{{ $setting->title }}" placeholder="Lütfen Başlığı Girin">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-4">
                                                            <div>
                                                                <label for="popupHref" class="form-label">Href</label>
                                                                <input type="text" class="form-control" id="popupHref" name="popupHref" value="{{ $setting->popupHref }}" title="popupHref" placeholder="Lütfen Href Girin">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-4">
                                                            <div>
                                                                <label for="popupEnd_date" class="form-label">Bitiş tarihi</label>
                                                                <input type="date" class="form-control" id="popupEnd_date" name="popupEnd_date" title="popupEnd_date" value="{{ $setting->popupEnd_date }}" placeholder="Lütfen Bitiş Tarihi Girin">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="popupStatus" class="form-label">Durum</label>
                                                        <div class="form-check form-switch mb-2">
                                                            <input class="form-check-input" type="checkbox" name="popupStatus" id="popupStatus" value="1" @checked($setting->popupStatus == 1) >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4 mt-5">
                                                                <input type="file" class="form-control" id="popupImage" name="popupImage">
                                                                @error('popupImage')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                                <input type="hidden" value="{{ $setting->popupImage }}" name="popupImageOld">
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <img id="showImage" class="w-25 rounded" src="{{ $setting->popupImage ? asset($setting->popupImage) : asset('assets/img/images.png') }}" alt="profile">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-4">
                                                    <h5 class="mt-4">Popup 2 Ayarları</h5>
                                                    <div class="col-md-6">
                                                        <div class="mb-4">
                                                            <div>
                                                                <label for="title2" class="form-label">Başlık</label>
                                                                <input type="text" class="form-control" id="title2" name="title2" value="{{ $setting->title2 }}" placeholder="Lütfen Başlığı Girin">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-4">
                                                            <div>
                                                                <label for="popupHref" class="form-label">Href</label>
                                                                <input type="text" class="form-control" id="popupHref2" name="popupHref2" value="{{ $setting->popupHref2 }}" title="popupHref" placeholder="Lütfen Href Girin">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-4">
                                                            <div>
                                                                <label for="popupEnd_date" class="form-label">Bitiş tarihi</label>
                                                                <input type="date" class="form-control" id="popupEnd_date2" name="popupEnd_date2" title="popupEnd_date2" value="{{ $setting->popupEnd_date2 }}" placeholder="Lütfen Bitiş Tarihi Girin">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="popupStatus2" class="form-label">Durum</label>
                                                        <div class="form-check form-switch mb-2">
                                                            <input class="form-check-input" type="checkbox" name="popupStatus2" id="popupStatus2" value="1" @checked($setting->popupStatus2 == 1) >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4 mt-5">
                                                                <input type="file" class="form-control" id="popupImage2" name="popupImage2">
                                                                @error('popupImage2')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                                <input type="hidden" value="{{ $setting->popupImage2 }}" name="popupImageOld2">
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <img id="showImage2" class="w-25 rounded" src="{{ $setting->popupImage2 ? asset($setting->popupImage2) : asset('assets/img/images.png') }}" alt="profile">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="row">
                                                    <h5>Genel Ayarlar</h5>
                                                    <div class="col-md-6">
                                                        <div class="mb-4">
                                                            <div>
                                                                <label for="competenceMax" class="form-label">Yeterlik Puan</label>
                                                                <input type="text" class="form-control" id="competenceMax" name="competenceMax" value="{{ $setting->competenceMax }}" placeholder="Lütfen Yeterlik Puani Girin">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            {{--<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>--}}
                                            <button type="submit" class="btn btn-success">Güncelle</button>
                                        </div>
                                    </form>
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
        <script type="text/javascript">
            $(document).ready(function () {
                $('#popupImage').change(function (e) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
                $('#popupImage2').change(function (e) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#showImage2').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>
    @endpush
@endsection
