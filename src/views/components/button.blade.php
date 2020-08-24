@props(['btn'=>'secondary text-light','type'=>'submit'])

@if($type =='link')
<a {{ $attributes->merge(['class' => 'btn btn-'.$btn]) }}>{{ $slot }}</a>
@else
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'btn btn-'.$btn]) }}>
    {{ $slot }}
</button>
@endif
