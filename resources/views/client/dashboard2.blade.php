@extends('client.layout.app')
@section('content')
<!--end of nav_bar -->
<div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="member-left-side">
                            <div class="member-agent-content">
                                <div class="row">
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="member-agent-text">
                                                {{session('fname')}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="member-email clearfix">
                                   
                                <b>Email</b>
                                <span>{{session('username')}}</span>
                            </div>
                            <div class="member-email clearfix">
                                <b>Mobile Phone</b>
                                <span>{{session('phone')}}</span>
                            </div>
                            <div class="member-email clearfix">
                                <b>City</b>
                                <span><i>{{session('city')}}</i></span>

                               
                            </div>

  <div class="member-email clearfix">
                                <b>Company Name</b>
                                <span>{{session('cname')}}</span>
                            </div>
  <div class="member-email clearfix">
                                <b>NTN No</b>
                                <span>{{session('ntn')}}</span>
                            </div>
  <div class="member-email clearfix">
                                <b>STN No</b>
                                <span>{{session('stn')}}</span>
                            </div>
  <div class="member-email clearfix">
                                <b>Address</b>
                                <span>{{session('address')}}</span>
                            </div>
 <div class="member-email clearfix">
                                <b>Corresponding Address</b>
                                <span>{{session('caddress')}}</span>
                            </div>
                            <div class="row">
 
                                
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="agency-logo">
                                        <a href="{{URL('/')}}/dashboard/edit/profile" style="text-align: center;"><h3>Edit Profile</h3></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="counts-container clearfix">
                            <div class="count-box"><a href="{{URL('/')}}/dashboard/view/preorder/list">Pre Order<h1><span>{{$pre_order}}</span></h1></a></div>						
                            <div class="count-box"><a href="{{URL('/')}}/dashboard/view/update/required/list">Update Order<h1>{{$update_required}}</h1></a></div>
                            <div class="count-box"><a href="{{URL('/')}}/dashboard/view/order/tracking/list">Order Tracking<h1>{{$order}}</h1></a></div>
                            <div class="count-box"><a href="{{URL('/')}}/dashboard/view/order/history/list">History<h1>{{$order_completed}}</h1></a></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="social-media-container text-center">
                                    <h1>Add an Enquiry</h1>
                                    <div class="email-icon">
                                        <img src="{{URL('/')}}/images1/0.png" alt="">
                                    </div>
                                    <a href="{{URL('/')}}/dashboard/add/enquiry/view" class="portfolio-btn invite-btn">Add Enquiry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--end of content -->
@endsection