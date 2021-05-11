@extends('template.back')
@section('content')



   <div class="row">
   	<div class="col-md-12">
   		<ul class="nav nav-pills nav-justified">
		  <li role="presentation" ><a href="{{ url('parametrage') }}">Général</a></li>
		  <li role="presentation" class="active"><a href="{{ url('produits') }}">Produit</a></li>
		  <li role="presentation"><a href="{{ url('users') }}">Utilisateur</a></li>
		</ul>
   	</div>
   </div>


   <div class="row">
   	<div class="col-md-12">
   		
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Nouveau produit</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body text-center">
						
						<p class="text-muted m-b-lg">
							  
                          {!! Form::open(['url' => url('produits'), 'class' => 'form-horizontal']) !!}
							  <div class="form-group">
							    <label for="titre" class="col-sm-2 control-label">Titre</label>
							    <div class="col-sm-10">
							      
							      {{ Form::text('titre', '', ['class' => 'form-control', 'id' => 'titre', 'placeholder' => 'Titre produit']) }}
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="description" class="col-sm-2 control-label">Description</label>
							    <div class="col-sm-10">
							      {{ Form::text('description', '', ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Description']) }}
							    </div>
							  </div>
							  
							    <div class="form-group">
							    <label for="lien" class="col-sm-2 control-label">Lien</label>
							    <div class="col-sm-10">
							      {{ Form::text('lien', '', ['class' => 'form-control', 'id' => 'lien', 'placeholder' => 'lien']) }}
							    </div>
							  </div>

							  <div class="form-group">
							    <label for="lien" class="col-sm-2 control-label">Icon</label>
							    <div class="col-sm-10">
							      {{ Form::text('icon', '', ['class' => 'form-control', 'id' => 'icon', 'placeholder' => 'icon']) }}
							    </div>
							  </div>

							

							 
							  <div class="form-group">
							    <div class="col-sm-offset-2 col-sm-10" align="right">
							      <a href="{{ url('produits') }}" class="btn btn-default"><i class="fa fa-reply-all"></i> Retour</a>
							      <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Enregister</button>
							    </div>
							  </div>
							{!! Form::close() !!}
							
						</p>
						
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div>
   
   </div>

@endSection