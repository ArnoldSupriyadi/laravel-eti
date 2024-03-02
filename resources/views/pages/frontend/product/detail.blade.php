@extends('layout.frontend.main')

@section('title', 'Product Detail')

@section('content')
<div class="animsition">
      <!-- Nav and Logo
		================================================== -->

      @include('layout.frontend.header')

      @include('layout.frontend.navbar')

      <!-- Primary Page Layout
		================================================== -->

      <div class="section big-55-height over-hide">
        <div class="parallax parallax-top" style="background-image: url('/frontend/img/bg-sample.png')"></div>
        <div class="dark-over-pages"></div>

        <div class="hero-center-section">
          <div class="container z-bigger">
            <div class="row">
              <div class="col-12 section-title-wrap text-center parallax-fade-top-pages">
                <p>eti indonesia</p>
                <h1>soldier supplies</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section padding-top-bottom-big over-hide background-dark-2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <a href="img/cover-product1.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="img-wrap">
                  <img src="{{ asset('frontend/img/cover-product1.jpg') }}" class="cursor-more" alt="" />
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <a href="img/cover-product2.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="img-wrap">
                  <img src="{{ asset('frontend/img/cover-product2.jpg') }}" class="cursor-more" alt="" />
                </div>
              </a>
            </div>
            <div class="section clearfix"></div>
            <!-- <div class="col-md-8 padding-top-bottom text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
              <p class="mb-0 pb-0 lead">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
              </p>
            </div> -->
            <div class="section clearfix"></div>

            <!-- <div class="section clearfix padding-top"></div> -->
            <!-- <div class="col-md-4 text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
              <h5 class="mb-3">art direction</h5>
              <p class="mb-0 pb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
            </div>
            <div class="col-md-4 text-center mt-4 mt-md-0" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
              <h5 class="mb-3">cinematography</h5>
              <p class="mb-0 pb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
            </div>
            <div class="col-md-4 text-center mt-4 mt-md-0" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
              <h5 class="mb-3">advertising</h5>
              <p class="mb-0 pb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
            </div> -->
            <!-- <div class="section clearfix padding-bottom"></div> -->
          </div>
        </div>
        <!-- <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-12" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
              <div class="img-wrap">
                <img src="img/portfolio/project/3.jpg" alt="" />
              </div>
            </div>
          </div>
        </div> -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 padding-top-bottom text-center" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
              <p class="mb-0 pb-0 lead">
                Explore our extensive catalog of soldier supplies, meticulously curated to meet the rigorous demands of military life. From durable combat uniforms and footwear engineered for performance to advanced tactical gear designed
                for optimal functionality, our products are crafted with precision and tested for reliability in the field.
              </p>
            </div>
            <div class="col-md-12">
              <div class="img-wrap" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                <img src="{{ asset('frontend/img/Bulletproof_vest_5.jpg') }}" alt="" />
              </div>
            </div>

            <div class="section clearfix mt-2"></div>
          </div>
          <div class="row">
            <div class="col-md-6 mt-5 mt-md-5">
              <a href="img/defense1.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="img-wrap">
                  <img src="{{ asset('frontend/img/defense1.jpg') }}" class="cursor-more" alt="" />
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-5 mt-md-5">
              <a href="img/defense2.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="img-wrap">
                  <img src="{{ asset('frontend/img/defense2.jpg') }}" class="cursor-more" alt="" />
                </div>
              </a>
            </div>

            <div class="col-md-6 mt-5 mt-md-5">
              <a href="img/defense3.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="img-wrap">
                  <img src="{{ asset('frontend/img/defense3.jpg') }}" class="cursor-more" alt="" />
                  <!-- <h6 class="mt-3" style="font-size: 14px">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic nulla impedit aperiam sunt odit sapiente, maiores aspernatur provident inventore reprehenderit dolorem perspiciatis delectus! Officiis, asperiores magni sunt
                    suscipit doloremque adipisci!
                  </h6> -->
                </div>
              </a>
            </div>

            <div class="col-md-6 mt-5 mt-md-5">
              <a href="img/defense4.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="img-wrap">
                  <img src="{{ asset('frontend/img/defense4.jpg') }}" class="cursor-more" alt="" />
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="section padding-top-bottom-small background-black">
        <div class="container-fluid px-5">
          <div class="row">
            <div class="col-md-6 footer text-center text-md-left">
              <p>2024 © ETI Indonesia</p>
            </div>
            <div class="col-md-6 mt-4 mt-md-0 text-center">
              <div class="social-wrap on-footer">
                language
                <ul>
                  <li>
                    <a href="index-1.html" class="cursor-link"><img src="img/icons8-indonesia-96.png" alt="indonesia" class="img-fluid" /></a>
                  </li>
                  <li>
                    <a href="index-1.html" class="cursor-link"><img src="img/icons8-great-britain-96.png" alt="indonesia" class="img-fluid" /></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="scroll-to-top cursor-link"></div>

      <!-- Page cursor
	================================================== -->

      <div class="cursor cursor-shadow"></div>
      <div class="cursor cursor-dot"></div>
    </div>
@endsection