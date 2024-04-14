@extends('user.layouts.app')
@section('title')
    KBB Okulları Başvuru Formunu
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y mb-5">
        <div class="card">
            <h5 class="card-header">KBB Okulları Başvuru Formunu</h5>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('user.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('schools.index') }}">  Başvuru Listesi </a>
                                </li>
                                <li class="breadcrumb-item active"> KBB Okulları Başvuru Formunu</li>
                            </ol>
                        </nav>
                    </div>
                    <p class="card-header">Formda beyan edilen bilgiler okula kabul edilen öğrenciler tarafından belgelenmek zorundadır.</p>
                    <form class="" action="{{ route('schools.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Adı-Soyadı <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Adı-Soyadı Giriniz" required>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="specialty_date" class="form-label">Uzmanlık Tarihi <span class="text-danger">*</span></label>
                                <input type="number" id="specialty_date" min="1900" max="9999" maxlength="4" oninput="checkLength(this)" name="specialty_date" class="form-control" value="{{ old('specialty_date') }}" placeholder="Uzmanlık Tarihi Giriniz" required>
                                @error('specialty_date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="specialty_subject" class="form-label">Uzmanlık Aldığı Kurum <span class="text-danger">*</span></label>
                                <input type="text" id="specialty_subject" name="specialty_subject" class="form-control" value="{{ old('specialty_subject') }}" placeholder="Uzmanlık Aldığı Giriniz" required>
                                @error('specialty_subject')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="currently_work" class="form-label">Halen Çalıştığı Kurum <span class="text-danger">*</span></label>
                                <input type="text" id="currently_work" name="currently_work" class="form-control" value="{{ old('currently_work') }}" placeholder="Halen Çalıştığı Kurum Giriniz" required>
                                @error('currently_work')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="graduated_faculty" class="form-label">Mezun Olduğu Tıp Fakültesi <span class="text-danger">*</span></label>
                                <input type="text" id="graduated_faculty" name="graduated_faculty" class="form-control" value="{{ old('graduated_faculty') }}" placeholder="Mezun Olduğu Tıp Fakültesi Giriniz" required>
                                @error('graduated_faculty')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="graduation_year" class="form-label">Mezuniyet Yılı <span class="text-danger">*</span></label>
                                <input type="number" id="graduation_year" name="graduation_year" min="1900" max="9999" maxlength="4" oninput="checkLength(this)" class="form-control" value="{{ old('graduation_year') }}" placeholder="Mezuniyet YılıGiriniz" required>
                                @error('graduation_year')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="first_school" class="form-label">İlk Tercih Edilen Okul<span class="text-danger">*</span></label>
                                <input type="text" id="first_school" name="first_school" class="form-control" value="{{ old('first_school') }}" placeholder="İlk Tercih Edilen Okul Giriniz" required>
                                @error('first_school')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="second_school" class="form-label">İkinci Tercih Edilen Okul<span class="text-danger">*</span></label>
                                <input type="text" id="second_school" name="second_school" class="form-control" value="{{ old('second_school') }}" placeholder="İkinci Tercih Edilen Okul Giriniz" required>
                                @error('second_school')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="congress_registration" class="form-label">Ulusal KBB Kongre Kaydı<span class="text-danger">*</span></label>
                                <input type="text" id="congress_registration" name="congress_registration" class="form-control" value="{{ old('congress_registration') }}" placeholder="Ulusal KBB Kongre Kaydı Giriniz" required>
                                @error('congress_registration')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="institutional_permission" class="form-label">Kurum İzni Alınıp Alınamayacağı<span class="text-danger">*</span></label>
                                <input type="text" id="institutional_permission" name="institutional_permission" class="form-control" value="{{ old('institutional_permission') }}" placeholder="Kurum İzni Alınıp Alınamayacağı Giriniz" required>
                                @error('institutional_permission')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="certificate_proficiency" class="form-label">Yeterlik Belgesi (Yılı, puanı, başarı sıralaması)<span class="text-danger">*</span></label>
                                <input type="text" id="certificate_proficiency" name="certificate_proficiency" class="form-control" value="{{ old('certificate_proficiency') }}" placeholder="Yeterlik Belgesi (Yılı, puanı, başarı sıralaması) Giriniz" required>
                                @error('certificate_proficiency')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="european_board" class="form-label">Avrupa Board Belgesi<span class="text-danger">*</span></label>
                                <input type="text" id="european_board" name="european_board" class="form-control" value="{{ old('european_board') }}" placeholder="Avrupa Board Belgesi Giriniz" required>
                                @error('european_board')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="previously_school" class="form-label">Daha önce mezun olduğu Okul<span class="text-danger">*</span></label>
                                <input type="text" id="previously_school" name="previously_school" class="form-control" value="{{ old('previously_school') }}" placeholder="Daha önce mezun olduğu Okul Giriniz" required>
                                @error('previously_school')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="complete_school" class="form-label">Daha önce tamamlayamadığı Okul<span class="text-danger">*</span></label>
                                <input type="text" id="complete_school" name="complete_school" class="form-control" value="{{ old('complete_school') }}" placeholder="Daha önce tamamlayamadığı Okul Giriniz" required>
                                @error('complete_school')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telephone" class="form-label">Telefon<span class="text-danger">*</span></label>
                                <input type="tel" id="telephone" name="telephone" class="form-control" value="{{ old('telephone') }}" placeholder="Telefon Giriniz" required>
                                @error('telephone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">E-posta<span class="text-danger">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="E-posta Giriniz" required>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Başvur</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            var currentYear = new Date().getFullYear();
            document.getElementById("specialty_date").max = currentYear;
            document.getElementById("graduation_year").max = currentYear;
        </script>
    @endpush
@endsection
