@extends('admin.layouts.app')
@section('title')
    Üye Düzenleme
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
        <style>
            #results { padding:20px; border:1px solid; background:#ccc; }
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header"> {{ @$user->titleName->title.' '.$user->first_name.' '.$user->last_name }} Bilgileri</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.profile', $user->id) }}">Profil </a>
                                </li>
                                <li class="breadcrumb-item active">{{ @$user->titleName->title.' '.$user->first_name.' '.$user->last_name }}</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row g-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 offset-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="mx-auto my-3">
                                        <img src="@if($user->profile_image)
                                                        {{ asset($user->profile_image) }}
                                                        @else
                                                        {{ $user->gender == 1 ? asset('assets/img/avatars/14.png') : asset('assets/img/avatars/2.png') }} @endif
                                                        " alt="Avatar Image" class="rounded w-px-400">
                                    </div>
                                    <h4 class="mb-1 card-title">{{ @$user->titleName->title.' '.$user->first_name.' '.$user->last_name }}</h4>
                                    <span class="pb-1">E-Posta: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a></span>
                                    <div class="d-flex align-items-center justify-content-center mt-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#webcam" class="btn btn-outline-primary d-flex align-items-center me-3 waves-effect waves-light"><i class="ti-xs me-1 ti ti-camera me-1"></i>WebCam'dan Yükle</button>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#file" class="btn btn-primary d-flex align-items-center me-3 waves-effect waves-light"><i class="ti-xs me-1 ti ti-file me-1"></i>Bilgisayardan Yükle</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal animate__animated animate__rollIn" id="webcam" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">Resmi WebCam'dan Yükle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('profile-webcam-store', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="my_camera"></div>
                                <br/>

                                <input type="hidden" name="image" class="image-tag">
                            </div>
                            <div class="col-md-6">
                                <div id="results">Resim Önizlemesi ...</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type=button class="btn btn-success" onClick="take_snapshot()">Fotoğraf Çek</button>
                        <button type="submit" class="btn btn-primary">Yükle</button>
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Kapat</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal animate__animated animate__rollIn" id="file" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">Resmi WebCam'dan Yükle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('profile-file-store', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <label for="icon" class="form-label"> Profil Rasmi</label>
                                <input type="file" class="form-control" id="icon" name="icon">
                                @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-xl-6 mt-4 mb-4">
                                <img id="showImage" class="" style="width: 250px;" src="{{ $user->profile_image ? asset($user->profile_image) : asset('assets/img/images.png') }}" alt="profile">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Yükle</button>
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Kapat</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/ui-modals.js') }}"></script>
        <script>
            Webcam.set({
                width: 490,
                height: 350,
                image_format: 'jpeg',
                jpeg_quality: 90
            });

            Webcam.attach( '#my_camera' );

            function take_snapshot() {
                Webcam.snap( function(data_uri) {
                    $(".image-tag").val(data_uri);
                    document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
                } );
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#icon').change(function (e) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>
    @endpush
@endsection
