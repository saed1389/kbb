@extends('layouts.appMain')
@section('title') Üye Ol @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">
    @endpush
    <div class="container-xxl">
        <div class="authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="/" class="app-brand-link gap-2" style="justify-content: center;">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-50">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1 pt-2">Kişisel Bilgileri</h4>
                        <p class="mb-4">Dernek Üyelik Formu İçin <a href="{{ asset('uploads/Document/DernekUyelikForm.docx') }}" download="">Tıklayın</a>.</p>
                        <form  class="mb-3" action="{{ route('user_register') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Ünvan <span class="text-danger">*</span></label>
                                        <select id="title" name="title" class="form-control" required>
                                            <option selected disabled value>Seçiniz...</option>
                                            @php
                                                $titles = \App\Models\UserTitle::where('status', 1)->get();
                                            @endphp
                                            @foreach($titles as $title)
                                                <option value="{{ $title->id }}">{{ $title->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="job" class="form-label">Meslek <span class="text-danger">*</span></label>
                                        <select id="job" name="job" class="form-control" required>
                                            <option selected disabled value>Seçiniz...</option>
                                            @php
                                                $jobs = \App\Models\UserJob::where('status', 1)->get();
                                            @endphp
                                            @foreach($jobs as $job)
                                                <option value="{{ $job->id }}">{{ $job->job }}</option>
                                            @endforeach
                                        </select>
                                        @error('job')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 ">
                                        <label class="form-label" for="country">Uyruk <span class="text-danger">*</span></label>
                                        <select id="country" name="country" class="form-control" required>
                                            <option selected disabled value>Seçiniz...</option>
                                            @php
                                                $countries = \App\Models\Country::all();
                                            @endphp
                                            @foreach($countries as $country)
                                                <option value="{{ $country->id_country }}">{{ $country->country_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">Ad <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Lütfen Adınızı Girin" required>
                                        @error('first_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">Soyad  <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Lütfen Soyadınızı Giriniz" required>
                                        @error('last_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 ">
                                        <label class="form-label" for="birthday_date">Doğum Tarihi</label>
                                        <input type="text" name="birthday_date" id="birthday_date" class="form-control" placeholder="DD-MM-YYYY">
                                        @error('birthday_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Cinsiyet</label>
                                        <select id="gender" name="gender" class="form-control">
                                            <option selected disabled value>Seçiniz...</option>
                                            <option value="1">Erkek</option>
                                            <option value="2">Kadın</option>
                                        </select>
                                        @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="mother_name" class="form-label">Anne Adı</label>
                                        <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Lütfen Anne Adını Giriniz">
                                        @error('mother_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="father_name" class="form-label">Baba Adı</label>
                                        <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Lütfen Baba Adını Giriniz">
                                        @error('father_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <h4 class="mb-1 pt-2">İletişim & Adres Bilgileri</h4>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="working_status" class="form-label">Çalışma Durumu</label>
                                        <select id="working_status" name="working_status" class="form-control">
                                            <option selected disabled value>Seçiniz...</option>
                                            <option value="1">Emekli</option>
                                            <option value="2">Aktif Çalışan</option>
                                        </select>
                                        @error('working_status')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="company_name" class="form-label">Kurum Adı </label>
                                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Lütfen Kurum Adını Giriniz">
                                        @error('company_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 ">
                                        <label class="form-label" for="work_address">İş Adresi</label>
                                        <textarea class="form-control" rows="3" name="work_address" id="work_address"></textarea>
                                        @error('work_address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="work_province" class="form-label">Şehir</label>
                                        <select id="work_province" name="work_province" class="form-control">
                                            <option selected disabled value>Seçiniz...</option>
                                            @php
                                                $provinces = \App\Models\Provinces::all();
                                            @endphp
                                            @foreach($provinces as $province)
                                                <option value="{{ $province->province_no }}">{{ $province->province_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('work_province')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="work_city" class="form-label">İlçe</label>
                                        <select id="work_city" name="work_city" class="form-control">

                                        </select>
                                        @error('work_city')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 ">
                                        <label class="form-label" for="work_tel">İş Telefon</label>
                                        <input id="work_tel" name="work_tel" class="form-control" type="text" placeholder="Lütfen İş Telefonunu Giriniz">
                                        @error('work_tel')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="home_address" class="form-label">Ev Adresi</label>
                                        <textarea class="form-control" rows="3" name="home_address" id="home_address"></textarea>
                                        @error('home_address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="home_province" class="form-label">Şehir</label>
                                        <select id="home_province" name="home_province" class="form-control">
                                            <option selected disabled value>Seçiniz...</option>
                                            @foreach($provinces as $province)
                                                <option value="{{ $province->province_no }}">{{ $province->province_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('home_province')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 ">
                                        <label class="form-label" for="home_city">İlçe</label>
                                        <select id="home_city" name="home_city" class="form-control">

                                        </select>
                                        @error('home_city')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="home_tel" class="form-label">Ev Telefonu</label>
                                        <input type="text" class="form-control" id="home_tel" name="home_tel" placeholder="Lütfen Ev Telefonunu Giriniz">
                                        @error('home_tel')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="mobile">Cep Telefonu <span class="text-danger">*</span></label>
                                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Lütfen Cep Telefonuna Girin" >
                                        @error('mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <h4 class="mb-1 pt-2">Üyelik Bilgileri</h4>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-Posta</label>
                                        <input type="email" class="form-control @error('email') invalid @enderror" id="email" name="email" placeholder="Lütfen E-posta adresini girin" required>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="password">Şifre</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>

                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required>
                                        <label class="form-check-label" for="terms-conditions">
                                            <a href="javascript:void(0);">Gizlilik politikasını ve şartlarını kabul ediyorum</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary d-grid w-100" type="submit">
                                Bilgileri Kaydet
                            </button>
                        </form>

                        <p class="text-center">
                            <span>Hesabınız var mı?</span>
                            <a href="{{ route('login') }}">
                                <span>Oturum açın</span>
                            </a>
                        </p>

                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
        <script>
            // Create a Pikaday instance and set the language
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
                            $('#work_city').html('<option value=""> Seçiniz... </option>');
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
                            $('#home_city').html('<option value=""> Seçiniz... </option>');
                            $.each(response.city, function (index, val) {
                                $('#home_city').append('<option value="'+val.city_no+'">'+val.city_name+'</option>')
                            });
                        }
                    })
                });
            });
        </script>
    @endpush
@endsection
