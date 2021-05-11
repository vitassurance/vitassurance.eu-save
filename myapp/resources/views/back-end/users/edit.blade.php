@extends('template.back')
@section('content')



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
						<h4 class="widget-title">Edition Utilisateur</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body text-center">
						
						<p class="text-muted m-b-lg">
							  
                          {!! Form::open(['url' => url('users', $user->id), 'class' => 'form-horizontal', 'method' => 'put']) !!}
                          {{ csrf_field()}}
							  <div class="form-group">
							    <label for="titre" class="col-sm-2 control-label">Nom/Prenom</label>
							    <div class="col-sm-10">
							      
							      {{ Form::text('name', $user->name, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Nom/Prenom']) }}
							      @if ($errors->has('name'))
							      <span class="help-block">
							      	<strong>{{ $errors->first('name')}}</strong>
							      </span>
							      @endif
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="description" class="col-sm-2 control-label">Email</label>
							    <div class="col-sm-10">
							      {{ Form::text('email', $user->email, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) }}
							       @if ($errors->has('email'))
							      <span class="help-block">
							      	<strong>{{ $errors->first('email')}}</strong>
							      </span>
							      @endif
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="icon" class="col-sm-2 control-label">Mot de passe</label>
							    <div class="col-sm-10">
							      {{ Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'mot de passe']) }}
							    </div>
							  </div>
							    
							 
							  <div class="form-group">
							    <div class="col-sm-offset-2 col-sm-10" align="right">
							      <a href="{{ url('users') }}" class="btn btn-default"><i class="fa fa-reply-all"></i> Retour</a>
							      <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> Modifier</button>
							    </div>
							  </div>
							{!! Form::close() !!}
							
						</p>
						
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div>
   
   </div>

@endSection