@extends('layout.frontend.main')

@section('title', 'ETI Indonesia')

@section('content')
   <div class="animsition">
      <!-- Nav and Logo
		================================================== -->

      <header class="cd-header">
        <div class="header-wrapper">
          <div class="logo-wrap">
            <a href="index.html" class="cursor-link animsition-link"><img src="img/eti-logo-white.png" alt="eti indonesia" class="img-fluid" /></a>
          </div>
          <div class="nav-but-wrap">
            <div class="menu-icon cursor-link">
              <span class="menu-icon__line menu-icon__line-left"></span>
              <span class="menu-icon__line"></span>
              <span class="menu-icon__line menu-icon__line-right"></span>
            </div>
          </div>
        </div>
      </header>

      <div class="nav">
        <div class="nav__content">
          <ul class="nav__list">
            <li class="nav__list-item"><a href="index.html" class="cursor-link animsition-link">home</a></li>
            <li class="nav__list-item"><a href="about.html" class="cursor-link animsition-link">about</a></li>
            <li class="nav__list-item"><a href="productService.html" class="cursor-link animsition-link">products</a></li>
            <li class="nav__list-item"><a href="gallery.html" class="cursor-link animsition-link">gallery</a></li>
            <li class="nav__list-item"><a href="contact.html" class="cursor-link animsition-link">contact</a></li>
          </ul>
        </div>
      </div>

      <!-- Primary Page Layout
		================================================== -->

      <div class="section full-height over-hide background-dark-2">
        <!-- <div class="case-study-name-title">eti</div> -->
        <ul class="case-study-wrapper">
          <li class="case-study-name"><span>About ETI</span> <a href="about.html" class="cursor-link animsition-link">explore</a></li>
          <li class="case-study-name"><span>Product & Service</span> <a href="productService.html" class="cursor-link animsition-link">explore</a></li>
          <!-- <li class="case-study-name"><span>Cioccolati</span> <a href="project.html" class="cursor-link animsition-link">explore</a></li>
          <li class="case-study-name"><span>Maybach</span> <a href="project.html" class="cursor-link animsition-link">explore</a></li>
          <li class="case-study-name"><span>Anwis Stuttgart</span> <a href="project.html" class="cursor-link animsition-link">explore</a></li>
          <li class="case-study-name"><span>Brand Center</span> <a href="project.html" class="cursor-link animsition-link">explore</a></li> -->
        </ul>
        <ul class="case-study-images">
          <li>
            <div class="img-hero-background" style="background-image: url('img/photo-home-1.jpg')"></div>
            <div class="dark-over-hero"></div>
            <div class="hero-number-back">1</div>
            <div class="hero-number">1</div>
            <!-- <div class="hero-number-fixed">06</div> -->
            <div class="case-study-title">eti profile</div>
          </li>
          <li>
            <div class="img-hero-background" style="background-image: url('img/photo-home-2.jpg')"></div>
            <div class="hero-number-back">2</div>
            <div class="hero-number">2</div>
            <div class="case-study-title">Commercial & Defense</div>
          </li>
        </ul>
        <div class="social-wrap">
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

      <!-- Page cursor
	  ================================================== -->

      <div class="cursor cursor-shadow"></div>
      <div class="cursor cursor-dot"></div>
    </div>
@endsection