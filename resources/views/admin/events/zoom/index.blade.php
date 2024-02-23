@extends('admin.layouts.app')
@section('title') Zoom Webinar Listesi @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Zoom/Webinar Listesi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Zoom/Webinar Listesi</li>

                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 ">
                        <button type="button" class="btn btn-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#backDropModal">
                            Yeni Zoom/Webinar Ekle
                        </button>
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                            <div class="modal-dialog">
                                <form class="modal-content" action="{{ route('zooms.store') }}" method="post" >
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Yeni Zoom/Webinar Ekle</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="title" class="form-label">Başlığı</label>
                                                <input type="text" id="title" name="title" class="form-control" placeholder="Başlığı Giriniz" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="type" class="form-label">Toplantı türü</label>
                                                <select name="type" id="type" class="selectpicker w-100" data-style="btn-default" tabindex="null" required>
                                                    <option selected disabled>Seciniz</option>
                                                    <option value="1">Zoom</option>
                                                    <option value="2">Webinar</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="start_time" class="form-label">Başlama zamanı</label>
                                                <input type="datetime-local" id="start_time" name="start_time" class="form-control" placeholder="Başlama zamanı Giriniz" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="zoom_link" class="form-label">Zoom Linki</label>
                                                <input type="text" id="zoom_link" name="zoom_link" class="form-control" placeholder="Zoom Linki Giriniz" required>
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

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Başlığı</th>
                        <th>Tip</th>
                        <th>Tarih</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse($videos as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }} @if($item->start_time > now()) <span class="text-success">Bekliyor</span>@else<span class="text-danger">Bitti</span> @endif</td>
                            <td>{{ $item->type == 1 ? 'Zoom' : 'Webinar' }}</td>
                            <td>{{ date('d/m/Y H:i:s', strtotime($item->start_time)) }}</td>
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
                                <button type="button" href="{{ route('zooms.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect" id="delete">Sil</button>
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
            <form class="modal-content" action="{{ route('zooms.updateModal') }}" method="post" >
                @csrf
                <input type="hidden" id="title_id" name="title_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle"> Video Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="titleEdit" class="form-label">Başlığı</label>
                            <input type="text" id="titleEdit" name="title" class="form-control" placeholder="Başlığı Giriniz" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="typeEdit" class="form-label">Toplantı türü</label>
                            <select name="type" id="typeEdit" class="form-control" data-style="btn-default" tabindex="null" required>
                                <option selected disabled>Seciniz</option>
                                <option value="1">Zoom</option>
                                <option value="2">Webinar</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="start_timeEdit" class="form-label">Başlama zamanı</label>
                            <input type="datetime-local" id="start_timeEdit" name="start_time" class="form-control" placeholder="Başlama zamanı Giriniz" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="zoom_linkEdit" class="form-label">Zoom Linki</label>
                            <input type="text" id="zoom_linkEdit" name="zoom_link" class="form-control" placeholder="Zoom Linki Giriniz" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" class="btn btn-primary" > Düzenle</button>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
        <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
        <script src="{{ asset('assets/js/code.js') }}"></script>
        <script>
            $(document).ready(function () {
                $(document).on('click', '.editBtn', function () {
                    var title_id = $(this).val();
                    $('#editModal').modal('show');
                    $.ajax({
                        type: "GET",
                        url: "{{ url('admin/zooms/editModal') }}/"+title_id,
                        success: function (response) {
                            console.log(response.title)
                            // Set other values as usual
                            $('#titleEdit').val(response.title.title);
                            $('#start_timeEdit').val(response.title.start_time);
                            $('#zoom_linkEdit').val(response.title.zoom_link);

                            // Set the selected option for the 'typeEdit' select element
                            $('#typeEdit option').each(function () {
                                if ($(this).val() == response.title.type) {
                                    $(this).prop('selected', true);
                                } else {
                                    $(this).prop('selected', false);
                                }
                            });
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
                        url: "{{ url('/admin/zooms/changeStatus') }}/"+check_id+"/"+check_active,
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
