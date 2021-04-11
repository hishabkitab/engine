@extends('engine::layouts.auth')

@section('title', 'Create Account')

@push('style')

@endpush


@push('css')

@endpush

@section('content')
    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
        @include('engine::components.app-logo')

        <div class="u-login-form">
            <div class="mb-3">
                <h1 class="h2">Claim Your Free account!</h1>
                <p class="small">Create an account and get all the awesome features and free invoice templates.</p>
            </div>
            {!! Form::open(['route' => 'register', 'autocomplete' => 'off', 'spellcheck' => false, 'class' => 'mb-3']) !!}

            {!! Form::nText('name', 'Full Name', null, true, ['placeholder' => 'Your Name']) !!}

            {!! Form::nEmail('email', 'Email Address', null, true, ['placeholder' => 'example@yourmail.com']) !!}

            <div class="form-group">
                <label for="username">Domain Address</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white">http://</span>
                    </div>

                    {!! Form::text('username', null, [
'class' => 'form-control border-left-0 border-right-0',
'placeholder' => 'Username',
'aria-label' => 'Username',
 'aria-describedby' => 'basic-addon2',
 'required' => 'required']) !!}

                    <div class="input-group-append">
                        <span class="input-group-text bg-white" id="basic-addon2">.hishabkitab.com</span>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6">
                    {!! Form::nPassword('password', 'Password', true, ['placeholder' => 'Enter your password']) !!}
                </div>
                <div class="col-md-6">
                    {!! Form::nPassword('password_confirmation', 'Confirm Password', true, ['placeholder' => 'Retype your password']) !!}
                </div>
            </div>

            <div class="custom-control custom-checkbox mb-4">
                <input id="rememberMe" class="custom-control-input" name="rememberMe" type="checkbox">
                <label class="d-block custom-control-label" for="rememberMe">
                    I agree with
                    <a href="#termsModal" data-toggle="modal">terms &amp; conditions</a>
                </label>
            </div>

            {!! Form::button('Create Account', ['class' => 'btn btn-success btn-block', 'type' => 'submit']) !!}

            {!! Form::close() !!}

            <p class="small">
                Already have an account? <a href="{{ route('login') }}">Sign In</a>
            </p>
        </div>

        <div class="u-login-form text-muted py-3 mt-auto">
            <small>
                <i class="far fa-question-circle mr-1"></i>
                If you are not able to sign up, please <a href="{{ route('support') }}">contact us</a>.
            </small>
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
    {{-- Terms Modal --}}
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-14">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Service Terms & Privacy Policy</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style=" height: 75vh; overflow-y: auto;">
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

@push('script')

@endpush

@push('js')

@endpush

