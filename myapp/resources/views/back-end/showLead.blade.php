@extends('template.back')
@section('content')
<div class="profile-header">
	<div class="profile-cover">
		<div class="cover-user m-b-lg">
		<div>
		
										<span class="cover-icon"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
										
				
			</div>
			
			<div>
				<div class="avatar avatar-xl avatar-circle">
					
						<h1 align="center" style=""><i class="fa fa-user"></i></h1>
					
				</div><!-- .avatar -->
			</div>
			<div>
		
										<span class="cover-icon"><i class="fa fa-caret-left" aria-hidden="true"></i></span>
										
				
			</div>
			
		</div>
		<div class="text-center">
			<h4 class="profile-info-name m-b-lg"><a href="javascript:void(0)" class="title-color">{{$lead->nom}} {{$lead->prenom}}</a></h4>
			<div>
				<a href="javascript:void(0)" class="m-r-xl theme-color"><i class="fa fa-phone"></i>  {{$lead->tel}}</a>
				<a href="javascript:void(0)" class="theme-color"><i class="fa fa-map-marker m-r-xs"></i>{{$lead->email}}</a>
			</div>
		</div>
	</div><!-- .profile-cover -->
	<div class="promo-footer">
		<div class="row no-gutter">
			<div class="col-sm-1 col-sm-offset-1 col-xs-4 promo-tab">
			
			</div>
			<!-- <div class="col-sm-4 col-xs-12 promo-tab">
				<div class="text-center">
					<small>fiches Santé</small>
					
                    
					
					
				</div>
			</div>
            <div class="col-sm-4 col-xs-12 promo-tab">
				<div class="text-center">
					<small>fiches Obséques</small>
					
                    
					
					
				</div>
			</div> -->
			
			
		
		</div>
	</div><!-- .promo-footer -->

	
</div><!-- .profile-header -->



			<div class="row">
			
			<div class="col-md-12 widget">
					<header class="widget-header">
						<h4 class="widget-title" align="center">Produit : {{$lead->produit->titre}}</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						<form>
						<div class="col-md-6 form-group">
								<label for="exampleInputPassword1">Produit</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$lead->produit->titre}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputPassword1">Adresse</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$lead->adresse}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputPassword1">Email</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$lead->email}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputPassword1">Email Professionnel</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$lead->emailPro}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputPassword1">Téléphone</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$lead->tel}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputPassword1">Mobile</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$lead->mobile}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputPassword1">code Postal</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$lead->codePostal}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputFile">Ville</label>
								<input type="text" id="exampleInputFile" class="form-control" readonly="true" value="{{$lead->ville->ville_nom_reel}}">
							</div>
							
							<!-- <button type="submit" class="btn btn-primary btn-md">Submit</button> -->
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			
				
			
			</div>
			


@endSection