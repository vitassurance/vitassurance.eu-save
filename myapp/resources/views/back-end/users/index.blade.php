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
		  <li role="presentation" ><a href="{{ url('parametrage') }}">Général</a></li>
		  <li role="presentation" ><a href="{{ url('produits') }}">Produit</a></li>
		  <li role="presentation" class="active"><a href="{{ url('users') }}">Utilisateur</a></li>
		</ul>
   	</div>
   </div>


   <div class="row">
   	<div class="col-md-12">
   		
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Utilisateurs <span class="pull-right"><a class="btn btn-primary" href="{{ url('users/create') }}">Nouveau utilisateur</a></span></h4>

					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body text-center">
						
						<p class="text-muted m-b-lg">
							  
                            <table class="table table-striped">
								<tbody>
								    <tr><th>Nom/Prenom</th><th>Email</th> <th></th> </tr>
								    @foreach($users as $user)
										<tr>
										   <td align="left"> {{ $user->name }}</td>
										   <td align="left">{{ $user->email }}</td>
										 
										   <td> 
										        <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
										        @if($user->active)
										          <a href="{{ url('activeUser/'.$user->id) }}" class="btn btn-success"><i class="fa fa-unlock-alt"></i></a> 
										        @else
										          <a href="{{ url('activeUser/'.$user->id) }}" class="btn btn-warning"><i class="fa fa-lock"></i></a> 
										        @endIf

										   </td>
										</tr>
									@endforeach
							    </tbody>
							</table>
							
						</p>
						
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div>
   
   </div>
@endSection