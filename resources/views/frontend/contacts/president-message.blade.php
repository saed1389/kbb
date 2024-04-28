@extends('frontend.layouts.app')
@section('title')
    Başkana Ulaş - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('front/assets/css/other-page.css') }}">
    @endpush
    <div class="tp-breadcrumb__area p-relative fix tp-breadcrumb-height"
         data-background="{{ asset('assets/img/pages/so-banner.jpg') }}"
         style="background-image: url(&quot;{{ asset('assets/img/pages/so-banner.jpg') }}&quot;);">
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
                            <span>Başkana Ulaş</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Başkana Ulaş</h3>
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
                        @if (session('thanks'))
                            <span class="text-success">{{ session('thanks') }}</span>
                        @endif
                        <div class="col-xl-12 col-lg-12 mt-4 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-contact-form__form-box">
                                <form action="{{ route('contactStore') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="contact" value="3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Adınız / Soyadınız <span class="text-danger">*</span></label>
                                            <input type="text" id="name" name="name" class="form-control" required>
                                            @error('name')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email Adresi <span class="text-danger">*</span></label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                            @error('email')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label">Telefon Numarası <span class="text-danger">*</span></label>
                                            <input type="text" id="phone" name="phone" class="form-control" required>
                                            @error('email')
                                            <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="message" class="form-label">Mesajınız</label>
                                            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" class="btn btn-success">Gonder</button>
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
@endsection
