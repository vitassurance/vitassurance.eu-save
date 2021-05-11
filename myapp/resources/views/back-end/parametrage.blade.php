@extends('template.back')

@section('content')

  @if (session('status'))
   <div class="row">
	   	<div class="col-md-12">
	   		 <div class="alert alert-success">
	           {{ session('status') }}
	         </div>
	   	</div>
   </div>
@endif

   <div class="row">
   	<div class="col-md-12">
   		<ul class="nav nav-pills nav-justified">
		  <li role="presentation" class="active"><a href="#">Général</a></li>
		  <li role="presentation"><a href="{{ url('produits') }}">Produit</a></li>
		  <li role="presentation"><a href="{{ url('users') }}">Utilisateur</a></li>
		</ul>
   	</div>
   </div>

   <div class="row">
   	<div class="col-md-12">
   		
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Paramétrage</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body text-center">
						<div class="big-icon m-b-md watermark"><i class="fa fa-5x fa-gears"></i></div>
						<h4 class="m-b-md">Info générale</h4>
						<p class="text-muted m-b-lg">
							
							<form class="form-horizontal" method="post" action="{{ url('parametrage') }}">
							  {{ csrf_field() }}
								<div class="form-group">
									<label for="logo" class="col-sm-2 control-label">Logo:</label>
									<div class="col-sm-9">
									
										{{ Form::text('logo', $parametrage->logo, ['id' => 'logo', 'class' => 'form-control', 'placeholder' => "Logo du site", 'required' => 'required']) }}
									</div>
								</div>
								<div class="form-group">
									<label for="titre" class="col-sm-2 control-label">Titre:</label>
									<div class="col-sm-9">
										
										{{ Form::text('titre', $parametrage->titre, ['id' => 'titre', 'class' => 'form-control', 'placeholder' => "Titre du site", 'required' => 'required']) }}
									</div>
								</div>

								<div class="form-group">
									<label for="description" class="col-sm-2 control-label">Description:</label>
									<div class="col-sm-9">
										
										{{ Form::text('description', $parametrage->description, ['id' => 'description', 'class' => 'form-control', 'placeholder' => "Description du site", 'required' => 'required']) }}
									</div>
								</div>
								
								<hr>
                               
                                <div class="big-icon m-b-md watermark"><i class="fa fa-5x fa-map-marker"></i></div>
						        <h4 class="m-b-md">Coordonnées</h4>

						        <div class="form-group">
									<label for="tel1" class="col-sm-2 control-label">Téléphone 1:</label>
									<div class="col-sm-9">
									{{ Form::text('tel1', $parametrage->tel1, ['id' => 'tel1', 'class' => 'form-control', 'placeholder' => "Téléphone 1", 'required' => 'required']) }}
									</div>
								</div>

								 <div class="form-group">
									<label for="tel2" class="col-sm-2 control-label">Téléphone 2:</label>
									<div class="col-sm-9">
									{{ Form::text('tel2', $parametrage->tel2, ['id' => 'tel2', 'class' => 'form-control', 'placeholder' => "Téléphone 2", 'required' => 'required']) }}
									</div>
								</div>

								 <div class="form-group">
									<label for="tel3" class="col-sm-2 control-label">Téléphone 3:</label>
									<div class="col-sm-9">
									{{ Form::text('tel3', $parametrage->tel3, ['id' => 'tel3', 'class' => 'form-control', 'placeholder' => "Téléphone 3", 'required' => 'required']) }}
									</div>
								</div>

								 <div class="form-group">
									<label for="email" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-9">
										
										{{ Form::text('email', $parametrage->email, ['id' => 'email', 'class' => 'form-control', 'placeholder' => "Émail", 'required' => 'required']) }}
									</div>
								</div>

								<div class="form-group">
									<label for="adresse" class="col-sm-2 control-label">Adresse</label>
									<div class="col-sm-9">
										<textarea name="adresse" type="adresse" class="form-control" id="adresse" placeholder="Adresse">{{ $parametrage->adresse }}</textarea>
									</div>
								</div>

								<div class="form-group">
									<label for="maps" class="col-sm-2 control-label">Code google maps</label>
									<div class="col-sm-9">
										<textarea name="maps" type="adresse" class="form-control" id="maps" placeholder="googlemaps">{{ $parametrage->googleMaps }}</textarea>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-11" align="right">
										<button type="submit" class="btn btn-success"><i class="fa fa-history"></i> Mise à jour</button>
									</div>
								</div>

							</form>

						</p>
						
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div>
   
   </div>

@endSection