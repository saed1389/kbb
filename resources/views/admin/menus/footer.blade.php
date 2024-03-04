@extends('admin.layouts.app')
@section('title') Footer Menu Yönetimi @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Footer Menu Yönetimi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('menus.index') }}">Menü Listesi </a>
                                </li>
                                <li class="breadcrumb-item active">Footer Menu Yönetimi</li>

                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 ">
                        <a href="{{ route('menus.create') }}" class="btn btn-primary waves-effect waves-light float-end">
                            Yeni Menü Ekle
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>DERNEĞİMİZ</h5>
                                <div class="table table-striped">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Menü</th>
                                            <th>Durum</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                        @forelse($leftMenus as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->menuName->title }}</td>
                                                <td>
                                                    <label class="switch switch-success">
                                                        <input type="checkbox" class="switch-input active" name="status" id="status" data-id="{{ $item->id }}" value="{{ $item->id }}" @checked($item->status == 1)>
                                                        <span class="switch-toggle-slider">
                                                    <span class="switch-on">
                                                        <i class="ti ti-check"></i>
                                                    </span>
                                                    <span class="switch-off">
                                                        <i class="ti ti-x"></i>
                                                    </span>
                                                </span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="{{ route('menus.footer-menu-edit', $item->id) }}" class="btn btn-label-primary btn-sm waves-effect editBtn mb-1" >Düzenle</a>
                                                    <button type="button" href="{{ route('menus.footer-delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect" id="delete">Sil</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">Sonuç bulunamadı</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>BİLGİ MERKEZİ</h5>
                                <div class="table table-striped">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Menü</th>
                                            <th>Durum</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                        @forelse($rightMenus as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->menuName->title }}</td>
                                                <td>
                                                    <label class="switch switch-success">
                                                        <input type="checkbox" class="switch-input active" name="status" id="status" data-id="{{ $item->id }}" value="{{ $item->id }}" @checked($item->status == 1)>
                                                        <span class="switch-toggle-slider">
                                                    <span class="switch-on">
                                                        <i class="ti ti-check"></i>
                                                    </span>
                                                    <span class="switch-off">
                                                        <i class="ti ti-x"></i>
                                                    </span>
                                                </span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="{{ route('menus.footer-menu-edit', $item->id) }}" class="btn btn-label-primary btn-sm waves-effect editBtn mb-1" >Düzenle</a>
                                                    <button type="button" href="{{ route('menus.footer-delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect" id="delete">Sil</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">Sonuç bulunamadı</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="card mb-4">
                            <h5 class="card-header">Alt bilgi menüleri</h5>
                            <div class="card-body">
                                <form action="{{ route('menus.footer-menu-store') }}" method="post">
                                    @csrf
                                    <div class="mt-3">
                                        <label for="menu_id" class="form-label">Menüler</label>
                                        <select id="menu_id" name="menu_id" class="select2 form-select form-select-lg" data-allow-clear="true" required>
                                            <option selected disabled>Lütfen seçin... </option>
                                            @foreach($menus as $menu)
                                                <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mt-3">
                                        <label for="position" class="form-label">Menüler</label>
                                        <select id="position" name="position" class="form-select" required>
                                            <option selected disabled>Lütfen seçin... </option>
                                            <option value="1">DERNEĞİMİZ</option>
                                            <option value="2">BİLGİ MERKEZİ</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-success" >Ekle</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@push('scripts')
    <script src="{{ asset('assets/js/code.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
@endpush
@endsection
