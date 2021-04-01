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
                <form method="post" action = "{{url('/')}}/admin/home/view/preorder/view/enquiry/accept/enquiry/{{$result1[0]->pk_id}}" >
                        {{ csrf_field() }}
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
                                        <h2> <span itemprop="name">Product Name</span></h2>
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
                                        <p><span itemprop="affiliation">NTN Number</span></p>
                                        <p><span itemprop="affiliation">Price</span></p>
                                        <p><span itemprop="affiliation">Placed at</span></p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div itemscope="">

                                            @if(count($result)>0)
                                            @foreach($result as $results)
                                            <h2> <span>{{$results->fname}}</span></h2>
                                            <p>{{$results->username}}</p>
                                            <p>lahore</p>
                                            <p>{{$results->mobile_no}}</p>
                                            @endforeach
                                            @endif


                                        @if($result1>0)
                                        @foreach($result1 as $results)
                                        <h2> <span>{{$results->product_name}}</span></h2>
                                        <p>{{$results->weight_GSM}}</p>
                                        <p>{{$results->color}}</p>
                                        <p>{{$results->weave}}</p>
                                        <p>{{$results->warp}}</p>
                                        <p>{{$results->reed}}</p>
                                        <p>{{$results->pick}}</p>
                                        <p>{{$results->weft}}</p>
                                        <p>{{$results->width}}</p>
                                        <p>{{$results->widthunit}}</p>
                                        <p>{{$results->quantity}}</p>
                                        <p>{{$results->delivery_date}}</p>
                                        <p>{{$results->shipment}}</p>
                                        <p>{{$results->payments}}</p>
                                        <p>{{$results->NTN_number}}</p>
                                        <p>{{$results->price}}</p>
                                      <p>{{$results->created_at}}</p>
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
                                    <a href="{{URL('/')}}/admin/home/view/preorder/view/enquiry/edit/enquiry/{{$results->pk_id}}/{{$results->c_id}}" class="btn btn-social btn-block">
                                        <i class="fa fa-pencil"></i> Edit Enquiry
                                    </a>
                                </div>
                            
                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <button type="submit" class="btn btn-block btn-success">Accept</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
            <div class="clearfix"></div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		</div>
        <!-- footer -->
     @endsection