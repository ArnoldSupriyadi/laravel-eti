<div class="main-menu material-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- <li class="active"><a href="index.html"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Crypto Dashboard">Crypto Dashboard</span></a>
                </li> --}}
            {{-- <li class=" navigation-header"><span data-i18n="Crypto">Crypto</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Crypto">more_horiz</i>
                </li> --}}

            <li class=" nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="material-icons">home</i>
                    <span class="menu-title" data-i18n="Currency Exchange">Dashboard</span>
                </a>
            </li>

            <li class=" nav-item {{ request()->routeIs('logo.index') ? 'active' : '' }}">
                <a href="{{ route('logo.index') }}">
                    <i class="material-icons">remove_red_eye</i>
                    <span class="menu-title" data-i18n="Transactions">Logo</span>
                </a>
            </li>

            <li class=" nav-item {{ request()->routeIs('about.index') ? 'active' : '' }}">
                <a href="{{ route('about.index') }}">
                    <i class="material-icons">business_center</i>
                    <span class="menu-title" data-i18n="Currency Exchange">About</span>
                </a>
            </li>

            <li class=" nav-item {{ request()->routeIs('product.index') ? 'active' : '' }}">
                <a href="{{ route('product.index') }}">
                    <i class="material-icons">explore</i>
                    <span class="menu-title" data-i18n="Components">Product & Services</span>
                </a>
            </li>

            <li class=" nav-item {{ request()->routeIs('gallery.index') ? 'active' : '' }}">
                <a href="{{ route('gallery.index') }}">
                    <i class="material-icons">collections</i>
                    <span class="menu-title" data-i18n="Wallet">Gallery</span>
                </a>
            </li>


            <li class=" nav-item {{ request()->routeIs('news.index') ? 'active' : '' }}">
                <a href="{{ route('news.index') }}">
                    <i class="material-icons">description</i>
                    <span class="menu-title" data-i18n="Wallet">News</span>
                </a>
            </li>

            <li class=" nav-item {{ request()->routeIs('portfolio.index') ? 'active' : '' }}">
                <a href="{{ route('portfolio.index') }}">
                    <i class="material-icons">lightbulb_outline</i>
                    <span class="menu-title" data-i18n="Wallet">Portfolio</span>
                </a>
            </li>

            <li class=" nav-item {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                <a href="{{ route('contact.index') }}">
                    <i class="material-icons">perm_contact_calendar</i>
                    <span class="menu-title" data-i18n="Wallet">Contact</span>
                </a>
            </li>

            {{-- Authentication NavbarHeader --}}
            <li class=" navigation-header">
                <span data-i18n="User Interface">Authentication</span>
                <i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right"
                    data-original-title="User Interface">more_horiz</i>
            </li>

            <li class=" nav-item {{ request()->routeIs('user.index') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}">
                    <i class="material-icons">person</i>
                    <span class="menu-title" data-i18n="User">User</span>
                </a>
            </li>

            {{-- <li class=" nav-item {{ request()->routeIs('role.index') ? 'active' : '' }}">
                <a href="{{ route('role.index') }}"><i class="material-icons">supervisor_account</i>
                    <span class="menu-title" data-i18n="User">Role</span>
                </a>
            </li> --}}

        </ul>
    </div>
</div>
