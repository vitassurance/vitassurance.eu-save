@extends('template.back')
@section('content')
<!-- APP MAIN ==========-->

			<!-- DOM dataTable -->
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Fiches Moto<span class="pull-right"><a href="{{ url('exportMoto') }}"><i class="download fa fa-download" aria-hidden="true" data-toggle="tooltip" title="telecharger"></i></a></span></h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th><input onclick="CocheTout(this, 'Choix[]');" type="checkbox" id="all"/></th>
										<th>Vue</th>
										<th>Nom prenom</th>
										<th>Profession</th>
										<th>Situation matrimoniale</th>
										<th>Code postal</th>
										<th>Ville</th>
										<th>Age</th>
										<th>Date effet</th>
										<th>Date enregistrement</th>
										<th>Info</th>
										<th>Assureur Actuel</th>
										<th>Prime contrat Actuel</th>
									</tr>
								</thead>
							
								<tbody>
								@foreach($motos as $moto)
									<tr>
									<td>
									<input type="checkbox" class="choix" name="Choix[]" id="checkbox-demo-1"/>
									 </td>
									@if($moto->visionnage == 0)
										<td><i class="fa fa-bookmark-o  fa-bookmark-primary"  ></i> <span style="display:none;">0</span> </td>
									@else
										<td><i class="fa fa-bookmark fa-bookmark-warning"></i> <span style="display:none;">1</span> </td>
									@endif
										<td ><a href="{{ url('showMoto',$moto->id) }}">{{$moto->prospect->nom}} {{$moto->prospect->prenom}}</a></td>
										<td>{{$moto->profession->libelle}}</td>
										<td>{{$moto->matrimoniale->libelle}}</td>
										<td>{{$moto->codePostal}}</td>
										<td>{{$moto->ville->ville_nom_reel}}</td>
										<td>
										{{Carbon::parse($moto->prospect->dateNaissance)->age}} ans
										</td>
										<td>{{$moto->dateEffet}}</td>
										<td>{{$moto->created_at}}</td>  
                  @if(!empty($habitation->dateNaissanceConjoint))

										<td><i class="fa fa-male" data-toggle="tooltip" title="Conjoint"></i></td>
									
										@else
										<td></td>
										@endif
										<td>
										@if($moto->prospect->assureurActuel)
										{{$moto->prospect->assureurActuel}}
									@else
										--
									@endif
									</td>
										<td>
										@if($moto->prospect->primeContratActuel)
										{{$moto->prospect->assureurActuel}}
									@else
										--
									@endif
											
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->


   




@endSection
@section('javascripts')



<script>

				function CocheTout(ref, name) {
	var form = ref;
 
	while (form.parentNode && form.nodeName.toLowerCase() != 'form'){ 
		form = form.parentNode; 
	}
 
	var elements = form.getElementsByTagName('input');
 
	for (var i = 0; i < elements.length; i++) {
		if (elements[i].type == 'checkbox' && elements[i].name == name) {
			elements[i].checked = ref.checked;
		}
	}
}
 $(document).ready(function(){

 });
			
	
</script>



@endSection




    