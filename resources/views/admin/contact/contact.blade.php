@extends('admin.layouts.app')
@section('title') {{ $header }} @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">{{ $header }} </h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">{{ $header }} </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>isim</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Mesaj</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($messages as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->message }}</td>
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
                                <button type="button" href="{{ route('contact-delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect mt-1" id="delete">Sil</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('Competences.confirm') }}" method="post" >
                @csrf
                <input type="hidden" id="job_id" name="job_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle"> Poun </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="titleEdit" class="form-label">Başlık</label>
                            <input type="text" id="titleEdit" name="job" class="form-control"  disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="start_dateEdit" class="form-label">Başlangıç tarihi</label>
                            <input type="text" id="start_dateEdit" name="job" class="form-control"  disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="end_dateEdit" class="form-label">Bitiş tarihi</label>
                            <input type="text" id="end_dateEdit" name="job" class="form-control"  disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="locationEdite" class="form-label">Konum</label>
                            <input type="text" id="locationEdit" name="job" class="form-control"  disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="point_idEdit" class="form-label">Aktivite</label>
                            <input type="text" id="point_idEdit" name="point_id" class="form-control"  disabled>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="pointEdit" class="form-label">Poun</label>
                            <input type="number" id="pointEdit" name="point" class="form-control" min="0" max="" placeholder="Poun Giriniz">
                            <small >Max Puan: <strongs id="max"></strongs> </small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" class="btn btn-primary" >Poun Giriniz</button>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/code.js') }}"></script>
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
                        url: "{{ url('/admin/contacts/changeStatus') }}/"+check_id+"/"+check_active,
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
