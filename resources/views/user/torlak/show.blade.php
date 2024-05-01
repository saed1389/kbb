@extends('user.layouts.app')
@section('title') {{ $video->title }} @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">{{ $video->title }}</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('user.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">{{ $video->title }}</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card g-3 mt-5">
                            <div class="card-body row g-3">
                                <div class="col-lg-8">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-2 gap-1">
                                        <div class="me-1">
                                            <h5 class="mb-1">{{ $video->title }}</h5>
                                            <p class="mb-1"> <span class="fw-medium"> {{ $video->type = 1 ? 'Eğitim Videoları' : 'Kongreler' }} </span></p>
                                        </div>
                                    </div>
                                    <div class="card academy-content shadow-none border">
                                        <div class="p-2">
                                            <div class="cursor-pointer"><video class="w-100" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="plyr-video-player" playsinline controls>
                                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                                                </video>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="mb-2">Bu kurs hakkında</h5>
                                            <p class="mb-0 pt-1">{!! $video->description !!}</p>
                                            <hr class="my-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
