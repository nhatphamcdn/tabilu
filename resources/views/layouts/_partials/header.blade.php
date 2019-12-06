<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
	<div class="navbar-wrapper">
		<div class="navbar-container content">
			<div class="collapse navbar-collapse show h-100" id="navbar-mobile">
				<ul class="nav navbar-nav mr-auto float-left align-items-center">
					<li class="nav-item d-block d-md-none">
						<a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
							<i class="ft-menu"></i>
						</a>
					</li>
					<li class="nav-item dropdown navbar-search">
						<form>
							<div class="input-group search-box">
								<input class="form-control" id="search" type="text" placeholder="Search here...">
							</div>
						</form>
					</li>
				</ul>
				<ul class="nav navbar-nav float-right align-items-center">
					<li class="nav-item d-none d-md-inline-block">
						<a class="nav-link dropdown-user-link" href="#">
							<span>{{ Auth::user()->name }}</span>
							<span class="avatar avatar-online">
								<img src="{{ asset('/img/avatar/avatar.jpg') }}" alt="avatar">
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('logout') }}"
							title="{{ __('Logout') }}"
							data-no-instant
							onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
							<span>
								<i class="la la-power-off m-0"></i>
							</span>
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>