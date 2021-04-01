@extends('admin.layout.appadmin')
@section('content') 

<!-- page content -->
<div class="right_col" role="main" style="min-height: 598px;">
  <div class="page-title">
    <div class="title_left">
      <h3>User Management</h3>
      <h4 style="display:block;">User View</h4>
    </div>
  </div>
  <div class="wrap">
  @if($result>0)
  @foreach($result as $results)
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h4>Customer Name</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahss">
        <p>{{$results->fname}}</p>
      </div>
    </div>
  </div>
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h4>Email</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahss">
        <p>{{$results->username}}</p>
      </div>
    </div>
  </div>
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h4>City</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahss">
        <p>{{$results->city}}</p>
      </div>
    </div>
  </div>
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h4>Phone no</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahss">
        <p>{{$results->mobile_no}}</p>
      </div>
    </div>
  </div>
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h4>Company Name</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahss">
        <p>{{$results->c_name}}</p>
      </div>
    </div>
  </div>
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h4>STN No</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahss">
        <p>{{$results->stn}}</p>
      </div>
    </div>
  </div>
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h4>NTN No</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahss">
        <p>{{$results->ntn}}</p>
      </div>
    </div>
  </div>
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h4>Address</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahss">
        <p>{{$results->address}}</p>
      </div>
    </div>
  </div>
  <div class="row borderbotm">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="dbicon">
        <h4>Corresponding Address</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="dbparahss">
        <p>{{$results->c_address}}</p>
      </div>
    </div>
  </div>
  @endforeach
  @endif
</div>
</div>
<!-- /page content --> 

@endsection 