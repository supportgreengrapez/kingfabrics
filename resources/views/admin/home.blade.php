@extends('admin.layout.appadmin')
@section('content') 
<!-- page content -->
<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Admin Dashboard</h3>
    </div>
  </div>
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h3>Total Orders</h3>
        <img src="{{url('/')}}/images/12.jpg" alt="icon"> </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahs">
        <p>You have {{$members}} <span>Total Orders</span></p>
        <p style="margin-top: 25px;">You can create products and multiple variants easily usingthe self service tool OR you can bulk import products.</p>
        <h6><a href="{{url('/')}}/admin/home/view/order">View more <i class="fa fa-angle-double-right"></i></a></h6>
      </div>
    </div>
  </div>
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h3>Complete Order</h3>
        <img src="{{url('/')}}/images/14.jpg" alt="icon"> </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahs">
        <p>You have {{$sales}} <span>Complete Order</span></p>
        <p style="margin-top: 25px;">You can create products and multiple variants easily usingthe self service tool OR you can bulk import products.</p>
        <h6><a href="{{url('/')}}/admin/home/view/history">View more <i class="fa fa-angle-double-right"></i></a></h6>
      </div>
    </div>
  </div>
</div>
<!-- /page content --> 

@endsection 