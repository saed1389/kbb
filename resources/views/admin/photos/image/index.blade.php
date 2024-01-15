@extends('admin.layouts.app')
@section('title') Fotoğraf Yükle @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
        <style>
            .dropzone.dz-clickable * {
                cursor: default;
            }

            .light-style .dz-message {
                color: #5d596c;
            }

            .dz-started .dz-message {
                display: none;
            }
            .dz-message {
                margin: 8rem 0 3rem;
                font-weight: 500;
                text-align: center;
            }
            .dz-message {
                font-size: 1.625rem;
            }
            @media (min-width: 576px)
            .light-style .dz-preview {
                display: inline-block;
                width: 11.25rem;
            }
            .light-style .dz-preview {
                 border: 0 solid #dbdade;
                 border-radius: 0.375rem;
                 box-shadow: 0 0.25rem 1.125rem rgba(75,70,92,.1);
             }
            .dz-preview {
                position: relative;
                vertical-align: top;
                margin: 0.5rem;
                background: #fff;
                font-size: .8125rem;
                box-sizing: content-box;
                cursor: default;
            }
            .dropzone {
                width: 100%;
                position: relative;
                padding: 1.5rem;
                cursor: pointer;
                border-radius: 0.5rem;
            }
            .dropzone .dz-preview .dz-remove{
                font-size: 14px;
                text-align: center;
                display: block;
                cursor: pointer;
                border: none;
                text-decoration: none;
                color: #394241;
            }
            .light-style .dz-size {
                color: #a5a3ae;
            }
            .dz-size {
                padding: 1.875rem 0.625rem 0.625rem 0.625rem;
                font-size: .6875rem;
                font-style: italic;
            }
            .dz-filename {
                display: none;
            }
            .light-style .dz-error-message {
                background: rgba(234,84,85,.8);
                border-top-left-radius: 0.375rem;
                border-top-right-radius: 0.375rem;
            }
            .dz-error-message {
                position: absolute;
                top: -1px;
                left: -1px;
                bottom: -1px;
                right: -1px;
                display: none;
                color: #fff;
                z-index: 40;
                padding: 0.75rem;
                text-align: left;
                overflow: auto;
                font-weight: 500;
            }
            .light-style .dz-error-mark, .light-style .dz-success-mark {
                background-color: rgba(75,75,75,.5);
            }
            .dz-success-mark {
                background-image: url(data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%235cb85c' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E);
            }
            .dz-error-mark, .dz-success-mark {
                position: absolute;
                left: 50%;
                top: 50%;
                display: none;
                margin-left: -1.875rem;
                margin-top: -1.875rem;
                height: 3.75rem;
                width: 3.75rem;
                border-radius: 50%;
                background-position: center center;
                background-size: 1.875rem 1.875rem;
                background-repeat: no-repeat;
                box-shadow: 0 0 1.25rem rgba(0,0,0,.06);
            }
            .light-style .dz-error-mark, .light-style .dz-success-mark {
                background-color: rgba(75,75,75,.5);
            }
            .dz-error-mark {
                background-image: url(data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23d9534f' viewBox='-2 -2 7 7'%3E%3Cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3E%3Ccircle r='.5'/%3E%3Ccircle cx='3' r='.5'/%3E%3Ccircle cy='3' r='.5'/%3E%3Ccircle cx='3' cy='3' r='.5'/%3E%3C/svg%3E);
            }
            .light-style .dz-remove {
                color: #6f6b7d;
                border-top: 1px solid #dbdade;
                border-bottom-right-radius: calc(0.375rem - 1px);
                border-bottom-left-radius: calc(0.375rem - 1px);
            }
            .dz-remove {
                display: block;
                text-align: center;
                padding: 0.375rem 0;
                font-size: .75rem;
            }
            .dropzone .dz-preview .dz-remove:hover{
                text-decoration: none;
            }
            .dropzone .dz-preview .dz-details {

            }
            .dropzone .dz-preview {
                position: relative;
                display: inline-block;
                vertical-align: top;
                margin: 16px;
                min-height: 100px;
            }
            .dropzone.dz-clickable * {
                cursor: default;
            }
            .dropzone, .dropzone * {
                box-sizing: border-box;
            }
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Fotoğraf Yükle</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Fotoğraf Yükle</li>

                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <form action="{{ route('images.add') }}" method="post" enctype="multipart/form-data" class="dropzone needsclick" id="myDropzone">
                        @csrf
                        <label class="form-label" for="category">Fotoğraf Kategorisi <span class="text-danger">*</span></label>
                        <select id="category" name="category" class="select2 form-select form-select-lg" data-allow-clear="true" required>
                            <option>Seçiniz...</option>
                            @foreach($galleries as $gallery)
                                <option value="{{ $gallery->id }}">{{ $gallery->title }}</option>
                            @endforeach
                        </select>

                        <!-- Dropzone Area -->
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@push('scripts')
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bloodhound/bloodhound.js') }}"></script>


    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>

    <!-- Dropzone Initialization Script -->
    <script>
        Dropzone.options.myDropzone = {
            url: "{{ route('images.add') }}",
            paramName: "file",
            autoProcessQueue: false,
            maxFilesize: 5,
            parallelUploads: 5,
            acceptedFiles: '.jpeg,.jpg,.png,.gif,.gif,.svg',
            addRemoveLinks: !0,
            dictRemoveFile  : "Fotoğrafı sil",
            dictDefaultMessage  : "Fotoğrafları buraya sürükleyebilrisiniz",
            init: function() {
                this.on('error', function(file, errorMessage) {
                    if (file.accepted) {
                        var mypreview = document.getElementsByClassName('dz-error');
                        mypreview = mypreview[mypreview.length - 1];
                        mypreview.classList.toggle('dz-error');
                        mypreview.classList.toggle('dz-success');
                    }
                });
            },

            queuecomplete : function(file, response){
                var successMessage = "Fotoğraf başarıyla yüklendi!";
                toastr.success(" Fotoğraf başarıyla yüklendi! ");
                window.location = "{{ route('galleries.index') }}?message=" + encodeURIComponent(successMessage);

            }

        };

        document.querySelector('form').addEventListener('submit', function (e) {
            e.preventDefault();
            var myDropzone = Dropzone.forElement('#myDropzone');
            myDropzone.processQueue();
        });

    </script>
@endpush
@endsection
