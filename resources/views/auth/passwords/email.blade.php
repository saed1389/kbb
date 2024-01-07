@extends('layouts.appMain')
@section('title') Parolanızı mı unuttunuz @endsection
@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Forgot Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="/" class="app-brand-link gap-2" style="justify-content: center;">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-50">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1 pt-2">Parolanızı mı unuttunuz? 🔒</h4>
                        <p class="mb-4">E-postanızı girin, şifrenizi sıfırlamanız için size talimatlar gönderelim</p>
                        <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">E-postanızı</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="E-postanızı girin" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button class="btn btn-primary d-grid w-100" type="submit">Sıfırlama Bağlantısı Gönder</button>
                        </form>
                        <div class="text-center">
                            <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
                                <i class="ti ti-chevron-left scaleX-n1-rtl"></i>
                                Oturum açma sayfasına geri dön
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>
@endsection
