@extends('template.front')

@section('stylesheets')

<style>
.panel-body {
	padding-top:0px;
	padding-bottom: 0px;
}
  .breadcrumb {
	color:#49464b;
	padding-top: 5px;
}

.infos {
	background-color: #f5f5f5;
    
    padding: 24px;
}
.on {
    display: block;
}
 
.off {
    display: none;
}
.uk-margin-bottom {
    margin-bottom: 5px;
    border: 1px solid rgba(0, 171, 219, 0.42);
}
</style>

{{ Html::style('front-end/css/rating-min.css') }}

@endSection

@section('content')	
	
	<section class="">
		<div class="container">
			<div class="down-arrow-color"></div>
			<div class="row text-center">
				<h3 class="title">
					
					<span class="title-head">Page en Construction</span>
				</h3>
				<p>
						nous sommes en train de construire cette page ...
					</p>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="row">

				  @foreach($produits as $produit)
				  <div class="col-sm-6 col-md-2">
				    <div class="thumbnail">
				      <p >
				      	<h2 align="center"><i style="font-size:70px" class="fa {{$produit->icon}}"></i></h2>
				      </p>
				      <div class="caption" align="center">
				        <h5>{{$produit->titre}}</h5>
				        <p><a href="{{ url($produit->lien) }}" class="btn btn-primary" role="button"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Devis</a></p>
				      </div>
				    </div>
				  </div>
@endforeach

				

				


				</div>
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ News end -->

	@endSection