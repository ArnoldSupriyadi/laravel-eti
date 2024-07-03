@extends('layout.frontend.main')

@section('title', 'Gallery')

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
                  <p>we do magic</p>
                  <h1>CHASE YOUR<br />PASSION</h1>
                </div>
              </div>
            </div>
          </div>
    
          <div class="section padding-bottom over-hide background-dark-2">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div id="portfolio-filter" class="portfolio-filter">
                    <ul id="filter">
                      <li><a href="#" class="current cursor-link" data-filter="*" title="" id="gallery">gallery</a></li>
                      <!-- <li><a href="#" class="cursor-link" data-filter=".commercial" title="">commercial</a></li>
                      <li><a href="#" class="cursor-link" data-filter=".defense" title="">defense</a></li> -->
                      <!-- <li><a href="#" class="cursor-link" data-filter=".motion" title="">motion</a></li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
    
            <div id="projects-grid">
              <!-- <a href="img/gallery/Condorz_1.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box photo">
                  <img src="img/gallery/Condorz_1.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
              <a href="img/gallery/Condorz_2.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box motion">
                  <img src="img/gallery/Condorz_2.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
              <a href="img/gallery/Condorz_3.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box branding">
                  <img src="img/gallery/Condorz_3.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
              <a href="img/gallery/Condorz_4.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box photo">
                  <img src="img/gallery/Condorz_4.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a> -->
    
              <a href="img/gallery/Condorz_4.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/Condorz_4.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
    
              <a href="img/gallery/IMG-20240606-WA0002.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/IMG-20240606-WA0002.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
    
              <a href="img/gallery/IMG-20240606-WA0003.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/IMG-20240606-WA0003.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
    
              <a href="img/gallery/IMG-20240606-WA0004.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/IMG-20240606-WA0004.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
    
              <a href="img/gallery/IMG-20240606-WA0005.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/IMG-20240606-WA0005.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
    
              <a href="img/gallery/IMG-20240606-WA0006.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/IMG-20240606-WA0006.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
    
              <a href="img/gallery/IMG-20240606-WA0007.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/IMG-20240606-WA0007.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
    
              <a href="img/gallery/IMG-20240606-WA0008.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/IMG-20240606-WA0008.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
    
              <a href="img/gallery/IMG-20240606-WA0009.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/IMG-20240606-WA0009.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
    
              <a href="img/gallery/IMG-20240606-WA0011.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/IMG-20240606-WA0011.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
    
              <a href="img/gallery/IMG-20240606-WA0012.jpg" class="cursor-link" data-fancybox="gallery">
                <div class="portfolio-box defense">
                  <img src="img/gallery/IMG-20240606-WA0012.jpg" alt="" />
                  <div class="portfolio-mask"></div>
                  <p>eti indonesia</p>
                  <h4>gallery</h4>
                </div>
              </a>
            </div>
          </div>

        @include('layout.frontend.languagehome')

        <div class="scroll-to-top cursor-link"></div>

        <!-- Page cursor -->
        <div class="cursor cursor-shadow"></div>
        <div class="cursor cursor-dot"></div>

    </div>
@endsection
