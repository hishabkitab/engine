@extends('view::layouts.master')

@push('style')
    <link rel="stylesheet" href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
@endpush

@section('module-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/client.css') }}">
@endsection

@section('body')
    <!-- Header (Topbar) -->
    <header class="u-header">
        @include('engine::partials.navbar')
    </header>
    <!-- End Header (Topbar) -->

    <main role="main">
        <div class="u-content">
            <div class="u-body">
                @yield('breadcrumb')
<div class="card">

</div>

                @yield('content')
            </div>
            @include('view::components.app-footer')

        </div>
    </main>
@endsection

@section('module-script')

@endsection

