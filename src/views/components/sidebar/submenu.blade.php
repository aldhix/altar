@props(['label', 'href'=>'#','icon'=>'far fa-circle','hasTreeview'=>false])

<li class="nav-item">
  <a href="{{$href}}" class="nav-link @if( url()->current() == $href ) active @endif">
    <i class="nav-icon {{ $icon }}"></i>
    <p>{{$label}}</p>
  </a>
</li>