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
	{{ Html::style('front-end/css/owl.theme.css') }}
	<!-- Colorbox -->
	{{ Html::style('front-end/css/colorbox.css') }}

	@yield('stylesheets')

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->


    <header id="header" class="header">
		<div class="container">
		   @include('front-end.include.header')
		</div><!-- Container end -->
	</header><!--/ Header end -->
    <nav class="site-navigation navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="site-nav-inner pull-left">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        	<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
		    			</button>

		    			<div class="collapse navbar-collapse navbar-responsive-collapse">
		    				<ul class="nav navbar-nav">
								
								<li class="dropdown active">
			                        <a href="{{ url('/') }}">Accueil</a>
								</li>
								
								<li class="dropdown ">
			                        <a href="{{url('/mutuelle-sante') }}">Mutuelle santé</a>
								</li>
								
								<li class="dropdown ">
			                        <a href="{{url('/obseque') }}">Assurance obseque</a>
								</li>
								
								<li class="dropdown ">
			                        <a href="{{url('/habitation') }}">Assurance habitation</a>
								</li>
								
								<li class="dropdown ">
			                        <a href="{{url('/moto2') }}">Assurance moto</a>
								</li>
																<li class="dropdown">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Autre <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										                           <li><a href="{{url('/auto') }}">Assurance auto</a></li>
	                           	                           <li><a href="{{url('/produit_assurance/prevoyance') }}">prevoyance</a></li>
	                           	                           <li><a href="{{url('/produit_assurance/emprunteur') }}">emprunteur</a></li>
	                           	                           <li><a href="{{url('/produit_assurance/retraite') }}">retraite</a></li>
	                           	                           <li><a href="{{url('/produit_assurance/epargne') }}">epargne</a></li>
	                           	                           <li><a href="{{url('/produit_assurance/RC') }}">responsabilité civile</a></li>
	                           	                           <li><a href="{{url('/produit_assurance/decenale') }}">decenale</a></li>
	                           							  <li><a href="{{url('/reclamation') }}">reclamation</a></li>
			                  </ul>
			               </li>
								


			            </ul><!--/ Nav ul end -->
		    			</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->
					<div class="find-agent pull-right">
		    			<a href="{{url('/contact') }}">Contactez nous</a>
		    		</div>
					

				</div><!--/ Col end -->
			</div><!--/ Row end -->		</div><!--/ Container end -->
	</nav>
</head>
	
<body>
@yield('content')

<section class="footer-top no-padding">
		<div class="container">
			<div class="footer-top-bg row">
				<div class="col-md-4 footer-box one">
					<i class="fa fa-map-marker">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Adresse</h3>
						<p>455 Promenade des Anglais 06000 Nice</p>
					</div>
				</div><!--/ Box 1 end -->

				<div class="col-md-4 footer-box two">
					<i class="fa fa-phone">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Téléphone</h3>
						<p>Domicile: (+33) 04 91 612 610 </p>
						<p>Portable: (+33) 04 91 612 610 </p>
					</div>
				</div><!--/ Box 2 end -->
				
				<div class="col-md-4 footer-box three">
					<i class="fa fa-envelope-o">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Email</h3>
						<p>contact@vitassurance.com</p>
						<p>--</p>
						
					</div>
				</div><!--/ Box 3 end -->
				
			</div><!--/ Content row end -->
		</div><!--/ Container end -->	</section>

        <footer id="footer" class="footer">
		<div class="container">
			
		 <div class="row">
				<div class="col-md-4 col-sm-12 footer-widget footer-about">
					<div class="footer-logo">
						<a href="{{url('/') }}">
                	<h2><span><i style="color:#00abdb" class="fa fa-gg"></i> </span> VITASSURANCE</h2> 
                </a>
					</div>

					<p>Qui sommes-nous : Vitassurance est un cabinet de courtage en assurance axé sur la satisfaction de nos clients avec une exigence pointue et la personnalisation des solutions proposés. <a href="{{url('/Apropos') }}"></a></p><h5><a href="{{url('/Apropos') }}">Lire plus ...</a></h5>  <p></p>
				</div><!-- About us end -->

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">Faire un devis rapide</h3>

					<ul class="list-arrow">
											<li><a href="{{url('/mutuelle-sante') }}">Mutuelle santé</a></li>
												<li><a href="{{url('/obseque') }}">Assurance obseque</a></li>
												<li><a href="{{url('/habitation') }}">Assurance habitation</a></li>
												<li><a href="{{url('/moto2') }}">Assurance moto</a></li>
												
					</ul>
				</div>

				<div class="col-md-4 col-sm-12 footer-widget">
					<div class="footer-social" style="margin-top:0px">
						<h3 class="widget-title">Restez connecter avec nous</h3>
						<ul>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div><!-- Footer social end -->
				</div>
			</div><!--/ Content row end -->

			<div class="row copyright">
				<div class="col-xs-12 col-sm-5">
					<div class="copyright-info">
						<span>Copyright © 2020 VITASSURANCE. Tous les droits réservés.</span>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-push-1">
					<div class="footer-menu">
						<ul class="nav unstyled">
							<li><a href="{{url('/Apropos') }}">A propos</a></li>
							<li><a href="#">© VITASSURANCE</a></li>
								<li><a href="/front-end/images/Mentions-legales.pdf" target="_blank">Légal</a></li>
							<li><a href="/front-end/images/RGPD.pdf" target="_blank">déclaration de confidentialité</a></li>
						</ul>
					</div>
				</div>
			</div><!-- Copyright end -->

			<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix" data-original-title="" title="">
				<button class="btn btn-primary" title="Back to Top">
					<i class="fa fa-angle-double-up"></i>
				</button>
			</div>
		</div><!--/ Container end -->
	</footer>



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

	@yield('javascripts')
	
	
</body>

</html>
