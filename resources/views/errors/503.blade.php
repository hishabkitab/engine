@extends('layouts.error')

@section('title', __('Service Unavailable'))

@section('code', '503')

@section('emotion')
    <div class="wd-70p wd-sm-250 wd-lg-300 mg-b-15">
        <img src="{{ asset('/images/img21.png') }}" class="img-fluid" alt="">
    </div>
@endsection

@section('message', __('Oopps. The service is temporarily unavailable.'))

@section('suggestion', __('The server is unable to service your request due to maintenance downtime or capacity problems.'))
