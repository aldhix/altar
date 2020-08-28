@props([
	'label'=>'',
	'name'=>'',
	'value'=>url('images/noimage.png'),
	'type'=>'text', 
	'inline'=>false,
	'colLabel'=>'col-sm-4',
	'colInput'=>'col-sm-8',
	'formGroup'=>true,
	'error'=>'',
	'feedback'=>'',
	'disabled'=> false,
	'btnClass'=>'btn btn-secondary',
	'btnAttr'=>'',
	'accept'=>'image/png, image/jpeg',
])

@if($inline)
@if($formGroup)
<div class="row form-group">
	@if($label !== '')
	<label class="<?= $colLabel?>"><?=  $label ?></label>
	@endif
@endif 
@else
@if($formGroup)
	<div class="form-group">
	@if($label !== '')
	<label><?=  $label ?></label>
	@endif
@endif	
@endif 
	@if($inline) <div class="<?= $colInput?>">@endif
		<?php 
		$error_field = !empty($error) ? $error : $name; 
		?>
		<div class="profile-input">
			<div class="img-preview img-thumbnail" 
	          data-src="<?= $value ?>"
	          style="background-image:url(<?= $value ?>)">
	              <div class="btn img-remove btn-danger"><i class="fas fa-times"></i></div>
	              <div class="btn btn-info img-find"><i class="fas fa-search"></i></div>
	          </div>
			<input type="file"
			<?=  $attributes->merge(['class' =>'form-control photo '.( $errors->has($error_field) ? 'is-invalid' : '')]) ?>
			name="<?=  $name ?>" accept="<?= $accept?>" />
			@error($error_field )
		    <div class="invalid-feedback"><?=  $message ?></div>
			@enderror
			<?=  $feedback ?>
		</div>
 	@if($inline) </div> @endif
@if($formGroup)</div> @endif
