@extends('user.layouts.app')
@section('title') {{ $header }} @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">{{ $header }}</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('user.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">{{ $header }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="app-academy">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row gy-4 mb-4">
                                        @forelse($videos as $video)
                                            <div class="col-sm-6 col-lg-4">
                                                <div class="card p-2 h-100 shadow-none border">
                                                    <div class="rounded-2 text-center mb-3">
                                                        <a href="{{ route('show-video-user', $video->id) }}">
                                                            <img class="img-fluid" src="{{ asset('uploads/torlak/mid/'.$video->image) }}" alt="{{ $video->title }}" />
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-3 pt-2">
                                                        <a href="{{ route('show-video-user', $video->id) }}" class="h5">{{ $video->title }}</a>
                                                        <p class="mt-2">{{ Str::limit($video->description, '50', '...') }}</p>
                                                        <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                                                            <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" href="{{ route('show-video-user', $video->id) }}">
                                                                <span class="me-2">Devamı</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            No Results
                                        @endforelse
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
