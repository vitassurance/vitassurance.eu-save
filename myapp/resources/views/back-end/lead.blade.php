@extends('template.back')
@section('content')


<div class="col-md-12">
				<div class="widget p-lg">
					<h4 class="m-b-lg">Leads </h4>
					

					<table class="table">
						<tr><th>Prenom</th><th>Nom</th><th>Email</th><th>Email professionnel</th><th>TEL</th><th>Mobile</th><th>info</th></tr>
						@foreach($leads as $lead)
						<tr><td>{{$lead->prenom}}</td><td>{{$lead->nom}}</td><td>{{$lead->email}}</td><td>{{$lead->emailPro}}</td><td>{{$lead->tel}}</td><td>{{$lead->mobile}}</td><td><a href="{{ url('showLead',$lead->id) }}"><i class="fa fa-info" aria-hidden="true"></i></a></td></tr>
						@endforeach
					</table>
				</div><!-- .widget -->
			</div><!-- END column -->





@endSection