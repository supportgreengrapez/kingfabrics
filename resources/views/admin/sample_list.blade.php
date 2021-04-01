@extends('admin.layout.appadmin')
@section('content') 
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="col-md-10 col-sm-12 col-xs-12">
        <div class="title_left">
          <h3>Sample Management</h3>
          <h4>Sample List</h4>
        </div>
      </div>
      <div class="col-md-2 col-sm-12 col-xs-12">
        <div class="title_left"> <a href="{{url('/')}}/admin/home/add/sample/view" type="button" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add Sample</a> </div>
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
                <th>Name</th>
                <th>Category</th>
                <th>GSM</th>
                <th>Fabric Referance</th>
                <th>Weave</th>
                <th>More Options</th>
              </tr>
            </thead>
            <tbody>
            @if(count($result)>0)
            @foreach($result as $results)
              <tr>
                <td>{{$results->pk_id}}</td>
                <td>{{$results->name}}</td>
                <td>{{$results->main_category}}</td>
                <td>{{$results->GSM}}</td>
                <td>{{$results->refrence}}</td>
                <td>{{$results->weave}}</td>
                <td><a href="{{URL('/')}}/admin/home/view/sample/detail/view/{{$results->pk_id}}" class="green">View</a> | <a href="{{URL('/')}}/admin/home/edit/sample/view/{{$results->pk_id}}">Edit</a> | <a href="{{URL('/')}}/admin/home/delete/sample/{{$results->pk_id}}"  class="red">Delete</a></td>
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