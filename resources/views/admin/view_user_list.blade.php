@extends('admin.layout.appadmin')
@section('content') 

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="col-md-10 col-sm-12 col-xs-12">
        <div class="title_left">
          <h3>User Management</h3>
          <h4>User List</h4>
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
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>City</th>
                <th>More Details</th>
              </tr>
            </thead>
            <tbody>
            
            @if($result>0)
            @foreach($result as $results)
            <tr>
              <td>{{$results->pk_id}}</td>
              <td>{{$results->fname}}</td>
              <td>{{$results->username}}</td>
              <td>{{$results->mobile_no}}</td>
              <td>{{$results->city}}</td>
              <td><a href="{{URL('/')}}/admin/home/view/user/{{$results->pk_id}}">View</td>
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