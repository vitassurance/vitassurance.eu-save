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
					
						<h1 align="center" style=""><i class="fa fa-motorcycle"></i></h1>
					
				</div><!-- .avatar -->
			</div>
			<div>
			
			  <span class="cover-icon"><i class="fa fa-caret-left" aria-hidden="true"></i></span>
				
			</div>
		</div>
		<div class="text-center">
			<h4 class="profile-info-name m-b-lg"><a href="javascript:void(0)" class="title-color">{{$moto->prospect->nom}} {{$moto->prospect->prenom}}</a></h4>
			<div>
				<a href="javascript:void(0)" class="m-r-xl theme-color"><i class="fa fa-phone"></i>  {{$moto->prospect->tel}}</a>
				<a href="javascript:void(0)" class="theme-color"><i class="fa fa-map-marker m-r-xs"></i>{{$moto->prospect->email}}</a>
			</div>
		</div>
	</div><!-- .profile-cover -->

	<div class="promo-footer">
		<div class="row no-gutter">
			<div class="col-sm-1 col-sm-offset-1 col-xs-4 promo-tab">
			
			</div>
			<div class="col-sm-4 col-xs-12 promo-tab">
				<div class="text-center">
					<small>Marque moto</small>
					
                    <h4 class="m-0 m-t-xs">{{$moto->marqueMoto}}</h4>
					
					
				</div>
			</div>
            <div class="col-sm-4 col-xs-12 promo-tab">
				<div class="text-center">
					<small>Model moto</small>
					
                    <h4 class="m-0 m-t-xs">{{$moto->modelMoto}}</h4>
					
					
				</div>
			</div>
			
			
		
		</div>
	</div><!-- .promo-footer -->
</div><!-- .profile-header -->
<div class="row">
			<div class="col-md-6">
			<div class="col-md-12 widget">
					<header class="widget-header">
						<h4 class="widget-title">Information Prospect</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						<form>
						<div class="col-md-6 form-group">
								<label for="exampleInputEmail1">Date effet</label>
								<input type="text" class="form-control" id="exampleInputEmail1" readonly="true" value="{{$moto->dateEffet}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputEmail1">Situation matrimoniale</label>
								<input type="text" class="form-control" id="exampleInputEmail1" readonly="true"  value="{{$moto->situationMatrimoniale}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputPassword1">code Postal</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$moto->codePostal}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputFile">Ville</label>
								<input type="text" id="exampleInputFile" class="form-control" readonly="true" value="{{$moto->ville->ville_nom_reel}}">
							</div>
							
							<!-- <button type="submit" class="btn btn-primary btn-md">Submit</button> -->
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
				<div class="col-md-6">
			<div class="col-md-12 widget">
					<header class="widget-header">
						<h4 class="widget-title">Information moto</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						<form>
						
							<div class="col-md-12 form-group">
								<label for="exampleInputEmail1">Type vehicule</label>
								<input type="text" class="form-control" id="exampleInputEmail1" readonly="true" value="{{$moto->typeVehicule}}">
							</div>
							<div class="col-md-12 form-group">
								<label for="exampleInputPassword1">Cylindre</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$moto->cylindreeMoto}}">
							</div>
							
							
							<!-- <button type="submit" class="btn btn-primary btn-md">Submit</button> -->
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
			
			</div>
@endSection