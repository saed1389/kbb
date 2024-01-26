@extends('admin.layouts.app')
@section('title')
    Belge Güncelle
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y mb-5">
        <div class="card">
            <h5 class="card-header">Belge Güncelle</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('documents.index') }}">Belge Yönetimi </a>
                                </li>
                                <li class="breadcrumb-item active">Belge Güncelle</li>

                            </ol>
                        </nav>
                    </div>
                    <form class="" action="{{ route('documents.update', $doc->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="title" class="form-label">Dosya Adı <span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ $doc->title }}" placeholder="Dosya Adı Giriniz" required>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="description" class="form-label">Açıklama</label>
                                <textarea type="date" id="description" name="description" class="form-control" rows="2" >{{ $doc->description }}</textarea>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="file" class="form-label">Dosya Seçiniz</label>
                                <input type="file" class="form-control" name="file" id="file" >
                                <input type="hidden" class="form-control" name="oldDoc" value="{{ $doc->file }}" >
                                @error('file')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                @if($doc->file)
                                    <a type="button" href="{{ url($doc->file) }}" class="btn btn-info mt-4 me-2" download="">Dosyayı indir</a>
                                @else
                                    <img class="rounded w-20" src="{{ asset('assets/img/unnamed.png') }}" alt="profile">
                                @endif
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="documentPlace">Üye Tipi</label>
                                <select id="documentPlace" class="selectpicker w-100" name="documentPlace" data-style="btn-default" tabindex="null" required>
                                    <option value disabled selected>Seciniz</option>
                                    <option value="1" @selected($doc->documentPlace == 1)>Dernek</option>
                                    <option value="2" @selected($doc->documentPlace == 2)>Web Sitesi</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="documentType">Dosya Tipi</label>
                                <select id="documentType" class="selectpicker w-100" name="documentType" data-style="btn-default" tabindex="null" required>
                                    <option value="1" @selected($doc->documentType == 1 )>Yönetim Kurulu Kararları</option>
                                    <option value="2" @selected($doc->documentType == 2 )>Etik ve Onur Kurulu Kararları</option>
                                    <option value="3" @selected($doc->documentType == 3 )>Kongre Şartnameleri</option>
                                    <option value="4" @selected($doc->documentType == 4 )>Yönetmelik ve Yönergeler</option>
                                    <option value="5" @selected($doc->documentType == 5 )>Tıpta Uzmanlık Eğitimi Karnesi</option>
                                    <option value="6" @selected($doc->documentType == 6 )>Rinoloji Onam Formları</option>
                                    <option value="7" @selected($doc->documentType == 7 )>Otoloji Onam Formları</option>
                                    <option value="8" @selected($doc->documentType == 8 )>Baş Boyun Onam Formları</option>
                                    <option value="9" @selected($doc->documentType == 9 )>Pediatrik KBB Onam Formları</option>
                                    <option value="10" @selected($doc->documentType == 10 )>Kılavuzlar</option>
                                    <option value="11" @selected($doc->documentType == 11 )>TTB Ücret Tarifesi</option>
                                    <option value="12" @selected($doc->documentType == 12 )>Uzmanlık Eğitimi Kitabları - 1</option>
                                    <option value="13" @selected($doc->documentType == 13 )>Diğer</option>
                                    <option value="14" @selected($doc->documentType == 14 )> Uzmanlık Eğitimi Kitabları - 2</option>
                                    <option value="15" @selected($doc->documentType == 15 )>Türk KBB-BBC Derneği Etik Kitabı</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="OnPermission">İzin Durumu</label>
                                <select id="OnPermission" class="selectpicker w-100" name="OnPermission" data-style="btn-default" tabindex="null" required>
                                    <option value="1" @selected($doc->OnPermission == 1)>Üyelere Özel</option>
                                    <option value="2" @selected($doc->OnPermission == 2)>Herkese Açık</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="status">Onay Durumu</label>
                                <select id="status" class="selectpicker w-100" name="status" data-style="btn-default" tabindex="null" required>
                                    <option class="text-success" value="1" @selected($doc->status == 1)>Onaylı</option>
                                    <option class="text-danger" value="0" @selected($doc->status == 0)>Onaysız</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('documents.index') }}" class="btn btn-secondary">Geri dön</a>
                                <button type="submit" class="btn btn-primary">Belge Güncelle</button>
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
    @endpush
@endsection
