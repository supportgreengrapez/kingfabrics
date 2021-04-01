@extends('admin.layout.appadmin')
@section('content') 
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="title_left">
          <h3>Enquiry Management</h3>
          <h4>Guest Enquiry List</h4>
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
                <th>Category</th>
                <th>GSM</th>
                <th>price</th>
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
                <td>{{$results->price}}</td>
                <td>{{$results->weave}}</td>
                <td><a href="{{URL('/')}}/admin/home/view/guest/enquiry/detail/{{$results->pk_id}}" class="green">View</a>
     
                 </td>
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