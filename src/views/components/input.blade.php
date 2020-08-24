@props([
	'label'=>'',
	'name'=>'',
	'value'=>'',
	'type'=>'text', 
	'inline'=>false,
	'colLabel'=>'col-sm-4',
	'colInput'=>'col-sm-8',
	'formGroup'=>true,
	'append'=>'',
	'prepend'=>'',
	'error'=>'',
	'feedback'=>'',
	'disabled'=> false,
	'prependType'=>'',
	'appendType'=>'',
	'btnClass'=>'btn btn-secondary',
	'btnAttr'=>'',
	'prependBtnClass'=>'btn btn-secondary',
	'prependBtnAttr'=>'',
	'appendBtnClass'=>'btn btn-secondary',
	'appendBtnAttr'=>'',
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
	@if($append != '' || $prepend != '') <div class="input-group"> @endif
		@if($prepend != '') 
			<div class="input-group-prepend">
				@if($prependType == '')
				<span class="input-group-text">{{$prepend}}</span>
				@else
				<button class="{{$prependBtnClass}}" {{$prependBtnAttr}} type="{{$prependType}}">{{$prepend}}</button>
				@endif
			</div>
		@endif
		<?php 
		$error_field = !empty($error) ? $error : $name; 
		?>
		<input type="{{ $type }}"
		{{ $attributes->merge(['class' =>'form-control '.( $errors->has($error_field) ? 'is-invalid' : '')]) }}
		name="{{ $name }}" value="{{ old($error_field,$value) }}" {{ $disabled ? 'disabled' : '' }} />
		@if($append != '') 
			<div class="input-group-append">
				@if($appendType == '')
				<span class="input-group-text">{{$append}}</span>
				@else
				<button class="{{$appendBtnClass}}" {{$appendBtnAttr}} type="{{$appendType}}">{{$append}}</button>
				@endif
			</div>
		@endif
		@error($error_field )
	    <div class="invalid-feedback">{{ $message }}</div>
		@enderror
		{{$feedback}}
	@if($append != '' || $prepend != '') </div> @endif
 	@if($inline) </div> @endif
@if($formGroup)</div> @endif