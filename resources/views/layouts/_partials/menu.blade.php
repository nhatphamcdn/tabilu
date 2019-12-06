<div class="main-menu-content">
	<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
		<li class="{{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
			<a href="{{ route('admin.dashboard') }}">
				<i class="ft-home"></i>
				<span class="menu-title" data-i18n="">Dashboard</span>
			</a>
		</li>
		<li class="{{ request()->routeIs('admin.products*') ? 'active' : '' }}">
			<a href="{{ route('admin.products') }}">
				<i class="ft-layers"></i>
				<span class="menu-title">Products</span>
			</a>
		</li>
		<li class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}">
			<a href="{{ route('admin.users') }}">
				<i class="ft-users"></i>
				<span class="menu-title">Users</span>
			</a>
		</li>
		@if(Auth::user()->isRoot())
		<li class="{{ request()->routeIs('admins*') ? 'active' : '' }}">
			<a href="{{ route('admins') }}">
				<i class="ft-user"></i>
				<span class="menu-title">Admin</span>
			</a>
		</li>
		@endif
	</ul>
</div>