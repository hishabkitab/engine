<div class="u-header-left border-right-0">
    @include('view::components.app-logo')
</div>

<div class="u-header-middle">
    <div class="u-header-search"
         data-search-mobile-invoker="#headerSearchMobileInvoker"
         data-search-target="#headerSearch">
        <a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker"
           href="#!">
            <i class="fa fa-search"></i>
        </a>

        <div id="headerSearch" class="u-header-search-form">
            {!! Form::open() !!}
            <div class="input-group">
                <button class="btn-link input-group-prepend u-header-search__btn" type="submit">
                    <i class="fa fa-search"></i>
                </button>
                {!!  Form::search('search', null,[
    'class' => 'form-control u-header-search__field',
    'placeholder' => 'Type to search…', 'required' => 'required'
    ]) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<div class="u-header-right">
    <!-- Notifications -->
    <div class="dropdown mr-4">
        <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false"
           data-toggle="dropdown">
				    <span class="h3">
			    		<i class="far fa-bell"></i>
				    </span>
            <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-info"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink"
             style="width: 360px;">
            <div class="card">
                <div class="card-header d-md-flex align-items-center py-3">
                    <h2 class="h4 card-header-title">Notifications</h2>
                    <a class="ml-auto" href="#">Clear all</a>
                </div>

                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <!-- Notification -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <div class="u-icon u-icon--sm rounded-circle bg-danger text-white mr-3">
                                    <i class="fab fa-dribbble"></i>
                                </div>

                                <div class="media-body">
                                    <div class="d-md-flex align-items-center">
                                        <h4 class="mb-1">Dribbble</h4>
                                        <small class="text-muted ml-md-auto">23 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        <span class="text-primary">@htmlstream</span> just liked your post!
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Notification -->

                        <!-- Notification -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
                                    <i class="fab fa-twitter"></i>
                                </div>

                                <div class="media-body">
                                    <div class="d-md-flex align-items-center">
                                        <h4 class="mb-1">Twitter</h4>
                                        <small class="text-muted ml-md-auto">18 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        Someone mentioned you on the tweet.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Notification -->

                        <!-- Notification -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <div class="u-icon u-icon--sm rounded-circle bg-success text-white mr-3">
                                    <i class="fab fa-spotify"></i>
                                </div>

                                <div class="media-body">
                                    <div class="d-md-flex align-items-center">
                                        <h4 class="mb-1">Spotify</h4>
                                        <small class="text-muted ml-md-auto">18 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        You've just recived $25 free gift card.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Notification -->

                        <!-- Notification -->
                        <a class="list-group-item list-group-item-action" href="#">
                            <div class="media align-items-center">
                                <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
                                    <i class="fab fa-facebook-f"></i>
                                </div>

                                <div class="media-body">
                                    <div class="d-md-flex align-items-center">
                                        <h4 class="mb-1">Facebook</h4>
                                        <small class="text-muted ml-md-auto">18 Jan 2018</small>
                                    </div>

                                    <p class="text-truncate mb-0" style="max-width: 250px;">
                                        <span class="text-primary">@htmlstream</span> commented in your post.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- End Notification -->
                    </div>
                </div>

                <div class="card-footer py-3">
                    <a class="btn btn-block btn-outline-primary" href="#">View all notifications</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Notifications -->

    <!-- User Profile -->
    <div class="dropdown ml-2">
        <a class="link-muted d-flex align-items-center" href="#!" role="button" id="dropdownMenuLink"
           aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
            <img class="u-avatar--xs img-fluid rounded-circle mr-2" src="{{ asset('/img/avatars/img1.jpg') }}" alt="User Profile">
            <span class="text-dark d-none d-sm-inline-block">
							Bruce Goodman <small class="fa fa-angle-down text-muted ml-1"></small>
						</span>
        </a>

        <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink"
             style="width: 260px;">
            <div class="card">
                <div class="card-header py-3">
                    <!-- Storage -->
                    <div class="d-flex align-items-center mb-3">
                        <span class="h6 text-muted text-uppercase mb-0">Storage</span>

                        <div class="ml-auto text-muted">
                            <strong class="text-dark">60gb</strong> / 100gb
                        </div>
                    </div>

                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Storage -->
                </div>

                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-4">
                            <a class="d-flex align-items-center link-dark" href="#!">
                                <span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-2"></i></span> View
                                Profile
                            </a>
                        </li>
                        <li class="mb-4">
                            <a class="d-flex align-items-center link-dark" href="#!">
                                <span class="h3 mb-0"><i class="far fa-list-alt text-muted mr-2"></i></span> Settings
                            </a>
                        </li>
                        <li class="mb-4">
                            <a class="d-flex align-items-center link-dark" href="#!">
                                <span class="h3 mb-0"><i class="far fa-laugh-wink text-muted mr-2"></i></span> Invite
                                your friends
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center link-dark" href="#!">
                                <span class="h3 mb-0"><i class="far fa-share-square text-muted mr-2"></i></span> Sign
                                Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End User Profile -->
</div>
