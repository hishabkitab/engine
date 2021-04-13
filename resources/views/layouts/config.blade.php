@extends('view::layouts.master')

@push('style')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/vendor/line-awesome/line-awesome/css/line-awesome.min.css') }}">
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
                    @yield('content')
                </div>
            </div>
            @include('view::partials.app-footer')

        </div>
    </main>
@endsection

@push('script')
    <script type="text/javascript"
            src="{{ asset('/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
@endpush

@section('module-script')

@endsection

@push('js')
    <script>
        (function ($) {
            $(window).on("load", function () {
                $(".content").mCustomScrollbar({
                    axis: "y",
                    setHeight: 300,
                    scrollInertia: 150
                });
            });
        })(jQuery);
    </script>
@endpush

