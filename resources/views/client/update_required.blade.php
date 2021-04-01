@extends('client.layout.app')
@section('content')
  <div class="man_intro  man_image_bck" data-image="" data-color="#333333" data-repeat="no-repeat" data-position="center center" data-attachment="" data-size="cover">
    <div class="man_over"></div>
    <div class="man_intro_cont" style="padding-bottom:0px;"> </div>
  </div>
</div>
<div class="container" style="padding:0px;">
  <div class="row">
    <div class="col-lg-12">
      <div class="salogan">
        <h1>Pre Order</h1>
      </div>
    </div>
    <div class="col-lg-12">
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
              <th><span class="label label-danger">Update Required</span></th>
              <td><a href="{{URL('/')}}/dashboard/view/update/required/specific/{{$results->pk_id}}">View</a></td>
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