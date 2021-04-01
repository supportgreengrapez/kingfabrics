@extends('admin.layout.appadmin')
@section('content')  
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="title_left">
          <h3>Admin Management</h3>
          <h4>Admin List</h4>
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
                <th>Name</th>
                <th>Permisions</th>
                <th>More Options</th>
              </tr>
            </thead>
            <tbody>
            
            @if($result>0)
            @foreach($result as $results)
            <tr>
              <td>{{$results->fname}} {{$results->lname}}</td>
              <td> @if($results->enquiry_management==1) <span class="label label-warning">Enquiry</span> @endif
                @if($results->admin_management==1) <span class="label label-success">Admin</span> @endif
                @if($results->livechat_management==1) <span class="label label-primary">Live Chat</span> @endif
                </td>
              <td><a href="{{URL('/')}}/admin/home/view/admin/{{$results->pk_id}}">View</a></td>
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