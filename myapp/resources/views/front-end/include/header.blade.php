	<div class="row">
				<div class="logo col-xs-12 col-sm-3">
                <a href="{{ url('/') }}" >
                	<h2><img height="116" src={{asset('/front-end/images/400PngdpiLogoCropped.png')}}></h2> 
                </a>
         	</div><!-- logo end -->

         	<div class="col-xs-12 col-sm-7 header-right">
         		<ul class="top-info">
						<li>
							<div class="info-box"><span class="info-icon"><i class="fa fa-map-marker">&nbsp;</i></span>
								<div class="info-box-content">
									<p class="info-box-title">Adresse</p>
									<p class="info-box-subtitle">{{$parametrage->adresse}}</p>
								</div>
							</div>
						</li>
						<li>
							<div class="info-box"><span class="info-icon"><i class="fa fa-phone">&nbsp;</i></span>
								<div class="info-box-content">
									<p class="info-box-title">(+33) {{$parametrage->tel1}}</p>
									<p class="info-box-subtitle">{{$parametrage->email}}</p>
								</div>
							</div>
						</li>
						
					</ul>
         	</div><!-- header right end -->
			</div><!-- Row end -->