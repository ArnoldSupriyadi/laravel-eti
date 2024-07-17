@extends('layout.frontend.main')

@section('title', 'Home')

@section('content')
    <div class="animsition">
        <!-- Nav and Logo -->
        {{-- @include('layout.frontend.header') --}}

        <header class="cd-header">
            <div class="header-wrapper">
                <div class="logo-wrap2">
                    <a href="{{ route('landing') }}" class="cursor-link animsition-link"><img
                            src="{{ asset('frontend/img/logo/'. $logo) }}" alt="eti indonesia" class="img-fluid" /></a>
                </div>
                <div class="nav-but-wrap">
                    <div class="menu-icon cursor-link">
                        <span class="menu-icon__line2 menu-icon__line-left"></span>
                        <span class="menu-icon__line2"></span>
                        <span class="menu-icon__line2 menu-icon__line-right"></span>
                    </div>
                </div>
            </div>
        </header>

        @include('layout.frontend.navbar')

        <!-- Primary Page Layout -->
        <div class="section full-height over-hide background-dark-2">
            <!-- <div class="case-study-name-title">eti</div> -->
            <ul class="case-study-wrapper">
                <li class="case-study-name">
                    <span>{{ __('messages.about_us') }}</span>
                    <a href="{{ route('about') }}" class="cursor-link animsition-link">
                        {{ __('messages.explore') }}
                    </a>
                </li>
                <li class="case-study-name">
                    <span>{{ __('messages.menu_product') }}</span>
                    <a href="{{ route('products') }}" class="cursor-link animsition-link">
                        {{ __('messages.explore') }}
                    </a>
                </li>
                <li class="case-study-name">
                    <!-- Yang ini Contact ya mas nanda -->
                    <span>{{ __('messages.menu_contact') }}</span>
                    <a href="{{ route('contact') }}" class="cursor-link animsition-link">
                        {{ __('messages.explore') }}
                    </a>
                </li>
            </ul>
            <ul class="case-study-images">
                <li>
                    <div class="video-hero-background">
                        <video autoplay muted loop playsinline>
                            <source src="{{ asset('frontend/img/video/Drone_ETI.mp4') }}" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                        <!-- <div class="dark-over-hero"></div>
                                <div class="hero-number-back">1</div>
                                <div class="hero-number">1</div>
                                <div class="case-study-title">eti profile</div> -->
                    </div>
                </li>
            </ul>

            @include('layout.frontend.languagehome')
        </div>

        <!-- Page cursor -->
        <div class="cursor cursor-shadow"></div>
        <div class="cursor cursor-dot"></div>
    </div>
@endsection

@push('script')
    <script>
        // Optional: Add or remove news items dynamically
        const tickerList = document.querySelector(".ticker-list");

        // Example of adding a news item dynamically
        function addNewsItem(news) {
            const newItem = document.createElement("li");
            newItem.textContent = news;
            tickerList.appendChild(newItem);
        }

        // Example of removing a news item dynamically
        function removeNewsItem() {
            const firstItem = tickerList.querySelector("li");
            tickerList.removeChild(firstItem);
        }
    </script>
@endpush
