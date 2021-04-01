@extends('admin.layout.appadmin')

@section('content') 

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Sample Management</h3>
        <h4 style="display: block;">Add Sample</h4>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content"> 
        <form method="post" action = "{{url('/')}}/admin/home/add/sample" enctype="multipart/form-data"  >
            {{ csrf_field() }}
            <div class="row">
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Product Name <span class="red">*</span></label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Category <span class="red">*</span></label>
                <select class="form-control" name="mainCategory" id="mainCategory"  >
                        <option value="" disable="true" selected="true" >---Select Category---</option>
                        
                @if($result2>0)
                    @foreach($result2 as $results)
                            
                        <option value="{{urlencode($results->category)}}">{{$results->category}}</option>
                        
                            @endforeach
                            @endif
                </select>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Sub Category <span class="red">*</span></label>
                <select class="form-control" name="SubCategory" id="SubCategory">
                        <option value="" disable="true" selected="true" >---Select Sub Category---</option>
                      </select>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Sample Type <span class="red">*</span></label>
                <input type="text" name="type" class="form-control" required>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>GSM <span class="red">*</span></label>
                <input type="text" class="form-control" name="GSM" required>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Fabric Referance <span class="red">*</span></label>
                <input type="text" class="form-control" name="referance" required>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Weave <span class="red">*</span></label>
                <input type="text" class="form-control" name="Weave" required>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Width</label>
                <input  type="text"  class="form-control" name="Width">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Price</label>
                <input type="number" class="form-control" name="price">
              </div>
              <div class="form-group col-lg-9 col-sm-12 col-md-9">
                <label>Special Finishing</label>
                <textarea name="finishing" class="form-control" rows="9" ></textarea>
              </div>
              <div class="form-group col-lg-9 col-sm-12 col-md-9">
                <label>Description</label>
                <textarea name="desc" class="form-control" rows="9" ></textarea>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-12 col-sm-12 col-md-6">
                <label>Sample Image <span class="red">*</span></label>
              </div>
              <div class="form-group col-lg-4 col-md-4 col-sm-12">
                <input type="file" name="file1" class="form-control" onchange="readURL(this);"/>
                <img id="blah" src="{{url('/')}}/images/demo.png" alt="your image" style="width:350px; height:300px;" required/> </div>
              <div class="form-group col-lg-4 col-md-4 col-sm-12">
                <input type="file" name="file2" class="form-control" onchange="preview_image(this);"/>
                <img id="blah2" src="{{url('/')}}/images/demo.png" alt="your image" style="width:350px; height:300px;"/> </div>
              <div class="form-group col-lg-4 col-md-4 col-sm-12">
                <input type="file" name="file3" class="form-control" onchange="preview_img(this);"/>
                <img id="blah3" src="{{url('/')}}/images/demo.png" alt="your image" style="width:350px; height:300px;"/> </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12">
                <p>
                  <button type="submit" class="btn btn-submmit">Submit</button>
                </p>
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