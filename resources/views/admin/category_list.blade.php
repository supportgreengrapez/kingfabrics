@extends('admin.layout.appadmin')
@section('content') 
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="col-md-10 col-sm-12 col-xs-12">
        <div class="title_left">
          <h3>Sample Management</h3>
          <h4>Category List</h4>
        </div>
      </div>
      <div class="col-md-2 col-sm-12 col-xs-12">
        <div class="title_left"> <a href="{{url('/')}}/admin/home/add/category/view" type="button" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add Category</a> </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content">
          <table id="datatable-responsive" class="table table-condense dt-responsive" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Category</th>
                <th>More Options</th>
              </tr>
            </thead>
            <tbody>
            @if(count($result)>0)
            @foreach($result as $results)
              <tr>
                <td>{{$results->pk_id}}</td>
                <td>{{$results->category}}</td>
                <td><a href="{{URL('/')}}/admin/home/edit/main/category/view/{{$results->pk_id}}" class="green">Edit</a> | <a href="{{URL('/')}}/admin/home/delete/category/{{$results->pk_id}}" class="red">Delete</a> </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content --> 

@endsection 