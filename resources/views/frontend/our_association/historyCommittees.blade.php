@extends('frontend.layouts.app')
@section('title')
    Geçmiş Dönemler Yönetim Kurulları - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
@endsection
@section('content')
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
                            <span><a href="{{ route('dernegmz') }}">Derneğimiz</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span><a href="{{ route('kurullar') }}"> Kurullar </a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Geçmiş Dönemler Yönetim Kurulları</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Geçmiş Dönemler Yönetim Kurulları</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-faq-2__area grey-bg pt-50 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 mb-50 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".4s">
                    <div class="tp-custom-accordion">
                        <div class="accordions" id="accordionExample1">
                            @foreach($members as $index => $member)
                                @if((int)$index % 2 == 0)
                                    <div class="accordion-items">
                                        <h2 class="accordion-header" id="heading{{ $member->id }}">
                                            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $member->id }}" aria-expanded="true" aria-controls="collapse{{ $member->id }}">
                                                {{ $member->start_date }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $member->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $member->id }}" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <table class="table table-striped ">
                                                    <tr>
                                                        <td><strong>Başkan:</strong></td>
                                                        <td>{{ $member->president }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>II. Başkan:</strong></td>
                                                        <td>{{ $member->sec_president }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Genel Sekreter:</strong></td>
                                                        <td>{{ $member->secretary }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Muhasip Üye:</strong></td>
                                                        <td>{{ $member->accounting }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Üye:</strong></td>
                                                        <td>{{ $member->member }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-50 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".8s">
                    <div class="tp-custom-accordion">
                        <div class="accordions" id="accordionExample2">
                            @foreach($members as $index => $member)
                                @if((int)$index % 2 != 0)
                                    <div class="accordion-items">
                                        <h2 class="accordion-header" id="heading{{ $member->id }}">
                                            <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $member->id }}" aria-expanded="true" aria-controls="collapse{{ $member->id }}">
                                                {{ $member->start_date }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $member->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $member->id }}" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <table class="table table-striped ">
                                                    <tr>
                                                        <td><strong>Başkan:</strong></td>
                                                        <td>{{ $member->president }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>II. Başkan:</strong></td>
                                                        <td>{{ $member->sec_president }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Genel Sekreter:</strong></td>
                                                        <td>{{ $member->secretary }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Muhasip Üye:</strong></td>
                                                        <td>{{ $member->accounting }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Üye:</strong></td>
                                                        <td>{{ $member->member }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
