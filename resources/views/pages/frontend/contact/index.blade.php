@extends('layout.frontend.main')

@section('title', 'Contact')

@section('content')
    <div class="animsition">
        <!-- Nav and Logo -->
        @include('layout.frontend.header-putih')

        @include('layout.frontend.navbar')

        <!-- Primary Page Layout -->
        <div class="section padding-page-top padding-bottom over-hide background-dark-2">
            <div class="container">
              <div class="row">
                <div class="col-12 section-title-wrap text-center parallax-fade-top">
                  <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16" style="color: #ffffff">
                    <path
                      d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"
                    />
                  </svg>
                  <h1 class="mt-5" id="contact">
                    {{ __('messages.contact_title') }}
                    {{-- CONTACT US --}}
                </h1>
                </div>
              </div>
            </div>
        </div>

        <div class="section padding-bottom-big over-hide background-dark-2">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-md-4 ajax-form">
                    <a href="mailto:{{ $email }}" class="btn btn-contact-custom cursor-link p-3">
                        Email {{ __('messages.at') }} {{ $email }}</a>
                </div>
                <div class="col-md-4 mt-4 mt-md-0 ajax-form">
                    <a href="{{ $waLink }}" class="btn btn-contact-custom cursor-link p-3">
                        Whatsapp {{ __('messages.at') }} +{{ $phone }}</a>
                </div>

                </div>
            </div>
        </div>

        <div class="section padding-top-bottom-big over-hide">
            <div class="parallax" style="background-image: url('{{ asset('frontend/img/map.jpg') }}')"></div>
            <div class="dark-over-pages"></div>

            <div class="section z-bigger">
                <div class="container z-bigger">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <h5>{{ $addressOne }}</h5>
                    {{-- <h5>Office 8 Building, Level 18<br />JI. Senopati No 18 Jakarta 12910 - Indonesia</h5> --}}
                    </div>
                    <div class="section clearfix"></div>
                    <div class="col-md-7 mt-4 text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <a href="{{ $mapsOne }}" class="contact-link cursor-link" target="_blank">{{ __('messages.find_map') }}</a>
                    {{-- <a href="https://maps.app.goo.gl/HR1DCsjiupb4JjM46" class="contact-link cursor-link" target="_blank">{{ __('messages.find_map') }}</a> --}}
                    </div>
                    <div class="col-md-7 text-center pt-5" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <h5>{{ $addressTwo }}</h5>
                    {{-- <h5>Jl. Pendidikan No. 17 <br />Cilandak, Jakarta 12320</h5> --}}
                    </div>
                    <div class="section clearfix"></div>
                    <div class="col-md-7 mt-4 text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <a href="{{ $mapsTwo }}" class="contact-link cursor-link" target="_blank">{{ __('messages.find_map') }}</a>
                    {{-- <a href="https://maps.app.goo.gl/uES3t16z9WNRPbcp6" class="contact-link cursor-link" target="_blank">{{ __('messages.find_map') }}</a> --}}
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="section padding-top-bottom-big over-hide background-dark">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <a href="mailto:{{ $email }}" class="cursor-link">
                <div class="project-link-wrap on-contact">
                    <p>{{ $email }}</p>
                </div>
                </a>
            </div>
            </div>
        </div>
        </div>

        @include('layout.frontend.languagehome')

        <div class="scroll-to-top cursor-link"></div>
        <div class="cursor cursor-shadow"></div>
        <div class="cursor cursor-dot"></div>

    </div>

    <!-- Page cursor -->
        <div class="cursor cursor-shadow"></div>
        <div class="cursor cursor-dot"></div>
    </div>
@endsection
