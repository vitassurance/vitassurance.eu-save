<style>
.reclamation-style
{
	 margin-left: -21px !important;
	
}
 @media (max-width: 600px) 
 {
	 .pt
	 {
		 margin-left: 2px !important;
	 }
 }
	 

</style>

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
								
								@foreach($produits as $produit)

								<li class="dropdown ">
									@if($produit->titre =='Assurance habitation')
									 <li><a  class="reclamation-style pt" href="{{ url('/reclamation') }}">Réclamation</a></li>
								 @else
			                        <a href="{{ url($produit->lien) }}">{{$produit->titre}}</a>
								@endif
								</li>
								@endforeach
								<li class="dropdown">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Autre <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
									@foreach($provisoires as $provisoire)
	                           <li><a href="{{ url('produit_assurance/'.$provisoire->lien) }}">{{$provisoire->titre}}</a></li>
	                           @endforeach
							   @foreach($produits as $produit)
							     @if($produit->titre =='Assurance habitation')
									  <li><a href="{{ url('/habitation') }}">Assurance d'habitation</a></li>

								 @endif
							   @endforeach
							  
			                  </ul>
			               </li>
								


			            </ul><!--/ Nav ul end -->
		    			</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->
					<div class="find-agent pull-right">
		    			<a href="{{ url('contact') }}">Contactez nous</a>
		    		</div>
					

				</div><!--/ Col end -->
			</div><!--/ Row end -->