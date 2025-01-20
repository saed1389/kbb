@extends('admin.layouts.app')
@section('title')
    Üye Ekleme
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y mb-5">
        <div class="card">
            <h5 class="card-header">Üye Ekleme</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('members.index') }}">Üye Yönetimi  </a>
                                </li>
                                <li class="breadcrumb-item active">Üye Ekleme</li>
                            </ol>
                        </nav>
                    </div>
                    <form class="" action="{{ route('members.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <h4 class="mb-1 pt-2">Üyelik Genel Bilgileri</h4>
                            <div class="col-md-3 mb-3">
                                <label for="first_name" class="form-label">Adı <span class="text-danger">*</span></label>
                                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name') }}" placeholder="Lütfen Adınızı Giriniz" required>
                                @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="last_name" class="form-label">Soy Adı <span class="text-danger">*</span></label>
                                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}" placeholder="Lütfen Soy Adınızı Giriniz" required>
                                @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="user_type">Üyelik Tipi</label>
                                <select id="user_type" class="selectpicker w-100" name="user_type" data-style="btn-default" tabindex="null">
                                    <option disabled selected>Üyelik Tipi Seç</option>
                                    <option value="1" @selected(old('user_type') == 1 ) >Dernek Üyesi</option>
                                    <option value="2" @selected(old('user_type') == 2 ) >Websitesi Üyesi</option>
                                    <option value="3" @selected(old('user_type') == 3 ) >Admin</option>
                                    <option value="4" @selected(old('user_type') == 4 ) >Üye</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="title">Üyelik Ünvanı</label>
                                <select id="title" class="selectpicker w-100" name="title" data-style="btn-default" tabindex="null" required>
                                    <option disabled selected>Üyelik Ünvanı Seç</option>
                                    @foreach($titles as $item)
                                        <option value="{{ $item->id }}" {{ old('title') == $item->id ? 'selected' : '' }}>{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="mother_name" class="form-label">Anne Adı <span class="text-danger">*</span></label>
                                <input type="text" id="mother_name" name="mother_name" class="form-control" value="{{ old('mother_name') }}" placeholder="Lütfen Anne Adınızı Giriniz" required>
                                @error('mother_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="father_name" class="form-label">Baba Adı <span class="text-danger">*</span></label>
                                <input type="text" id="father_name" name="father_name" class="form-control" value="{{ old('father_name') }}" placeholder="Lütfen Baba Adınızı Giriniz" required>
                                @error('father_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="gender">Cinsiyet</label>
                                <select id="gender" class="selectpicker w-100" name="gender" data-style="btn-default" tabindex="null" required>
                                    <option disabled selected>Cinsiyet Seç</option>
                                    <option value="1" @selected(old('gender') == 1 ) >Erkek</option>
                                    <option value="2" @selected(old('gender') == 2 ) >Kadın</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="occupation">Mesleginiz</label>
                                <select id="occupation" class="selectpicker w-100" name="occupation" data-style="btn-default" tabindex="null">
                                    <option disabled selected>Seçiniz..</option>
                                    @foreach($jobs as $item)
                                        <option value="{{ $item->id }}" {{ old('occupation') == $item->id ? 'selected' : '' }} >{{ $item->job }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="tc_card_no" class="form-label">T.C. Kimlik Nu <span class="text-danger">*</span></label>
                                <input type="number" id="tc_card_no" name="tc_card_no" class="form-control" value="{{ old('tc_card_no') }}" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" maxlength="11" placeholder="Örn: 99999999999" data-inputmask="'mask': '99999999999'" required>
                                @error('tc_card_no')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="birthday_date" class="form-label">Doğum Tarihi </label>
                                <input type="text" id="birthday_date" name="birthday_date" class="form-control" value="{{ old('birthday_date') }}" >
                                @error('birthday_date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="country">Üye Uyruğu</label>
                                <select id="country" class="selectpicker w-100" name="country" data-style="btn-default" tabindex="null">
                                    <option disabled selected>Üye Uyruğu Seç..</option>
                                    @foreach($countries as $item)
                                        <option value="{{ $item->id_country }}" @selected($item->default_country)>{{ $item->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="working_status">Çalışma Durumu</label>
                                <select id="working_status" class="selectpicker w-100" name="working_status" data-style="btn-default" tabindex="null">
                                    <option disabled selected>Seçiniz..</option>
                                    <option value="1" @selected(old('working_status') == 1) >Emekli</option>
                                    <option value="2" @selected(old('working_status') == 2) >Aktif Çalışan</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="company_name" class="form-label">Kurum Adı <span class="text-danger">*</span></label>
                                <input type="text" id="company_name" name="company_name" class="form-control" value="{{ old('company_name') }}" placeholder="Lütfen Kurum Adınızı Giriniz" required>
                                @error('company_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6 mb-3">
                                <label for="work_address" class="form-label">İş Adresi <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="work_address" name="work_address" placeholder="Lütfen İş Adresinizı Giriniz" rows="2"  required>{{ old('work_address') }}</textarea>
                                @error('work_address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="work_province">İl</label>
                                <select id="work_province" class="selectpicker w-100" name="work_province" data-style="btn-default" tabindex="null">
                                    <option disabled selected>İl Seç..</option>
                                    @foreach($provinces as $item)
                                        <option value="{{ $item->province_no }}" {{ old('work_province') == $item->province_no ? 'selected' : '' }} >{{ $item->province_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="work_city">İlçe</label>
                                <select id="work_city" name="work_city" class="form-control">
                                    <option value disabled selected>İlk İl Seçiniz</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="home_address" class="form-label">Ev Adresi <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="home_address" name="home_address" placeholder="Lütfen Ev Adresinizı Giriniz" rows="2"  required>{{ old('home_address') }}</textarea>
                                @error('home_address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="home_province">İl</label>
                                <select id="home_province" class="selectpicker w-100" name="home_province" data-style="btn-default" tabindex="null">
                                    <option disabled selected>İl Seç..</option>
                                    @foreach($provinces as $item)
                                        <option value="{{ $item->province_no }}" {{ old('home_province') == $item->province_no ? 'selected' : '' }} >{{ $item->province_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="home_city">İlçe</label>
                                <select id="home_city" name="home_city" class="form-control">
                                    <option value disabled selected>İlk İl Seçiniz</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="mobile" class="form-label">Cep Telefonu <span class="text-danger">*</span> </label>
                                <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="Örn: 05331234567" value="{{ old('mobile') }}" required>
                                @error('mobile')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="home_tel" class="form-label">Ev Telefonu </label>
                                <input type="tel" id="home_tel" name="home_tel" class="form-control" value="{{ old('home_tel') }}" placeholder="Örn: 05331234567" >
                                @error('home_tel')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="work_tel" class="form-label">İş Telefonu </label>
                                <input type="tel" id="work_tel" name="work_tel" class="form-control" value="{{ old('work_tel') }}" placeholder="Örn: 05331234567" >
                                @error('work_tel')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label" for="memberChatAddress">Yazışma Adresi</label>
                                <select id="memberChatAddress" class="selectpicker w-100" name="memberChatAddress" data-style="btn-default" tabindex="null">
                                    <option disabled selected>Yazışma Adresi Seçiniz</option>
                                    <option value="1" @selected(old('memberChatAddress') == 1 ) >Ev Adresi</option>
                                    <option value="2" @selected(old('memberChatAddress') == 2 ) >İş Adresi</option>
                                </select>
                            </div>
                            <hr>
                            <h4 class="mb-1 pt-2">Üyelik Giriş Bilgileri</h4>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-Posta <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="Lütfen E-posta adresini girin" required>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 form-password-toggle">
                                    <label class="form-label" for="password">Şifre <span class="text-danger">*</span></label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>

                                    </div>
                                </div>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <label class="form-label" for="profile_image">Profil Resimi</label>
                                        <input type="file" class="form-control" id="profile_image" name="profile_image">
                                        @error('profile_image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 mt-4 mb-4">
                                        <img id="showImage" class="rounded" style="width: 150px;" src="{{ asset('assets/img/images.png') }}" alt="profile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <label class="form-label" for="user_cv">Cv Dosyası (PDF,Doc)</label>
                                        <input type="file" class="form-control" id="user_cv" name="user_cv">
                                        @error('user_cv')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 mt-4 mb-4">
                                        <img class="rounded" style="width: 150px;" src="{{ asset('assets/img/unnamed.png') }}" alt="profile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Yeni Üye Kaydet</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
        <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
        <script>
            var dateInput = document.getElementById('birthday_date');
            var picker = new Pikaday({
                field: dateInput,
                format: 'DD-MM-YYYY',
                i18n: {
                    previousMonth : 'Önceki Ay',
                    nextMonth     : 'Sonraki Ay',
                    months        : ['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'],
                    weekdays      : ['Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi'],
                    weekdaysShort : ['Paz','Pts','Sal','Çar','Per','Cum','Cts']
                }
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#work_province').change(function (event) {
                    var idProvince = this.value;
                    console.log(idProvince);
                    $('#work_city').html('');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{ route('province.fetch-city') }}",
                        type: 'POST',
                        dataType: 'json',
                        data: {province_no: idProvince, _token: "{{ csrf_token() }}"},
                        success: function (response) {
                            $('#work_city').html('<option value=""> İlçe Seç... </option>');
                            $.each(response.city, function (index, val) {
                                $('#work_city').append('<option value="'+val.city_no+'">'+val.city_name+'</option>')
                            });
                        }
                    })
                });

                $('#home_province').change(function (event) {
                    var idProvince = this.value;
                    $('#home_city').html('');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{ route('province.fetch-city') }}",
                        type: 'POST',
                        dataType: 'json',
                        data: {province_no: idProvince, _token: "{{ csrf_token() }}"},
                        success: function (response) {
                            $('#home_city').html('<option value=""> İlçe Seç... </option>');
                            $.each(response.city, function (index, val) {
                                $('#home_city').append('<option value="'+val.city_no+'">'+val.city_name+'</option>')
                            });
                        }
                    })
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#profile_image').change(function (e) {
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
