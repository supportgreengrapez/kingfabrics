@extends('admin.layout.appadmin')

@section('content') 

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Admin Management</h3>
        <h4 style="display: block;">Add Admin</h4>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content">
          <form method="post" enctype="multipart/form-data" action = "{{url('/')}}/admin/home/view/admin/edit/admin/{{$result[0]->pk_id}}" >
            @if($errors->any())
            <div class="alert alert-danger"> <strong></strong> {{$errors->first()}} </div>
            @endif
            {{ csrf_field() }}
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group ">
                <label class="control-label requiredField" for="name"> First Name <span class="asteriskField"> * </span> </label>
                <div class="input-group">
                  <div class="input-group-addon"> <i class="fa fa-user"> </i> </div>
                  <input class="form-control" id="name" name="fname" value="{{$result[0]->fname}}" type="text"/>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group ">
                <label class="control-label requiredField" for="name1"> Last Name <span class="asteriskField"> * </span> </label>
                <div class="input-group">
                  <div class="input-group-addon"> <i class="fa fa-user"> </i> </div>
                  <input class="form-control" id="name1" name="lname" value="{{$result[0]->lname}}"type="text"/>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group ">
                <label class="control-label requiredField" for="password"> Password <span class="asteriskField"> * </span> </label>
                <div class="input-group">
                  <div class="input-group-addon"> <i class="fa fa-key"> </i> </div>
                  <input class="form-control" name="password"  type="password"/>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group ">
                <label class="control-label requiredField" for="password"> Confirm Password <span class="asteriskField"> * </span> </label>
                <div class="input-group">
                  <div class="input-group-addon"> <i class="fa fa-key"> </i> </div>
                  <input class="form-control" name="confirm" type="password"/>
                </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="form-group ">
                <label class="control-label "> Permissions </label>
                <div class=" ">
                  <div class="checkbox">
                    <label class="checkbox">
                      <input name="admin_management" type="checkbox" @if($result[0]->
                      admin_management==1) checked @endif />
                      Admin Managment </label>
                  </div>
                  <div class="checkbox">
                    <label class="checkbox">
                      <input name="enquiry_management" @if($result[0]->
                      enquiry_management==1) checked @endif type="checkbox" value="1"/>
                      Enquiry </label>
                  </div>
                  <div class="checkbox">
                    <label class="checkbox">
                      <input name="livechat_management" @if($result[0]->
                      livechat_management==1) checked @endif type="checkbox" value="1"/>
                      Live Chat </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="form-group">
                <div>
                  <button class="btn btn-lg btn-submmit" name="submit" type="submit"> Submit </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content --> 

@endsection 