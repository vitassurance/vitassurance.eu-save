<aside id="app-aside" class="app-aside left light">
	<header class="aside-header">
		<div class="animated">
			<a href="{{url('back')}}" id="app-brand" class="app-brand">
				<span id="brand-icon" class="brand-icon"><i class="fa fa-gg"></i></span>
				<span id="brand-name" class="brand-icon foldable">{{$parametrage->logo}}</span>
			</a>
		</div>
	</header><!-- #sidebar-header -->
	
	<div class="aside-user">
		<!-- aside-user -->
		<div class="media">
			<div class="media-left">
				<div class="avatar avatar-md avatar-circle">
					<a href="javascript:void(0)"><img class="img-responsive" src="{{ asset('back-end/assets/images/221.jpg') }}" alt="avatar"/></a>
				</div><!-- .avatar -->
			</div>
			<div class="media-body">
				<div class="foldable">
					<h5><a href="javascript:void(0)" class="username">{{ Auth::user()->name }}</a></h5>
					<ul>
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<small>Administrateur</small>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu animated flipInY">
								<li>
									<a class="text-color" href="{{url('back')}}">
										<span class="m-r-xs"><i class="fa fa-home"></i></span>
										<span>Acceuil</span>
									</a>
								</li>
								<li>
									<a class="text-color" href="#">
										<span class="m-r-xs"><i class="fa fa-user"></i></span>
										<span>Profile</span>
									</a>
								</li>
								<li>
									<a class="text-color" href="{{ url('parametrage') }}">
										<span class="m-r-xs"><i class="fa fa-gear"></i></span>
										<span>Paramétrage</span>
									</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a class="text-color" href="{{ url('logout') }}">
										<span class="m-r-xs"><i class="fa fa-power-off"></i></span>
										<span>Déconnexion</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /aside-user -->
	</div><!-- #aside-user -->

	<div class="aside-scroll">
		<div id="aside-scroll-inner" class="aside-scroll-inner">
			<ul class="aside-menu aside-left-menu">
				

				<li class="menu-item">
					<a href="{{ url('back') }}" class="menu-link">
						<span class="menu-icon"><i class="zmdi zmdi-view-dashboard zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Tableau de bord</span>
					</a>
				</li><!-- .menu-item -->
				<li class="menu-item">
					<a href="{{url('back')}}" class="menu-link">
						<span class="menu-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
						<span class="menu-text foldable">Clients</span>
					</a>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-pages zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Leads</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li> 
						    <a href="{{url('back-sante')}}">
						    	<span class="menu-icon"><i class="zmdi zmdi-local-hospital zmdi-hc-lg" style="color:#188ae2;"></i></span>
						    	<span class="menu-text foldable">Mutuelle santé</span>
						    </a>
						</li>
						<li> 
						    <a href="{{url('back-obseque')}}">
						    	<span class="menu-icon"><i class="zmdi zmdi-hotel zmdi-hc-lg" style="color:#188ae2;"></i></span>
						    	<span class="menu-text foldable">Obsèque</span>
						    </a>
						</li>
						<li> 
						    <a href="{{url('back-habitation')}}">
						    	<span class="menu-icon"><i class="fa fa-home" style="color:#188ae2;"></i></span>
						    	<span class="menu-text foldable">Habitation</span>
						    </a>
						</li>
						
						<li> 
						    <a href="{{url('back-moto')}}">
						    	<span class="menu-icon"><i class="fa fa-motorcycle" style="color:#188ae2;"></i></span>
						    	<span class="menu-text foldable">Moto</span>
						    </a>
						</li>
						@foreach($provisoires as $provisoire)
						<li> 
						    <a href="{{url('lead/'.$provisoire->id)}}">
						    	<span class="menu-icon"><i class="fa {{$provisoire->icon}}" style="color:#10c469;"></i></span>
						    	<span class="menu-text foldable">{{$provisoire->titre}}</span>
						    </a>
						</li>
					@endforeach
					
					</ul>
				</li><!-- .menu-item -->
				<li class="menu-item">
					<a href="{{url('lead')}}" class="menu-link">
						<span class="menu-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
						<span class="menu-text foldable">Leads</span>
					</a>
				</li><!-- .menu-item -->


				
				
				<li class="menu-item">
					<a href="{{url('message')}}" class="menu-link">
						<span class="menu-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
						<span class="menu-text foldable">Messages</span>
					</a>
				</li><!-- .menu-item -->

				<li class="menu-item">
					<a href="{{ url('statistique') }}" class="menu-link">
						<span class="menu-icon"><i class="zmdi zmdi-chart zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Statistique</span>
					</a>
				</li><!-- .menu-item -->

			</ul>
			<hr>
			<footer id="aside-footer">
				<ul class="aside-menu aside-left-menu">
					
					<li class="menu-item">
						<a href="{{ url('parametrage') }}" class="menu-link">
							<span class="menu-icon"><i class="zmdi zmdi-settings zmdi-hc-lg"></i></span>
							<span class="menu-text foldable">Paramétrage</span>
						</a>
					</li><!-- .menu-item -->
					
					<li class="menu-item">
						<a href="{{ url('logout') }}" class="menu-link">
							<span class="menu-icon"><i class="fa fa-power-off"></i></span>
							<span class="menu-text foldable">Déconnexion</span>
						</a>
					</li><!-- .menu-item -->

				</ul>
			</footer><!-- #sidebar-footer -->
		</div><!-- .aside-scroll-inner -->
	</div><!-- #aside-scroll -->
</aside>
<!--========== END app aside