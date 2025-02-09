@extends('layout.frontend.main')

@section('title', 'About')

@section('content')
<div class="animsition">
    <!-- Nav and Logo -->
    @include('layout.frontend.header-putih')

    @include('layout.frontend.navbar')

    <div class="section padding-page-top padding-bottom over-hide background-dark-2">
        <div class="container">
            <div class="row">
                <div class="col-12 section-title-wrap text-center parallax-fade-top">
                    <h3 class="mb-5">{{ __('messages.about_us') }}</h3>
                    <!-- <h1>Four Technologies<br />Indonesia</h1> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor"
                        class="bi bi-building" viewBox="0 0 16 16" style="color: #ffffff">
                        <path
                            d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                        <path
                            d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-bottom over-hide background-dark-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <p class="mb-0 pb-0 lead">
                        {{ __('messages.about_val') }}
                    </p>
                </div>
                <div class="section clearfix"></div>
                <div class="col-md-12 padding-top-bottom">
                    <div class="img-wrap">
                        <img src="{{ asset('frontend/img/abouts/' . $aboutImage) }}" alt="eti" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-12 text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <h3 class="mb-2">{{ __('messages.vision') }}</h3>
                    <p class="mb-0 pb-0">{{ __('messages.vision_val') }}</p>
                    {{-- <p class="mb-0 pb-0">{{ $vision }}</p> --}}
                </div>
                <div class="col-md-12 text-center mt-5 mt-md-4"
                    data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <h3 class="mb-2">{{ __('messages.mission') }}</h3>
                    <p class="mb-0 pb-0">{{ __('messages.mission_val') }}</p>
                    {{-- <p class="mb-0 pb-0">{{ $mission }}</p> --}}
                </div>
                {{-- <div class="section clearfix"></div>
                <div class="col-md-4 text-center mt-5" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <h5 class="mb-3">campaigns</h5>
                    <p class="mb-0 pb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                </div>
                <div class="col-md-4 text-center mt-5" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <h5 class="mb-3">web design</h5>
                    <p class="mb-0 pb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom over-hide background-dark-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <p class="mb-0 pb-0 lead-q">
                        <em>"{{ __('messages.comp_core_value') }}"</em>
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                @foreach ($coreValues as $core)
                    <div class="col-md-6 text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                        <h6 class="mb-0 pb-0 lead-q">
                            <em>{{ App::getLocale() === 'en' ? $core->name : $core->nama }}</em>
                        </h6>
                        <p class="mt-2">{{ App::getLocale() === 'en' ? $core->description : $core->deskripsi }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="section padding-bottom over-hide background-dark-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section clearfix"></div>
                <div class="col-md-12 text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <h3 class="mb-2 mt-5"><b>{{ __('messages.work_partners') }}</b></h3>
                    <p class="mb-0 pb-0">{{ __('messages.vision_val') }}</p>
                </div>
            </div>
            <div class="row">
                @foreach($clientWorkPartners as $partner)
                    <div class="col-md-4 text-center mt-5 mt-md-4"
                        data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                        <img src="{{ asset('frontend/img/clients/' . $partner->logo) }}" alt="{{ $partner->name }}" class="img-fluid" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="section padding-bottom over-hide background-dark-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section clearfix"></div>
                <div class="col-md-12 text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <h3 class="mb-2 mt-5"><b>{{ __('messages.product_spec') }}</b></h3>
                </div>
            </div>
            <div class="row">
                @foreach($clientProductSpecializations as $specialization)
                    <div class="col-md-2 text-center mt-5 mt-md-4"
                        data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                        <img src="{{ asset('frontend/img/clients/'. $specialization->logo) }}" alt="{{ $specialization->name }}"
                            class="img-fluid" />
                    </div>
                @endforeach
                {{-- <div class="col-md-2 text-center mt-5 mt-md-4"
                    data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <img src="{{ asset('frontend/img/product-specalization/image.png') }}" alt="teknosolusi"
                        class="img-fluid" />
                </div>
                <div class="col-md-2 text-center mt-5 mt-md-4"
                    data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <img src="{{ asset('frontend/img/product-specalization/image2.png') }}" alt="teknosolusi"
                        class="img-fluid" />
                </div>
                <div class="col-md-2 text-center mt-5 mt-md-4"
                    data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <img src="{{ asset('frontend/img/product-specalization/image3.png') }}" alt="teknosolusi"
                        class="img-fluid" />
                </div>
                <div class="col-md-2 text-center mt-5 mt-md-4"
                    data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <img src="{{ asset('frontend/img/product-specalization/image4.png') }}" alt="teknosolusi"
                        class="img-fluid" />
                </div>
                <div class="col-md-2 text-center mt-5 mt-md-4"
                    data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <img src="{{ asset('frontend/img/product-specalization/image5.png') }}" alt="teknosolusi"
                        class="img-fluid" />
                </div>
                <div class="col-md-2 text-center mt-5 mt-md-4"
                    data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <img src="{{ asset('frontend/img/product-specalization/image6.png') }}" alt="teknosolusi"
                        class="img-fluid" />
                </div> --}}
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom-big over-hide background-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <a href="{{ route('contact') }}" class="cursor-link animsition-link">
                        <div class="project-link-wrap">
                            <p>{{ __('messages.lets_talk') }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('layout.frontend.languagehome') --}}

    <div class="scroll-to-top cursor-link"></div>

    <!-- Page cursor -->
    <div class="cursor cursor-shadow"></div>
    <div class="cursor cursor-dot"></div>

</div>
@endsection
