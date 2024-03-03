@extends('layout.frontend.main')

@section('title', 'Home')

@section('content')
   <div class="animsition">
      <!-- Nav and Logo
		================================================== -->
      @include('layout.frontend.header')

      @include('layout.frontend.navbar')

        <!-- Primary Page Layout
      ================================================== -->

        <div class="section full-height over-hide background-dark-2">
          <!-- <div class="case-study-name-title">eti</div> -->
          <ul class="case-study-wrapper">
            <li class="case-study-name"><span>About ETI</span> <a href="{{ route('about') }}" class="cursor-link animsition-link">explore</a></li>
            <li class="case-study-name"><span>Product & Service</span> <a href="{{ route('products') }}" class="cursor-link animsition-link">explore</a></li>
            <!-- <li class="case-study-name"><span>Cioccolati</span> <a href="project.html" class="cursor-link animsition-link">explore</a></li>
            <li class="case-study-name"><span>Maybach</span> <a href="project.html" class="cursor-link animsition-link">explore</a></li>
            <li class="case-study-name"><span>Anwis Stuttgart</span> <a href="project.html" class="cursor-link animsition-link">explore</a></li>
            <li class="case-study-name"><span>Brand Center</span> <a href="project.html" class="cursor-link animsition-link">explore</a></li> -->
          </ul>
          <ul class="case-study-images">
            <li>
              <div class="img-hero-background" style="background-image: url('frontend/img/photo-home-1.jpg')"></div>
              <div class="dark-over-hero"></div>
              <div class="hero-number-back">1</div>
              <div class="hero-number">1</div>
              <!-- <div class="hero-number-fixed">06</div> -->
              <div class="case-study-title">eti profile</div>
            </li>
            <li>
              <div class="img-hero-background" style="background-image: url('frontend/img/photo-home-2.jpg')"></div>
              <div class="hero-number-back">2</div>
              <div class="hero-number">2</div>
              <div class="case-study-title">Commercial & Defense</div>
            </li>
          </ul>
          
          @include('layout.frontend.languagehome')
        </div>

        <!-- Page cursor
      ================================================== -->

        <div class="cursor cursor-shadow"></div>
        <div class="cursor cursor-dot"></div>
    </div>
@endsection