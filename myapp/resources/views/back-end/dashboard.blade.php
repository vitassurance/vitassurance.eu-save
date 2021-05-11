@extends('template.back')
@section('content')


<div class="col-md-12">
				<div class="widget p-lg">
					<h4 class="m-b-lg">Prospects</h4>
					

					<table class="table">
						<tr><th>Prenom</th><th>Nom</th><th>email</th><th>TEL</th><th>info</th></tr>
						@foreach($prospects as $prospect)
						<tr><td>{{$prospect->prenom}}</td><td>{{$prospect->nom}}</td><td>{{$prospect->email}}</td><td>{{$prospect->tel}}</td><td><a href="{{ url('showProspect',$prospect->id) }}"><i class="fa fa-info" aria-hidden="true"></i></a></td></tr>
						@endforeach
					</table>
					<div class="pagination_gen" id="paginate1" align="center">
                    							{{ $prospects->links() }}
                  				</div>
				</div><!-- .widget -->
			</div><!-- END column -->





@endSection