@extends('admin.layouts.app')
@section('title') Reklam Yönetimi @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Reklam Yönetimi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Reklam Yönetimi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="table table-striped">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Resim</th>
                                <th>Başlık</th>
                                <th>Yer</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($advertisements as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset($item->image) }}" class="w-20 rounded"></td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->place == 1 ? 'Sliderın sağ tarafı' : '-' }}</td>
                                    <td>
                                        <a href="{{ route('advertisements.edit', $item->id) }}" class="btn btn-label-primary btn-sm waves-effect editBtn" >Düzenle</a>
                                        <button type="button" href="{{ route('advertisements.delete', $item->id) }}" class="btn btn-label-danger btn-sm waves-effect mt-1" id="delete">Sil</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <h4>Reklamı Düzenle</h4>
                        <form method="post" action="{{ route('advertisements.update', $ad->id) }}" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="title" class="form-label">Başlık</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{ $ad->title }}" required >
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="href" class="form-label">Reklam Href</label>
                                    <input type="text" id="href" name="href" class="form-control" value="{{ $ad->href }}" >
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="place" class="form-label">Yer</label>
                                    <select class="form-control" name="place" id="place" required>
                                        <option value="" disabled>Please select..</option>
                                        <option value="1" @selected($ad->place == 1) >Sliderın sağ tarafı</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="image" class="form-label">Resim</label>
                                    <input type="file" id="image" name="image" class="form-control" >
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ $ad->image ? asset($ad->image) : asset('assets/img/images.png') }}" id="showImage" class="rounded w-50 mt-2" alt="" />
                                    <input type="hidden" name="oldImage" value="{{ $ad->image }}">
                                </div>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="col-md-12 mb-3">
                                    <label class="switch switch-square">
                                        <input type="checkbox" class="switch-input" value="1" name="status" @checked($ad->status == 1) />
                                        <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                        <span class="switch-label">Durum</span>
                                    </label>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <button class="btn btn-success" type="submit">Düzenle</button>
                                </div>
                            </div>
                        </form>
                    </div>

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
                        url: "{{ url('/admin/advertisements/changeStatus') }}/"+check_id+"/"+check_active,
                        data: { _token : $('meta[name="csrf-token"]').attr('content'),id: check_id, active: check_active},
                        success: function(response){
                            toastr.info("Durumu başarıyla değiştirin!");
                        }
                    });
                    return true;
                });
                $('#image').change(function (e) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>
    @endpush
@endsection
