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
        <h1>Dashboard</h1>
      </div>
    </div>

    <div class="col-lg-3">
    <a href="{{URL('/')}}/dashboard/view/preorder/list">
      <div class="icon" id="pre">
        <div class="img"><img src="{{URL('/')}}/client/images/pre order.png" alt="img"></div>
        <div class="digits">
          <h3>{{$pre_order}}<br>
            <span>Pre Order</span></h3>
        </div>
      </div>
      </a>
    </div>
   
   
    <div class="col-lg-3">
    <a href="{{URL('/')}}/dashboard/view/update/required/list">
      <div class="icon" id="update">
        <div class="img"><img src="{{URL('/')}}/client/images/update order.png" alt="img"></div>
        <div class="digits">
          <h3>{{$update_required}}<br>
            <span>Update Order</span></h3>
        </div>
      </div>
      </a>
    </div>
    
    <div class="col-lg-3">
      
    <a href="{{URL('/')}}/dashboard/view/order/tracking/list">
      <div class="icon" id="tracking">
        <div class="img"><img src="{{URL('/')}}/client/images/order tracking.png" alt="img"></div>
        <div class="digits">
          <h3>{{$order}}<br>
            <span>Order Tracking</span></h3>
        </div>
      </div>
      </a>
    </div>
    
  
    <div class="col-lg-3">
    <a href="{{URL('/')}}/dashboard/view/order/history/list">
      <div class="icon" id="history">
        <div class="img"><img src="{{URL('/')}}/client/images/history.png" alt="img"></div>
        <div class="digits">
          <h3>{{$order_completed}}<br>
            <span>Order History</span></h3>
        </div>
      </div>
      </a>
    </div>
   
    <div class="col-lg-4">
      <div class="member-left-side">
        <div class="member-agent-content">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="member-agent-text">
                <h1> {{session('fname')}}</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="member-email clearfix"> <b>Email</b> <span>{{session('username')}}</span> </div>
        <div class="member-email clearfix"> <b>Mobile Phone</b> <span>{{session('phone')}}</span> </div>
        <div class="member-email clearfix"> <b>City</b> <span>{{session('city')}}</span> </div>
        <div class="member-email clearfix"> <b>Company Name</b> <span>{{session('cname')}}</span> </div>
        <div class="member-email clearfix"> <b>STN</b> <span>{{session('stn')}}</span> </div>
        <div class="member-email clearfix"> <b>NTN</b> <span>{{session('ntn')}}</span> </div>
        <div class="member-email clearfix"> <b>Address</b> <span>{{session('address')}}</span> </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="agency-logo"> <a href="{{URL('/')}}/dashboard/edit/profile">Edit Profile</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="img"> <img src="images/contant_banner.png" alt="img"> </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="agency-logo"> <a href="{{URL('/')}}/dashboard/add/enquiry/view">Add Enquiry</a> </div>
      </div>
    </div>
  </div>
</div>
@endsection