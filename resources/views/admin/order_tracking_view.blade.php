@extends('admin.layout.appadmin')
@section('content') 
<script>
    var OrgID=-1;
      function getId(id)
      {
    
        
        OrgID = id;
        return true;
      }
      function getreal()
      {
        alert(OrgID);
        
       
      }
      
      
    
    </script> 
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="title_left">
          <h3>Enquiry Management</h3>
          <h4>Order Tracking</h4>
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
            @if($results->status!=7)
            <tr>
              <td>{{$results->e_id}}</td>
              <td>{{$results->product_name}}</td>
              <td>{{$results->category}}</td>
              <th> @if($results->status==1) <span id="{{$results->e_id}}" onclick="getId(this.id)" class="label label-success" data-toggle="modal" data-target="#myModal">accepted</span> @endif
                @if($results->status==2) <span id="{{$results->e_id}}" onclick="getId(this.id)" class="label label-danger" data-toggle="modal" data-target="#myModal">production</span> @endif
                @if($results->status==3) <span id="{{$results->e_id}}" onclick="getId(this.id)" class="label label-warning" data-toggle="modal" data-target="#myModal">dying</span> @endif
                @if($results->status==4) <span id="{{$results->e_id}}" onclick="getId(this.id)" class="label label-warning" data-toggle="modal" data-target="#myModal">folding</span> @endif
                @if($results->status==5) <span id="{{$results->e_id}}" onclick="getId(this.id)" class="label label-info" data-toggle="modal" data-target="#myModal">packing</span> @endif
                @if($results->status==6) <span id="{{$results->e_id}}" onclick="getId(this.id)" class="label label-success" data-toggle="modal" data-target="#myModal">dispatch</span> @endif </th>
              <td><a href="{{URL('/')}}/admin/home/order/tracking/specific/view/{{$results->e_id}}">View</a></td>
            </tr>
            @endif
            @endforeach
            @endif
              </tbody>
            
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog"> 
                
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Status</h4>
                  </div>
                  <form method="post" action = "{{url('/')}}/admin/home/order/update/status/">
                    {{ csrf_field() }}
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Update Status</label>
                        <select id="status" name="status" class="form-control">
                          <option>Select status</option>
                          <option value="2">Production</option>
                          <option value="3">dying</option>
                          <option value="4">Folding</option>
                          <option value="5">Packing</option>
                          <option value="6">Dispach</option>
                          <option value="7">Dispach Detail</option>
                        </select>
                      </div>
                      <button id="b1" type="button"  class="btn btn-submmit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content --> 

@endsection 