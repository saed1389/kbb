@extends('frontend.layouts.app')
@section('title')
    Türk KBB VE BBC Derneği Yurtdışı Eğitim Bursu - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('front/assets/css/other-page.css') }}" >

    @endpush
    <div class="tp-breadcrumb__area p-relative fix tp-breadcrumb-height" data-background="{{ asset('assets/img/pages/so-banner.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/pages/so-banner.jpg') }}&quot;);">
        <div class="tp-breadcrumb__shape-1 z-index-5">
            <img src="{{ asset('front/assets/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
        </div>
        <div class="tp-breadcrumb__shape-2 z-index-5">
            <img src="{{ asset('front/assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcrumb__content z-index-5">
                        <div class="tp-breadcrumb__list">
                            <span><a href="/">Anasayfa</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span><a href="{{ route('burs_oduller') }}">Burs Oduller</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span><a href="{{ route('burslar') }}">Bursler</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Türk KBB VE BBC Derneği Yurtdışı Eğitim Bursu</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Türk KBB VE BBC Derneği Yurtdışı Eğitim Bursu</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-mission-2__area tp-mission-2__space p-relative fix z-index">
        <div class="tp-mission-2__plr">
            <div class="container-fluid g-0">
                <div class="col-md-12">
                    <div class="row">
                        <div class="text-center">
                            <strong><a href="{{ asset('uploads/Document/Turk-KBB-ve-BBC Dernegi-Yurtdisi-Egitim-Burslari-Yonergesı̇.pdf') }}"">Türk KBB ve BBC Derneği Yurtdışı Eğitim Bursları Yönergesi</a></strong>
                        </div>
                        <h3>Başvuran Aday Bilgileri</h3>
                        <h6 class="text-danger">(*) Alanları Doldurmak Zorunludur.</h6>
                        <small>* Dosyalar boyutu En fazla 5 MB olabilir <br> ** Dosyalar uzantıları PDF,DOC,DOCX,PPT,PTTX,PPS,PPSX,XLS ve XLSX</small>
                        @if (session('thanks'))
                        <span class="text-success">{{ session('thanks') }}</span>
                        @endif
                        <div class="col-xl-12 col-lg-12 mt-4 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-contact-form__form-box">
                                <form action="{{ route('scholarship-app-store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Adınız / Soyadınız <span class="text-danger">*</span></label>
                                            <input type="text" id="name" name="name" class="form-control" required>
                                            @error('name')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="domesticCompany" class="form-label">Yurtiçi Çalıştığı Kurum <span class="text-danger">*</span></label>
                                            <input type="text" id="domesticCompany" name="domesticCompany" class="form-control" required>
                                            @error('domesticCompany')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="position" class="form-label">Pozisyon <span class="text-danger">*</span></label>
                                            <input type="text" id="position" name="position" class="form-control" required>
                                            @error('position')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="title">Ünvan <span class="text-danger">*</span></label>
                                            <select id="title" class="selectpicker w-100" name="title" data-style="btn-default" tabindex="null" required>
                                                <option value="" disabled selected>Ünvan Seç</option>
                                                @foreach($titles as $title)
                                                    <option value="{{ $title->id }}">{{ $title->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('title')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="phoneNumber" class="form-label">Telefon Numarası <span class="text-danger">*</span></label>
                                            <input type="text" id="phoneNumber" name="phoneNumber" data-required="required" class="form-control"  aria-invalid="false" required>
                                            @error('phoneNumber')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="mobilePhone" class="form-label">Cep Telefonu<span class="text-danger">*</span></label>
                                            <input type="text" id="mobilePhone" name="mobilePhone" data-required="required" class="form-control"  aria-invalid="false" required>
                                            @error('mobilePhone')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">E-posta Adresi<span class="text-danger">*</span></label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                            @error('email')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="address" class="form-label">Adres <span class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="3" name="address" id="address"></textarea>
                                            @error('address')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="university" class="form-label">Mezun Olduğu Üniversite <span class="text-danger">*</span></label>
                                            <input type="text" id="university" name="university" class="form-control" required>
                                            @error('university')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dateOfGraduation" class="form-label">Mezuniyet Tarihi <span class="text-danger">*</span></label>
                                            <input class="form-control" name="dateOfGraduation" type="text" id="dateOfGraduation" placeholder="Ex: 29/11/2019" data-inputmask="'alias': 'date'" required>
                                            @error('dateOfGraduation')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="expertiseTestDate" class="form-label">Uzmanlık Sınav Tarihi <span class="text-danger">*</span></label>
                                            <input class="form-control" name="expertiseTestDate" type="text" id="expertiseTestDate" placeholder="Ex: 29/11/2019" data-inputmask="'alias': 'date'" required>
                                            @error('expertiseTestDate')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="specializedInstitution" class="form-label">Uzmanlığı Aldığı Kurum <span class="text-danger">*</span></label>
                                            <input type="text" id="specializedInstitution" name="specializedInstitution" class="form-control" required>
                                            @error('specializedInstitution')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="medicalSpecialty" class="form-label"> Tıp ve Uzmanlık Diploması <span class="text-danger">*</span></label>
                                            <input type="file" id="medicalSpecialty" name="medicalSpecialty" class="form-control" required>
                                            @error('medicalSpecialty')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="KBBQualificationCertificate" class="form-label">Türk KBB ve BBC Derneği Yeterlik Belgesi (Yazılı ve Sözlü) <span class="text-danger">*</span></label>
                                            <input type="file" id="KBBQualificationCertificate" name="KBBQualificationCertificate" class="form-control" required>
                                            @error('KBBQualificationCertificate')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="associationNo" class="form-label">Dernek Üye No </label>
                                            <input type="text" id="associationNo" name="associationNo" class="form-control" >
                                            @error('associationNo')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="personCV" class="form-label">Özgeçmiş (Tıp ve Uzmanlık Diplomaları, Yayınlar, Bildiriler, Alınan Eğitimler, Ödüller vs.) <span class="text-danger">*</span></label>
                                            <input type="file" id="personCV" name="personCV" class="form-control" required>
                                            @error('personCV')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="workingArea" class="form-label">Çalışma Süresince Üzerinde Çalışacağı Alan <span class="text-danger">*</span></label>
                                            <input type="text" id="workingArea" name="workingArea" class="form-control" required>
                                            @error('workingArea')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="detailedProject" class="form-label">Çalışma Süresince Üzerinde Çalışacağı Detaylı Proje <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="detailedProject" required></textarea>
                                            @error('detailedProject')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="currentLanguage" class="form-label">Gidilen ülkenin geçerli dilini biliyorsanız belgeleri</label>
                                            <input type="file" id="currentLanguage" name="currentLanguage" class="form-control" >
                                            @error('currentLanguage')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="englishForeign" class="form-label">İngilizce - Yabancı Dil Seviye Belgesi <span class="text-danger">*</span></label>
                                            <input type="file" id="englishForeign" name="englishForeign" class="form-control" required>
                                            @error('englishForeign')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="foreignLanguage1" class="form-label">Diğer Dil - 1 - Yabancı Dil Seviye Belgesi <span class="text-danger">*</span></label>
                                            <input type="file" id="foreignLanguage1" name="foreignLanguage1" class="form-control" required>
                                            @error('foreignLanguage1')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="foreignLanguage2" class="form-label">Diğer Dil - 2 - Yabancı Dil Seviye Belgesi <span class="text-danger">*</span></label>
                                            <input type="file" id="foreignLanguage2" name="foreignLanguage2" class="form-control" required>
                                            @error('foreignLanguage2')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="foreignLanguage3" class="form-label">Diğer Dil - 3 - Yabancı Dil Seviye Belgesi </label>
                                            <input type="file" id="foreignLanguage3" name="foreignLanguage3" class="form-control" >
                                            @error('foreignLanguage3')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="foreignLanguage4" class="form-label">Diğer Dil - 4 - Yabancı Dil Seviye Belgesi</label>
                                            <input type="file" id="foreignLanguage4" name="foreignLanguage4" class="form-control" >
                                            @error('foreignLanguage4')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="otherScholarship" class="form-label">Başka bir kurumdan burs veya yardım almadığınıza dair belge (kendi imzalı belgeniz):</label>
                                            <input type="file" id="otherScholarship" name="otherScholarship" class="form-control" >
                                            @error('otherScholarship')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="referenceLetter1" class="form-label">Referans Mektubu – 1 <span class="text-danger">*</span></label>
                                            <input type="file" id="referenceLetter1" name="referenceLetter1" class="form-control" required>
                                            @error('referenceLetter1')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="referenceLetter2" class="form-label">Referans Mektubu – 2 <span class="text-danger">*</span></label>
                                            <input type="file" id="referenceLetter2" name="referenceLetter2" class="form-control" required>
                                            @error('referenceLetter2')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="referenceLetter3" class="form-label">Referans Mektubu – 3 <span class="text-danger">*</span></label>
                                            <input type="file" id="referenceLetter3" name="referenceLetter3" class="form-control" required>
                                            @error('referenceLetter3')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="referenceLetter4" class="form-label">Referans Mektubu – 4 <span class="text-danger">*</span></label>
                                            <input type="file" id="referenceLetter4" name="referenceLetter4" class="form-control" required>
                                            @error('referenceLetter4')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="candidateEducation" class="form-label">Adayın Eğitim Alacağı Kurum <span class="text-danger">*</span></label>
                                            <input type="text" id="candidateEducation" name="candidateEducation" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="position" class="form-label">Kurum Kabul Yazısı <span class="text-danger">*</span></label>
                                            <input type="file" id="institutionLetter" name="institutionLetter" class="form-control" required>
                                            @error('institutionLetter')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="educationStartDate" class="form-label">Eğitim Başlama Tarihi <span class="text-danger">*</span></label>
                                            <input type="text" id="educationStartDate" name="educationStartDate" placeholder="Ex: 29/11/2019" data-inputmask="'alias': 'date'" class="form-control" required>
                                            @error('educationStartDate')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="educationCompletionDate" class="form-label"> Eğitim Bitiş Tarihi <span class="text-danger">*</span></label>
                                            <input type="text" id="educationCompletionDate" name="educationCompletionDate" placeholder="Ex: 29/11/2019" data-inputmask="'alias': 'date'" class="form-control" required>
                                            @error('educationCompletionDate')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="scholarshipDuration" class="form-label">Önerilen Burs Süresi <span class="text-danger">*</span></label>
                                            <input type="text" id="scholarshipDuration" name="scholarshipDuration" class="form-control" required>
                                            @error('scholarshipDuration')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" class="btn btn-success">Gönder</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#dateOfGraduation').inputmask('99/99/9999');
                $('#expertiseTestDate').inputmask('99/99/9999');
                $('#educationStartDate').inputmask('99/99/9999');
                $('#educationCompletionDate').inputmask('99/99/9999');
            });
        </script>
    @endpush
@endsection
