<!DOCTYPE html>
<html lang="en">
<head>

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="KINGFABRICS">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="KINGFABRICS">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<link rel="shortcut icon" href="{{url('/')}}/images/favicon.png"/>
<title>KINGFABRICS</title>

<!-- Bootstrap -->
<link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CSS-->
<link rel="stylesheet" href="{{url('/')}}/css/font-awesome.min.css">
<!-- bootstrap-progressbar -->

<link href="{{url('/')}}/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- iCheck -->

<link href="{{url('/')}}/css/green.css" rel="stylesheet">
<!-- Custom Theme Style -->

<link href="{{url('/')}}/css/custom.min.css" rel="stylesheet">
<!-- Datatables -->
<link href="{{url('/')}}/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="{{url('/')}}/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="{{url('/')}}/css/scroller.bootstrap.min.css" rel="stylesheet">
<link href="{{url('/')}}/css/bootstrap-colorpicker.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title"> <a href="index.html" class="site_title"><i><img src="{{url('/')}}/images/favicon.png" alt="logo"></i> <span>KINGFABRICS</span></a> </div>
        <div class="clearfix"></div>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <ul class="nav side-menu">
              <li><a href="{{URL('/')}}/admin/home"><i class="fa fa-tachometer"></i> Home </a> </li>
              @if(session('admin_management')==1)
              <li><a><i class="fa fa-user"></i> Admin Management <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{url('/')}}/admin/home/view/admin"><i class="fa fa-circle-o"></i> View Admin</a></li>
                  <li><a href="{{url('/')}}/admin/home/create/admin"><i class="fa fa-circle-o"></i>Create Admin</a></li>
                </ul>
              </li>
              @endif
              <li><a><i class="fa fa-th"></i> Sample Management <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{url('/')}}/admin/home/view/sample/list"><i class="fa fa-circle-o"></i> View Sample</a></li>
                  <li><a href="{{url('/')}}/admin/home/view/category/list"><i class="fa fa-circle-o"></i>View Category</a></li>
                  <li><a href="{{url('/')}}/admin/home/view/sub_category/list"><i class="fa fa-circle-o"></i>View Sub Category</a></li>
                                </ul>
              </li>
              @if(session('enquiry_management')==1)
              <li><a><i class="fa fa-th"></i> Enquiry Management <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{url('/')}}/admin/home/view/preorder"><i class="fa fa-circle-o"></i>Pre Order</a></li>
                  <li><a href="{{url('/')}}/admin/home/view/update"><i class="fa fa-circle-o"></i>Required Update</a></li>
                  <li><a href="{{url('/')}}/admin/home/view/order"><i class="fa fa-circle-o"></i>Order Tracking</a></li>
                  <li><a href="{{url('/')}}/admin/home/view/history"><i class="fa fa-circle-o"></i>Order History</a></li>
                  <li><a href="{{url('/')}}/admin/home/view/guest/enquiry"><i class="fa fa-circle-o"></i>Guest Enquiry</a></li>
              
                </ul>
              </li>
              @endif
              <li><a><i class="fa fa-user"></i> User Management <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{url('/')}}/admin/home/view/user"><i class="fa fa-circle-o"></i> View User</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-table"></i> Blog Management <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{url('/')}}/admin-blog"><i class="fa fa-circle-o"></i> View Blog</a></li>
                  <li><a href="{{url('/')}}/admin-create-a-post"><i class="fa fa-circle-o"></i> Create Blog</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu --> 
      </div>
    </div>
    
    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
          <ul class="nav navbar-nav navbar-right">
            <li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{session('name')}} <span class=" fa fa-angle-down"></span> </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="{{URL('/')}}/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /top navigation --> 
    
    @yield('content') 
    
    <!-- footer content -->
    <footer>
      <div> Copyright © 2020-2021 KINGFABRICS. All rights reserved. </div>
      <div> Powered By <a href="https://greengrapez.com"> Green Grapez <img src="{{url('/')}}/images/greengrapez.png" alt="green grapez"> </a> </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content --> 
  </div>
</div>
<!-- FastClick --> 
<!-- jQuery --> 
<script src="{{url('/')}}/js/jquery.min.js"></script> 
<!-- Bootstrap --> 
<script src="{{url('/')}}/js/bootstrap.min.js"></script> 
<!-- DateJS --> 
<script src="{{url('/')}}/js/build/date.js"></script> 
<!-- bootstrap-progressbar --> 
<script src="{{url('/')}}/js/bootstrap-progressbar.min.js"></script> 
<!-- iCheck --> 
<script src="{{url('/')}}/js/icheck.min.js"></script> 
<!-- bootstrap-daterangepicker --> 
<script src="{{url('/')}}/js/moment.min.js"></script> 
<script src="{{url('/')}}/js/daterangepicker.js"></script> 
<!-- Custom Theme Scripts --> 
<script src="{{url('/')}}/js/custom.min.js"></script> 
<!-- Datatables --> 

<script src="{{url('/')}}/js/jquery.dataTables.min.js"></script> 
<script src="{{url('/')}}/js/dataTables.bootstrap.min.js"></script> 
<script src="{{url('/')}}/js/dataTables.responsive.min.js"></script> 
<script src="{{url('/')}}/js/responsive.bootstrap.js"></script> 
<script src="{{url('/')}}/js/dataTables.scroller.min.js"></script> 
<script  src="{{url('/')}}/js/bootstrap-colorpicker.min.js" type="text/javascript"></script> 
<script>
  $("#b1").click(function(){
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  var status = $('#status').val();
  $.ajax({
    /* the route pointing to the post function */
    url: "{{URL('/')}}/admin/home/order/update/status",
    type: 'POST',
    /* send the csrf-token and the input to the controller */
    data: {_token: CSRF_TOKEN, status:status,
    id: OrgID,
    },
    /* remind that 'data' is the response of the AjaxController */
    success: function (data) { 
      window.location.href = data;
    }
  }); 

});
</script> 


<script type="text/javascript">
    $("#mainCategory").on('change',function(e){

      console.log(e);
      
      var cat_id = e.target.value;

      // alert(cat_id );
     
      $.get('{{URL('/')}}/ajax-subcat?cat_id='+ cat_id,function(data){
        console.log(data);
        $('#SubCategory').empty();
        $('#SubCategory').append('<option value="" disable="true" selected="true" >---Select Sub Category---</option>');
        
        $.each(data,function(create,subcatObj){
         
          $('#SubCategory').append('<option value ="'+subcatObj.pk_id+'">'+subcatObj.sub_category+'</option>');
      });
   


      });


  });



</script> 



<script>
      
$(function() {
  $('input:text').keydown(function(e) {
    if(e.keyCode==191)
    return false;
  });
});
</script>
</body>
</html>
