@props(['left'=>'','right'=>''])
<nav class="main-header navbar navbar-expand navbar-dark">
 <!-- Left navbar links -->
  <ul class="navbar-nav">
    <?= $left ?>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <?= $right ?>
  </ul>
</nav>