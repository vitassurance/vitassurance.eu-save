@extends('template.front')

@section('content')

{!! Form::open([
    'action' => 'ContactController@insertionMessage','files' => true, 'id' => 'form', 'data-validate' => 'parsley'
]) !!}
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">

				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->

					<div >
						<iframe src="{{$contact->googleMaps}}" width="700" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div><!-- Content col end -->

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="widget">
							<h3 class="widget-title">Contactez nous</h3>

							<div class="contact-info-box">
								<i class="fa fa-map-marker">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Adresse</h4>
									<p>{{ $contact->adresse }}</p>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-phone">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Téléphone</h4>
									<p>{{ $contact->tel1 }}</p>
									<p>{{ $contact->tel2 }}</p>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-envelope">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Email</h4>
									
									<p>{{ $contact->email }}</p>
								</div>
							</div>

						</div><!-- Widget end -->

					</div><!-- Sidebar end -->
				</div><!-- Sidebar Col end -->
			
			</div><!-- Content row -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

	<section id="contact" class="contact-three">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
	    			<h3 class="contact-form-title">Laissez un message</h3>

	    			
	    				<div class="error-container"></div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Votre nom</label>
								<input class="form-control form-control-name" name="nom" id="nom" placeholder="" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Votre email</label>
									<input class="form-control form-control-email" name="eml" id="eml" 
									placeholder="" type="email" required>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Objectif</label>
									<input class="form-control form-control-subject" name="objectif" id="objectif" 
									placeholder="" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                            @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" type="submit">Envoyer</button> 
						</div>
					
	    		</div>
			</div>
		</div>
	</section><!-- Cotact form end -->

@endSection

