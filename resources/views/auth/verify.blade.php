@extends('layouts.appMain')
@section('title') Login @endsection
@section('content')
    <aside class="px-xl-5 px-4 auth-aside" data-bs-theme="none">
        <img class="login-img" src="{{ asset('assets/images/kbb-logo.svg') }}" alt="">
    </aside>
    <div class="px-xl-5 px-4 auth-body" style="justify-content: center;">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            <ul class="row g-3 list-unstyled li_animate">
                <li class="col-12" style="text-align: center">
                    <img class="login-img w-50 " src="{{ asset('assets/images/logo.png') }}" alt="">
                </li>
                <li class="col-12">
                    <div class="card-header mb-2">Email adresinizi doğrulayın</div>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            E-posta adresinize yeni bir doğrulama bağlantısı gönderildi.
                        </div>
                        <p>
                            Devam etmeden önce lütfen doğrulama bağlantısı için e-postanızı kontrol edin. <br>
                            E-postayı almadıysanız,
                        </p>
                    @endif
                </li>
                <li class="col-12 my-lg-4">
                    <button class="btn btn-lg w-100 btn-primary text-uppercase mb-2" type="submit">başka bir tane istemek için burayı tıklayın</button>
                </li>
            </ul>
        </form>
    </div>
@endsection
