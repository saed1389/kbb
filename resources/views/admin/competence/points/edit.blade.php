@extends('admin.layouts.app')
@section('title') KBB Yeterlik Puan @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">KBB Yeterlik Puan Yönetimi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">KBB Yeterlik Puan Yönetimi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Başlık</th>
                                <th>Puan</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($points as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->point }}</td>
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
                                        <a href="{{ route('competencesPoint.edit', $item->id) }}" class="btn btn-label-primary btn-sm waves-effect" >Düzenle</a>
                                        <button type="button" href="{{ route('competencesPoint.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect mt-1" id="delete">Sil</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="col-md-4">
                    <form method="post" action="{{ route('competencesPoint.update', $point->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="card mb-4">
                            <h5 class="card-header">Yeni Yeterlik Puan Düzenle</h5>
                            <div class="card-body">
                                <div>
                                    <label for="title" class="form-label">Başlık</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $point->title }}" placeholder="Yeterlik Başlıki Giriniz" required >
                                </div>
                                <div class="mt-3">
                                    <label for="point" class="form-label">Puan</label>
                                    <input type="number" class="form-control" id="point" name="point" value="{{ $point->point }}" placeholder="Yeterlik Puani Giriniz" required >
                                </div>
                                <div class="mt-3">
                                    <a href="{{ route('competencesPoint.index') }}" class="btn btn-secondary">Geri dön</a>
                                    <button type="submit" class="btn btn-success">Düzenle</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
                        url: "{{ url('/admin/competencesPoint/changeStatus') }}/"+check_id+"/"+check_active,
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
