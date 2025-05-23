@extends('admin.layouts.app')
@section('title') Fotoğraf Galeri Listesi @endsection
@section('content')
    @push('styles')
        <style>
            .swal2-deny{
                display: none !important;
            }
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Fotoğraf Galeri Listesi</h5>
            @if (request('message'))
                <div class="row" style="justify-content: center;">
                    <div class="col-md-4">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ urldecode(request('message')) }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    </div>
                </div>
            @endif
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Fotoğraf Galeri Listesi</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-5 ">
                        <a href="{{ route('images.index') }}" class="btn btn-success waves-effect waves-light float-end " style="margin-left: 10px" >
                            Yeni Fotoğraf Ekle
                        </a>
                        <button type="button" class="btn btn-primary waves-effect waves-light float-end" data-bs-toggle="modal" data-bs-target="#backDropModal">
                            Yeni Fotoğraf Galeri Ekle
                        </button>
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                            <div class="modal-dialog">
                                <form class="modal-content" action="{{ route('galleries.store') }}" method="post" >
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Yeni Fotoğraf Galeri Ekle</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="title" class="form-label">Fotoğraf Galeri Adı</label>
                                                <input type="text" id="title" name="title" class="form-control" placeholder="Fotoğraf Galeri Giriniz" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                                        <button type="submit" class="btn btn-primary" >Fotoğraf Galeri Ekle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table table-striped-columns">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Galeri Adı</th>
                        <th>Oluşturma</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse($photos as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('galleries.show', $item->id) }}">{{ $item->title }}</a></td>
                            <td>{{ $item->userName->first_name. ' '. $item->userName->last_name }}</td>
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
                                <a href="{{ route('galleries.show', $item->id) }}" class="btn btn-label-info btn-sm waves-effect" >İncele</a>
                                <button type="button" value="{{ $item->id }}" class="btn btn-label-primary btn-sm waves-effect editBtn" >Düzenle</button>
                                <button type="button" href="{{ route('galleries.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect" id="delete">Sil</button>
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
    <div class="modal fade" id="editModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('galleries.updateModal') }}" method="post" >
                @csrf
                <input type="hidden" id="title_id" name="title_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle"> Fotoğraf Galeri Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="titleEdit" class="form-label">Fotoğraf Galeri Adı</label>
                            <input type="text" id="titleEdit" name="title" class="form-control" placeholder="Fotoğraf Galeri Adı Giriniz" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" class="btn btn-primary" >Fotoğraf Galeri Düzenle</button>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/code.js') }}"></script>
        <script>
            $(document).ready(function () {
                $(document).on('click', '.editBtn', function () {
                    var title_id = $(this).val();
                    $('#editModal').modal('show');
                    $.ajax({
                        type: "GET",
                        url: "{{ url('admin/photos/galleries/editModal') }}/"+title_id,
                        success: function (response) {
                            $('#titleEdit').val(response.title.title);
                            $('#title_enEdit').val(response.title.title_en);
                            $('#title_id').val(title_id);
                        }
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function(e){
                $("input.active").click(function() {
                    var check_active = $(this).is(':checked') ? 1 : 0;
                    var check_id = $(this).attr('value');

                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ url('/admin/photos/galleries/changeStatus') }}/"+check_id+"/"+check_active,
                        data: { _token : $('meta[name="csrf-token"]').attr('content'),id: check_id, active: check_active},
                        success: function(response){
                            toastr.info("Durumu başarıyla değiştirin!");
                        }
                    });
                    return true;
                });
            });
        </script>
    @endpush
@endsection
