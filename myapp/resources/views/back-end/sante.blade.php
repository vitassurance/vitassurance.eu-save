@extends('template.back')
@section('stylesheets')

 <meta name="csrf-token" content="{{ csrf_token() }}" />

 @endsection
@section('content')

<!-- APP MAIN ==========-->

			<!-- DOM dataTable -->
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Fiches santé <span class="pull-right"><a href="{{ url('exportSante') }}" id="download"><i class="download fa fa-download" aria-hidden="true" data-toggle="tooltip" title="telecharger"></i></a></span></h4>
						
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
										<th>Regime</th>
										<th>Profession</th>
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
								
								@foreach($santes as $sante)

									<tr>
									<td>
									<input type="checkbox" class="choix" name="Choix[]" id="idSante"  data-id="{{ $sante->id }}"/>
									 </td>
									 <td>
									@if(!$sante->visionnage)
										<i class="fa fa-bookmark-o  fa-bookmark-primary" ></i>
									@else
										<i class="fa fa-bookmark fa-bookmark-warning" ></i>
									@endif
									</td>
										<td ><a href="{{ url('showSante',$sante->id) }}">{{$sante->prospect->nom}} {{$sante->prospect->prenom}}</a></td>
										<td>{{$sante->regime->libelle}}</td>
										<td>{{$sante->profession->libelle}}</td>
										<td>{{$sante->codePostal}}</td>
										<td>{{$sante->ville->ville_nom_reel}}</td>
										<td>
										
										{{Carbon::parse($sante->prospect->dateNaissance)->age}} ans
										</td>
										<td>{{$sante->dateEffet}}</td>
										<td>{{$sante->created_at}}</td>  
										<td>
										@if(count($sante->enfantsante) > 0)
										<i class="fa fa-users" data-toggle="tooltip" title="{{count($sante->enfantsante)}} enfant(s)"></i>
										@endif
										@if(!empty($sante->dateNaissanceConjoint) and $sante->dateNaissanceConjoint != '0000-00-00' )
										<i class="fa fa-male" data-toggle="tooltip" title="Conjoint"></i>
										@endif
										</td>
										<td>
										@if($sante->prospect->assureurActuel)
										{{$sante->prospect->assureurActuel}}
									@else
										--
									@endif
									</td>
										<td>
										@if($sante->prospect->primeContratActuel)
										{{$sante->prospect->assureurActuel}}
									@else
										--
									@endif
											
										</td>
										
										
									</tr>
									@endforeach
								</tbody>
							</table>
							<div class="pagination_gen" id="paginate1" align="center">
                    							{{ $santes->links() }}
                  				</div>
						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
			<script>

			 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

			 $(document).ready(function(){

			 	 $("#download").click(function(){

        
        
        var arrayfiche = new Array();

        $(".choix").each(function(){

            valeur = $(this).attr('data-id') ;

            if($(this).is(":checked")){

                arrayfiche.push(valeur);

            }
            
        });

        $.ajax({
            url     : "{{ URL::to('exportSante') }}",
            type    : 'POST',
            data    : {vals:arrayfiche},
        }).success(function(data){

        alert('exportation des fiches');


        }).error(function(){

        });
        
        


    });

			 	});
		
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
$('[data-toggle="tooltip"]').tooltip(); 

 });
			</script>



@endSection





