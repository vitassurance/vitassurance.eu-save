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
			<h4 class="profile-info-name m-b-lg"><a href="javascript:void(0)" class="title-color">{{$prospect->nom}} {{$prospect->prenom}}</a></h4>
			<div>
				<a href="javascript:void(0)" class="m-r-xl theme-color"><i class="fa fa-phone"></i>  {{$prospect->tel}}</a>
				<a href="javascript:void(0)" class="theme-color"><i class="fa fa-map-marker m-r-xs"></i>{{$prospect->email}}</a>
			</div>
		</div>
	</div><!-- .profile-cover -->
	<div class="promo-footer">
		<div class="row no-gutter">
			
			<div class="col-md-3 promo-tab">
				<div class="text-center">
					<small>fiches Santé</small>
					
                    <h4 class="m-0 m-t-xs">{{count($prospect->sante)}}</h4>
					
					
				</div>
			</div>
            <div class="col-md-3 promo-tab">
				<div class="text-center">
					<small>fiches Obséques</small>
					
                    <h4 class="m-0 m-t-xs">{{count($prospect->obseque)}}</h4>
					
					
				</div>
			</div>

			<div class="col-md-3 promo-tab">
				<div class="text-center">
					<small>fiches Moto</small>
					
                    <h4 class="m-0 m-t-xs">{{count($prospect->moto)}}</h4>
					
					
				</div>
			</div>

			<div class="col-md-3 promo-tab">
				<div class="text-center">
					<small>fiches Habitation</small>
					
                    <h4 class="m-0 m-t-xs">{{count($prospect->habitation)}}</h4>
					
					
				</div>
			</div>
			
			
		
		</div>
	</div><!-- .promo-footer -->

	
</div><!-- .profile-header -->


<div class="row">
			<div class="col-md-12">
				<div id="profile-tabs" class="nav-tabs-horizontal white m-b-lg">
					<!-- tabs list -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#profile-stream" aria-controls="stream" role="tab" data-toggle="tab">Obseque</a></li>
						<li role="presentation"><a href="#profile-photos" aria-controls="photos" role="tab" data-toggle="tab">Sante</a></li>
						<li role="presentation"><a href="#profile-friends" aria-controls="friends" role="tab" data-toggle="tab">Moto</a></li>
						<li role="presentation"><a href="#profile-habitation" aria-controls="habitation" role="tab" data-toggle="tab">Habitation</a></li>
						@foreach($provisoires as $provisoire)
						<li role="presentation"><a href="#profile-{{$provisoire->titre}}" aria-controls="{{$provisoire->titre}}" role="tab" data-toggle="tab">{{$provisoire->titre}}</a></li>
						@endforeach
					</ul><!-- .nav-tabs -->

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane in active fade" id="profile-stream">
						
							<div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
								<thead>
									<tr>
									
										<th>Vue</th>
										<th>Nom prenom</th>
										<th>Code postal</th>
										<th>Ville</th>
										<th>Age</th>
										<th>Date effet</th>
										<th>Info</th>
									</tr>
								</thead>
							
								<tbody>
								@foreach($prospect->obseque as $obseque)
									<tr>
									<td>
									@if($obseque->visionnage == 0)
										<i class="fa fa-bookmark-o  fa-bookmark-primary"  ></i> <span style="display:none;">0</span> 
									@else
										<i class="fa fa-bookmark fa-bookmark-warning"></i> <span style="display:none;">1</span>
									@endif
									</td>
										<td ><a href="{{ url('showObseque',$obseque->id) }}">{{$obseque->prospect->nom}} {{$obseque->prospect->prenom}}</a></td>
										<td>{{$obseque->codePostal}}</td>
										<td>{{$obseque->ville->ville_nom_reel}}</td>
										<td>
										{{Carbon::parse($obseque->prospect->dateNaissance)->age}} ans
										</td>
										<td>{{$obseque->dateEffet}}</td> 
										<td>
                  @if(count(!empty($sante->dateNaissanceConjoint)))

										<i class="fa fa-male" data-toggle="tooltip" title="Conjoint"></i>
									
										@endif
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>

							

							
						</div><!-- .tab-pane -->

						<div role="tabpanel" id="profile-photos" class="tab-pane fade p-md">
						<div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
								<thead>
									<tr>
										
										<th>Vue</th>
										<th>Nom prenom</th>
										<th>Regime</th>
										<th>Code postal</th>
										<th>Ville</th>
										<th>Age</th>
										<th>Date effet</th>
										<th>Info</th>
									</tr>
								</thead>
							
								<tbody>
								
								@foreach($prospect->sante as $sante)

									<tr>
									<td>
									@if(!$sante->visionnage)
										<i class="fa fa-bookmark-o  fa-bookmark-primary" ></i>
									@else
										<i class="fa fa-bookmark fa-bookmark-warning" ></i>
									@endif
									</td>
										<td ><a href="{{ url('showSante',$sante->id) }}">{{$sante->prospect->nom}} {{$sante->prospect->prenom}}</a></td>
										<td>{{$sante->regime->libelle}}</td>
										<td>{{$sante->codePostal}}</td>
										<td>{{$sante->ville->ville_nom_reel}}</td>
										<td>
										
										{{Carbon::parse($sante->prospect->dateNaissance)->age}} ans
										</td>
										<td>{{$sante->dateEffet}}</td> 
										<td>
										@if(count($sante->enfantsante) > 0 and !empty($sante->dateNaissanceConjoint))

										<i class="fa fa-users" data-toggle="tooltip" title="{{count($sante->enfantsante)}} enfant(s)"></i> <i class="fa fa-male" data-toggle="tooltip" title="Conjoint"></i>
										@elseif(count($sante->enfantsante) > 0)
										<i class="fa fa-users" data-toggle="tooltip" title="{{count($sante->enfantsante)}} enfant(s)"></i>
										@elseif(!empty($sante->dateNaissanceConjoint))
										<i class="fa fa-male" data-toggle="tooltip" title="Conjoint"></i>
										
										@endif
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							
						</div>
					

							
							
						</div><!-- .tab-pane -->

						<div role="tabpanel" class="tab-pane fade p-md" id="profile-friends">

						<div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
								<thead>
									<tr>
										
										<th>Vue</th>
										<th>Nom prenom</th>
										<th>Code postal</th>
										<th>Ville</th>
										<th>Age</th>
										<th>Date effet</th>
										<th>Moto concerner</th>
									</tr>
								</thead>
							
								<tbody>
								
								@foreach($prospect->moto as $moto)

									<tr>
									<td>
									@if(!$moto->visionnage)
										<i class="fa fa-bookmark-o  fa-bookmark-primary" ></i>
									@else
										<i class="fa fa-bookmark fa-bookmark-warning" ></i>
									@endif
									</td>
										<td ><a href="{{ url('showMoto',$moto->id) }}">{{$moto->prospect->nom}} {{$moto->prospect->prenom}}</a></td>
										<td>{{$moto->codePostal}}</td>
										<td>{{$moto->ville->ville_nom_reel}}</td>
										<td>
										
										{{Carbon::parse($moto->prospect->dateNaissance)->age}} ans
										</td>
										<td>{{$moto->dateEffet}}</td> 
										<td>
										{{$moto->motoConcerner}}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							
						</div>
							
						</div><!-- .tab-pane -->

						<div role="tabpanel" class="tab-pane fade p-md" id="profile-habitation">

						<div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
								<thead>
									<tr>
										
										<th>Vue</th>
										<th>Nom prenom</th>
										<th>Code postal</th>
										<th>Ville</th>
										<th>Age</th>
										<th>Date effet</th>
										<th>Surface habitable</th>
									</tr>
								</thead>
							
								<tbody>
								
								@foreach($prospect->habitation as $habitation)

									<tr>
									<td>
									@if(!$habitation->visionnage)
										<i class="fa fa-bookmark-o  fa-bookmark-primary" ></i>
									@else
										<i class="fa fa-bookmark fa-bookmark-warning" ></i>
									@endif
									</td>
										<td ><a href="{{ url('showHabitation',$habitation->id) }}">{{$habitation->prospect->nom}} {{$habitation->prospect->prenom}}</a></td>
										<td>{{$habitation->codePostal}}</td>
										<td>{{$habitation->ville->ville_nom_reel}}</td>
										<td>
										
										{{Carbon::parse($habitation->prospect->dateNaissance)->age}} ans
										</td>
										<td>{{$habitation->dateEffet}}</td> 
										<td>
										{{$habitation->surfaceHabitable}}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							
						</div>
							
						</div><!-- .tab-pane -->
						
					</div><!-- .tab-content -->
				</div><!-- #profile-components -->
			</div><!-- END column -->
			</div>


@endSection