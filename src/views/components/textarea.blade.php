@props([
'label'=>'',
'name'=>'',
'value'=>'',
'inline'=>false,
'colLabel'=>'col-sm-4',
'colInput'=>'col-sm-8',
'formGroup'=>true,
'error'=>'',
'disabled'=> false
])

@if($inline)
@if($formGroup)
<div class="row form-group">
	@if($label !== '')
	<label class="{{$colLabel}}">{{ $label }}</label>
	@endif
@endif 
@else
@if($formGroup)
	<div class="form-group">
	@if($label !== '')
	<label>{{ $label }}</label>
	@endif
@endif	
@endif 
	@if($inline) <div class="{{$colInput}}">@endif
		<?php 
		$error_field = !empty($error) ? $error : $name; 
		?>
		<textarea 
		{{ $attributes->merge(['class' =>'form-control '.($errors->has($error_field) ? 'is-invalid' : '')]) }} {{ $disabled ? 'disabled' : '' }}
		name={{$name}}>{{ old($error_field,$value) }}</textarea>
		@error($error_field)
	    <div class="invalid-feedback">{{ $message }}</div>
		@enderror
	@if($inline) </div> @endif
@if($formGroup)</div> @endif
