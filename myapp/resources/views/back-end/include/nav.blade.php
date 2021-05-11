<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="app-navbar p-l-lg p-r-md primary">
	<div id="navbar-header" class="pull-left">
		<button id="aside-fold" class="hamburger visible-lg-inline-block hamburger--arrowalt is-active js-hamburger" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<button id="aside-toggle" class="hamburger hidden-lg hamburger--spin js-hamburger" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<h5 id="page-title" class="visible-md-inline-block visible-lg-inline-block m-l-md">Tableau de bord</h5>
	</div>

	<div>
		<ul id="top-nav" class="pull-right">
			<li class="nav-item dropdown">
				<a href="javascript:void(0)" id="navbar-search-open" class="navbar-search-open">
					<i class="zmdi zmdi-hc-lg zmdi-search"></i>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-notifications"></i></a>
				<div class="media-group dropdown-menu animated flipInY">
					<!-- <a href="javascript:void(0)" class="media-group-item">
						<div class="media">
							<div class="media-left">
								<div class="avatar avatar-xs avatar-circle">
									<img src="../assets/images/221.jpg" alt="">
									<i class="status status-online"></i>
								</div>
							</div>
							<div class="media-body">
								<h5 class="media-heading">John Doe</h5>
								<small class="media-meta">Active now</small>
							</div>
						</div>
					</a> --><!-- .media-group-item -->

					

					

				</div>
			</li>
			<li class="nav-item dropdown">
				<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
				<ul class="dropdown-menu animated flipInY">
				<li><a href="{{ url('logout') }}" class="menu-link">
							<span class="menu-icon"><i class="fa fa-power-off"></i></span>
							<span class="menu-text foldable">Déconnexion</span>
						</a></li>
					<!-- <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>My Profile</a></li>
					<li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a></li>
					<li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Connection<span class="label _bgtext-primary">3</span></a></li>
					<li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a></li> -->
				</ul>
			</li>
			
		</ul>
	</div>

	<!-- navbar search -->
	<div id="navbar-search" class="navbar-search">
		<form action="#">
			<span class="search-icon"><i class="fa fa-search"></i></span>
			<input class="search-field" type="search" placeholder="search..."/>
		</form>
		<button id="search-close" class="search-close">
			<i class="fa fa-close"></i>
		</button>
	</div><!-- END navbar search -->
</nav>
<!--========== END app navbar -->