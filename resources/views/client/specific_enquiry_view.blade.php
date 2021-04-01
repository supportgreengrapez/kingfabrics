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
      <div class="salogan text-center">
        <h1>Pre Order Detail</h1>
      </div>
    </div>
    <div class="col-lg-12">
    @if($result1>0)
  @foreach($result1 as $results)
    <div class="member-left-side padding margin">
  
        <div class="member-email clearfix"> <b>Product Name</b> <span>{{$results->product_name}}</span> </div>
        <div class="member-email clearfix"> <b>Category</b> <span>{{$results->category}}</span> </div>
        <div class="member-email clearfix"> <b>Sub Category</b> <span>{{$results->sub_category}}</span> </div>
        <div class="member-email clearfix"> <b>Product Type</b> <span>{{$results->type}}</span> </div>
        <div class="member-email clearfix"> <b>Weight-GSM</b> <span>{{$results->weight_GSM}}</span> </div>
        <div class="member-email clearfix"> <b>Color</b> <span>{{$results->color}}</span> </div>
        <div class="member-email clearfix"> <b>Weave</b> <span>{{$results->weave}}</span> </div>
        <div class="member-email clearfix"> <b>Warp</b> <span>{{$results->warp}}</span> </div>
        <div class="member-email clearfix"> <b>Reed</b> <span>{{$results->reed}}</span> </div>
        <div class="member-email clearfix"> <b>Pick</b> <span>{{$results->pick}}</span> </div>
        <div class="member-email clearfix"> <b>Weft</b> <span>{{$results->weft}}</span> </div>
        <div class="member-email clearfix"> <b>Quantity in Meter</b> <span>{{$results->quantity}}</span> </div>
        <div class="member-email clearfix"> <b>Width</b> <span>{{$results->width}}</span> </div>
        <div class="member-email clearfix"> <b>Width Units</b> <span>{{$results->widthunit}}</span> </div>
        <div class="member-email clearfix"> <b>Expected Delivery Date</b> <span>{{$results->delivery_date}}</span> </div>
        <div class="member-email clearfix"> <b>Mode Of shipment</b> <span>{{$results->shipment}}</span> </div>
        <div class="member-email clearfix"> <b>NTN/STN Number For Pakistan</b> <span>{{$results->NTN_number}}</span> </div>
        <div class="member-email clearfix"> <b>Mode Of Payment</b> <span>{{$results->shipment}}</span> </div>
        <div class="member-email clearfix"> <b>Price</b> <span>{{$results->price}}</span> </div>
        <div class="member-email clearfix"> <b>Note</b> <span>{{$results->note}}</span> </div>
        @endforeach
                                            @endif
      </div>
    </div>
  </div>
</div>
@endsection