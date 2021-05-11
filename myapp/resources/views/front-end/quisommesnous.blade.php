@extends('template.front')

@section('stylesheets')

<style>

.text-style {
	margin-left: 50px;    
	margin-right: 50px;    
	letter-spacing: 1px;    
	text-align: justify;    
	text-justify: inter-word;
}

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
					<span class="title-head">A propos</span>
				</h3>
				<p class="text-style" align="left">
						Qui sommes-nous : Vitassurance est un cabinet de courtage en assurance axé sur la satisfaction de nos clients avec une exigencepointue et la personnalisation des solutions proposés.<br/></p>


<p class="text-style" align="left">
Vitassurance, c'est aussi l'expertise et le conseil à travers ses comparateurs et ses équipes de professionnels de l'assurance basé à Nice.</p><br/>
<p  class="text-style" align="left">
Être connu pour ce que l’on fait est une chose. Nous souhaitons aussi être connu pour ce que nous sommes : solidaires du présent comme de l’avenir de nos clients.</p><br/>
<p class="text-style" align="left">
Vitassurance a été fondée sur des valeurs fortes et pérennes de satisfaction client et qui l'animent au quotidien.</p><br/>

					
			</div><!--/ Title row end -->

			<div class="row">
				<div class="row">

				
				

				


				</div>
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ News end -->

	@endSection