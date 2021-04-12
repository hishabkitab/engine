@extends('engine::layouts.config')

@section('title', 'Company Configuration')

@push('style')

@endpush

@push('css')

@endpush

@section('breadcrumb')
    <!-- End Breadcrumb -->
    <nav aria-label="breadcrumb">
        <h1 class="h3">Company</h1>
        <ol class="breadcrumb bg-transparent small p-0">
            <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="./index.html">Configuration</a></li>
            <li class="breadcrumb-item active" aria-current="page">Company</li>
        </ol>
    </nav>
    <!-- End Breadcrumb -->
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-md-flex align-items-center">
            <h2 class="h3 card-header-title">Card Tabs</h2>

            <!-- Tabs Nav -->
            <ul class="nav nav-tabs card-header-tabs ml-md-auto mt-3 mt-md-0">
                <li class="nav-item">
                    <a href="#panelWithTabsTab1" class="nav-link active" role="tab" aria-selected="true" data-toggle="tab">Active</a>
                </li>
                <li class="nav-item">
                    <a href="#panelWithTabsTab2" class="nav-link" role="tab" aria-selected="true" data-toggle="tab">Link</a>
                </li>
                <li class="nav-item">
                    <a href="#panelWithTabsTab3" class="nav-link" role="tab" aria-selected="true" data-toggle="tab">Link</a>
                </li>
            </ul>
            <!-- End Tabs Nav -->
        </div>

        <div class="card-body">
            <!-- Tabs Content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="panelWithTabsTab1" role="tabpanel">
                    <h5 class="h4 card-title">Tabs Content 1</h5>
                    <p class="card-text">The purpose of your brochure may differ from business to business. Some are designed to display services, whereas others are focused on selling an idea. No matter what the focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must grab a viewer’s attention and hold it long enough to deliver the pertinent information.</p>
                </div>

                <div class="tab-pane fade" id="panelWithTabsTab2" role="tabpanel">
                    <h5 class="h4 card-title">Tabs Content 2</h5>
                    <p class="card-text">The purpose of your brochure may differ from business to business. Some are designed to display services, whereas others are focused on selling an idea. No matter what the focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must grab a viewer’s attention and hold it long enough to deliver the pertinent information.</p>
                </div>

                <div class="tab-pane fade" id="panelWithTabsTab3" role="tabpanel">
                    <h5 class="h4 card-title">Tabs Content 3</h5>
                    <p class="card-text">The purpose of your brochure may differ from business to business. Some are designed to display services, whereas others are focused on selling an idea. No matter what the focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must grab a viewer’s attention and hold it long enough to deliver the pertinent information.</p>
                </div>
            </div>
            <!-- End Tabs Content -->
        </div>

        <div class="card-footer">
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#">Link 1</a></li>
                <li class="list-inline-item"><a href="#">Link 2</a></li>
                <li class="list-inline-item"><a href="#">Link 3</a></li>
            </ul>
        </div>
    </div>

@endsection

@push('script')

@endpush

@push('js')

@endpush