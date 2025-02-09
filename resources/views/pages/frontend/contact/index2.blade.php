@extends('layout.frontend.main')

@section('title', 'Contact')

@section('content')
    <div class="animsition">
        <!-- Nav and Logo -->
        @include('layout.frontend.header')

        @include('layout.frontend.navbar')

        <!-- Primary Page Layout -->
        <div class="section padding-page-top padding-bottom over-hide background-dark-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 section-title-wrap text-center parallax-fade-top">
                        <p>
                            {{ __('messages.head_contact') }}
                        </p>
                        <h1>{{ __('messages.sub_contact') }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="section padding-bottom-big over-hide background-dark-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 ajax-form">
                        <a href="mailto:admin@etindonesia.id" class="btn btn-contact-custom cursor-link p-3">
                            Email {{ __('messages.at') }} {{ $email }}</a>
                    </div>
                    <div class="col-md-4 mt-4 mt-md-0 ajax-form">
                        <a href="https://wa.link/rv6ozz" class="btn btn-contact-custom cursor-link p-3">
                            Whatsapp {{ __('messages.at') }} +{{ $phone }}</a>
                    </div>
                    {{-- <div class="section clearfix"></div>
                    <div class="col-md-8 mt-4 ajax-form">
                        <textarea class="cursor-link" name="message" placeholder="Tell Us Everything"></textarea>
                    </div> --}}
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
                            <h5>{{ $address }}</h5>
                            {{-- <h5>Office 8 Building, floor 18<br />Jl Senopati no 18 SCBD, Jakarta 12910</h5> --}}
                        </div>
                        <div class="section clearfix"></div>
                        <div class="col-md-7 mt-5 text-center"
                            data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                            <a href="https://www.google.com/maps/place/vOffice+-+Office+8+(Virtual+Office+%7C+Serviced+Office+%7C+Meeting+Room)/@-6.2284484,106.8044165,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f145491b7017:0x6e654c3d9fa174e0!8m2!3d-6.2284537!4d106.8069914!16s/g/1pty4j6ms"
                                class="contact-link cursor-link" target="_blank">
                                {{ __('messages.find_map') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section padding-top-bottom-big over-hide background-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <a href="mailto:admin@etindonesia.id" class="cursor-link">
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
