@extends('admin.layout.appadmin')

@section('content') 

<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="contnt">
          	<div class="row">
            	<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
    <form  role="form" action="{{URL('/')}}/admin-create-a-post" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form-group ">
         <label class="control-label requiredField" for="name">
         Title
          <span class="asteriskField">
           *
          </span>
         </label>
         <div class="input-group">
          <div class="input-group-addon">
           <i class="fa fa-user">
           </i>
          </div>
          <input class="form-control" id="name" name="title" type="text"/ required>
         </div>
         
         
        </div>
        </div>
        
  
       
        <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ">
                 <label class="control-label requiredField" for="name">
                Image
                  <span class="asteriskField">
                   *
                  </span>
                 </label>
                 <div class="input-group">
                  <div class="input-group-addon">
                   <i class="fa fa-user">
                   </i>
                  </div>
                  <input class="form-control" id="name" name="file" type="file"/ required>
                 </div>
                </div>
                </div>
   
     
                <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group ">
                         <label class="control-label requiredField" for="name">
                         Body
                          <span class="asteriskField">
                           *
                          </span>
                         </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                           <i class="fa fa-user">
                           </i>
                          </div>
                         <textarea name="body" id="" cols="90" rows="10"></textarea>
                         <script>
                                CKEDITOR.replace( 'body' );
                            </script>
                         </div>
                        </div>
                        </div>
   
  
  
   
       
    
   <div class="col-md-12 col-sm-12 col-xs-12">
     <div class="form-group">
      <div>
       <button class="btn btn-primary btn-lg" name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
     </div>
    </form>
  </div>
 </div>
</div>
                
            
            </div>
            <div class="clearfix"></div>

          </div>
         
        <!-- /page content -->
      
      @endsection
  
    <!-- jQuery -->
    <script src="{{URL('/')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{URL('/')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{URL('/')}}/build/js/custom.min.js"></script>

  </body>
  
</html>