@extends('admin.layouts.app')
@section('title') Başkanlar Listesi @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Başkanlar Listesi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Başkanlar Listesi</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 ">
                        <button type="button" class="btn btn-primary waves-effect waves-light float-end " data-bs-toggle="modal" data-bs-target="#backDropModal">
                            Yeni Başkan Ekle
                        </button>
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <form class="modal-content" action="{{ route('presidents.store') }}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Yeni Başkanlar Ekle</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="full_name" class="form-label">Başkan Adı, Soyad</label>
                                                <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Başkan Adı, Soyad Giriniz" required>
                                            </div>
                                            <div class="col mb-3">
                                                <label for="year" class="form-label">Görev Yili</label>
                                                <input type="text" id="year" name="year" class="form-control" placeholder="Görev Yili Giriniz" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="image" class="form-label">Resim</label>
                                                <input type="file" id="image" name="image" class="form-control" required>
                                            </div>
                                            <div class="col mb-3">
                                                <img id="showImage" class="" style="width: 100px;" src="{{ asset('assets/img/images.png') }}" alt="profile">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-label mb-3">Şimdiki Başkan</div>
                                            <label class="switch switch-square">
                                                <input type="checkbox" class="switch-input" value="1" name="current">
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Durum</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                                        <button type="submit" class="btn btn-primary" >Başkan Ekle</button>
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
                        <th>Başkan Adı, Soyad</th>
                        <th>Görev Yili</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse($presidents as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->full_name }}</td>
                            <td>{{ $item->year }}</td>
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
                                <a href="{{ route('presidents.edit', $item->id) }}" class="btn btn-label-primary btn-sm waves-effect editBtn" >Düzenle</a>
                                <button type="button" href="{{ route('presidents.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect" id="delete">Sil</button>
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
                        url: "{{ url('/admin/menus/presidents/changeStatus') }}/"+check_id+"/"+check_active,
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
