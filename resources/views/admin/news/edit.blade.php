@extends('admin.layouts.app')
@section('title')
    Haber Düzenleme
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.css"/>
        <style>
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
            <h5 class="card-header">Haber Düzenleme</h5>
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
                                <li class="breadcrumb-item active">Haber Düzenleme</li>

                            </ol>
                        </nav>
                    </div>
                    <form class="" action="{{ route('news.update', $news->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <input type="hidden" name="oldImage" value="{{ $news->image }}" >
                            <div class="col-md-4 mb-3">
                                <label for="title" class="form-label">Haber Başlık <span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ $news->title }}" placeholder="Haber Başlık Giriniz" required>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="title_en" class="form-label">Haber Başlık(en)</label>
                                <input type="text" id="title_en" name="title_en" value="{{ $news->title_en }}" class="form-control" placeholder="Haber Başlık (en) Giriniz">
                            </div>
                            <div class="col-md-2">
                                <label for="start_date" class="form-label">Başlangıç Tarihi</label>
                                <input type="date" id="start_date" value="{{ $news->start_date}}" name="start_date" class="form-control" >
                            </div>
                            <div class="col-md-2">
                                <label for="end_date" class="form-label">Bitiş Tarihi</label>
                                <input type="date" id="end_date" value="{{ $news->end_date }}" name="end_date" class="form-control" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="short_description" class="form-label">Kısa Açıklama</label>
                                <input type="text" id="short_description" value="{{ $news->short_description }}" name="short_description" class="form-control" placeholder="Kısa Açıklama Giriniz">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="short_description_en" class="form-label">Kısa Açıklama(en)</label>
                                <input type="text" id="short_description_en" value="{{ $news->short_description_en }}" name="short_description_en" class="form-control" placeholder="Kısa Açıklama(en) Giriniz">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="news_href" class="form-label">Haber Href</label>
                                <input type="text" id="news_href" value="{{ $news->news_href }}" name="news_href" class="form-control" placeholder="Haber Href Giriniz">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="gallery">Fotoğraf Kategorisi </label>
                                <select id="gallery" name="gallery" class="select2 form-select form-select-lg" data-allow-clear="true" >
                                    <option value="0">Seçiniz...</option>
                                    @foreach($galleries as $gallery)
                                        <option value="{{ $gallery->id }}" @selected($news->gallery)>{{ $gallery->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-label mb-3">Yeni Sayfa Açılış Durumu</div>
                                <label class="switch switch-square">
                                    <input type="checkbox" class="switch-input" value="1" name="new_page" @checked($news->new_page) />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Durum</span>
                                </label>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="editor">Haber <span class="text-danger">*</span></label>
                                <textarea class="form-control editor" id="editor" name="news_body">{!! $news->news_body !!}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="editor">Haber (en)</label>
                                <textarea class="form-control editor" id="editor" name="news_body_en"> {!! $news->news_body_en !!}</textarea>
                            </div>
                            <div class="col-md-2 mb-4">
                                <label class="form-label" for="placeId">Haber Yeri</label>
                                <select id="placeId" class="selectpicker w-100" name="placeId" data-style="btn-default" tabindex="null">
                                    <option value="1" @selected($news->placeId == 1)>Dernek</option>
                                    <option value="2" @selected($news->placeId == 2)>Web Sitesi</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-4">
                                <label class="form-label" for="news_category">Haber Kategorisi Seç</label>
                                <select id="news_category" class="selectpicker w-100" name="news_category" data-style="btn-default" tabindex="null">
                                    @foreach($categories as $item)
                                        <option value="{{ $item->id }}" @selected($news->news_category)>{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 mb-4">
                                <label class="form-label" for="slider">Manşet Durumu</label>
                                <select id="slider" class="selectpicker w-100" name="slider" data-style="btn-default" tabindex="null">
                                    <option value="1" @selected($news->slider == 1)>Manşet Olsun</option>
                                    <option value="2" @selected($news->slider == 2)>Manşet Olmasın</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="OnPermission">Herkese Açık</label>
                                <select id="OnPermission" class="selectpicker w-100" name="OnPermission" data-style="btn-default" tabindex="null">
                                    <option value="1" @selected($news->OnPermission == 1)>Herkese Açık</option>
                                    <option value="2" @selected($news->OnPermission == 2)>Üyelere Özel</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="status">Yayınla</label>
                                <select id="status" class="selectpicker w-100" name="status" data-style="btn-default" tabindex="null">
                                    <option value="1" class="text-success" @selected($news->status == 1)>Yayınla</option>
                                    <option value="0" class="text-danger" @selected($news->status == 0)>Taslak olarak kaydet</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="file" class="image form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name="image">
                                        <input type="hidden" name="oldCrop" value="{{ $news->cropImage }}" >
                                    </div>
                                    <div class="col-md-6">
                                        <input type="hidden" name="image_base64">
                                        <img src="{{ $news->cropImage ? asset('uploads/news/crop/'.$news->cropImage) : asset('assets/img/images.png') }}" style="width: 200px;" class="show-image" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('news.index') }}" class="btn btn-secondary">Geri dön</a>
                                <button type="submit" class="btn btn-primary">Haber Güncelle</button>
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
        <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/super-build/ckeditor.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/super-build//translations/tr.js"></script>

        <script>
            document.querySelectorAll('.editor').forEach(function (val) {
                CKEDITOR.ClassicEditor.create(val, {
                    toolbar: {
                        items: [
                            'exportPDF','exportWord', '|',
                            'findAndReplace', 'selectAll', '|',
                            'heading', '|',
                            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                            'bulletedList', 'numberedList', 'todoList', '|',
                            'outdent', 'indent', '|',
                            'undo', 'redo',
                            '-',
                            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                            'alignment', '|',
                            'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                            'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                            'textPartLanguage', '|',
                            'sourceEditing'
                        ],
                        shouldNotGroupWhenFull: true
                    },
                    language: 'tr',
                    list: {
                        properties: {
                            styles: true,
                            startIndex: true,
                            reversed: true
                        }
                    },
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                            { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                            { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                        ]
                    },
                    placeholder: 'Haber İçeriği',
                    fontFamily: {
                        options: [
                            'default',
                            'Arial, Helvetica, sans-serif',
                            'Courier New, Courier, monospace',
                            'Georgia, serif',
                            'Lucida Sans Unicode, Lucida Grande, sans-serif',
                            'Tahoma, Geneva, sans-serif',
                            'Times New Roman, Times, serif',
                            'Trebuchet MS, Helvetica, sans-serif',
                            'Verdana, Geneva, sans-serif'
                        ],
                        supportAllValues: true
                    },
                    fontSize: {
                        options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                        supportAllValues: true
                    },
                    htmlSupport: {
                        allow: [
                            {
                                name: /.*/,
                                attributes: true,
                                classes: true,
                                styles: true
                            }
                        ]
                    },
                    htmlEmbed: {
                        showPreviews: true
                    },
                    link: {
                        decorators: {
                            addTargetToExternalLinks: true,
                            defaultProtocol: 'https://',
                            toggleDownloadable: {
                                mode: 'manual',
                                label: 'Downloadable',
                                attributes: {
                                    download: 'file'
                                }
                            }
                        }
                    },
                    mention: {
                        feeds: [
                            {
                                marker: '@',
                                feed: [
                                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                    '@sugar', '@sweet', '@topping', '@wafer'
                                ],
                                minimumCharacters: 1
                            }
                        ]
                    },
                    removePlugins: [
                        // These two are commercial, but you can try them out without registering to a trial.
                        // 'ExportPdf',
                        // 'ExportWord',
                        'AIAssistant',
                        'CKBox',
                        'CKFinder',
                        'EasyImage',
                        // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                        // Storing images as Base64 is usually a very bad idea.
                        // Replace it on production website with other solutions:
                        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                        // 'Base64UploadAdapter',
                        'RealTimeCollaborativeComments',
                        'RealTimeCollaborativeTrackChanges',
                        'RealTimeCollaborativeRevisionHistory',
                        'PresenceList',
                        'Comments',
                        'TrackChanges',
                        'TrackChangesData',
                        'RevisionHistory',
                        'Pagination',
                        'WProofreader',
                        // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                        // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                        'MathType',
                        // The following features are part of the Productivity Pack and require additional license.
                        'SlashCommand',
                        'Template',
                        'DocumentOutline',
                        'FormatPainter',
                        'TableOfContents',
                        'PasteFromOfficeEnhanced',
                        'CaseChange'
                    ]
                })
                    .catch(error => {
                        console.log(error);
                    });
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.js"></script>
        <script>
            var $modal = $('#modal');
            var image = document.getElementById('image');
            var cropper;

            /* Image Change Event */
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

            /* Show Model Event */
            $modal.on('shown.bs.modal', function () {
                cropper = new Cropper(image, {
                    aspectRatio: 2.8548, // Set the aspectRatio to 2.8548 (885x310)
                    viewMode: 0,
                    preview: '.preview',
                    autoCropArea: 0, // 100% autoCropArea ensures the entire image is initially selected
                    cropBoxResizable: false, // Disable crop box resizing
                    cropBoxMovable: true,   // Enable moving the crop box
                    movable: true, // Enable image movement
                    strict: true,
                });

                // Bind a click event to the document
                $(document).on('click', function (e) {
                    // Check if the clicked element is inside the modal content
                    if (!$(e.target).closest('.modal-content').length) {
                        // If not, reset the cropper
                        cropper.reset();
                    }
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
                // Remove the click event when the modal is hidden
                $(document).off('click');
            });

            /* Modal Close Event */
            $modal.on('click', '[data-dismiss="modal"]', function () {
                // Manually hide the modal to trigger the 'hidden.bs.modal' event
                $modal.modal('hide');
                // Clear input value
                $(".image").val('');
                // Clear preview image
                $(".show-image").hide();
                $(".show-image").attr("src", '');
            });

            /* Crop Button Click Event */
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
