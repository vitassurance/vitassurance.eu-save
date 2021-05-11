<div class="row">
				<div class="col-md-4 col-sm-12 footer-widget footer-about">
					<div class="footer-logo">
						<a href="{{ url('/') }}">
                	<h2><span><i style="color:#00abdb" class="fa fa-gg"></i> </span> {{$parametrage->logo}}</h2> 
                </a>
					</div>

					<p>Qui sommes-nous : Vitassurance est un cabinet de courtage en
assurance axé sur la satisfaction de nos clients avec une exigence
pointue et la personnalisation des solutions proposés.
 <a href="{{url('Apropos')}}"><h5>Lire plus ...</h5></a>  </p>
				</div><!-- About us end -->

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">Faire un devis rapide</h3>

					<ul class="list-arrow">
					@foreach($produits as $produit)
						<li><a href="{{ url($produit->lien) }}">{{$produit->titre}}</a></li>
						@endforeach
						
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
						<span>Copyright © {{$year}} {{$parametrage->logo}}. Tous les droits réservés.</span>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-push-1">
					<div class="footer-menu">
						<ul class="nav unstyled">
							<li><a href="{{url('Apropos')}}">A propos</a></li>
							<li><a href="#">© {{$parametrage->logo}}</a></li>
							<li><a href="/front-end/images/Mentions-legales.pdf" target="_blank">Légal</a></li>
							<li><a href="/front-end/images/CGV.pdf" target="_blank">CGV</a></li>
							<li><a href="/front-end/images/RGPD.pdf" target="_blank">déclaration de confidentialité</a></li>
						</ul>
					</div>
				</div>
			</div><!-- Copyright end -->

			<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top">
					<i class="fa fa-angle-double-up"></i>
				</button>
			</div>