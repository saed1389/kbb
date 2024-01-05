@extends('layouts.appMain')
@section('title') Login @endsection
@section('content')
    <aside class="px-xl-5 px-4 auth-aside" data-bs-theme="none">
        <img class="login-img" src="{{ asset('assets/images/kbb-logo.svg') }}" alt="">
    </aside>
    <div class="px-xl-5 px-4 auth-body" style="justify-content: center;">

        <form method="POST" action="{{ route('password.confirm') }}" >
            @csrf
            <ul class="row g-3 list-unstyled li_animate">
                <li class="col-12" style="text-align: center">
                    <img class="login-img w-50 " src="{{ asset('assets/images/logo.png') }}" alt="">
                </li>
                <div class="card-header">Şifreyi Onayla</div>
                <p>Devam etmeden önce lütfen şifrenizi doğrulayın.</p>

                <li class="col-12">
                    <div class="form-label">
                        <label for="password">Şifre</label>
                    </div>
                    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" >
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </li>

                <li class="col-12 my-lg-4">
                    <button class="btn btn-lg w-100 btn-primary text-uppercase mb-2" type="submit">Şifreyi Onayla</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-lg w-100 btn-secondary text-uppercase mb-2" href="{{ route('password.request') }}" title="">Parolanızı mı unuttunuz?</a>
                    @endif
                </li>
            </ul>
        </form>
    </div>
@endsection
