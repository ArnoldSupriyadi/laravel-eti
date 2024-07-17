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
                            <h1>{{ $category->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section padding-top-bottom-big over-hide background-dark-2">
            <div class="container">

              <div class="row mt-4">
                <div class="col-md-4">
                  <img src="{{ asset('frontend/img/battle-dress-uniform/BDU-COVER.png') }}" class="img-fluid" alt="" />
                </div>
                <div class="col-md-8 pt-4">
                  <div class="flex-grow-1 ms-1">
                    <h6 id="soldier-supplies-title">SOLDIER SUPPLIES – BATTLE FIELD UNIFORM & PROTECTION</h6>
                    <p id="soldier-supplies-content">ETI is the nation's son who will contribute to the needs of the forces with his ability to complete military operations. As much as possible, in line with military strategy expectations and the needs of its users.

                      Your mission is our mission, your protection choice is our responsibility.

                      By producing comfortable tactical gear apparel while still prioritizing military defense standards specifically.</p>
                    <!-- <ul>
                      <li>This is some content from a media component. You can replace this with any content and adjust it as needed.</li>
                      <li>This is some content from a media component. You can replace this with any content and adjust it as needed.</li>
                      <li>This is some content from a media component. You can replace this with any content and adjust it as needed.</li>
                      <li>This is some content from a media component. You can replace this with any content and adjust it as needed.</li>
                      <li>This is some content from a media component. You can replace this with any content and adjust it as needed.</li>
                    </ul> -->
                  </div>
                </div>
              </div>

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
