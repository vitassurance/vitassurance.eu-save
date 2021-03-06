<!DOCTYPE html>
<html lang="fr">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
   <title>{{$parametrage->titre}} - Comparateur d'assurance</title>

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('front-end/img/favicon/favicon-144x144.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('front-end/img/favicon/favicon-72x72.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('front-end/img/favicon/favicon-54x54.png') }}">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	{{ Html::style('front-end/css/bootstrap.min.css') }}
	<!-- Template styles-->
	{{ Html::style('front-end/css/style.css') }}
	<!-- Responsive styles-->
	{{ Html::style('front-end/css/responsive.css') }}
	<!-- FontAwesome -->
	{{ Html::style('front-end/css/font-awesome.min.css') }}
	<!-- Animation -->
	{{ Html::style('front-end/css/animate.css') }}
	<!-- Owl Carousel -->
	{{ Html::style('front-end/css/owl.carousel.css') }}
	{{ Html::style('front-end/css/owl.theme.default.min.css') }}
	<!-- Colorbox -->
	{{ Html::style('front-end/css/colorbox.css') }}
	<!-- testimonials -->
	{{ Html::style('front-end/css/testimonials.css') }}

	@yield('stylesheets')

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>

	<div class="body-inner">

	<!--<div id="top-bar" class="top-bar">
		
	</div>/ Topbar end -->

	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
		   @include('front-end.include.header')
		</div><!-- Container end -->
	</header><!--/ Header end -->

	<nav class="site-navigation navigation">
		<div class="container">
			@include('front-end.include.navigation')
		</div><!--/ Container end -->
	</nav><!--/ Navigation end -->


       @yield('content')


	<section id="testimonial" class="testimonial">
		<div class="container">
		  @yield('testimonials')
		</div><!--/ Container end -->
	</section><!--/ Testimonial end -->

	<section class="footer-top no-padding">
		@include('front-end.include.footer-top')
	</section><!--/ Footer top end -->

	<!-- Footer start -->
	<footer id="footer" class="footer">
		<div class="container">
			
		 @include('front-end.include.footer')

		</div><!--/ Container end -->
	</footer><!-- Footer end -->

	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	{{ Html::script('front-end/js/jquery.js') }}
	<!-- Bootstrap jQuery -->
	{{ Html::script('front-end/js/bootstrap.min.js') }}
	<!-- Owl Carousel -->
	{{ Html::script('front-end/js/owl.carousel.min.js') }}
	<!-- Counter -->
	{{ Html::script('front-end/js/jquery.counterup.min.js') }}
	<!-- Waypoints -->
	{{ Html::script('front-end/js/waypoints.min.js') }}
	<!-- Color box -->
	{{ Html::script('front-end/js/jquery.colorbox.js') }}
	<!-- Isotope -->
	{{ Html::script('front-end/js/isotope.js') }}
	{{ Html::script('front-end/js/ini.isotope.js') }}
	{{ Html::script('front-end/js/custom.js') }}
	{{ Html::script('front-end/js/testimonials.js') }}
	@yield('javascripts')
	
	</div><!-- Body inner end -->
</body>
</html>