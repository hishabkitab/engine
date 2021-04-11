@extends('engine::layouts.auth')

@section('title', 'Login')

@push('style')

@endpush


@push('css')

@endpush

@section('content')
    <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
        <img class="img-fluid position-relative u-z-index-3 mx-5" src="{{ asset('/svg/mockups/mockup.svg') }}"
             alt="Image description">

        <figure class="u-shape u-shape--top-right u-shape--position-5">
            <img src="{{ asset('/svg/shapes/shape-1.svg') }}" alt="Image description">
        </figure>
        <figure class="u-shape u-shape--center-left u-shape--position-6">
            <img src="{{ asset('/svg/shapes/shape-2.svg') }}" alt="Image description">
        </figure>
        <figure class="u-shape u-shape--center-right u-shape--position-7">
            <img src="{{ asset('/svg/shapes/shape-3.svg') }}" alt="Image description">
        </figure>
        <figure class="u-shape u-shape--bottom-left u-shape--position-8">
            <img src="{{ asset('/svg/shapes/shape-4.svg') }}" alt="Image description">
        </figure>
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
        @include('engine::components.app-logo')

        <div class="u-login-form">
            <div class="mb-3">
                <h1 class="h2">Welcome Back!</h1>
                <p class="small">Login to your dashboard with your registered email address and password.</p>
            </div>
            {!! Form::open(['route' => 'login', 'autocomplete' => 'off', 'spellcheck' => false, 'class' => 'mb-3']) !!}


            {!! Form::nEmail('email', 'Email Address', null, true, ['placeholder' => 'example@yourmail.com']) !!}

            {!! Form::nPassword('password', 'Password', true, ['placeholder' => 'Enter your password']) !!}

            <div class="form-group d-flex justify-content-between align-items-center mb-4">
                <div class="custom-control custom-checkbox">
                    <input id="rememberMe" class="custom-control-input" name="rememberMe" type="checkbox">
                    <label class="custom-control-label" for="rememberMe">Remember me</label>
                </div>
                @if (Route::has('password.request'))
                    <a class="link-muted small" href="{{ route('password.request') }}">Forgot Password?</a>
                @endif
            </div>

            {!! Form::button('Sign In', ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}

            {!! Form::close() !!}

            <p class="small">
                Don’t have an account? <a href="{{ route('register') }}">Create one now!</a>
            </p>
        </div>

        <div class="u-login-form text-muted py-3 mt-auto">
            <small>
                <i class="far fa-question-circle mr-1"></i>
                If you are not able to sign in, please <a href="{{ route('support') }}">contact us</a>.
            </small>
        </div>
    </div>
@endsection

@push('script')

@endpush

@push('js')

@endpush

