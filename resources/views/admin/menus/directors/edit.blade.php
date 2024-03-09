@extends('admin.layouts.app')
@section('title') Yönetim Kurulu bilgilerini düzenle @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Yönetim Kurulu bilgilerini düzenle</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('directors.index') }}">Yönetim Kurulu Listesi </a>
                                </li>
                                <li class="breadcrumb-item active">Yönetim Kurulu bilgilerini düzenle</li>
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
                                <th>Adı, Soyad</th>
                                <th>Görev</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @forelse($presidents as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->full_name }}</td>
                                    @php
                                        if ($item->position == 1) {
                                            $position = 'Başkan';
                                        } elseif ($item->position == 2){
                                            $position = 'İkinci Başkan';
                                        } elseif ($item->position == 3){
                                            $position = 'Genel Sekreter';
                                        } elseif ($item->position == 4){
                                            $position = 'Muhasip Üye';
                                        } elseif ($item->position == 5){
                                            $position = 'Üye';
                                        }
                                    @endphp
                                    <td>{{ $position }}</td>
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
                                        <a href="{{ route('directors.edit', $item->id) }}" class="btn btn-label-primary btn-sm waves-effect editBtn" >Düzenle</a>
                                        <button type="button" href="{{ route('directors.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect" id="delete">Sil</button>
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
                        <h5 class="card-header">Yönetim Kurulu bilgilerini düzenle</h5>
                        <div class="card-body">
                            <form action="{{ route('directors.update',$president->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="full_name" class="form-label">Adı, Soyad</label>
                                        <input type="text" id="full_name" name="full_name" class="form-control" value="{{ $president->full_name }}" placeholder="Başkan Adı, Soyad Giriniz" required>
                                    </div>
                                    <div class="col mb-3">
                                        <label for="position" class="form-label">Görev</label>
                                        <select class="selectpicker w-100" name="position" id="position" data-style="btn-default" tabindex="null">
                                            <option selected disabled>Lütfen seçin..</option>
                                            <option value="1" @selected($president->position == 1) >Başkan</option>
                                            <option value="2" @selected($president->position == 2) >İkinci Başkan </option>
                                            <option value="3" @selected($president->position == 3) >Genel Sekreter</option>
                                            <option value="4" @selected($president->position == 4) >Muhasip Üye</option>
                                            <option value="5" @selected($president->position == 5) >Üye</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="image" class="form-label">Resim</label>
                                        <input type="file" id="image" name="image" class="form-control" >
                                    </div>
                                    <div class="col mb-3">
                                        <img id="showImage" class="" style="width: 100px;" src="{{ $president->image ? asset($president->image) : asset('assets/img/images.png') }}" alt="profile">
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
        <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
        <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
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
                        url: "{{ url('/admin/menus/directors/changeStatus') }}/"+check_id+"/"+check_active,
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
