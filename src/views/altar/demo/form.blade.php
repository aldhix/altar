@extends('alt::page')
@section('title','Form')
@section('heading')
<i class="far fa-list-alt"></i> Form
@endsection
@section('content')
<x-alt-alert>
  <h5><i class="icon fas fa-check"></i> Alert!</h5>
  Success alert preview. This alert is dismissable.
</x-alt-alert>

<x-alt-alert type="danger">
  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
  Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
</x-alt-alert>

<?php 
$tabs = [
  ['label'=>"Form Inline",'url'=>'?tab=current'],
  ['label'=>"Form Input Group",'url'=>'?tab=input-group'],
];
$tab = request()->tab;
$tab_active = !empty($tab) ? '?tab='.$tab : '?tab=current';
?>

<form method="post" action="{{route('demo.store')}}">
<x-alt-tabs-card :data-tabs="$tabs" :active="$tab_active">

@if($tab == 'current')
<div class="row">
  <div class="col-6">
   @csrf()
  <x-alt-input label="Nama" name="nama" inline="true" />
  <?php $option = [
      ['value'=>'L','label'=>'Laki-laki'],
      ['value'=>'P','label'=>'Perempuan'],
    ]; ?>
  <x-alt-select label="Jenis Kelamin" name="jenis_kelamin" :option="$option" inline="true" />
  <x-alt-input label="Email" name="email" type="email" inline="true" />
  <x-alt-input label="Password" name="password" type="password" inline="true" />
  <x-alt-textarea label="Alamat" name="alamat" rows="5" inline="true" />
  </div>
</div>
<x-slot name="footer">
  <x-alt-button btn="primary">Simpan</x-alt-button>
  <x-alt-button type="link" href="#">cancel</x-alt-button>
</x-slot>
@else

<div class="row">
  <div class="col-6">
  @csrf()
  <x-alt-input label="Nama" name="nama">
    <x-slot name="append"><i class="fas fa-user"></i></x-slot>
  </x-alt-input>

  <?php $option = [
      ['value'=>'L','label'=>'Laki-laki'],
      ['value'=>'P','label'=>'Perempuan'],
    ]; ?>
  
  <x-alt-select label="Jenis Kelamin" name="jenis_kelamin" :option="$option">
    <x-slot name="prepend"><i class="fas fa-venus-mars"></i></x-slot>
  </x-alt-select>

  <x-alt-input label="Email" name="email" type="email">
    <x-slot name="append"><i class="fas fa-envelope"></i></x-slot>
  </x-alt-input>
  
  <x-alt-input label="Password" name="password" type="password">
    <x-slot name="append"><i class="fas fa-key"></i></x-slot>
  </x-alt-input>
  
  <x-alt-textarea label="Alamat" name="alamat" rows="5" />
  </div>
</div>

<x-slot name="footer">
  <x-alt-button btn="primary">Simpan</x-alt-button>
  <x-alt-button type="link" href="#">cancel</x-alt-button>
</x-slot>

@endif
</x-alt-tabs-card>
</form>

@endsection
