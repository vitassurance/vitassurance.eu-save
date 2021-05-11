<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$parametrage->titre}} - Back-end</title>
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" sizes="196x196" href="{{ asset('back-end/assets/images/logo.png') }}">
	
	{{ Html::style('back-end/libs/bower/font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('back-end/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css') }}
    {{ Html::style('back-end/libs/bower/animate.css/animate.min.css') }}
    {{ Html::style('back-end/libs/bower/perfect-scrollbar/css/perfect-scrollbar.css') }}
    {{ Html::style('back-end/assets/css/bootstrap.css') }}
    {{ Html::style('back-end/assets/css/app.css') }}
    {{ Html::style('') }}
	<!-- endbuild -->

    @yield('stylesheets')

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
	
<body class="sb-left">
<!--============= start main area -->

@include('back-end.include.side')


@include('back-end.include.nav')


<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
	<div class="wrap">
	<section class="app-content">
	      @yield('content')
	</section><!-- #dash-content -->
</div><!-- .wrap -->
	
	

@include('back-end.include.footer')

</main>
<!--========== END app main -->

	<!-- build:js ../assets/js/core.min.js -->
	{{ Html::script('back-end/libs/bower/jquery/dist/jquery.js') }}
	{{ Html::script('back-end/libs/bower/jquery-ui/jquery-ui.min.js') }}
	{{ Html::script('back-end/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js') }}
	{{ Html::script('back-end/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js') }}
	{{ Html::script('back-end/libs/bower/superfish/dist/js/hoverIntent.js') }}
	{{ Html::script('back-end/libs/bower/superfish/dist/js/superfish.js') }}
	{{ Html::script('back-end/libs/bower/jquery-slimscroll/jquery.slimscroll.js') }}
	{{ Html::script('back-end/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}
	{{ Html::script('back-end/libs/bower/PACE/pace.min.js') }}
	<!-- endbuild -->

	<!-- build:js ../assets/js/app.min.js -->
	{{ Html::script('back-end/assets/js/library.js') }}
	{{ Html::script('back-end/assets/js/plugins.js') }}
	{{ Html::script('back-end/assets/js/app.js') }}
	
	@yield('javascripts')
	
</body>
</html>