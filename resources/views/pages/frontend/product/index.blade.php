@extends('layout.frontend.main')

@section('title', 'Product & Service')

@section('content')
    <div class="animsition">
        @include('layout.frontend.header')

        @include('layout.frontend.navbar')

        <!-- Primary Page Layout -->
        <div class="section big-55-height over-hide">
            <div class="parallax parallax-top" style="background-image: url('img/product-service-cover.jpg')"></div>
            <div class="dark-over-pages"></div>

            <div class="hero-center-section">
                <div class="container z-bigger">
                    <div class="row">
                        <div class="col-12 section-title-wrap text-center parallax-fade-top-pages">
                            <p>ETI Indonesia</p>
                            <h1>{{ __('messages.product_service') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section padding-top-bottom-big over-hide background-dark-2">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($products as $product)
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('frontend/img/products/' . $product->image) }}" class="cursor-more img-fluid"
                                alt="" />
                            <a href="{{ route('productCategory', $product->id) }}"
                                class="btn btn-contact-custom cursor-link p-3 mt-2 btn-block">
                                {{ __('messages.more') }} {{ $product->name }}</a>
                        </div>
                    @endforeach

                    {{-- <div class="col-md-6 text-center">
                        <img src="{{ asset('frontend/img/defense-cover-img.jpg') }}" class="cursor-more img-fluid"
                            alt="" />
                        <a href="{{ route('productsCategory') }}"
                            class="btn btn-contact-custom cursor-link p-3 mt-2 btn-block">More Defense</a>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <img src="{{ asset('frontend/img/commercial-cover-img.jpg') }}" class="cursor-more img-fluid"
                            alt="" />
                        <a href="{{ route('productsCategory2') }}"
                            class="btn btn-contact-custom cursor-link p-3 mt-2 btn-block">More Commercial</a>
                    </div> --}}

                    <div class="section clearfix"></div>
                    <div class="col-md-8 padding-top-bottom text-center"
                        data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                        <p class="mb-0 pb-0 lead">
                            {{ __('messages.product_service_val') }}
                        </p>
                    </div>
                    <div class="section clearfix"></div>
                </div>
            </div>
        </div>

        @include('layout.frontend.languagehome')

        <div class="scroll-to-top cursor-link"></div>

        <!-- Page cursor -->
        <div class="cursor cursor-shadow"></div>
        <div class="cursor cursor-dot"></div>

    </div>
@endsection
