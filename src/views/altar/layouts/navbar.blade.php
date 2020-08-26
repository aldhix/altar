<x-slot name="left">
	<li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
     <x-alt-navbar-menu label="Home" href="#" />
     <x-alt-navbar-menu label="Contact" href="#" />
</x-slot>

<x-slot name="right">
	<x-alt-navbar-menu :dropdown="true" size="md">
	    <x-slot name="label">
	      <i class="fas fa-users-cog"></i> Username 
	    </x-slot>
	    <a href="#" class="dropdown-item">
	      <i class="fas fa-user mr-2"></i> My Profile
	    </a>
	     <a href="{{ route('demo.about') }}" class="dropdown-item">
	      <i class="fas fa-exclamation-circle mr-2"></i> About
	    </a>
	    <div class="dropdown-divider"></div>
	    <a href="#" class="dropdown-item">
	      <i class="fas fa-sign-out-alt mr-2"></i> Logout
	    </a>
	</x-alt-navbar-menu>
</x-slot>
