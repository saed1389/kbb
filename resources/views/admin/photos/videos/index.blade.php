@extends('admin.layouts.app')
@section('title') Eğitim Videolar Listesi @endsection
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Eğitim Videolar Listesi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Eğitim Videolar  Listesi</li>

                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 ">
                        <button type="button" class="btn btn-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#backDropModal">
                            Yeni Video Ekle
                        </button>
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                            <div class="modal-dialog">
                                <form class="modal-content" action="{{ route('videos.store') }}" method="post" >
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Yeni Video Ekle</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="title" class="form-label">Video başlığı</label>
                                                <input type="text" id="title" name="title" class="form-control" placeholder="Video başlığı Giriniz" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="title_en" class="form-label">Video başlığı (en)</label>
                                                <input type="text" id="title_en" name="title_en" class="form-control" placeholder="Video başlığı (en) Giriniz" >
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="link" class="form-label">Video linki (en)</label>
                                                <input type="text" id="link" name="link" class="form-control" placeholder="Video linki Giriniz" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                                        <button type="submit" class="btn btn-primary" >Video Ekle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Video Başlığı</th>
                        <th>Video linki</th>
                        <th>Oluşturma</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse($videos as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->link }}</td>
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
                                <button type="button" value="{{ $item->id }}" class="btn btn-label-primary btn-sm waves-effect editBtn" >Düzenle</button>
                                <button type="button" href="{{ route('event-categories.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect" id="delete">Sil</button>
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
    {{-- Edit Modal --}}
    <div class="modal fade" id="editModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('videos.updateModal') }}" method="post" >
                @csrf
                <input type="hidden" id="title_id" name="title_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle"> Video Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="titleEdit" class="form-label">Video Başlığı Adı</label>
                            <input type="text" id="titleEdit" name="title" class="form-control" placeholder="Video Başlığı Giriniz" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="title_enEdit" class="form-label">Video Başlığı (en)</label>
                            <input type="text" id="title_enEdit" name="title_en" class="form-control" placeholder="Video Başlığı (en) Giriniz" >
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="linkEdit" class="form-label">Video linki (en)</label>
                            <input type="text" id="linkEdit" name="link" class="form-control" placeholder="Video linki Giriniz" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" class="btn btn-primary" >Video Düzenle</button>
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
                        url: "{{ url('admin/photos/videos/editModal') }}/"+title_id,
                        success: function (response) {
                            $('#titleEdit').val(response.title.title);
                            $('#title_enEdit').val(response.title.title_en);
                            $('#linkEdit').val(response.title.link);
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
                        url: "{{ url('/admin/photos/videos/changeStatus') }}/"+check_id+"/"+check_active,
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
