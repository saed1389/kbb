@extends('admin.layouts.app')
@section('title') Denetleme Kurulu @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Denetleme Kurulu</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Denetleme Kurulu</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 ">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Ad, Soyad</th>
                                <th>Görev</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @forelse($lists as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->position }}</td>
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
                                        <a href="{{ route('committees.checkEdit', $item->id) }}" class="btn btn-label-primary btn-sm waves-effect editBtn" >Düzenle</a>
                                        <button type="button" href="{{ route('committees.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect" id="delete">Sil</button>
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
                <div class="col-md-4">
                    <div class="card mb-4">
                        <h5 class="card-header">Üye Düzenleme</h5>
                        <div class="card-body">
                            <form action="{{ route('committees.checkUpdate', $user->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="name" class="form-label">Ad, Soyad</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" placeholder="Ad, Soyad Giriniz" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="position" class="form-label">Görev</label>
                                        <input type="text" id="position" name="position" class="form-control" value="{{ $user->position }}" placeholder="Görev Giriniz" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="image" class="form-label">Resim</label>
                                        <input type="file" id="image" name="image" class="form-control" >
                                    </div>
                                    <div class="col mb-3">
                                        <img id="showImage" class="" style="width: 100px;" src="{{ $user->image ? asset($user->image) : asset('assets/img/images.png') }}" alt="profile">
                                        <input type="hidden" name="oldImage" value="{{ $user->image }}">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-success" >Düzenle</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('assets/js/code.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#image').change(function (e) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
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
                        url: "{{ url('/admin/menus/committees/changeStatus') }}/"+check_id+"/"+check_active,
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
