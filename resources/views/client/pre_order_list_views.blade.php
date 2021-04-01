@extends('client.layout.app')
@section('content')

<div class="bg">
<div class="container">
	<div class="content_salogan">
    	<h2>Pre Order</h2>
    </div>
    <div class="oder_form" id="order_form">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Enquiry Id</th>
                <th>Product Name</th>
                <th>Product Type</th>
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
              <td><a href="{{URL('/')}}/dashboard/preorder/specific/view/{{$results->pk_id}}">View</a></td>
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