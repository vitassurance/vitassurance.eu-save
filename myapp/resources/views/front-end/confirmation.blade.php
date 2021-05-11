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
			<div class="col-md-12">
				<h3 class="title">
					Devis d'assurance en ligne
					<span class="title-head">Confirmation</span> <br/>
					<i class="fa fa-phone fa-5x"></i> <i class="fa fa-ellipsis-h fa-5x" style="margin-right:20px;margin-left:20px"></i>    <i class="fa fa-tty fa-5x"></i>

				</h3>
				
				<blockquote>
                  <p><h4>Votre demande est en cours de traitement</h4> 
<h3 style="color:#b7b2b2;">Un de nos experts en assurance vous rappelera immédiatement.</h3></p>

                  </blockquote>
				
						
								</div><!--/ Title row end -->
							</div>
			<div class="row">
				<div class="row">

				  @foreach($produits as $produit)
				  <div class="col-sm-4 col-md-3">
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