@props(['dropdown'=>false,'label'=>'','float'=>'right','size'=>'lg'])
@if($dropdown)    
<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
{{$label}}
</a>
<div class="dropdown-menu dropdown-menu-{{$size}} dropdown-menu-{{$float}}">
{{$slot}}
</div>
</li>
@else
<li class="nav-item dropdown">
<a {{ $attributes->merge(['class' => 'nav-link']) }}>{{$label}}</a>
</li>
@endif