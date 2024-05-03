@extends('admin.layouts.app')
@section('title') KBB Yeterlik @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">KBB Yeterlik</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">KBB Yeterlik</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Puan</th>
                        <th>Başlangıç tarihi</th>
                        <th>Bitiş tarihi</th>
                        <th>Konum</th>
                        <th>Oluşturan</th>
                        <th>İndir</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($competences as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->point }} ({{ $item->pointName->point }})</td>
                            <td>{{ $item->start_date ? date('d-m-Y', strtotime($item->start_date)) : '-' }}</td>
                            <td>{{ $item->ent_date ? date('d-m-Y', strtotime($item->end_date)) : '-' }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ @$item->userName->first_name. ' '. @$item->userName->last_name }}</td>
                            <th><a href="{{ asset($item->certificate) }}" class="btn btn-sm btn-success" download="">Dosya</a></th>
                            <td>
                                <button type="button" value="{{ $item->id }}" class="btn btn-label-primary btn-sm waves-effect editBtn" >Puanı değiştir</button>
                                <button type="button" href="{{ route('Competences.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect mt-1" id="delete">Sil</button>
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
            $(document).ready(function () {
                $(document).on('click', '.editBtn', function () {
                    var title_id = $(this).val();
                    $('#editModal').modal('show');
                    $.ajax({
                        type: "GET",
                        url: "{{ url('admin/Competences/editModal') }}/"+title_id,
                        success: function (response) {
                            $('#titleEdit').val(response.job.title);
                            $('#start_dateEdit').val(response.job.start_date);
                            $('#end_dateEdit').val(response.job.end_date);
                            $('#locationEdit').val(response.job.location);
                            $('#pointEdit').val(response.job.point);
                            $('#point_idEdit').val(response.job.point_name);
                            $('#max').empty();
                            $('#max').append(response.job.point_max);
                            $('#pointEdit').attr('max', response.job.point_max);
                            $('#job_id').val(response.job.id);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
