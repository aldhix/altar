@props(['label'=>'',
'name'=>'',
'value'=>'',
'option'=>[], 
'inline'=>false,
'colLabel'=>'col-sm-4',
'colInput'=>'col-sm-8',
'formGroup'=>true,
'append'=>'',
'prepend'=>'',
'feedback'=>'',
'disabled'=> false,
'prependType'=>'',
'appendType'=>'',
'prependBtnClass'=>'btn btn-secondary',
'prependBtnAttr'=>'',
'appendBtnClass'=>'btn btn-secondary',
'appendBtnAttr'=>'',
])

<?php $value = old($name,$value)  ?>

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
		<select name="{{ $name }}" {{ $disabled ? 'disabled' : '' }}
		{{ $attributes->merge(['class' =>'form-control '.($errors->has($name) ? 'is-invalid' : '')]) }}>
			<option value="" @if($value == '') selected @endif>
				{{ $slot == '' ? 'Pilih : ' : $slot  }}
			</option>
			@foreach($option as $opt)
				<option value="{{$opt['value']}}" @if($value == $opt['value']) selected @endif>
					{{$opt['label']}}
				</option>
			@endforeach
		</select>
		@if($append != '') 
			<div class="input-group-append">
				@if($appendType == '')
				<span class="input-group-text">{{$append}}</span>
				@else
				<button class="{{$appendBtnClass}}" {{$appendBtnAttr}} type="{{$appendType}}">{{$append}}</button>
				@endif
			</div>
		@endif
		@error($name)
	    <div class="invalid-feedback">{{ $message }}</div>
		@enderror
		{{$feedback}}
		@if($append != '' || $prepend != '') </div> @endif
	@if($inline) </div> @endif
@if($formGroup)</div> @endif
