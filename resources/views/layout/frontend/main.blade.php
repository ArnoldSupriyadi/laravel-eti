<html class="no-js" lang="en">
  <!--<![endif]-->
  <head>
    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8" />
    <title>ETI | @yield('title')</title>
    <meta name="description" content="Professional Creative Template" />
    <meta name="author" content="IG Design" />
    <meta name="keywords" content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
    <meta property="og:title" content="Professional Creative Template" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="470" />
    <meta property="og:image:height" content="246" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="Professional Creative Template" />
    <meta name="twitter:card" content="" />
    <meta name="twitter:site" content="https://twitter.com/IvanGrozdic" />
    <meta name="twitter:domain" content="http://ivang-design.com/" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="Professional Creative Template" />
    <meta name="twitter:image" content="http://ivang-design.com/" />

    <!-- Mobile Specific Metas
	================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

    @include('layout.frontend.style')
  </head>
  <body class="{{ request()->routeIs('landing') ? 'over-hide' : '' }}">
    <!-- Page preloader wrap
	================================================== -->

    <!-- CONTENT -->
      @yield('content')
    <!-- END OF CONTENT -->
    
    <!-- JAVASCRIPT
    ================================================== -->
    @include('layout.frontend.scripts')
    <!-- End Document
================================================== -->
  </body>
</html>
