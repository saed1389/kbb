@extends('layouts.appMain')
@section('title') Üye Ol @endsection
@section('content')
    <aside class="px-xl-5 px-4 auth-aside" data-bs-theme="none">


        <img class="login-img" src="{{ asset('assets/images/kbb-logo.svg') }}" alt="">
    </aside>
    <div class="px-xl-5 px-4 auth-body">
        <form>
            <ul class="row g-3 list-unstyled li_animate">
                <li class="col-12">
                    <h1 class="h2 title-font">Kişisel Bilgileri</h1>
                    <p>Your Admin Dashboard</p>
                </li>
                <li class="col-6">
                    <label class="form-label">Full name</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Jony">
                </li>
                <li class="col-6">
                    <label class="form-label">&nbsp;</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Parker">
                </li>
                <li class="col-12">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control form-control-lg" placeholder="name@example.com">
                </li>
                <li class="col-6">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg" placeholder="8+ characters required">
                </li>
                <li class="col-6">
                    <label class="form-label">Confirm password</label>
                    <input type="password" class="form-control form-control-lg" placeholder="8+ characters required">
                </li>
                <li class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="TermsConditions">
                        <label class="form-check-label" for="TermsConditions">
                            I accept the <a href="#" title="" class="text-primary">Terms and Conditions</a>
                        </label>
                    </div>
                </li>
                <li class="col-12 my-4">
                    <a class="btn btn-lg w-100 btn-primary text-uppercase mb-2" href="index.html" title="">SIGN UP</a>
                    <a class="btn btn-lg btn-secondary w-100" href="#">
                        <i class="fa fa-google me-2"></i>
                        <span>Sign up with Google</span>
                    </a>
                </li>
                <li class="col-12">
                    <span class="text-muted d-flex d-sm-inline-flex mt-3 mt-sm-0">Already have an account? <a class="ms-2" href="signin.html">Sign in here</a></span>
                </li>
            </ul><!--[ ul.row end ]-->
        </form>
    </div>
@endsection
