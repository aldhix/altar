@props(['search'=>false,'footer'=>'','header'=>'','headerCustom'=>false])

<div class="card">
@if($header != '' or $search)
  <div class="card-header">
    {{ $header }}
    <div class="card-tools">
    @if($search)
      <form action="?">
        <div class="input-group" style="width: 200px;">
          <input type="text" name="keyword" 
          class="form-control float-right" 
          placeholder="Search" 
          value="{{request()->keyword}}">
          <div class="input-group-append">
            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
      @endif
    </div>
  </div>
  @endif
  <div class="card-body table-responsive p-0">
    <table class="table table-hover table-striped table-sm">
      <thead>
      @if(!$headerCustom)
        <tr>
          {{$thead}}
        </tr>
      @else
        {{$thead}}
      @endif
      </thead>
      <tbody>
        {{$slot}}
      </tbody>
    </table>    
  </div>
  @if($footer != '')
  <div class="card-footer clearfix p-1">
    {{$footer}}
  </div>
  @endif
</div>
