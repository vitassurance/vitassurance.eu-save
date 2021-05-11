


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$parametrage->titre}} - Authentification</title>
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

   

	<link rel="shortcut icon" sizes="196x196" href="{{ asset('back-end/assets/images/logo.png') }}">

      
	
	<link rel="stylesheet" href="{{ asset('back-end/libs/bower/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('back-end/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" href="{{ asset('back-end/libs/bower/animate.css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('back-end/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('back-end/assets/css/app.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
<body class="simple-page">
<div class="container">
<div class="row">
<div class="col-md-12">
	<div id="">
		<a href="{{ url('/') }}" class="btn btn-outline btn-default"><i class="fa fa-home fa-x3 animated zoomIn" style="color:white;"></i></a>
	</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-md-offset-3">
	<div class="" >
		<div class="simple-page-logo animated swing">
			<a href="#">
				<span><i class="fa fa-gg"></i></span>
				<span>{{$parametrage->logo}}</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Connexion</h4>
	<form role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
		</div>

		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe">
            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
		</div>

		<div class="form-group m-b-xl">
			<div class="checkbox checkbox-primary">
				<input type="checkbox" id="remember" name="remember"/>
				<label for="keep_me_logged_in">Rester connecter</label>
			</div>
		</div>
		<input type="submit" class="btn btn-primary" value="SE CONNECTER">
	</form>
</div><!-- #login-form -->

<!--<div class="simple-page-footer">
	<p><a href="{{url('/oublier')}}">MOT DE PASSE OUBLIÉ ?</a></p>-->
	<!--creation compte<p>
		<small>Vous n'avez pas votre propre compte ?</small>
		<a href="{{ url('/register') }}">CREER UN COMPTE</a>
	</p>-->
<!--</div>--><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
	</div>
	</div>
	</div>
</body>
</html>

