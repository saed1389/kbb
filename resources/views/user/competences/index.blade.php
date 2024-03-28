@extends('user.layouts.app')
@section('title') KBB Yeterlik @endsection
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
            <h5 class="card-header">KBB Yeterlik</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('user.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">KBB Yeterlik</li>

                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 ">
                        <button type="button" class="btn btn-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#backDropModal">
                            Yeni Yeterlik Ekle
                        </button>
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                            <div class="modal-dialog">
                                <form class="modal-content" action="{{ route('userCompetences.store') }}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Yeni Yeterlik Ekle</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="title" class="form-label">Başlık</label>
                                                <input type="text" id="title" name="title" class="form-control" placeholder="Başlık Giriniz" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="start_date" class="form-label">Başlangıç tarihi</label>
                                                <input type="date" id="start_date" name="start_date" class="form-control" placeholder="Başlangıç tarihi Giriniz" >
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="end_date" class="form-label">Bitiş tarihi</label>
                                                <input type="date" id="end_date" name="end_date" class="form-control" placeholder="Bitiş tarihi Giriniz" >
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="point_id" class="form-label">Aktivite</label>
                                                <select name="point_id" class="form-select" id="point_id" required>
                                                    <option disabled>Lütfen seçin..</option>
                                                    @foreach($points as $point)
                                                        <option value="{{ $point->id }}">{{ $point->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="location" class="form-label">Konum</label>
                                                <input type="text" id="location" name="location" class="form-control" placeholder="Konum Giriniz">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="certificate" class="form-label">Sertifika</label>
                                                <input type="file" id="certificate" name="certificate" class="form-control" placeholder="Sertifika Giriniz">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                                        <button type="submit" class="btn btn-primary" >Yeterlik Ekle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Başlık</th>
                        <th>Başlangıç tarihi</th>
                        <th>Bitiş tarihi</th>
                        <th>Konum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse($competences as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ date('d-m-Y', strtotime($item->start_date)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($item->end_date)) }}</td>
                            <td>{{ $item->location }}</td>

                            @if($item->status == 2)
                                <td>
                                    <a href="{{ route('userCompetences.request', $item->id) }}"  class="btn btn-label-primary btn-sm waves-effect" >Düzenleme isteği</a>
                                </td>
                            @elseif($item->status == 1)
                                <td>
                                    <a href="javascript:void (0)"  class="btn btn-label-info btn-sm" >Onaylanmayı bekle</a>
                                </td>
                            @else
                                <td>
                                    <button type="button" value="{{ $item->id }}" class="btn btn-label-primary btn-sm waves-effect editBtn mt-1" >Düzenle</button>
                                    <button type="button" href="{{ route('userCompetences.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect mt-1" id="delete">Sil</button>
                                </td>
                            @endif
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
            <form class="modal-content" action="{{ route('userCompetences.updateModal') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <input type="hidden" id="job_id" name="job_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle"> Yeterlik Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="titleEdit" class="form-label">Başlık</label>
                            <input type="text" id="titleEdit" name="title" class="form-control" placeholder="Başlık Giriniz" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="start_dateEdit" class="form-label">Başlangıç tarihi</label>
                            <input type="date" id="start_dateEdit" name="start_date" class="form-control" placeholder="Başlangıç tarihi Giriniz" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="end_dateEdit" class="form-label">Bitiş tarihi</label>
                            <input type="date" id="end_dateEdit" name="end_date" class="form-control" placeholder="Bitiş tarihi Giriniz" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="locationEdit" class="form-label">Konum</label>
                            <input type="text" id="locationEdit" name="location" class="form-control" placeholder="Konum Giriniz">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="point_id" class="form-label">Aktivite</label>
                            <select name="point_id" class="form-select" id="point_id" required>
                                <option disabled>Lütfen seçin..</option>
                                @foreach($points as $point)
                                    <option value="{{ $point->id }}">{{ $point->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="certificateEdit" class="form-label">Sertifika</label>
                            <input type="file" id="certificateEdit" name="certificate" class="form-control" placeholder="Sertifika Giriniz">
                            <input type="hidden" id="certificateOld" name="certificateOld" class="form-control" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label mb-1">Dosya</label><br>
                            <a id="certificateDownload" href="" class="btn btn-success btn-sm mt-1">İndir</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" class="btn btn-primary" >Yeterlik Düzenle</button>
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
                        url: "{{ url('user/userCompetences/editModal') }}/"+title_id,
                        success: function (response) {
                            console.log(response);
                            $('#titleEdit').val(response.job.title);
                            $('#start_dateEdit').val(response.job.start_date);
                            $('#end_dateEdit').val(response.job.end_date);
                            $('#locationEdit').val(response.job.location);
                            $('#certificateOld').val(response.job.certificate);
                            $('#certificateDownload').attr('href', '{{ asset('') }}' + response.job.certificate);
                            $('#job_id').val(response.job.id);
                            $('#point_id').val(response.job.point_id);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
