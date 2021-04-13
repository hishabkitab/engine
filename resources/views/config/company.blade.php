@extends('engine::layouts.config')

@section('title', 'Company Configuration')

@section('breadcrumb', Breadcrumbs::render())

@push('style')

@endpush

@push('css')

@endpush

@section('content')
    <div class="card-header d-md-flex align-items-center">
        <h3 class="card-header-title font-weight-bold"><i class="fas fa-building"></i> Company Profile</h3>

    </div>
    {!! Form::open(['route' => 'config.company']) !!}
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                {!! Form::nText('name', 'Name', null, true) !!}
            </div>
            <div class="col-md-6">
                {!! Form::nEmail('email','Email', null, false) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                {!! Form::nTextarea('address', 'Address', null, true, ['rows' => '5']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::nFile('logo','Logo', null, false, [true, 88, '/img/logo-mobile.png'], ['accept'=>".png, .jpg, .jpeg"]) !!}
            </div>
        </div>
        {{--
        <!-- Tabs Content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="panelWithTabsTab1" role="tabpanel">
                <h5 class="h4 card-title">Tabs Content 1</h5>
                <p class="card-text">The purpose of your brochure may differ from business to business. Some are
                    designed to display services, whereas others are focused on selling an idea. No matter what the
                    focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must
                    grab a viewer’s attention and hold it long enough to deliver the pertinent information.</p>
            </div>

            <div class="tab-pane fade" id="panelWithTabsTab2" role="tabpanel">
                <h5 class="h4 card-title">Tabs Content 2</h5>
                <p class="card-text">The purpose of your brochure may differ from business to business. Some are
                    designed to display services, whereas others are focused on selling an idea. No matter what the
                    focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must
                    grab a viewer’s attention and hold it long enough to deliver the pertinent information.</p>
            </div>

            <div class="tab-pane fade" id="panelWithTabsTab3" role="tabpanel">
                <h5 class="h4 card-title">Tabs Content 3</h5>
                <p class="card-text">The purpose of your brochure may differ from business to business. Some are
                    designed to display services, whereas others are focused on selling an idea. No matter what the
                    focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must
                    grab a viewer’s attention and hold it long enough to deliver the pertinent information.</p>
            </div>
        </div>
        <!-- End Tabs Content -->
        --}}
    </div>

    <div class="card-footer">
        <nav aria-label="Bootstrap Pager Example">
            <ul class="list-unstyled d-flex justify-content-between align-items-center mb-0">
                <li>
                    <a href="#!" class="btn btn-outline-primary pager-btn">Skip</a>
                </li>
                <li>
                    <span class="text-muted"><span class="d-none d-sm-inline-block">Page</span> 1 of 3</span>
                </li>
                <li>
                    <button type="submit" class="btn btn-primary pager-btn">Save <span class="ml-1">→</span></button>
                </li>
            </ul>
        </nav>
    </div>
    {!! Form::close() !!}
@endsection

@push('script')

@endpush

@push('js')

@endpush