@extends('client.layout.app')
@section('content')

<div class="bg">
<div class="container">
	<div class="content_salogan">
    	<h2>Order History</h2>
    </div>
    <div class="oder_form" id="order_form">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                  <td><span id="{{$results->e_id}}"  class="label label-info" >completed</span></td>
                  <td><a href="{{URL('/')}}/dashboard/order/tracking/specific/view/{{$results->e_id}}">View</a></td>
              </tr>
                @endforeach
                @endif
            
        </tbody>
    </table>
    </div>
</div>

</div>
<!--end of content -->
@endsection