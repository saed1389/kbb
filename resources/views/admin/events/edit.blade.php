@extends('admin.layouts.app')
@section('title')
    Etkinlik Düzenleme
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
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
                                <textarea class="form-control ckeditor" id="ckeditor" name="event_body">{!! $event->event_body !!}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="editor">Etkinlik İçeriği (en)</label>
                                <textarea class="form-control ckeditor" id="ckeditor" name="event_body_en">{!! $event->event_body_en !!}</textarea>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="event_category">Etkinlik Kategorisi Seç</label>
                                <select id="event_category" class="selectpicker w-100" name="event_category" data-style="btn-default" tabindex="null">
                                    @foreach($categories as $item)
                                        <option value="{{ $item->id }}" @selected($event->event_category == $item->id)>{{ $item->title }}</option>
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
    @endpush
@endsection
