@extends('layouts.appMain')
@section('title') Şifreyi yenile @endsection
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
                        <h4 class="mb-1 pt-2">Şifreyi yenile 🔒</h4>
                        <form id="formAuthentication" method="POST" action="{{ route('password.confirm') }}">
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Şifre</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required autocomplete="current-password" />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100 mb-3" type="submit">
                                Şifreyi Onayla
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-secondary d-grid w-100 mb-3" href="{{ route('password.request') }}" title="">Parolanızı mı unuttunuz?</a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
