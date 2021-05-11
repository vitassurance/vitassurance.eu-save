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
		  <li role="presentation" class="active"><a href="">Produit</a></li>
		  <li role="presentation"><a href="{{ url('users') }}">Utilisateur</a></li>
		</ul>
   	</div>
   </div>


   <div class="row">
   	<div class="col-md-12">
   		
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Produits <span class="pull-right"><a class="btn btn-primary" href="{{ url('produits/create') }}">Nouveau produit</a></span></h4>

					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body text-center">
						
						<p class="text-muted m-b-lg">
							  
                            <table class="table table-striped">
								<tbody>
								    <tr><th>Icon</th><th>Titre</th><th>description</th><th>Url</th> <th></th> </tr>
								    @foreach($produits as $produit)
								   
										<tr >
										   <td align="left"> 

											@if($produit->provisoire)
										   <i class="fa {{ $produit->icon }} " data-toggle="tooltip" title="standard"  style="color:#10c469;"></i> {{ $produit->icon }}
											@else
											<i class="fa {{ $produit->icon }}" data-toggle="tooltip" title="Personalisé"  style="color:#188ae2;"></i> {{ $produit->icon }}
											@endif
										   </td>
										   <td align="left">{{ $produit->titre }}</td>
										   <td align="left">{{ $produit->description }}</td>
										   <td align="left">{{ $produit->lien }}</td>
										  
										   <td> 
										        <a href="{{ url('produits/'.$produit->id.'/edit') }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
										        @if($produit->active)
										          <a href="{{ url('status/'.$produit->id) }}" class="btn btn-success"><i class="fa fa-unlock-alt"></i></a> 
										        @else
										          <a href="{{ url('status/'.$produit->id) }}" class="btn btn-warning"><i class="fa fa-lock"></i></a> 
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