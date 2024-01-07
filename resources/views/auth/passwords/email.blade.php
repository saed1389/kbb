@extends('layouts.appMain')
@section('title')  @endsection
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
        <form method="POST" action="{{ route('password.email') }}">
            <ul class="row g-3 list-unstyled li_animate">
                <li class="col-12" style="text-align: center">
                    <img class="login-img w-50 " src="{{ asset('assets/images/logo.png') }}" alt="">
                </li>
                <li class="col-12">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </li>
                <li class="col-12 my-lg-4">
                    <button class="btn btn-lg w-100 btn-primary text-uppercase mb-2" type="submit">Şifre Sıfırlama Bağlantısını Gönder</button>
                    <a class="btn btn-lg w-100 btn-secondary text-uppercase mb-2" href="{{ route('login') }}">Oturum açma sayfasına geri dön</a>
                </li>
            </ul>
        </form>
    </div>
@endsection
