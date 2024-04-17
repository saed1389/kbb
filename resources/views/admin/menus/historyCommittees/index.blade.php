@extends('admin.layouts.app')
@section('title') Geçmiş Dönemler Yönetim Kurulları @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Geçmiş Dönemler Yönetim Kurulları</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Geçmiş Dönemler Yönetim Kurulları</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 ">
                        <button type="button" class="btn btn-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#backDropModal">
                            Yeni Ekle
                        </button>
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <form class="modal-content" action="{{ route('history-committees.store') }}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Yeni Başkanlar Ekle</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card mb-4">
                                            <h5 class="card-header"> Ekle</h5>
                                            <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="start_date" class="form-label">Görev Yıli</label>
                                                            <input type="text" id="start_date" name="start_date" class="form-control" placeholder="Görev Yıli Giriniz" required>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="president" class="form-label">Başkan</label>
                                                            <input type="text" id="president" name="president" class="form-control" placeholder="Başkan Giriniz" required >
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="sec_president" class="form-label">II. Başkan</label>
                                                            <input type="text" id="sec_president" name="sec_president" class="form-control" placeholder="II. Başkan Giriniz" required >
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="secretary" class="form-label">Genel Sekreter</label>
                                                            <input type="text" id="secretary" name="secretary" class="form-control" placeholder="Genel Sekreter Giriniz" required >
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="accounting" class="form-label">Muhasip Üye</label>
                                                            <input type="text" id="accounting" name="accounting" class="form-control" placeholder="Muhasip Üye Giriniz" required >
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="member" class="form-label">Üye</label>
                                                            <textarea type="text" id="member" name="member" class="form-control" rows="4" placeholder="Üye Giriniz" required > </textarea>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                                        <button type="submit" class="btn btn-primary" > Ekle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Yıl</th>
                                <th>Başkan</th>
                                <th>II. Başkan</th>
                                <th>Genel Sekreter</th>
                                <th>Muhasip Üye</th>
                                <th>Üye</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @forelse($historyCommittees as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->start_date }}</td>
                                    <td>{{ $item->president }}</td>
                                    <td>{{ $item->sec_president }}</td>
                                    <td>{{ $item->secretary }}</td>
                                    <td>{{ $item->accounting }}</td>
                                    <td>{{ $item->member }}</td>
                                    <td>
                                        <a href="{{ route('history-committees.edit', $item->id) }}" class="btn btn-label-primary btn-sm waves-effect editBtn" >Düzenle</a>
                                        <button type="button" href="{{ route('history-committees.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect mt-1" id="delete">Sil</button>
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
    </div>
@endsection
