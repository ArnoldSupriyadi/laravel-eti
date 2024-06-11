<div class="nav">
    <div class="nav__content">
        <ul class="nav__list">
            <li class="nav__list-item">
                <a href="{{ route('landing') }}" class="cursor-link animsition-link">
                    {{ __('messages.mainmenu_home') }}
                </a>
            </li>
            <li class="nav__list-item">
                <a href="{{ route('about') }}" class="cursor-link animsition-link">
                    {{ __('messages.mainmenu_about') }}
                </a>
            </li>
            <li class="nav__list-item">
                <a href="{{ route('products') }}" class="cursor-link animsition-link">
                    {{ __('messages.mainmenu_products') }}
                </a>
            </li>
            <li class="nav__list-item">
                <a href="{{ route('gallery') }}" class="cursor-link animsition-link">
                    {{ __('messages.mainmenu_gallery') }}
                </a>
            </li>
            <li class="nav__list-item">
                <a href="{{ route('contact') }}" class="cursor-link animsition-link">
                    {{ __('messages.mainmenu_contact') }}
                </a>
            </li>
        </ul>
    </div>
</div>
