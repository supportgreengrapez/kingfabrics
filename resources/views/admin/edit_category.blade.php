@extends('admin.layout.appadmin')

@section('content') 

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Category Management</h3>
        <h4 style="display: block;">Add Category</h4>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content">
        @if($result>0)
                        @foreach($result as $results)
          <form method="post" action = "{{url('/')}}/admin/home/edit/main/category/{{$results->pk_id}}" enctype="multipart/form-data"  >
            @if($errors->any())
            <div class="alert alert-danger"> <strong></strong> {{$errors->first()}} </div>
            @endif
            {{ csrf_field() }}
            
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group ">
                <label class="control-label requiredField" for="name"> Category Name <span class="asteriskField"> * </span> </label>
                <div class="input-group">
                  <div class="input-group-addon"> <i class="fa fa-user"> </i> </div>
                  <input class="form-control"  name="category" type="text" value="{{$results->category}}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group ">
                <label class="control-label requiredField" for="name1"> Category Image <span class="asteriskField"> * </span> </label>
                <div class="input-group">
                  <div class="input-group-addon"> <i class="fa fa-camera"> </i> </div>
                
<input type='file' name="file" class="form-control" value="{{url('/')}}/storage/images/{{$result[0]->thumbnail}}"/>



                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="form-group">
                <div>
                  <button class="btn  btn-submmit" name="submit" type="submit"> Submit </button>
                </div>
              </div>
            </div>
          </form>
          @endforeach
              @endif
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content --> 

@endsection 