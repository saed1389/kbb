@extends('admin.layouts.app')
@section('title') Torlak Listesi @endsection
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Torlak Listesi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Torlak Listesi</li>

                            </ol>
                        </nav>

                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('torlak.create') }}" class="btn btn-primary waves-effect waves-light float-end ">
                            Yeni  Ekle
                        </a>

                    </div>
                    <div class="card-datatable table-responsive">
                        <table id="example" class="table table table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Başlığı</th>
                                <th>Türü</th>
                                <th>Oluşturma</th>
                                <th>Hit</th>
                                <th>Yayından Durumu</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($torlaks as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->type == 1 ? 'Eğitim videosu' : 'Konferans ve Seminer'  }}</td>
                                    <td>{{ date('d/m/Y H-i-s', strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->hit }}</td>
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
                                        <a href="{{ route('torlak.edit', $item->id) }}" class="btn btn-primary">Düzenle</a>
                                        <button href="{{ route('torlak.delete', $item->id) }}" type="button" class="btn btn-danger" id="delete" >Sil</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/code.js') }}"></script>

        <script>
            $(document).ready(function(){
                $(document).on('change', 'input.switch-input.active', function() {

                    var check_active = $(this).is(':checked') ? 1 : 0;
                    var check_id = $(this).attr('value');

                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ url('/admin/photos/torlak/changeStatus') }}/"+check_id+"/"+check_active,
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
