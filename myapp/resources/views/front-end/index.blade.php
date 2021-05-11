
@extends('template.front')

@section('stylesheets')

{{ Html::style('front-end/css/bootstrap-select.min.css') }}

<style>
	.marginImage{
		margin-top: 20px;
	}
	
	.fa-star {
    color: #e6e600;
}


</style>

@endSection

@section('content')

<section class="news">

	<div class="row">
		<div class="col-md-12">
			<div class="row text-center">
				<h3 class="title">
					Obtenir un devis Rapide et Gratuit
					<span class="title-head">Quelle assurance recherchez-vous ?</span>
				</h3>
			</div>
		</div>
	</div>
 
  <div class="container">
	<div class="row">
		<div class="col-md-8" align="center">
          <div class="row">
					@foreach($produits as $produit)
			<div class="col-md-4 col-sm-8 col-xs-12" align="center">

				<div class="ts-service-wrapper">
				<a href="{{ url($produit->lien) }}" >
					<div class="ts-service-icon-wrapper">
						<span class="ts-service-icon"><i class="fa {{$produit->icon}}"></i></span>
					</div>
					</a>
					<div class="ts-service-info">
						<h3>{{$produit->titre}}</h3>
						<p>{{$produit->description}}</p>
					</div>
				</div><!-- Service wrapper end -->
			</div>
@endforeach
					@foreach($icones as $icone)
			<div class="col-md-4 col-sm-8 col-xs-12" align="center">

				<div class="ts-service-wrapper">
				<a href="{{ url('produit_assurance/'.$icone->lien) }}" >
					<div class="ts-service-icon-wrapper">
						<span class="ts-service-icon"><i class="fa {{$icone->icon}}"></i></span>
					</div>
					</a>
					<div class="ts-service-info">
						<h3>{{$icone->titre}}</h3>
						<p>{{$icone->description}}</p>
					</div>
				</div><!-- Service wrapper end -->
			</div>
@endforeach
	

			
		  </div>
		</div>
		<div class="col-md-4" align="center">

		  <h3 ><i style="color:#00abdb" class="fa fa-compass" aria-hidden="true"></i> Comparez vos devis d'assurances</h3>
			<img class="marginImage" src="{{ asset('front-end/images/panda.png') }}" height="415" width="150" alt="">


		</div>
	</div>

  </div>
</section>





<section id="facts" class="facts no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 fact-text">
					<h2 class="intro-title">
						50 assureurs comparés et plus de 1500 agences locales
						<span class="title-head"> POURQUOI CHOISIR {{$parametrage->logo}}</span>
					</h2>
					<p>
						Le comparateur d’assurances <strong>www.vitassurance.com</strong> vous permet d’obtenir gratuitement plusieurs propositions de contrat à comparer. Pour cela, il vous suffit de cliquer sur le bouton « comparer » pour accéder à un formulaire dédié et répondre avec précision aux questions qui vous seront posées. Ces informations permettront aux assureurs de connaître votre situation actuelle, votre profil et vos besoins spécifiques.
                        <br />
						Une fois cette étape passée (2 min environ), la page de résultats sur laquelle figurent les devis d’assurance vous sera restituée sous la forme d’un tableau comparatif présentant des offres en ligne spécifiquement adaptées à votre profil et personnalisées en fonction de vos besoins.
					</p>
				

				</div><!-- Col end -->

				<div class="col-md-6">
					<div class="facts-wrapper">
						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-eur"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">100</span>%</h2>
								<h3 class="ts-facts-title">Gratuit et sans engagement</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">97</span>%</h2>
								<h3 class="ts-facts-title">Internautes satisfaits</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-heart"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">3000</span>K</h2>
								<h3 class="ts-facts-title">Internautes nous font confiance</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-building-o"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">25</span></h2>
								<h3 class="ts-facts-title">Compagnies d'assurances</h3>
							</div>
						</div>
					</div> <!-- Facts end -->
				</div><!-- Col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Facts end -->


	<section class="">
		<div class="container">
			<div class="down-arrow-color"></div>
			<div class="row text-center">
				<h3 class="title">
					Devis d'assurance en ligne
					<span class="title-head">Comparer les assurances en ligne</span>
				</h3>
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
				        <h6>{{$produit->titre}}</h6>
				        <p><a href="{{ url($produit->lien) }}" class="btn btn-primary" role="button"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Devis</a></p>
				      </div>
				    </div>
				  </div>
@endforeach

@foreach($icones as $icone)
				  <div class="col-sm-6 col-md-2">
				    <div class="thumbnail">
				      <p >
				      	<h2 align="center"><i style="font-size:70px" class="fa {{$icone->icon}}"></i></h2>
				      </p>
				      <div class="caption" align="center">
				        <h6>{{$icone->titre}}</h6>
				        <p><a href="{{ url('produit_assurance/'.$icone->lien) }}" class="btn btn-primary" role="button"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Devis</a></p>
				      </div>
				    </div>
				  </div>
@endforeach
				   



				</div>
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ News end -->

	
	
	

	

	<!-- Partners start -->
	<section  class="news">
		<div class="container">
			<div class="row text-center">
				<h3 class="title">
					Compagnies d'assurances
					<span class="title-head">Plus de 50 assureurs comparés</span>
				</h3>
			</div> <!-- Title row end -->

			<div class="row">
		      <div id="partners-carousel" class="col-sm-12 owl-carousel owl-theme text-center partners">
		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner1.png" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner2.png" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner3.png" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner4.png" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner5.png" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner6.png" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner7.png" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner8.png" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner9.png" alt="client">
		          </a>
		        </figure>

		         <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner10.png" alt="client">
		          </a>
		        </figure>

		         <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner11.png" alt="client">
		          </a>
		        </figure>

		         <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner12.png" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner13.png" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo last">
		          <a href="#">
		            <img class="img-responsive" src="front-end/images/company/partner14.png" alt="client">
		          </a>
		        </figure>
		        
		      </div><!--/ Owl carousel end -->
	    	</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Partners end -->

	<!-- Carousel -->
 <section id="testimonials" style="display:none;">
 
	<div class="row">
		<div class="col-md-12">
			<div class="row text-center">
				<h3 class="title">
					
					<span class="title-head">Témoignages</span>
				</h3>
			</div>
		</div>
	</div>
   <div class="container">
	 <div class="row text-center">
      <div class="owl-carousel owl-theme">
        <div class="item" id="testimonial-card">
          <div class="testimonial-top">
            <i class="fa fa-quote-left"></i>
          </div>
          <div class="img-box">
            <img height="244" width="244" src="{{ asset('front-end/images/testimonials/1.jpg') }}" alt="" />
          </div>
          <div class="testimonial-bottom">
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <h3>Sofia Smith</h3>
            <p>Alphas Designers - CEO</p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
              laborum facere molestiae recusandae nihil adipisci et natus
              sapiente voluptatem dolor asperiores, obcaecati eveniet quia
              quidem explicabo itaque nisi? Eos, eveniet.
            </p>
          </div>
        </div>

        <div class="item" id="testimonial-card">
          <div class="testimonial-top">
            <i class="fa fa-quote-left"></i>
          </div>
          <div class="img-box">
            <img height="244" width="244" src="{{ asset('front-end/images/testimonials/2.jpg') }}" alt="" />
          </div>
          <div class="testimonial-bottom">
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <h3>John Doe</h3>
            <p>Designer</p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
              laborum facere molestiae recusandae nihil adipisci et natus
              sapiente voluptatem dolor asperiores, obcaecati eveniet quia
              quidem explicabo itaque nisi? Eos, eveniet.
            </p>
          </div>
        </div>

        <div class="item" id="testimonial-card">
          <div class="testimonial-top">
            <i class="fa fa-quote-left"></i>
          </div>
          <div class="img-box">
            <img height="244" width="244" src="{{ asset('front-end/images/testimonials/3.jpg') }}" alt="" />
          </div>
          <div class="testimonial-bottom">
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <h3>Lara Cortez</h3>
            <p>Manager</p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
              laborum facere molestiae recusandae nihil adipisci et natus
              sapiente voluptatem dolor asperiores, obcaecati eveniet quia
              quidem explicabo itaque nisi? Eos, eveniet.
            </p>
          </div>
        </div>
        <div class="item" id="testimonial-card">
          <div class="testimonial-top">
            <i class="fa fa-quote-left"></i>
          </div>
          <div class="img-box">
            <img height="244" width="244" src="{{ asset('front-end/images/testimonials/4.jpg') }}" alt=""/>
          </div>
          <div class="testimonial-bottom">
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <h3>Bianca Lopez</h3>
            <p>ABCD - CEO</p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
              laborum facere molestiae recusandae nihil adipisci et natus
              sapiente voluptatem dolor asperiores, obcaecati eveniet quia
              quidem explicabo itaque nisi? Eos, eveniet.
            </p>
          </div>
        </div>
      </div>
	</div>
</div>
    </section>
<!-- end Carousel-->





<!-- Carousel -->
<section id="testimonials">
  <div class="row">
    <div class="col-md-12">
      <div class="row text-center">
        <h3 class="title">
          <span class="title-head">Témoignages</span>
        </h3>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row text-center">
      <div class="owl-carousel owl-theme">
        <div class="item" id="testimonial-card">
          <div class="card mb-3 border-primary">
            <i class="fa fa-quote-left"></i>
            &nbsp;
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>

            <div class="card-body">
              <h5 class="card-title">Très satisfaite</h5>
              <p class="card-text">
                Service client parfait, ma conseillère m’a proposé la mutuelle
                qui correspondait parfaitement à ma demande
              </p>
              <hr class="same-line" />
              <p>Avis Mutuelle de Marie DENISE née en 1945- départ. 06</p>
            </div>
          </div>
        </div>

        <div class="item" id="testimonial-card">
          <div class="card mb-3 border-primary">
            <i class="fa fa-quote-left"></i>
            &nbsp;
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>

            <div class="card-body">
              <h5 class="card-title">Satisfait</h5>
              <p class="card-text">Bon rapport gamme et tarifs</p>
              <hr class="same-line" />
              <p class="flexible">
                Avis Mutuelle de Philippe BOUDINI Né en 1955- départ.13
              </p>
            </div>
          </div>
        </div>

        <div class="item" id="testimonial-card">
          <div class="card mb-3 border-primary">
            <i class="fa fa-quote-left"></i>
            &nbsp;
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>

            <div class="card-body">
              <h5 class="card-title">Très satisfaite</h5>
              <p class="card-text">
                J’ai été hospitalisé et mon conseiller à été parfait, il a
                transmis ma prise en charge à l’hôpital et je n’ai rien eu à
                payer, contente du service rendue
              </p>
              <hr class="same-line"/>
              <p>Avis Mutuelle de Samira BENHOUSS Née en 1974- départ.69</p>
            </div>
          </div>
        </div>

        <div class="item" id="testimonial-card">
          
            <div class="card mb-3 border-primary">
                <i class="fa fa-quote-left"></i>
                &nbsp;
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>

                <div class="card-body">
                    <h5 class="card-title">Très satisfaite</h5>
                    <p class="card-text">J’ai eu mon devis dans les 15 mn et j’ai pu acheter mes médicaments avec ma carte de tiers payant provisoire, super rapide waouh, je recommande à tous mon entourage </p>
                    <hr class="same-line">
                    <p>Avis Mutuelle de DEROCLES Karen Née en 1969- départ 83</p>
                </div>
            </div>
        </div>

        
        <div class="item" id="testimonial-card">
          
            <div class="card mb-3 border-primary">
                <i class="fa fa-quote-left"></i>
                &nbsp;
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>

                <div class="card-body">
                    <h5 class="card-title">Satisfaite</h5>
                    <p class="card-text">Conseillère qui a su bien m’orientait car je ne savais pas quelle mutuelle choisir, merci pour son conseil </p>
                    <hr class="same-line">
                    <p>Avis Mutuelle de Cristina FAMILIANI Née en 1980- Départ 91</p>
                </div>
            </div>
        </div>
        <div class="item" id="testimonial-card">
          
            <div class="card mb-3 border-primary">
                <i class="fa fa-quote-left"></i>
                &nbsp;
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>

                <div class="card-body">
                    <h5 class="card-title">Très satisfait</h5>
                    <p class="card-text">Prix attractif et cure thermale remboursée </p>
                    <hr class="same-line">
                    <p>Avis Mutuelle de Mamadou ABOUDYA Né en 1948- Départ 34</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end Carousel-->






	

@endSection

@section('javascripts')

{{ Html::script('front-end/js/bootstrap-select.js') }}

<script>

	$('.selectpicker').selectpicker({
	  style: 'btn-info',
	  size: 4
	});

</script>

@endSection