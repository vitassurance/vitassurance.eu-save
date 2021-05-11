<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EMMAASSUR - Creation compte</title>
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
	<div id="back-to-home">
		<a href="index.html" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
	</div>
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="index.html">
				<span><i class="fa fa-gg"></i></span>
				<span>EMMAASSUR</span>
			</a>
		</div><!-- logo -->
		
<div class="simple-page-form animated flipInY" id="signup-form">
	<h4 class="form-title m-b-xl text-center">Creation d'un nouveau compte</h4>
	<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    {!! csrf_field() !!}
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			<input id="name" name="name" type="text" class="form-control" placeholder="Nom">
             @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
		</div>

		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
		</div>

		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<input type="password" class="form-control" name="password" placeholder="Mot de passe">
            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
		</div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            

                         
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmation Mot de passe">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
        

		<div class="form-group m-b-xl">
			<div class="checkbox checkbox-primary">
				<input type="checkbox" id="keep_me_logged_in"/>
				<label for="keep_me_logged_in">Se connecter</label>
			</div>
		</div>
		<input type="submit" class="btn btn-primary" value="ENREGISTRER">
	</form>
</div><!-- #login-form -->

<div class="simple-page-footer">
	<p>
		<small>Do you have an account ?</small>
		<a href="{{ url('/login') }}">SE CONNECTER</a>
	</p>
</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>
</html>
