@extends('view::layouts.web.site.master')

@push('css')
    {!!  Html::style('css/pages/auth.css') !!}
@endpush

@section('content')
    <div class="content content-fixed content-auth">
        <div class="container">
            <div class="media align-items-stretch justify-content-center ht-100p">
                <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
                    <div class="pd-t-20 wd-100p">
                        <h4 class="tx-color-01 mg-b-5">Create New Account</h4>
                        <p class="tx-color-03 tx-16 mg-b-40">It's free to signup and only takes a minute.</p>

                        {!! Form::open(['route' => 'register', 'autocomplete' => 'off', 'spellcheck' => false]) !!}

                        {!! Form::nText('name', 'Full Name', null, true, ['placeholder' => 'Your Name']) !!}

                        {!! Form::nEmail('email', 'Email Address', null, true, ['placeholder' => 'yourname@yourmail.com']) !!}

                        {!! Form::nPassword('password', 'Password', true, ['placeholder' => 'Enter your password']) !!}

                        {!! Form::nPassword('password_confirmation', 'Confirm Password', true, ['placeholder' => 'Retype your password']) !!}

                        <div class="form-group">
                            By clicking <strong>Create an account</strong> below, you agree to our terms of service and
                            <a href="#termsModal" data-toggle="modal"> privacy statement</a>.
                        </div>

                        {!! Form::button('Create Account', ['class' => 'btn btn-brand-02 btn-block', 'type' => 'submit']) !!}

                        {!! Form::close() !!}

                        <div class="divider-text">or</div>
                        <button class="btn btn-outline-facebook btn-block">Sign Up With Facebook</button>
                        <button class="btn btn-outline-twitter btn-block">Sign Up With Twitter</button>
                        <div class="tx-13 mg-t-20 tx-center">Already have an account? <a href="{!! route('login') !!}">Sign In</a></div>
                    </div>
                </div><!-- sign-wrapper -->
                <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
                    <div class="mx-lg-wd-500 mx-xl-wd-550">
                        <img src="{{ asset('/images/img16.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="pos-absolute b-0 r-0 tx-12">
                        Social media marketing vector is created by <a href="https://www.freepik.com/pikisuperstar" target="_blank">pikisuperstar (freepik.com)</a>
                    </div>
                </div><!-- media-body -->
            </div><!-- media -->
        </div><!-- container -->
    </div><!-- content -->

    {{-- Terms Modal --}}
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content tx-14">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Service Terms & Privacy Policy</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('engine::privacy')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary tx-13">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}
