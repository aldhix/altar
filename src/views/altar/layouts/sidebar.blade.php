<x-slot name='logo'>
	<a href="{{route('demo.index')}}" class="brand-link">
		<img class="brand-image img-circle elevation-3" style="opacity: .8"
		src="{{url('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" />
		<span class="brand-text font-weight-light">{{ config('app.name') }}</span>
	</a>
</x-slot>

<x-slot name="user">
	<div class="image">
		<img class="img-circle elevation-2"
		 src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" alt="User Image">
	</div>
	<div class="info">
		<a href="#" class="d-block">Alexander Pierce</a>
	</div>
</x-slot>

<x-slot name="nav">
	<x-alt-sidebar-menu label="Dasboard" :href="route('demo.index')" icon="fas fa-tachometer-alt"  />

	<li class="nav-header">COMPONENTS</li>
	<x-alt-sidebar-menu label="Form" :href="route('demo.form')" icon="far fa-list-alt"  />
	<x-alt-sidebar-menu label="Tabel" :href="route('demo.table')" icon="fas fa-th-list"  />
	<x-alt-sidebar-menu label="Extra" is="demo*" icon="far fa-plus-square" :treeview="true">
		<x-alt-sidebar-submenu label="Login" :href="route('demo.login')" />
		<x-alt-sidebar-submenu label="Error 404" :href="route('demo.404')" />
		<x-alt-sidebar-submenu label="Error 500" :href="route('demo.500')" />
	</x-alt-sidebar-menu>

	<li class="nav-header">SETTINGS</li>

	<x-alt-sidebar-menu label="Users" is="user*" icon="fas fa-user-friends" :treeview="true">
	  <x-alt-sidebar-submenu label="All User" href="#"/>
	  <x-alt-sidebar-submenu label="Add New" href="#"/>
	</x-alt-sidebar-menu>

	<x-alt-sidebar-menu label="Simple Link" icon="fas fa-th" badge="New" />
	<x-alt-sidebar-menu label="About" icon="fas fa-exclamation-circle" :href="route('demo.about')" />
</x-slot>