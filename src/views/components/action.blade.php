@props(['size'=>'sm','edit'=>null,'view'=>null,'delete'=>null])

@if($view!=null)
<a href={{$view}} class="text-secondary" title="View"><i class="far fa-eye mr-2"></i></a>
@endif

@if($edit!=null)
<a href="{{$edit}}" class="text-secondary" title="Edit"><i class="far fa-edit mr-2"></i></a>
@endif

@if($delete!=null)
<a href="javascript:;" data-url="{{$delete}}" class="text-secondary btn-delete" title="Delete">
	<i class="far fa-trash-alt"></i>
</a>

@push('modal')
<div class="modal fade" id="modal-delete">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="far fa-trash-alt"></i> Delete</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin mau dihapus ?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <form method="post" action="#">
          @csrf()
          @method('delete')
          <button type="submit" class="btn btn-danger">Ok Delete !</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endpush

@push('js')
<script>
$(function(){
  $('table .btn-delete').click(function(){
      var url = $(this).attr('data-url');
      $('#modal-delete form').attr('action',url);
      $('#modal-delete').modal('show');
  });

  $('#modal-delete').on('hidden.bs.modal', function (e) {
     $('#modal-delete form').attr('action','#');
  })
});
</script>
@endpush

@endif
