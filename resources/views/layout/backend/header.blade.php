<nav
    class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-lg-none mr-auto">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i class="ft-menu font-large-1"></i></a>
                </li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <img class="brand-logo" src="{{ asset('frontend/img/Logo_ETI_New_white.png') }}"
                            alt="branding logo" style="width: 25%">
                        {{-- <h3 class="brand-text">ETI</h3> --}}
                        {{-- <img
                            class="brand-logo" alt="modern admin logo"
                            src="{{ asset('backend/app-assets/images/logo/logo.png') }}">
                        <h3 class="brand-text">Modern</h3> --}}
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">

                    <ul class="mega-dropdown-menu dropdown-menu row p-1">
                        <li class="col-md-4 bg-mega p-2">
                            <h3 class="text-white mb-1 font-weight-bold">Mega Menu Sidebar</h3>
                            <p class="text-white line-height-2">Candy canes bonbon toffee. Cheesecake dragée gummi bears
                                chupa chups powder bonbon. Apple pie cookie sweet.</p>
                            <button class="btn btn-outline-white">Learn More</button>
                        </li>
                        <li class="col-md-5 px-2">
                            <h6 class="font-weight-bold font-medium-2 ml-1">Admin Panel</h6>
                            <ul class="row mt-2">
                                <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3"
                                        href="../ecommerce-menu-template" target="_blank"><i
                                            class="la la-shopping-cart font-large-1 mr-0"></i>
                                        <p class="font-medium-2 mt-25 mb-0">eCommerce</p>
                                    </a></li>
                                <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3"
                                        href="../travel-menu-template" target="_blank"><i
                                            class="la la-plane font-large-1 mr-0"></i>
                                        <p class="font-medium-2 mt-25 mb-0">Travel</p>
                                    </a></li>
                                <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3 mt-75 mt-xl-0"
                                        href="../hospital-menu-template" target="_blank"><i
                                            class="la la-stethoscope font-large-1 mr-0"></i>
                                        <p class="font-medium-2 mt-25 mb-0">Hospital</p>
                                    </a></li>
                                <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0"
                                        href="../crypto-menu-template" target="_blank"><i
                                            class="la la-bitcoin font-large-1 mr-0"></i>
                                        <p class="font-medium-2 mt-25 mb-50">Crypto</p>
                                    </a></li>
                                <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0"
                                        href="../support-menu-template" target="_blank"><i
                                            class="la la-tag font-large-1 mr-0"></i>
                                        <p class="font-medium-2 mt-25 mb-50">Support</p>
                                    </a></li>
                                <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0"
                                        href="../bank-menu-template" target="_blank"><i
                                            class="la la-bank font-large-1 mr-0"></i>
                                        <p class="font-medium-2 mt-25 mb-50">Bank</p>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="col-md-3">
                            <h6 class="font-weight-bold font-medium-2">Components</h6>
                            <ul class="row mt-1 mt-xl-2">
                                <li class="col-12 col-xl-6 pl-0">
                                    <ul class="mega-component-list">
                                        <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                href="component-alerts.html" target="_blank">Alert</a></li>
                                        <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                href="component-callout.html" target="_blank">Callout</a></li>
                                        <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                href="component-buttons-basic.html" target="_blank">Buttons</a></li>
                                        <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                href="component-carousel.html" target="_blank">Carousel</a></li>
                                    </ul>
                                </li>
                                <li class="col-12 col-xl-6 pl-0">
                                    <ul class="mega-component-list">
                                        <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                href="component-dropdowns.html" target="_blank">Drop Down</a></li>
                                        <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                href="component-list-group.html" target="_blank">List Group</a></li>
                                        <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                href="component-modals.html" target="_blank">Modals</a></li>
                                        <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                href="component-pagination.html" target="_blank">Pagination</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1 user-name text-bold-700">
                                {{ Auth::user()->name }}
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id) }}">
                                <i class="material-icons">person</i>Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <i class="material-icons">power_settings_new</i>Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
