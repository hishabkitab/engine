@extends('layouts.error')

@section('title', __('Internal Server Error'))

@section('code', '500')

@section('emotion')
    <div class="wd-70p wd-sm-250 wd-lg-300 mg-b-15">
        <img src="{{ asset('/images/img21.png') }}" class="img-fluid" alt="">
    </div>
@endsection

@section('message', __('Oopps. There was an error, please try again later.'))

@section('suggestion', __('The server encountered an internal server error and was unable to complete your request.'))
