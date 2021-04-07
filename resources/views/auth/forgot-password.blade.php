@extends('view::layouts.engine')

@section('title', 'Forgot Password')

@push('style')

@endpush


@push('css')

@endpush

@section('content')
    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
        @include('view::components.engine.app-logo')

        <div class="u-login-form">
            <div class="mb-3">
                <h1 class="h2">Recover Your Password</h1>
                <p class="small">
                    Just let us confirm your email address and we will email you a
                    password reset link that will allow you to choose a new one.
                </p>
            </div>
            {!! Form::open(['route' => 'password.email', 'autocomplete' => 'off', 'spellcheck' => false, 'class' => 'mb-3']) !!}

            <div class="mb-3">
                {!! Form::nEmail('email', 'Email Address', null, true, ['placeholder' => 'example@yourmail.com']) !!}
            </div>

            {!! Form::button('Email Password Reset Link', ['class' => 'btn btn-warning btn-block', 'type' => 'submit']) !!}

            {!! Form::close() !!}

            <p class="small">
                Don’t have an account? <a href="{{ route('register') }}">Create one now</a>
            </p>
        </div>

        <div class="u-login-form text-muted py-3 mt-auto">
            <small>
                <i class="far fa-question-circle mr-1"></i>
                If you are not able to recover your password, please <a href="{{ route('support') }}">contact us</a>.
            </small>
        </div>
    </div>

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
@endsection

@push('script')

@endpush

@push('js')

@endpush
