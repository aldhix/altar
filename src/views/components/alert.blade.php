@props(['type'=>'success'])

<div class="alert alert-{{$type}} alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  {{$slot}}
</div>