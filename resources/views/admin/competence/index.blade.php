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

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Meslekler</th>
                        <th>Meslekler (en)</th>
                        <th>Oluşturma</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    {{--@forelse($jobs as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->job }}</td>
                            <td>{{ $item->job_en ? $item->job_en : '-' }}</td>
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
                                <button type="button" href="{{ route('jobs.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect" id="delete">Sil</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Sonuç bulunamadı</td>
                        </tr>
                    @endforelse--}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    <div class="modal fade" id="editModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('jobs.updateModal') }}" method="post" >
                @csrf
                <input type="hidden" id="job_id" name="job_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle"> Meslek Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="jobEdit" class="form-label">Meslek Adı</label>
                            <input type="text" id="jobEdit" name="job" class="form-control" placeholder="Meslek Adı Giriniz" required>
                        </div>
                        <div class="col mb-3">
                            <label for="job_enEdit" class="form-label">Meslek Adı (en)</label>
                            <input type="text" id="job_enEdit" name="job_en" class="form-control" placeholder="Meslek Adı (en) Giriniz" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" class="btn btn-primary" >Meslek Düzenle</button>
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
                        url: "{{ url('admin/users/jobs/editModal') }}/"+title_id,
                        success: function (response) {

                            $('#jobEdit').val(response.title.job);
                            $('#job_enEdit').val(response.title.job_en);
                            $('#job_id').val(job_id);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
