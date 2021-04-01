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
    
    <div class="member-left-side padding margin">
    @if($result2>0)
                                            @foreach($result2 as $results2)
    <div class="member-email clearfix"> <b>Customer Name</b> <span>{{$results2->fname}}</span> </div>
        <div class="member-email clearfix"> <b>Email</b> <span>{{$results2->username}}</span> </div>
        <div class="member-email clearfix"> <b>City</b> <span>{{$results2->city}}</span> </div>
        <div class="member-email clearfix"> <b>Phone</b> <span>{{$results2->mobile_no}}</span> </div>
        @endforeach
                                            @endif
                                            @if($result>0)
                                            @foreach($result as $results)
                                            @foreach($result1 as $results1)
                                            @if($results1->product_name != $results->product_name)
        <div class="member-email clearfix"> <b>Product Name</b> <h4><span><strong style="color:#00a65a;">{{$results1->product_name}}</strong></span> is change to <span style="color:#FF0000;"><strong>{{$results->product_name}}</strong></span></h4> </div>
        @else
        <div class="member-email clearfix"><h4><span><strong style="color:#00a65a;">{{$results1->product_name}}</strong></span></div>
                                            @endif


        <div class="member-email clearfix"> <b>Category</b> <span>{{$results->category}}</span> </div>
        <div class="member-email clearfix"> <b>Sub Category</b> <span>{{$results->sub_category}}</span> </div>
        <div class="member-email clearfix"> <b>Product Type</b> <span>{{$results->type}}</span> </div>

        @if($results1->weight_GSM!= $results->weight_GSM)
        <div class="member-email clearfix"> <b>weight_GSM</b> <p><strong style="color:#00a65a;">{{$results1->weight_GSM}}</strong> is changed to <strong style="color:#FF0000;">{{$results->weight_GSM}}</strong></p> </div>
                                            @else
          <div class="member-email clearfix"><b>weight_GSM</b>  <p><strong style="color:#00a65a;">{{$results1->weight_GSM}}</strong></p> </div>
                                            @endif
    @if($results1->color != $results->color)
    <div class="member-email clearfix"> <b>color</b>  <p><strong style="color:#00a65a;">{{$results1->color}}</strong> is changed to <strong style="color:#FF0000;">{{$results->color}}</strong></p> </div>
                                            @else
    <div class="member-email clearfix"> <b>color</b>   <p><strong style="color:#00a65a;">{{$results1->color}}</strong></p> </div>
                                            @endif

      @if($results1->weave != $results->weave)
      <div class="member-email clearfix"> <b>weave</b> <p><strong style="color:#00a65a;">{{$results1->weave}}</strong> is changed to <strong style="color:#FF0000;">{{$results->weave}}</strong></p> </div>
                                            @else
      <div class="member-email clearfix">  <b>weave</b> <p><strong style="color:#00a65a;">{{$results1->weave}}</strong></p> </div>
                                            @endif

                                            @if($results1->warp != $results->warp)
          <div class="member-email clearfix">   <b>warp</b>    <p><strong style="color:#00a65a;">{{$results1->warp}}</strong> is changed to <strong style="color:#FF0000;">{{$results->warp}}</strong></p></div>
                                            @else
     <div class="member-email clearfix">    <b>warp</b>    <p><strong style="color:#00a65a;">{{$results1->warp}}</strong></p></div>
                                            @endif

                                            @if($results1->reed != $results->reed)
     <div class="member-email clearfix">  <b>reed</b>  <p><strong style="color:#00a65a;">{{$results1->reed}}</strong> is changed to <strong style="color:#FF0000;">{{$results->reed}}</strong></p> </div>
                                            @else
     <div class="member-email clearfix"> <b>reed</b>   <p><strong style="color:#00a65a;">{{$results1->reed}}</strong></p> </div>
                                            @endif
                                            

                                            @if($results1->pick != $results->pick)
        <div class="member-email clearfix">   <b>pick</b>    <p><strong style="color:#00a65a;">{{$results1->pick}}</strong> is changed to <strong style="color:#FF0000;">{{$results->pick}}</strong></p></div>
                                            @else
        <div class="member-email clearfix">   <b>pick</b>   <p><strong style="color:#00a65a;">{{$results1->pick}}</strong></p></div>
                                            @endif
                                            

                                            @if($results1->weft != $results->weft)
         <div class="member-email clearfix">    <b>weft</b>    <p><strong style="color:#00a65a;">{{$results1->weft}}</strong> is changed to <strong style="color:#FF0000;">{{$results->weft}}</strong></p></div>
                                            @else
       <div class="member-email clearfix">   <b>weft</b>     <p><strong style="color:#00a65a;">{{$results1->weft}}</strong></p></div>
                                            @endif



                                            @if($results1->quantity != $results->quantity)
        <div class="member-email clearfix">   <b>quantity</b>    <p><strong style="color:#00a65a;">{{$results1->quantity}}</strong> is changed to <strong style="color:#FF0000;">{{$results->quantity}}</strong></p> </div>
                                            @else
         <div class="member-email clearfix">   <b>quantity</b>   <p><strong style="color:#00a65a;">{{$results1->quantity}}</strong></p> </div>
                                            @endif
        
        
        @if($results1->width != $results->width)
        <div class="member-email clearfix">  <b>width</b> <p><strong style="color:#00a65a;">{{$results1->width}}</strong> is changed to <strong style="color:#FF0000;">{{$results->width}}</strong></p></div>
                                            @else
       <div class="member-email clearfix">    <b>width</b> <p><strong style="color:#00a65a;">{{$results1->width}}</strong></p></div>
                                            @endif




                                            @if($results1->widthunit != $results->widthunit)
        <div class="member-email clearfix">  <b>widthunit</b>   <p><strong style="color:#00a65a;">{{$results1->widthunit}}</strong> is changed to <strong style="color:#FF0000;">{{$results->widthunit}}</strong></p></div>
                                            @else
      <div class="member-email clearfix">  <b>widthunit</b>  <p><strong style="color:#00a65a;">{{$results1->widthunit}}</strong></p></div>
                                            @endif




                                            @if($results1->delivery_date != $results->delivery_date)
           <div class="member-email clearfix">      <b>Expected delivery date</b><p><strong style="color:#00a65a;">{{$results1->delivery_date}}</strong> is changed to <strong style="color:#FF0000;">{{$results->delivery_date}}</strong></p></div>
                                            @else
           <div class="member-email clearfix">   <b>Expected delivery date</b>   <p><strong style="color:#00a65a;">{{$results1->delivery_date}}</strong></p></div>
                                            @endif
       
       
       
                                            @if($results1->shipment != $results->shipment)
       <div class="member-email clearfix">   <b>Mode of shipment</b>   <p><strong style="color:#00a65a;">{{$results1->shipment}}</strong> is changed to <strong style="color:#FF0000;">{{$results->shipment}}</strong></p></div>
                                            @else
         <div class="member-email clearfix">   <b>Mode of shipment</b>    <p><strong style="color:#00a65a;">{{$results1->shipment}}</strong> </p></div>
                                            @endif

                                            @if($results1->payments != $results->payments)
         <div class="member-email clearfix">  <b>payments</b>   <p><strong style="color:#00a65a;">{{$results1->payments}}</strong> is changed to <strong style="color:#FF0000;">{{$results->payments}}</strong></p></div>
                                            @else
        <div class="member-email clearfix">  <b>payments</b>    <p><strong style="color:#00a65a;">{{$results1->payments}}</strong></p></div>
                                            @endif

                                            @if($results1->price != $results->price)
        <div class="member-email clearfix">   <b>price</b>   <p><strong style="color:#00a65a;">{{$results1->price}}</strong> is changed to <strong style="color:#FF0000;">{{$results->price}}</strong></p></div>
                                            @else
      <div class="member-email clearfix">    <b>price</b>    <p><strong style="color:#00a65a;">{{$results1->price}}</strong></p></div>
                                            @endif
      
                                            @endforeach
                                            @endforeach
                                            @endif
      </div>
    </div>
  </div>



  <div class="panel-footer">
                    <div class="row">
                        <div id="social-links" class=" col-lg-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <a href="{{URL('/')}}/dashboard/preorder/edit/enquiry/{{$result[0]->pk_id}}" class="btn btn-social btn-block">
                                        <i class="fa fa-pencil"></i> Edit Profile
                                    </a>
                                </div>
                                @if($result[0]->status == 2)
                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <a href="{{url('/')}}/dashboard/preorder/accept/{{$result1[0]->pk_id}}"  class="btn btn-block btn-success">Accept</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
    </div>
</div>




</div>
@endsection