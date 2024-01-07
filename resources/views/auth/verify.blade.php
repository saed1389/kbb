@extends('layouts.appMain')
@section('title') Eposta adresinizi doğrulayın  @endsection
@section('content')
    <div class="authentication-wrapper authentication-basic px-4">
        <div class="authentication-inner py-4">
            <!-- Verify Email -->
            <div class="card">
                <div class="card-body">
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a href="/" class="app-brand-link gap-2" style="justify-content: center;">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-50">
                        </a>
                    </div>
                    <p class="mb-4" style="text-align-last: center;">Türk Kulak Burun Boğaz ve Baş Boyun Cerrahisi Derneği</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <h4 class="mb-1 pt-2">Eposta adresinizi doğrulayın ✉️</h4>
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                E-posta adresinize yeni bir doğrulama bağlantısı gönderildi.
                            </div>
                            <p>
                                Devam etmeden önce lütfen doğrulama bağlantısı için e-postanızı kontrol edin. <br>
                                E-postayı almadıysanız,
                            </p>
                        @endif
                        <a class="btn btn-primary w-100 mb-3" href="index.html">
                            Skip for now
                        </a>
                        <p class="text-center mb-0">
                            <button type="submit">
                                başka bir tane istemek için burayı tıklayın
                            </button>
                        </p>
                    </form>
                </div>
            </div>
            <!-- /Verify Email -->
        </div>
    </div>
@endsection
