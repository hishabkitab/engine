@extends('view::layouts.web.site.master')

@push('css')
    {!!  Html::style('css/pages/auth.css') !!}
@endpush

@section('content')
    <div class="content content-fixed content-auth-alt">
        <div class="container ht-100p">
            <div class="ht-100p d-flex flex-column align-items-center justify-content-center">
                <div class="wd-150 wd-sm-250 mg-b-30"><img src="https://via.placeholder.com/500x380" class="img-fluid" alt=""></div>
                <h4 class="tx-20 tx-sm-24">Verify your email address</h4>
                <p class="tx-color-03 mg-b-40">Please check your email and click the verify button or link to verify your account.</p>
                <div class="tx-13 tx-lg-14 mg-b-40">
                    <a href="" class="btn btn-brand-02 d-inline-flex align-items-center">Resend Verification</a>
                    <a href="" class="btn btn-white d-inline-flex align-items-center mg-l-5">Contact Support</a>
                </div>
                <span class="tx-12 tx-color-03">Mailbox with envelope vector is created by <a href="https://www.freepik.com/free-photos-vectors/background">freepik (freepik.com)</a></span>
            </div>
        </div><!-- container -->
    </div><!-- content -->
@endsection
{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
--}}
