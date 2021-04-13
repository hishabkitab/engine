@extends('view::layouts.master')

@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/line-awesome/line-awesome/css/line-awesome.min.css') }}">
@endpush

@section('module-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/client.css') }}">
@endsection

@section('body')
    <main class="container-fluid w-100" role="main">
        <div class="row">
            @yield('content')
        </div>
    </main>
@endsection

@section('module-script')

@endsection