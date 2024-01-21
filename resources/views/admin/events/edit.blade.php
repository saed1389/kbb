@extends('admin.layouts.app')
@section('title')
    Etkinlik Düzenleme
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
        <style>
            .ck-editor__editable {
                min-height: 300px;
            }
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y mb-5">
        <div class="card">
            <h5 class="card-header">Etkinlik Düzenleme</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('events.index') }}">Etkinlik Yönetimi </a>
                                </li>
                                <li class="breadcrumb-item active">Etkinlik Düzenleme</li>

                            </ol>
                        </nav>
                    </div>
                    <form class="" action="{{ route('events.update', $event->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="title" class="form-label">Etkinlik Başlık <span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ $event->title }}" placeholder="Etkinlik Başlık Giriniz" required>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="title_en" class="form-label">Etkinlik Başlık(en)</label>
                                <input type="text" id="title_en" name="title_en" value="{{ $event->title_en }}" class="form-control" placeholder="Etkinlik Başlık (en) Giriniz">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="event_place" class="form-label">Etkinlik Yeri</label>
                                <input type="text" id="event_place" name="event_place" value="{{ $event->event_place }}" class="form-control" placeholder="Etkinlik Yeri Giriniz">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="event_href" class="form-label">Etkinlik Href</label>
                                <input type="text" id="event_href" value="{{ $event->event_href }}" name="event_href" class="form-control" placeholder="Etkinlik Href Giriniz">
                            </div>
                            <div class="col-md-2">
                                <label for="start_date" class="form-label">Başlangıç Tarihi</label>
                                <input type="date" id="start_date" value="{{ $event->start_date }}" name="start_date" class="form-control" >
                            </div>
                            <div class="col-md-2">
                                <label for="end_date" class="form-label">Bitiş Tarihi</label>
                                <input type="date" id="end_date" value="{{ $event->end_date }}" name="end_date" class="form-control" >
                            </div>


                            <div class="col-md-3 mb-3">
                                <div class="form-label mb-3">Yeni Sayfa Açılış Durumu</div>
                                <label class="switch switch-square">
                                    <input type="checkbox" class="switch-input" value="1" name="new_page" @checked($event->new_page == 1) />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Durum</span>
                                </label>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="editor">Etkinlik İçeriği <span class="text-danger">*</span></label>
                                <textarea class="form-control editor" id="editor" name="event_body">{!! $event->event_body !!}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="editor">Etkinlik İçeriği (en)</label>
                                <textarea class="form-control editor" id="editor" name="event_body_en">{!! $event->event_body_en !!}</textarea>
                            </div>

                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="event_category">Etkinlik Kategorisi Seç</label>
                                <select id="event_category" class="selectpicker w-100" name="event_category" data-style="btn-default" tabindex="null">
                                    @foreach($categories as $item)
                                        <option value="{{ $item->id }}" @selected($event->event_category)>{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="show_website">Sitede Gösterilsinmi</label>
                                <select id="show_website" class="selectpicker w-100" name="show_website" data-style="btn-default" tabindex="null">
                                    <option value="1" @selected($event->show_website == 1)>Evet</option>
                                    <option value="0" @selected($event->show_website == 0)>Hayır</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="OnPermission">Herkese Açık</label>
                                <select id="OnPermission" class="selectpicker w-100" name="OnPermission" data-style="btn-default" tabindex="null">
                                    <option value="1" @selected($event->show_website == 1)>Herkese Açık</option>
                                    <option value="2" @selected($event->show_website == 2)>Üyelere Özel</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="status">Yayınla</label>
                                <select id="status" class="selectpicker w-100" name="status" data-style="btn-default" tabindex="null">
                                    <option class="text-success" value="1" @selected($event->show_website == 1)>Yayınla</option>
                                    <option class="text-danger" value="0" @selected($event->show_website == 0)>Taslak olarak kaydet</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('events.index') }}" class="btn btn-secondary">Geri dön</a>
                                <button type="submit" class="btn btn-primary">Etkinlik Güncelle</button>
                            </div>
                        </div>
                    </form>
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
                    placeholder: 'Etkinlik İçeriği',
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
                        // 'ExportPdf',
                        // 'ExportWord',
                        'AIAssistant',
                        'CKBox',
                        'CKFinder',
                        'EasyImage',
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
                        'MathType',
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
    @endpush
@endsection
