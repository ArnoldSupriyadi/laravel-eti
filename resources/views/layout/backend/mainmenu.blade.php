<div class="main-menu material-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- <li class="active"><a href="index.html"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Crypto Dashboard">Crypto Dashboard</span></a>
                </li> --}}
            {{-- <li class=" navigation-header"><span data-i18n="Crypto">Crypto</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Crypto">more_horiz</i>
                </li> --}}

            <li class=" nav-item">
                <a href="{{ route('logo.index') }}">
                    <i class="material-icons">image</i>
                    <span class="menu-title" data-i18n="Transactions">Logo</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ route('about.index') }}">
                    <i class="material-icons">business_center</i>
                    <span class="menu-title" data-i18n="Currency Exchange">About</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="material-icons">explore</i>
                    <span class="menu-title" data-i18n="Components">Product & Services</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="component-alerts.html">
                            <i class="material-icons"></i>
                            <span data-i18n="Alerts">Defense</span>
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="component-callout.html">
                            <i class="material-icons"></i>
                            <span data-i18n="Callout">Commercial</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="{{ route('gallery.index') }}">
                    <i class="material-icons">collections</i>
                    <span class="menu-title" data-i18n="Wallet">Gallery</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ route('contact.index') }}">
                    <i class="material-icons">perm_contact_calendar</i>
                    <span class="menu-title" data-i18n="Wallet">Contact</span>
                </a>
            </li>

            <li class=" navigation-header">
                <span data-i18n="User Interface">Authentication</span>
                <i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right"
                    data-original-title="User Interface">more_horiz</i>
            </li>

            <li class=" nav-item">
                <a href="{{ route('user.index') }}">
                    <i class="material-icons">person</i>
                    <span class="menu-title" data-i18n="User">User</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ route('role.index') }}"><i class="material-icons">supervisor_account</i>
                    <span class="menu-title" data-i18n="User">Role</span>
                </a>
            </li>

            {{-- <li class=" nav-item"><a href="#"><i class="material-icons">straighten</i><span class="menu-title" data-i18n="Material Components">Material Components</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="material-component-buttons.html"><i class="material-icons"></i><span data-i18n="Buttons">Buttons</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-cards.html"><i class="material-icons"></i><span data-i18n="Cards">Cards</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-chips.html"><i class="material-icons"></i><span data-i18n="Chips">Chips</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-datatables.html"><i class="material-icons"></i><span data-i18n="Data tables">Data tables</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-dialogs.html"><i class="material-icons"></i><span data-i18n="Dialogs">Dialogs</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-elevation-shadows.html"><i class="material-icons"></i><span data-i18n="Elevation Shadows">Elevation Shadows</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-expansion-panels.html"><i class="material-icons"></i><span data-i18n="Expansion Panels">Expansion Panels</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-icons.html"><i class="material-icons"></i><span data-i18n="Icons">Icons</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-menu.html"><i class="material-icons"></i><span data-i18n="Menu">Menu</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-navigation.html"><i class="material-icons"></i><span data-i18n="Navigation Drawer">Navigation Drawer</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-pickers.html"><i class="material-icons"></i><span data-i18n="Pickers">Pickers</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-progress.html"><i class="material-icons"></i><span data-i18n="Progress">Progress</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-selection-controls.html"><i class="material-icons"></i><span data-i18n="Selection Controls">Selection Controls</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-snackbars.html"><i class="material-icons"></i><span data-i18n="Snackbars">Snackbars</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-steppers.html"><i class="material-icons"></i><span data-i18n="Steppers">Steppers</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-tabs.html"><i class="material-icons"></i><span data-i18n="Tabs">Tabs</span></a>
                        </li>
                        <li><a class="menu-item" href="material-component-textfields.html"><i class="material-icons"> </i><span data-i18n="Text fields">Text fields</span></a>
                        </li>
                    </ul>
                </li> --}}

            {{-- <li class=" nav-item"><a href="#"><i class="material-icons">lock_outline</i><span class="menu-title" data-i18n="Authentication">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="login-with-bg-image.html" target="_blank"><i class="material-icons"></i><span>Login</span></a>
                        </li>
                        <li><a class="menu-item" href="register-with-bg-image.html" target="_blank"><i class="material-icons"></i><span>SignIn</span></a>
                        </li>
                        <li><a class="menu-item" href="recover-password.html" target="_blank"><i class="material-icons"></i><span>Forgot Password</span></a>
                        </li>
                    </ul>
                </li> --}}
        </ul>
    </div>
</div>
