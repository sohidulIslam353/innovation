@extends('layouts.app')
@section('content')
<div class="col-lg-10">
  <div class="card">
    <div class="card-header">
      <strong>Category Add</strong> 
    </div>
       @if(session('add-category'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('add-category')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
    <div class="card-body card-block">

      <form action="{{route('insert.category')}}" method="post"  class="form-horizontal"> 
        {{csrf_field()}}    
        <div class="row form-group">
          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Category Name</label></div>
          <div class="col-12 col-md-9">
            <input type="text" id="email-input" name="category_name" required="" placeholder="Enter category name" class="form-control"><small class="help-block form-text">Please enter category</small>
          </div>
        </div>     
        <div class="row form-group">
          <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">category description</label></div>
          <div class="col-12 col-md-9">
            <textarea name="category_description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Publication Status</label></div>
          <div class="col-12 col-md-9">
            <input type="checkbox" name="publication_status" value="1"> Published
          </div>
        </div>     
        <div class="card-footer">
	      <button type="submit" class="btn btn-primary btn-sm">
	        <i class="fa fa-dot-circle-o"></i> Add category
	      </button>
	      <button type="reset" class="btn btn-danger btn-sm">
	        <i class="fa fa-ban"></i> Reset
	      </button>
        </div>            
      </form>

     </div>   
    </div> 
  </div>
</div>


@endsection