@extends('admin.layouts.app')
@section('title')
    Belge Ekleme
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y mb-5">
        <div class="card">
            <h5 class="card-header">Belge Ekleme</h5>
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
                                <li class="breadcrumb-item active">Belge Ekleme</li>

                            </ol>
                        </nav>
                    </div>
                    <form class="" action="{{ route('documents.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="title" class="form-label">Dosya Adı <span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" placeholder="Dosya Adı Giriniz" required>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="description" class="form-label">Açıklama</label>
                                <textarea type="date" id="description" name="description" class="form-control" rows="2" >{{ old('description') }}</textarea>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="file" class="form-label">Dosya Seçiniz</label>
                                <input type="file" class="form-control" name="file" id="file" required >
                                @error('file')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="documentPlace">Üye Tipi</label>
                                <select id="documentPlace" class="selectpicker w-100" name="documentPlace" data-style="btn-default" tabindex="null" required>
                                    <option value disabled selected>Seciniz</option>
                                    <option value="1">Dernek</option>
                                    <option value="2">Web Sitesi</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="documentType">Dosya Tipi</label>
                                <select id="documentType" class="selectpicker w-100" name="documentType" data-style="btn-default" tabindex="null" required>
                                    <option value="1">Yönetim Kurulu Kararları</option>
                                    <option value="2">Etik ve Onur Kurulu Kararları</option>
                                    <option value="3">Kongre Şartnameleri</option>
                                    <option value="4">Yönetmelik ve Yönergeler</option>
                                    <option value="5">Tıpta Uzmanlık Eğitimi Karnesi</option>
                                    <option value="6">Rinoloji Onam Formları</option>
                                    <option value="7">Otoloji Onam Formları</option>
                                    <option value="8">Baş Boyun Onam Formları</option>
                                    <option value="9">Pediatrik KBB Onam Formları</option>
                                    <option value="10">Kılavuzlar</option>
                                    <option value="11">TTB Ücret Tarifesi</option>
                                    <option value="12">Uzmanlık Eğitimi Kitabları - 1</option>
                                    <option value="13">Diğer</option>
                                    <option value="14"> Uzmanlık Eğitimi Kitabları - 2</option>
                                    <option value="15">Türk KBB-BBC Derneği Etik Kitabı</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="OnPermission">İzin Durumu</label>
                                <select id="OnPermission" class="selectpicker w-100" name="OnPermission" data-style="btn-default" tabindex="null" required>
                                    <option value="1" selected>Üyelere Özel</option>
                                    <option value="2">Herkese Açık</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-4">
                                <label class="form-label" for="status">Onay Durumu</label>
                                <select id="status" class="selectpicker w-100" name="status" data-style="btn-default" tabindex="null" required>
                                    <option class="text-success" value="1" selected>Onaylı</option>
                                    <option class="text-danger" value="0">Onaysız</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Belge Ekle</button>
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
