@extends('frontend.layouts.app')
@section('title')
    Danışma Kurulu - Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği
@endsection
@section('content')
    @push('styles')
        <style>
            .tp-team-2__thumb::after{
                background-color: rgb(30 55 55 / 0%);
            }
        </style>
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
                            <span><a href="{{ route('dernegmz') }}">Derneğimiz</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span><a href="{{ route('kurullar') }}"> Kurullar </a></span>
                            <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                            <span>Danışma Kurulu</span>
                        </div>
                        <h3 class="tp-breadcrumb__title">Danışma Kurulu</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-team-2__area pt-50 pb-90">
        <div class="container">
            <div class="row">
                <table class="table table-striped">
                    <tbody>
                    @foreach($members as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }} @if($item->position) (<strong>{{ $item->position }}</strong>) @endif</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
