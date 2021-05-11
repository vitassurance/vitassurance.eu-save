	<!-- Carousel -->
 	<div id="main-slide" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ol class="carousel-indicators visible-lg visible-md">
		  	<li data-target="#main-slide" data-slide-to="0" class="active"></li>
		   <li data-target="#main-slide" data-slide-to="1"></li>
		</ol><!--/ Indicators end-->

		<!-- Carousel inner -->
		<div class="carousel-inner">
			<div class="item active" style="background-image:url(front-end/images/slider-main/bg1.jpg)">
           	<div class="slider-content">
               <div class="col-md-12 text-center">
                   <h2 class="slide-title animated4"> Insuring Your Trust</h2>
                   <h3 class="slide-sub-title animated5">To Secure the Future, Protect Whats Important</h3>	
                   <p class="animated6">
                   	<a href="#" class="slider btn btn-primary">Learn More</a>
                   	<a href="#" class="slider btn btn-primary border">Get a Quote</a>
                   </p>	     
               </div>
           	</div>
		   </div><!--/ Carousel item end -->


		   <div class="item" style="background-image:url(front-end/images/slider-main/bg2.jpg)">
            <div class="slider-content">
              	<div class="col-md-12 text-center">
              		<div class="slider-img">
                    	<img class="pull-left" src="{{ asset('front-end/images/slider-main/bg2-a.png') }}" alt="">
                  </div>
              		<div class="slider-text">
                     <h2 class="slide-title animated2"> Friendly Staff</h2>
                   	<h3 class="slide-sub-title animated3">To Help With Your Insurance Needs</h3>
                   	<p class="animated6"><a href="#" class="slider btn btn-primary">Contact Us Now</a></p>
                  </div>
              	</div>
            </div>
		    </div><!--/ Carousel item end -->
		    
		</div><!-- Carousel inner end-->

		<!-- Controllers -->
		<a class="left carousel-control" href="#main-slide" data-slide="prev">
	    	<span><i class="fa fa-angle-left"></i></span>
		</a>
		<a class="right carousel-control" href="#main-slide" data-slide="next">
	    	<span><i class="fa fa-angle-right"></i></span>
		</a>

		<span class="down-arrow-transparent"></span>

	</div><!--/ Carousel end -->  