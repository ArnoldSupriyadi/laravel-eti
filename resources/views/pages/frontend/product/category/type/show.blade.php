@extends('layout.frontend.main')

@section('title', 'Product Type Detail')

@section('content')
    <div class="animsition">
        <!-- Nav and Logo -->
        @include('layout.frontend.header-putih')

        @include('layout.frontend.navbar')

        <!-- Primary Page Layout -->
        <div class="section big-55-height over-hide">
            <div class="parallax parallax-top" style="background-image: url('/frontend/img/bg-sample.png')"></div>
            <div class="dark-over-pages"></div>

            <div class="hero-center-section">
                <div class="container z-bigger">
                    <div class="row">
                        <div class="col-12 section-title-wrap text-center parallax-fade-top-pages">
                            <p>eti indonesia</p>
                            <h1>{{ App::getLocale() === 'en' ? $type->name : $type->nama }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section padding-top-bottom-big over-hide background-dark-2">
            <div class="container">
                @foreach ($galleries as $gallery)
                    <div class="row mt-4">
                        <div class="col-md-4">
                        <img src="{{ asset('frontend/img/products/types/type'.$gallery->type_id.'/'.$gallery->image) }}" class="img-fluid" alt="" />
                        </div>
                        <div class="col-md-8 pt-4">
                        <div class="flex-grow-1 ms-1">
                            <h6 id="soldier-supplies-title">
                                {{ App::getLocale() === 'en' ? $gallery->name : $gallery->nama }}
                            </h6>
                            <p id="soldier-supplies-content">
                                {!! App::getLocale() === 'en' ? $gallery->description : $gallery->deskripsi !!}
                            </p>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
          </div>

        {{-- Language --}}
        @include('layout.frontend.languagehome')
        {{-- End of Language --}}
        <div class="scroll-to-top cursor-link"></div>

        <!-- Page cursor  -->
        <div class="cursor cursor-shadow"></div>
        <div class="cursor cursor-dot"></div>
    </div>
@endsection
