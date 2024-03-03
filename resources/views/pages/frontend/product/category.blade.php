@extends('layout.frontend.main')

@section('title', 'Product Category')

@section('content')
<div class="animsition">
      @include('layout.frontend.header')

      @include('layout.frontend.navbar')

      <!-- Primary Page Layout
		================================================== -->

      <div class="section padding-page-top padding-bottom over-hide background-dark-2">
        <div class="container">
          <div class="row">
            <div class="col-12 section-title-wrap text-center parallax-fade-top">
              <h3 class="mb-5">defense</h3>
              <!-- <h1>chase your<br />defense</h1> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16" style="color: #ffffff">
                <path
                  fill-rule="evenodd"
                  d="M8 14.933a1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="section padding-bottom over-hide background-dark-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="portfolio-filter" class="portfolio-filter">
                <!-- <ul id="filter">
                  <li><a href="#" class="current cursor-link" data-filter="*" title="">all</a></li>
                  <li><a href="#" class="cursor-link" data-filter=".branding" title="">branding</a></li>
                  <li><a href="#" class="cursor-link" data-filter=".photo" title="">photo</a></li>
                  <li><a href="#" class="cursor-link" data-filter=".motion" title="">motion</a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>

        <div id="projects-grid">
          <a href="{{ route('productsDetail') }}" class="cursor-link animsition-link tipped" data-title="Soldier <span><em>supplies</em></span>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'>
            <div class="portfolio-box photo">
              <img src="{{ asset('frontend/img/perbekalan-prajurit.jpg') }}" alt="" />
              <div class="portfolio-mask"></div>
              <h5 class="mt-2">Soldier supplies</h5>
            </div>
          </a>
          <a href="{{ route('productsDetail') }}" class="cursor-link animsition-link tipped" data-title="technology <span><em>information</em></span>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'>
            <div class="portfolio-box motion">
              <img src="{{ asset('frontend/img/teknologi-informasi.jpg') }}" alt="" />
              <div class="portfolio-mask"></div>
              <h5 class="mt-2">Technology and information</h5>
            </div>
          </a>
          <a href="{{ route('productsDetail') }}" class="cursor-link animsition-link tipped" data-title="modified <span><em>vehicles</em></span>" data-tipper-options='{"direction":"top","follow":"true","margin":30}'>
            <div class="portfolio-box branding">
              <img src="{{ asset('frontend/img/kendaraan-modifikasi.jpg') }}" alt="" />
              <div class="portfolio-mask"></div>
              <h5 class="mt-2">Modified vehicles</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="scroll-to-top cursor-link"></div>

      {{-- Language --}}
      @include('layout.frontend.language')
      {{-- End of Language --}}

      <div class="scroll-to-top cursor-link"></div>

      <!-- Page cursor
	================================================== -->

      <div class="cursor cursor-shadow"></div>
      <div class="cursor cursor-dot"></div>
      
 </div>
@endsection