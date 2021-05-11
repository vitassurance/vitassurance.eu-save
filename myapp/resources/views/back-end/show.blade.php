@extends('template.back')
@section('content')
<div class="profile-header">
	<div class="profile-cover">
		<div class="cover-user m-b-lg">
			<div>
			@if(count($sante->enfantsante) > 0)
					<span class="cover-icon"><i class="fa fa-users" data-toggle="tooltip" title="{{count($sante->enfantsante)}} enfant(s)"></i></span>					
										@else
										<span class="cover-icon"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
										@endif
				
			</div>
			<div>
				<div class="avatar avatar-xl avatar-circle">
					
						<h1 align="center" style=""><i class="fa fa-medkit"></i></h1>
					
				</div><!-- .avatar -->
			</div>
			<div>
			@if(!empty($sante->dateNaissanceConjoint))
				<span class="cover-icon"><i class="fa fa-male" data-toggle="tooltip" title="Conjoint"></i></span>
				@else
										<span class="cover-icon"><i class="fa fa-caret-left" aria-hidden="true"></i></span>
				@endif
			</div>
		</div>
		<div class="text-center">
			<h4 class="profile-info-name m-b-lg"><a href="javascript:void(0)" class="title-color">{{$sante->prospect->nom}} {{$sante->prospect->prenom}}</a></h4>
			<div>
				<a href="javascript:void(0)" class="m-r-xl theme-color"><i class="fa fa-phone"></i>  {{$sante->prospect->tel}}</a>
				<a href="javascript:void(0)" class="theme-color"><i class="fa fa-map-marker m-r-xs"></i>{{$sante->prospect->email}}</a>
			</div>
		</div>
	</div><!-- .profile-cover -->

	<div class="promo-footer">
		<div class="row no-gutter">
			<div class="col-sm-1 col-sm-offset-1 col-xs-4 promo-tab">
			
			</div>
			<div class="col-sm-2 col-xs-12 promo-tab">
				<div class="text-center">
					<small>Soins</small>
					<div class="m-t-xs">
					@if($sante->soins == 1 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->soins == 2 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->soins == 3 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->soins == 4 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->soins == 5 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						@endif
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-xs-12 promo-tab">
				<div class="text-center">
					<small>Hospitalisation</small>
					<div class="m-t-xs">
						@if($sante->hospitalisation == 1 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->hospitalisation == 2 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->hospitalisation == 3 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->hospitalisation == 4 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->hospitalisation == 5 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						@endif
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-xs-12 promo-tab">
				<div class="text-center">
					<small>Dentaire</small>
					<div class="m-t-xs">
						@if($sante->dentaire == 1 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->dentaire == 2 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->dentaire == 3 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->dentaire == 4 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->dentaire == 5 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						@endif
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-xs-12 promo-tab">
				<div class="text-center">
					<small>Optique</small>
					<div class="m-t-xs">
						@if($sante->optique == 1 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->optique == 2 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->optique == 3 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->optique == 4 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star-o"></i>
						@elseif($sante->optique == 5 )
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						<i class="text-primary fa fa-star"></i>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div><!-- .promo-footer -->
</div><!-- .profile-header -->
<div class="row">
			<div class="col-md-4">
			<div class="col-md-12 widget">
					<header class="widget-header">
						<h4 class="widget-title">Information Prospect</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="col-md-12 widget-body">
						
						<form>
						<div class="col-md-12 form-group">
								<label for="exampleInputEmail1">Régime</label>
								<input type="text" class="form-control" id="exampleInputEmail1" readonly="true" value="{{$sante->regime->libelle}}">
							</div>
							<div class="col-md-12 form-group">
								<label for="exampleInputEmail1">Date effet</label>
								<input type="text" class="form-control" id="exampleInputEmail1" readonly="true"  value="{{$sante->dateEffet}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputPassword1">code Postal</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$sante->codePostal}}">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputFile">Ville</label>
								<input type="text" id="exampleInputFile" class="form-control" readonly="true" value="{{$sante->ville->ville_nom_reel}}">
							</div>
							
							<!-- <button type="submit" class="btn btn-primary btn-md">Submit</button> -->
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
				<div class="col-md-4">
			<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Information Conjoint</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					@if($sante->dateNaissanceConjoint)
					<div class="widget-body">
						
						<form>
						
							<div class="form-group">
								<label for="exampleInputEmail1">Date Naissance</label>
								<input type="text" class="form-control" id="exampleInputEmail1" readonly="true" value="{{$sante->dateNaissanceConjoint}}">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Régime conjoint</label>
								<input type="text" class="form-control" id="exampleInputPassword1" readonly="true" value="{{$sante->regimeConjoint}}">
							</div>
							
							
							<!-- <button type="submit" class="btn btn-primary btn-md">Submit</button> -->
						</form>
					</div><!-- .widget-body -->
					@endif

				</div><!-- .widget -->
			</div><!-- END column -->
			<div class="col-md-4">
			<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Information Enfants ({{count($sante->enfantsante)}})</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					
						@foreach($sante->enfantsante as $enfant)
						<fieldset>
						<div class="widget-body">
						
						<form>
						
						<div class="col-md-12">
							<div class="col-md-6 form-group">

								<label for="exampleInputEmail1">Date naissance enfant</label>
								<input type="text" class="form-control " id="exampleInputEmail1" readonly="true" value="{{$enfant->dateNaissanceEnfant}}">
								
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputFile">Régime</label>
								<input type="text" id="exampleInputFile" class="form-control" readonly="true" value="{{$enfant->regimeEnfant}}">
							</div>
							</div>
							
								</form>
					</div><!-- .widget-body -->
					</fieldset>
							@endforeach
							
							
							
							<!-- <button type="submit" class="btn btn-primary btn-md">Submit</button> -->
					
				</div><!-- .widget -->
			</div><!-- END column -->
			</div>
@endSection