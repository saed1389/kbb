@extends('frontend.layouts.app')
@section('title')
    {{ @$user->titleName->title. ' '.$user->first_name. ' '. $user->last_name }} - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
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
                            <span>{{ @$user->titleName->title. ' '.$user->first_name. ' '. $user->last_name }}</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">{{ @$user->titleName->title. ' '.$user->first_name. ' '. $user->last_name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-team-2__area pt-50 pb-90">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <img src="{{ $user->profile_image ? asset($user->profile_image) : asset('front/assets/images/defaultUser.png') }}" alt="" >
                    <h6 class="mt-4 mb-4">{{ @$user->titleName->title. ' '.$user->first_name. ' '. $user->last_name }}</h6>
                    <p><strong>Ülke:</strong> {{ @$user->countryName->country_name }}</p>
                    <p><strong>Şehir:</strong> {{ @$user->workSate->city_name }}</p>
                    <p><strong>Kurum:</strong> {{ @$user->company_name }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
