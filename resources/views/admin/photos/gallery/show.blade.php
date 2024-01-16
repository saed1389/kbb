@extends('admin.layouts.app')
@section('title') {{ $gallery->title }} @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
        <style>
            .masonry-container {
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                grid-gap: 16px;
            }

            .masonry-item {
                margin-bottom: 16px;
            }
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">{{ $gallery->title }}</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('galleries.index') }}">Fotoğraf Galeri  </a>
                                </li>
                                <li class="breadcrumb-item active">{{ $gallery->title }}</li>
                            </ol>
                        </nav>


                        <div class="masonry-container">
                            @foreach($photos as $item)
                                <div class="masonry-item" style="text-align-last: center;">
                                    <a data-fancybox="gallery" data-src="{{ asset($item->image) }}" data-caption='<a href="{{ route('images.delete', $item->id) }}" class="btn btn-danger" id="delete">Sil</a>'>
                                        <img src="{{ asset($item->image) }}" class="img-fluid img-thumbnail"  />
                                        <a  href="{{ route('images.delete', $item->id) }}" id="delete" class="btn btn-danger btn-sm mt-2 mb-4">Sil</a>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/code.js') }}"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script>
            $('.grid').masonry({
                // options
                itemSelector: '.grid-item',
                columnWidth: 200
            });

            Fancybox.bind('[data-fancybox="gallery"]', {
                Thumbs : {
                    type: "modern",
                    showOnStart: true
                },
                Toolbar: {
                    display: {
                        left: [
                            "infobar",
                        ],
                        middle: [],
                        right: [
                            "iterateZoom",
                            "slideshow",
                            "fullscreen",
                            "download",
                            "thumbs",
                            "close",
                        ],
                    }
                }
            });
        </script>

    @endpush
@endsection
