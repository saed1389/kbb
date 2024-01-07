@extends('layouts.appMain')
@section('title') Şifreyi yenile @endsection
@section('content')
    <aside class="px-xl-5 px-4 auth-aside" data-bs-theme="none">
        <img class="login-img" src="{{ asset('assets/images/kbb-logo.svg') }}" alt="">
    </aside>
    <div class="px-xl-5 px-4 auth-body" style="justify-content: center;">

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <ul class="row g-3 list-unstyled li_animate">
                <li class="col-12" style="text-align: center">
                    <img class="login-img w-50 " src="{{ asset('assets/images/logo.png') }}" alt="">
                </li>
                <li class="col-12">
                    <label class="form-label" for="email">E-Posta</label>
                    <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="" id="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </li>
                <li class="col-12">
                    <div class="form-label">
                        <label for="password">Şifre</label>
                    </div>
                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >
                </li>
                <li class="col-12">
                    <div class="form-label">
                        <label for="password-confirm">Şifreyi Doğrulayın</label>
                    </div>
                    <input type="password" id="password-confirm" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" >
                </li>
                <li class="col-12 my-lg-4">
                    <button class="btn btn-lg w-100 btn-primary text-uppercase mb-2" type="submit">Şifreyi yenile</button>
                    <a class="btn btn-lg w-100 btn-secondary text-uppercase mb-2" href="{{ route('login') }}" title="">Oturum açma sayfasına geri dön</a>
                </li>
            </ul>
        </form>
    </div>
@endsection
