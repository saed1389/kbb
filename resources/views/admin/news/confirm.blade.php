@extends('admin.layouts.app')
@section('title')
    Haber Onayı
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Haber Onayı</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('news.index') }}">Haber Listesi </a>
                                </li>
                                <li class="breadcrumb-item active">Haber Onayı</li>

                            </ol>
                        </nav>

                    </div>

                    <div class="card-datatable table-responsive">
                        <table id="example" class="table table table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Kategori</th>
                                <th>Haber Başlığı</th>
                                <th>Oluşturan</th>
                                <th>Oluşturma</th>
                                <th>Yayından Durumu</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($news as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->newsCategory->title }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->getAuthorName->first_name. ' '. $item->getAuthorName->last_name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <label class="switch switch-success">
                                            <input type="checkbox" class="switch-input active" name="status" id="status"
                                                   data-id="{{ $item->id }}"
                                                   value="{{ $item->id }}" @checked($item->confirm == 1)>
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
                                        <a type="button" href="{{ route('news.edit', $item->id) }}"
                                           class="btn btn-label-primary btn-sm waves-effect editBtn">Düzenle</a>
                                        <button type="button" href="{{ route('news.delete', $item->id) }}"
                                                class="btn btn-label-danger btn-sm waves-effect" id="delete">Sil
                                        </button>
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
            $(document).ready(function () {
                $(document).on('change', 'input.switch-input.active', function () {

                    var check_active = $(this).is(':checked') ? 1 : 0;
                    var check_id = $(this).attr('value');

                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ url('/admin/news/changeConfirm') }}/" + check_id + "/" + check_active,
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            id: check_id,
                            active: check_active
                        },
                        success: function (response) {
                            toastr.success("Haberler Başarıyla Onaylandı!");
                            setTimeout(function(){
                                location.reload();
                            }, 1000);
                        }
                    });
                    return true;
                });
            });
        </script>
    @endpush
@endsection
