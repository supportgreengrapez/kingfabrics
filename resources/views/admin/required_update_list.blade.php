@extends('admin.layout.appadmin')
@section('content') 

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="title_left">
          <h3>Enquiry Management</h3>
          <h4>Required Update</h4>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content">
          <table id="datatable-responsive" class="table table-condense dt-responsive" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Enquiry Id</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Status</th>
                <th>More Options</th>
              </tr>
            </thead>
            <tbody>
            
            @if($result>0)
            @foreach($result as $results)
            <tr>
              <td>{{$results->pk_id}}</td>
              <td>{{$results->product_name}}</td>
              <td>{{$results->category}}</td>
              <th><span class="label label-danger">Update Required</span></th>
              <td><a href="{{URL('/')}}/admin/home/view/update/{{$results->pk_id}}/{{$results->c_id}}">View</a></td>
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