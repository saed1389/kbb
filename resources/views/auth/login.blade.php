@extends('layouts.appMain')
@section('title') Oturum aç @endsection
@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="/" class="app-brand-link gap-2" style="justify-content: center;">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-50">
                            </a>
                        </div>
                        <p class="mb-4" style="text-align-last: center;">Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği</p>
                        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">E-Posta</label>
                                <input type="text" class="form-control" id="email" placeholder="E-postanızı giriniz"  name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Şifre</label>
                                    <a href="{{ route('password.request') }}">
                                        <small>Parolanızı mı unuttunuz?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" id="password" name="password" required autocomplete="current-password"  />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                                    <label class="form-check-label" for="remember_me">
                                        Beni Hatırla
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Oturum aç</button>
                            </div>
                        </form>
                        <p class="text-center">
                            <span></span>
                            <a class="btn btn-secondary d-grid w-100" href="{{ route('register') }}">
                                <span> Yeni Üyelik</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
