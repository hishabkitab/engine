@extends('engine::layouts.auth')

@section('title', 'Reset Password')

@push('style')

@endpush


@push('css')

@endpush

@section('content')
    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
        @include('engine::components.app-logo')

        <div class="u-login-form">
            <div class="mb-3">
                <h1 class="h2">Authorized Action</h1>
                <p class="small">
                    This is a secure area of the application. Please confirm your password before continuing.
                </p>
            </div>
            {!! Form::open(['route' => 'password.update', 'autocomplete' => 'off', 'spellcheck' => false, 'class' => 'mb-3']) !!}

            <div class="mb-3">
                {!! Form::nEmail('email', 'Email Address', null, true, ['placeholder' => 'example@yourmail.com']) !!}
            </div>

            <div class="mb-3">
                {!! Form::nPassword('password', 'Password', true, ['placeholder' => 'Enter your password']) !!}
            </div>

            <div class="mb-3">
                {!! Form::nPassword('password_confirmation', 'Confirm Password', true, ['placeholder' => 'Retype your password']) !!}
            </div>

            {!! Form::button('Reset Password', ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}

            {!! Form::close() !!}

        </div>
    </div>

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
@endsection

@push('script')

@endpush

@push('js')

@endpush


<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-3" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
