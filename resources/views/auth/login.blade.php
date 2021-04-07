@extends('view::layouts.engine')

@section('title', 'Login')

@push('style')

@endpush


@push('css')

@endpush

@section('content')
    <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
        <img class="img-fluid position-relative u-z-index-3 mx-5" src="{{ asset('/assets/svg/mockups/mockup.svg') }}"
             alt="Image description">

        <figure class="u-shape u-shape--top-right u-shape--position-5">
            <img src="{{ asset('/assets/svg/shapes/shape-1.svg') }}" alt="Image description">
        </figure>
        <figure class="u-shape u-shape--center-left u-shape--position-6">
            <img src="{{ asset('/assets/svg/shapes/shape-2.svg') }}" alt="Image description">
        </figure>
        <figure class="u-shape u-shape--center-right u-shape--position-7">
            <img src="{{ asset('/assets/svg/shapes/shape-3.svg') }}" alt="Image description">
        </figure>
        <figure class="u-shape u-shape--bottom-left u-shape--position-8">
            <img src="{{ asset('/assets/svg/shapes/shape-4.svg') }}" alt="Image description">
        </figure>
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
        <a class="u-login-form py-3 mb-auto" href="index.html">
            <img class="img-fluid" src="{{ asset('/assets/img/logo-app.png') }}" width="160"
                 alt="Stream Dashboard UI Kit">
        </a>

        <div class="u-login-form">
            <div class="mb-3">
                <h1 class="h2">Welcome Back!</h1>
                <p class="small">Login to your dashboard with your registered email address and password.</p>
            </div>
            {!! Form::open(['route' => 'login', 'autocomplete' => 'off', 'spellcheck' => false, 'class' => 'mb-3']) !!}

            <div class="mb-4">
                {!! Form::nEmail('email', 'Email Address', null, false, ['placeholder' => 'example@yourmail.com']) !!}
            </div>

            <div class="mb-4">
                {!! Form::nPassword('password', 'Password', false, ['placeholder' => 'Enter your password']) !!}
            </div>

            <div class="form-group d-flex justify-content-between align-items-center mb-4">
                <div class="custom-control custom-checkbox">
                    <input id="rememberMe" class="custom-control-input" name="rememberMe" type="checkbox">
                    <label class="custom-control-label" for="rememberMe">Remember me</label>
                </div>

                <a class="link-muted small" href="{{ route('password.request') }}">Forgot Password?</a>
            </div>

            {!! Form::button('Log In', ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}

            {!! Form::close() !!}

            <p class="small">
                Don’t have an account? <a href="{{ route('register') }}">Sign Up here</a>
            </p>
        </div>

        <div class="u-login-form text-muted py-3 mt-auto">
            <small>
                <i class="far fa-question-circle mr-1"></i>
                If you are not able to sign in, please <a href="#">contact us</a>.
            </small>
        </div>
    </div>
@endsection

@push('script')

@endpush

@push('js')

@endpush

