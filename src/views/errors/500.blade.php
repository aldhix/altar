@extends('altar::page-extra',['title'=>'Error 500. Oops! Something went wrong','body_class'=>'error-page'])
@section('content')
<!-- Main content -->
<section class="content">
  <div class="error-page">
    <h2 class="headline text-danger">500</h2>
    <div class="error-content pt-4">
      <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>

      <p>
        We will work on fixing that right away.
        Meanwhile, you may <a href="{{route('demo.index')}}">return to dashboard</a> or try using the search form.
      </p>
        <!-- /.input-group -->
      </form>
    </div>
  </div>
  <!-- /.error-page -->

</section>
<!-- /.content -->
@endsection

@push('css')
<style type="text/css">

.error-page{
	background-color: #e9ecef;
	padding-top: 30px;
}

</style>
@endpush