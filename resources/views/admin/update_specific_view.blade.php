@extends('admin.layout.appadmin')
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="bg">
		<div class="row">
        	<div class="col-lg-12">
            	<div class="salogan">
                	<h3>Enquiry Detail</h3>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content" id="content">
          <div class="row">
        <div class=" col-lg-offset-3 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                        <h2> <span itemprop="name">Customer Name</span></h2>
                                        <p itemprop="email">Email</p>
                                        <p itemprop="email">City</p>
                                        <p itemprop="email">Phone no</p>
                                        <h4> <span itemprop="name">Product Name</span></h4>
                                        <p><span itemprop="affiliation">Weight-GSM</span></p>
                                        <p><span itemprop="affiliation">Color</span></p>
                                        <p><span itemprop="affiliation">Weave</span></p>
                                        <p><span itemprop="affiliation">Warp</span></p>
                                        <p><span itemprop="affiliation">Reed</span></p>
                                        <p><span itemprop="affiliation">Pick</span></p>
                                        <p><span itemprop="affiliation">Weft</span></p>
                                        <p><span itemprop="affiliation">Width</span></p>
                                        <p><span itemprop="affiliation">Width Unit</span></p>
                                        <p><span itemprop="affiliation">Quantity in Meter</span></p>
                                        <p><span itemprop="affiliation">Expected Delivery Date</span></p>
                                        <p><span itemprop="affiliation">Mood of Shipment</span></p>
                                        <p><span itemprop="affiliation">Mood of Payment</span></p>
                                        <p><span itemprop="affiliation">Price</span></p>
                                    </div>
                                </div>
                              
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">
                                            @if($result2>0)
                                        @foreach($result2 as $results2)
                                    	<h2> <span>{{$results2->fname}}</span></h2>
                                        <p>{{$results2->username}}</p>
                                        <p>{{$results2->city}}</p>
                                        <p>{{$results2->mobile_no}}</p>
                                        @endforeach
                                        @endif

                                        @if($result>0)
                                        @foreach($result as $results)
                                        @foreach($result1 as $results1)
                                        
                                        @if($results1->product_name != $results->product_name)
                                        <h4><span><strong style="color:#00a65a;">{{$results1->product_name}}</strong></span> is change to <span style="color:#FF0000;"><strong>{{$results->product_name}}</strong></span></h4>
                                        @else
                                        <h4><span><strong style="color:#00a65a;">{{$results1->product_name}}</strong></span>
                                        @endif
                                        
                                        
                                        @if($results1->weight_GSM!= $results->weight_GSM)
                                        <p><strong style="color:#00a65a;">{{$results1->weight_GSM}}</strong> is changed to <strong style="color:#FF0000;">{{$results->weight_GSM}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->weight_GSM}}</strong></p>
                                        @endif
                                        
                                        
                                        @if($results1->color != $results->color)
                                        <p><strong style="color:#00a65a;">{{$results1->color}}</strong> is changed to <strong style="color:#FF0000;">{{$results->color}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->color}}</strong></p>
                                        @endif
                                       
                                       
                                        @if($results1->weave != $results->weave)
                                        <p><strong style="color:#00a65a;">{{$results1->weave}}</strong> is changed to <strong style="color:#FF0000;">{{$results->weave}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->weave}}</strong></p>
                                        @endif
                                        
                                        
                                        @if($results1->warp != $results->warp)
                                        <p><strong style="color:#00a65a;">{{$results1->warp}}</strong> is changed to <strong style="color:#FF0000;">{{$results->warp}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->warp}}</strong></p>
                                        @endif
                                       
                                       
                                        @if($results1->reed != $results->reed)
                                        <p><strong style="color:#00a65a;">{{$results1->reed}}</strong> is changed to <strong style="color:#FF0000;">{{$results->reed}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->reed}}</strong></p>
                                        @endif
                                       
                                       
                                        @if($results1->pick != $results->pick)
                                        <p><strong style="color:#00a65a;">{{$results1->pick}}</strong> is changed to <strong style="color:#FF0000;">{{$results->pick}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->pick}}</strong></p>
                                        @endif
                                        
                                        
                                        @if($results1->weft != $results->weft)
                                        <p><strong style="color:#00a65a;">{{$results1->weft}}</strong> is changed to <strong style="color:#FF0000;">{{$results->weft}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->weft}}</strong></p>
                                        @endif
                                       
                                       
                                        @if($results1->width != $results->width)
                                        <p><strong style="color:#00a65a;">{{$results1->width}}</strong> is changed to <strong style="color:#FF0000;">{{$results->width}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->width}}</strong></p>
                                        @endif
                                        
                                        @if($results1->widthunit != $results->widthunit)
                                        <p><strong style="color:#00a65a;">{{$results1->widthunit}}</strong> is changed to <strong style="color:#FF0000;">{{$results->widthunit}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->widthunit}}</strong></p>
                                        @endif
                                        
                                        @if($results1->quantity != $results->quantity)
                                        <p><strong style="color:#00a65a;">{{$results1->quantity}}</strong> is changed to <strong style="color:#FF0000;">{{$results->quantity}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->quantity}}</strong></p>
                                        @endif
                                       
                                       
                                        @if($results1->delivery_date != $results->delivery_date)
                                        <p><strong style="color:#00a65a;">{{$results1->delivery_date}}</strong> is changed to <strong style="color:#FF0000;">{{$results->delivery_date}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->delivery_date}}</strong></p>
                                        @endif
                                       
                                       
                                        @if($results1->shipment != $results->shipment)
                                        <p><strong style="color:#00a65a;">{{$results1->shipment}}</strong> is changed to <strong style="color:#FF0000;">{{$results->shipment}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->shipment}}</strong> </p>
                                        @endif
                                       
                                       
                                        @if($results1->payments != $results->payments)
                                        <p><strong style="color:#00a65a;">{{$results1->payments}}</strong> is changed to <strong style="color:#FF0000;">{{$results->payments}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->payments}}</strong></p>
                                        @endif
                                        @if($results1->price != $results->price)
                                        <p><strong style="color:#00a65a;">{{$results1->price}}</strong> is changed to <strong style="color:#FF0000;">{{$results->price}}</strong></p>
                                        @else
                                        <p><strong style="color:#00a65a;">{{$results1->price}}</strong></p>
                                        @endif
                                        @endforeach
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div id="social-links" class=" col-lg-12">
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <a href="{{URL('/')}}/admin/home/view/preorder/view/enquiry/edit/enquiry/{{$result[0]->pk_id}}/{{$result2[0]->pk_id}}" class="btn btn-social btn-block">
                                        <i class="fa fa-pencil"></i> Edit Enquiry
                                    </a>
                                </div>
                                @if($result[0]->status == 3)
                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <a href="{{url('/')}}/admin/home/view/preorder/view/enquiry/accept/enquiry/{{$result[0]->pk_id}}/{{$result2[0]->pk_id}}"  class="btn btn-block btn-success">Accept</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="clearfix"></div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		</div>
        <!-- footer -->
     

@endsection


