@extends('admin.layouts.app')
@section('title')
    Haber Ekleme
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.css"/>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/packages/barryvdh/elfinder/css/elfinder.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/packages/barryvdh/elfinder/css/theme.css') }}">
        <style>
        .cke_notifications_area {
                pointer-events: none;
                display: none;
            }
            .ck-editor__editable {
                min-height: 300px;
            }
            .preview {
                text-align: center;
                overflow: hidden;
                width: 160px;
                height: 160px;
                margin: 10px;
                border: 1px solid red;
            }

            .section{
                margin-top:150px;
                background:#fff;
                padding:50px 30px;
            }
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y mb-5">
        <div class="card">
            <h5 class="card-header">Haber Ekleme</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('news.index') }}">Haber Yönetimi </a>
                                </li>
                                <li class="breadcrumb-item active">Haber Ekleme</li>

                            </ol>
                        </nav>
                    </div>
                    <form class="" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="title" class="form-label">Haber Başlık <span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" placeholder="Haber Başlık Giriniz">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="title_en" class="form-label">Haber Başlık(en)</label>
                                <input type="text" id="title_en" name="title_en" value="{{ old('title_en') }}" class="form-control" placeholder="Haber Başlık (en) Giriniz">
                            </div>
                            <div class="col-md-2">
                                <label for="start_date" class="form-label">Başlangıç Tarihi</label>
                                <input type="date" id="start_date" value="{{ old('start_date') }}" name="start_date" class="form-control" >
                            </div>
                            <div class="col-md-2">
                                <label for="end_date" class="form-label">Bitiş Tarihi</label>
                                <input type="date" id="end_date" value="{{ old('end_date') }}" name="end_date" class="form-control" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="short_description" class="form-label">Kısa Açıklama</label>
                                <input type="text" id="short_description" value="{{ old('short_description') }}" name="short_description" class="form-control" placeholder="Kısa Açıklama Giriniz">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="short_description_en" class="form-label">Kısa Açıklama(en)</label>
                                <input type="text" id="short_description_en" value="{{ old('short_description_en') }}" name="short_description_en" class="form-control" placeholder="Kısa Açıklama(en) Giriniz">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="news_href" class="form-label">Haber Href</label>
                                <input type="text" id="news_href" value="{{ old('news_href') }}" name="news_href" class="form-control" placeholder="Haber Href Giriniz">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="gallery">Fotoğraf Kategorisi </label>
                                <select id="gallery" name="gallery" class="select2 form-select" data-allow-clear="true" >
                                    <option value="0">Seçiniz...</option>
                                    @foreach($galleries as $gallery)
                                        <option value="{{ $gallery->id }}">{{ $gallery->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-label mb-3">Yeni Sayfa Açılış Durumu</div>
                                <label class="switch switch-square">
                                    <input type="checkbox" class="switch-input" value="1" name="new_page" />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Durum</span>
                                </label>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="ckeditor">Haber</label>
                                <textarea class="ckeditor form-control" id="ckeditor" name="news_body">{{ old('news_body') }}</textarea>
                            </div>
                            @error('news_body')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="editor">Haber (en)</label>
                                <textarea class="form-control ckeditor" id="ckeditor" name="news_body_en"> {{ old('news_body_en') }}</textarea>
                            </div>
                            <div class="col-md-2 mb-4">
                                <label class="form-label" for="placeId">Haber Yeri</label>
                                <select id="placeId" class="selectpicker w-100" name="placeId" data-style="btn-default" tabindex="null">
                                    <option value="1">Dernek</option>
                                    <option value="2" selected>Web Sitesi</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-4">
                                <label class="form-label" for="news_category">Haber Kategorisi Seç</label>
                                <select id="news_category" class="selectpicker w-100" name="news_category" data-style="btn-default" tabindex="null">
                                    @foreach($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 mb-4">
                                <label class="form-label" for="slider">Manşet Durumu</label>
                                <select id="slider" class="selectpicker w-100" name="slider" data-style="btn-default" tabindex="null">
                                    <option value="1" selected>Manşet Olsun</option>
                                    <option value="2">Manşet Olmasın</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="OnPermission">Herkese Açık</label>
                                <select id="OnPermission" class="selectpicker w-100" name="OnPermission" data-style="btn-default" tabindex="null">
                                    <option value="1" selected>Herkese Açık</option>
                                    <option value="2">Üyelere Özel</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="status">Yayınla</label>
                                <select id="status" class="selectpicker w-100" name="status" data-style="btn-default" tabindex="null">
                                    <option value="1" selected>Yayınla</option>
                                    <option value="0">Taslak olarak kaydet</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="file" class="image form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name="image">
                                    </div>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="col-md-6">
                                        <input type="hidden" name="image_base64">
                                        <img src="{{ asset('assets/img/kbb.jpg') }}" style="width: 200px;" class="show-image" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Haber Ekle</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalToggleLabel">Resim düzenleme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image" src="" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
                    <button type="button" class="btn btn-primary" id="crop">Kırp</button>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
        <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src="{{ asset('/packages/barryvdh/elfinder/js/elfinder.min.js') }}"></script>
        <script type="text/javascript">
            function removeWarningMessages() {
                const observer = new MutationObserver((mutations) => {
                    mutations.forEach((mutation) => {
                        if (mutation.addedNodes) {
                            mutation.addedNodes.forEach((node) => {
                                if (node.nodeType === 1) {
                                    const warningMessage = 'This CKEditor 4.22.1 version is not secure. Consider upgrading to the latest one, 4.24.0-lts.';
                                    if (node.innerText && node.innerText.includes(warningMessage)) {
                                        node.remove();
                                    }
                                }
                            });
                        }
                    });
                });

                observer.observe(document.body, { childList: true, subtree: true });
            }

            window.onload = function() {
                removeWarningMessages();
            };
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.js"></script>
        <script>
            var $modal = $('#modal');
            var image = document.getElementById('image');
            var cropper;

            $("body").on("change", ".image", function(e){
                var files = e.target.files;
                var done = function (url) {
                    image.src = url;
                    $modal.modal('show');
                };

                var reader;
                var file;
                var url;

                if (files && files.length > 0) {
                    file = files[0];

                    if (URL) {
                        done(URL.createObjectURL(file));
                    } else if (FileReader) {
                        reader = new FileReader();
                        reader.onload = function (e) {
                            done(reader.result);
                        };
                        reader.readAsDataURL(file);
                    }
                }
            });

            $modal.on('shown.bs.modal', function () {
                cropper = new Cropper(image, {
                    aspectRatio: 2.8548,
                    viewMode: 0,
                    preview: '.preview',
                    autoCropArea: 0,
                    cropBoxResizable: false,
                    cropBoxMovable: true,
                    movable: true,
                    strict: true,
                });

                $(document).on('click', function (e) {
                    if (!$(e.target).closest('.modal-content').length) {
                        cropper.reset();
                    }
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
                $(document).off('click');
            });

            $modal.on('click', '[data-dismiss="modal"]', function () {
                $modal.modal('hide');
                $(".image").val('');
                $(".show-image").hide();
                $(".show-image").attr("src", '');
            });

            $("#crop").click(function(){
                var canvas = cropper.getCroppedCanvas({
                    width: 885,
                    height: 310,
                });

                canvas.toBlob(function(blob) {
                    url = URL.createObjectURL(blob);
                    var reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function() {
                        var base64data = reader.result;
                        $("input[name='image_base64']").val(base64data);
                        $(".show-image").show();
                        $(".show-image").attr("src",base64data);
                        $("#modal").modal('toggle');
                    }
                });
            });
        </script>
    @endpush
@endsection
