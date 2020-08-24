<x-alt-sidebar-menu 
 label="Dasboard" 
 icon="fas fa-tachometer-alt" 
 href="{{route('demo.index')}}" />

<li class="nav-header">COMPONENTS</li>

<x-alt-sidebar-menu 
 label="Form" 
 icon="far fa-list-alt "
 :href="route('demo.form')" />

 <x-alt-sidebar-menu 
 label="Tabel" 
 icon="fas fa-th-list "
 :href="route('demo.table')" />

<li class="nav-header">SETTINGS</li>

<x-alt-sidebar-menu
 label="Users" 
 icon="fas fa-user-friends"
 is="user*"
 has-treeview="true">

  <x-alt-sidebar-submenu
   label="All User"
   href="#"/>

  <x-alt-sidebar-submenu
   label="Add New"
   href="#"/>

</x-alt-sidebar-menu>

<x-alt-sidebar-menu 
 label="Simple Link" 
 icon="fas fa-th"
 badge="New" />

 <x-alt-sidebar-menu 
 label="About" 
 icon="fas fa-exclamation-circle"
 :href="route('demo.about')" />