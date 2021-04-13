<div class="u-header-left border-right-0">
    @include('view::partials.app-logo')
</div>

<div class="u-header-middle">
    <div class="u-header-search"
         data-search-mobile-invoker="#headerSearchMobileInvoker"
         data-search-target="#headerSearch">
        @include('view::partials.search')
    </div>
</div>

<div class="u-header-right">
    <!-- Notifications -->
@include('view::partials.notifications')
<!-- End Notifications -->

    <!-- User Profile -->
@include('view::partials.profile')
<!-- End User Profile -->
</div>
