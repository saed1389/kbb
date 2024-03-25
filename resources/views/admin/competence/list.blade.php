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
                            <td>{{ date('d-m-Y', strtotime($item->start_date)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($item->end_date)) }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ @$item->userName->first_name. ' '. @$item->userName->last_name }}</td>
                            <th><a href="{{ asset($item->certificate) }}" class="btn btn-sm btn-success" download="">Dosya</a></th>
                            <td>
                                <button type="button" value="{{ $item->id }}" class="btn btn-label-primary btn-sm waves-effect editBtn" >Poun ver</button>
                                <button type="button" href="{{ route('userCompetences.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect mt-1" id="delete">Sil</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    <div class="modal fade" id="editModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('Competences.updateModal') }}" method="post" >
                @csrf
                <input type="hidden" id="job_id" name="job_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle"> Poun </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="jobEdit" class="form-label">Başlık</label>
                            <input type="text" id="jobEdit" name="job" class="form-control" placeholder="Meslek Adı Giriniz" disabled>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="point" class="form-label">Poun</label>
                            <input type="number" id="point" name="point" class="form-control" placeholder="Poun Giriniz">
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
                            $('#jobEdit').val(response.job.title);
                            $('#job_id').val(response.job.id);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
