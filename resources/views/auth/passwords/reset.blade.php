@extends('layouts.appMain')
@section('title') Şifreyi yenile @endsection
@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Reset Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="/" class="app-brand-link gap-2" style="justify-content: center;">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-50">
                            </a>
                        </div>
                        <p class="mb-4" style="text-align-last: center;">Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği</p>
                        <!-- /Logo -->
                        <h4 class="mb-1 pt-2">Şifreyi yenile 🔒</h4>

                        <form id="formAuthentication" method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-Posta</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="E-postanızı giriniz"  id="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Yeni Şifre</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" name="password" required autocomplete="new-password" />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="confirm-password">Şifreyi Doğrulayın</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" name="password_confirmation" required autocomplete="new-password" />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary d-grid w-100 mb-3">
                                Set new password
                            </button>
                            <div class="text-center">
                                <a href="{{ route('login') }}">
                                    <i class="ti ti-chevron-left scaleX-n1-rtl"></i>
                                    Oturum açma sayfasına geri dön
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Reset Password -->
            </div>
        </div>
    </div>
@endsection
