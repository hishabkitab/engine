@extends('layouts.error')

@section('title', __('Forbidden'))

@section('code', '505')

@section('emotion')
    <div class="wd-70p wd-sm-250 wd-lg-300 mg-b-15">
        <img src="{{ asset('/images/img22.png') }}" class="img-fluid" alt="">
    </div>
@endsection

@section('message', __('Oopps. Something is broken.'))

@section('suggestion', __('We\'ve been automatically alerted of the issue and will work to fix it asap.'))
