@extends('layouts.appMain')
@section('title') Oturum aç @endsection
@section('content')
    <aside class="px-xl-5 px-4 auth-aside" data-bs-theme="none">
        <img class="login-img" src="{{ asset('assets/images/kbb-logo.svg') }}" alt="">
    </aside>
    <div class="px-xl-5 px-4 auth-body" style="justify-content: center;">
        <form action="{{ route('login') }}" method="post" >
            @csrf
            <ul class="row g-3 list-unstyled li_animate">
                <li class="col-12" style="text-align: center">
                    <img class="login-img w-50 " src="{{ asset('assets/images/logo.png') }}" alt="">
                </li>

                <li class="col-12">
                    <label class="form-label" for="email">E-Posta</label>
                    <input type="email" class="form-control form-control-lg" placeholder="" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </li>
                <li class="col-12">
                    <div class="form-label">
                        <span class="d-flex justify-content-between align-items-center">
                            <label for="password">Şifre</label>
                            <a class="text-primary" href="{{ route('password.request') }}">Parolanızı mı unuttunuz?</a>
                        </span>
                    </div>
                    <input type="password" class="form-control form-control-lg" placeholder="" id="password" name="password" required autocomplete="current-password" >
                </li>
                <li class="col-12">
                    <div class="form-check fs-5">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                        <label class="form-check-label fs-6" for="remember_me">Beni Hatırla</label>
                    </div>
                </li>
                <li class="col-12 my-lg-4">
                    <button class="btn btn-lg w-100 btn-primary text-uppercase mb-2" type="submit">OTURUM AÇ</button>
                    <a class="btn btn-lg w-100 btn-secondary text-uppercase mb-2" href="{{ route('register') }}" title="">Yeni Üyelik</a>
                </li>
            </ul>
        </form>
    </div>

@endsection
