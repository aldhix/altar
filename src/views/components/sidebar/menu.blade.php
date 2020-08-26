@props(['label', 'href'=>'#','icon'=>'','treeview'=>false,'is'=>null,'badge'=>'','badgeType'=>'danger'])

<li class="nav-item @if($treeview) has-treeview @if(request()->is($is)) menu-open @endif @endif ">
  <a href="{{$href}}" class="nav-link @if( url()->current() == $href || request()->is($is) ) active @endif">
    @if($icon != '') <i class="nav-icon {{ $icon }}"></i> @endif
    <p>
      {{$label}}
      @if($treeview) <i class="right fas fa-angle-left"></i> @endif
      @if($badge != '') <span class="right badge badge-{{$badgeType}}">{{ $badge }}</span> @endif
    </p>
  </a>
  @if($treeview)
  <ul class="nav nav-treeview">
  	{{ $slot }}
  </ul>
  @endif
</li>