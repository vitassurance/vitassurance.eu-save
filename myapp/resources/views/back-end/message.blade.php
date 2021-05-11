@extends('template.back')
@section('content')


<div class="col-md-12">
				<div class="widget p-lg">
					<h4 class="m-b-lg">Messages</h4>
					

					<table class="table">
						<tr><th>Nom</th><th>Email</th><th>Objectif</th><th>Message</th></tr>
						@foreach($messages as $message)
						<tr><td>{{$message->nom}}</td><td>{{$message->email}}</td><td>{{$message->objectif}}</td><td>{{$message->message}}</td></tr>
						@endforeach
					</table>
				</div><!-- .widget -->
			</div><!-- END column -->





@endSection