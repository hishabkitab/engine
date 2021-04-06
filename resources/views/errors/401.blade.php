@extends('layouts.error')

@section('title', __('Unauthorized'))

@section('code', '401')

@section('emotion')
    <div class="wd-70p wd-sm-250 wd-lg-300 mg-b-15">
        <img src="{{ asset('/images/img19.png') }}" class="img-fluid" alt="">
    </div>
@endsection

@section('message', __('Unauthorized response, missing or bad authentication'))

@section('suggestion', __('The server is refusing to respond and authentication has failed or not yet been provided'))
