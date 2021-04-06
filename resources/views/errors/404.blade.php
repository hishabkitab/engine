@extends('layouts.error')

@section('title', __('Page Not Found'))

@section('code', '404')

@section('emotion')
    <div class="wd-70p wd-sm-250 wd-lg-300 mg-b-15">
        <img src="{{ asset('/images/img19.png') }}" class="img-fluid" alt="">
    </div>
@endsection

@section('message', __('Oopps. The page you were looking for doesn\'t exist.'))

@section('suggestion', __('You may have mistyped the address or the page may have moved. Try searching below.'))
