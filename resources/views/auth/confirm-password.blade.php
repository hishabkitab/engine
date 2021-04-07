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
                <h1 class="h2">Authorized Action</h1>
                <p class="small">
                    This is a secure area of the application. Please confirm your password before continuing.
                </p>
            </div>
            {!! Form::open(['route' => 'password.confirm', 'autocomplete' => 'off', 'spellcheck' => false, 'class' => 'mb-3']) !!}

            <div class="mb-3">
                {!! Form::nPassword('password', 'Password', true, ['placeholder' => 'Enter your password']) !!}
            </div>

            {!! Form::button('Confirm', ['class' => 'btn btn-danger btn-block', 'type' => 'submit']) !!}

            {!! Form::close() !!}

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

