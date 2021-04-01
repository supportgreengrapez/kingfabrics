@extends('client.layout.app')
@section('content')

<div class="bg">
<div class="container">
	<div class="content_salogan">
    	<h2>Edit Profile</h2>
    </div>
    <div class="oder_form" id="order_form">
        <form role="form" method="post" action = "{{url('/')}}/dashboard/edit/profile">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Full Name</label>
                         <input value="{{session('fname')}}" type="text" class="form-control" name="fname" required pattern="[a-zA-Z0-9\s]+" maxlength="10">
                 </div>

               
             <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Phone Number</label>
                 <input value="{{session('phone')}}" type="tel" class="form-control" name="p" required >
         </div>
            
                
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Password</label>
                         <input required type="password" class="form-control" name="pass" required >
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>City</label>
                         <input value="{{session('city')}}" type="text" class="form-control" name="city" required>
                 </div>

 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Company Name</label>
                         <input value="{{session('cname')}}" type="text" class="form-control" name="cname">
                 </div>

 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>NTN No</label>
                         <input value="{{session('ntn')}}" type="text" class="form-control" name="ntn" >
                 </div>
 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>STN No</label>
                         <input value="{{session('stn')}}" type="text" class="form-control" name="stn" >
                 </div>
 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Address</label>
                         <input value="{{session('address')}}" type="text" class="form-control" name="address">
                 </div>
 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Corresponding Address</label>
                         <input value="{{session('caddress')}}" type="text" class="form-control" name="caddress">
                 </div>


                 <div class="col-lg-4 col-md-4 col-sm-12">
                    <p>
                      <button type="submit" class="btn btn_submit">Update</button>
                    </p>
                 </div>
             </div>
        </form>
    </div>
</div>
</div>
@endsection


