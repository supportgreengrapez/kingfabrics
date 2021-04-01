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
        @if($result>0)
        <form method="post" action = "{{url('/')}}/admin/home/edit/sample/{{$result[0]->pk_id}}" enctype="multipart/form-data"  >
            {{ csrf_field() }}
            <div class="row">
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Product Name <span class="red">*</span></label>
                <input type="text" name="name" value="{{$result[0]->name}}" class="form-control" required>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Category <span class="red">*</span></label>
                <select class="form-control" name="mainCategory" id="mainCategory"  >
                        <option value="" disable="true" selected="true" >---Select Category---</option>
                        
                        @if($result1>0)
                    @foreach($result1 as $results)
                          <option value="{{urlencode($results->category)}}" @if($result[0]->main_category==$results->category) selected @endif>{{$results->category}}</option>
                            @endforeach
                            @endif
                </select>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Sub Category <span class="red">*</span></label>
                <select class="form-control" name="SubCategory" id="SubCategory">
                <option value="{{$result[0]->sub_category}}" >{{$result[0]->sub_category}}</option>
                      </select>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Sample Type <span class="red">*</span></label>
                <input type="text" name="type" value="{{$result[0]->type}}" class="form-control" required>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>GSM <span class="red">*</span></label>
                <input type="text" class="form-control" name="GSM" value="{{$result[0]->GSM}}" required>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Fabric Referance <span class="red">*</span></label>
                <input type="text" class="form-control" name="referance" value="{{$result[0]->refrence}}" required>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Weave <span class="red">*</span></label>
                <input type="text" class="form-control" name="Weave" value="{{$result[0]->weave}}" required>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Width</label>
                <input  type="text"  class="form-control" name="Width" value="{{$result[0]->width}}">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Price</label>
                <input type="number" class="form-control" name="price" value="{{$result[0]->price}}">
              </div>
              <div class="form-group col-lg-9 col-sm-12 col-md-9">
                <label>Special Finishing</label>
                <textarea name="finishing" class="form-control" rows="9" >{{$result[0]->finishing}}</textarea>
              </div>
              <div class="form-group col-lg-9 col-sm-12 col-md-9">
                <label>Description</label>
                <textarea name="desc" class="form-control" rows="9" >{{$result[0]->description}}</textarea>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-12 col-sm-12 col-md-6">
                <label>Sample Image <span class="red">*</span></label>
              </div>
              <div class="form-group col-lg-4 col-md-4 col-sm-12">

              <input type='file' name="file1" class="form-control" value="{{url('/')}}/storage/images/{{$result[0]->thumbnail}}" onchange="preview_img(this);"/>
<img id="blah3" src="{{url('/')}}/storage/images/{{$result[0]->thumbnail}}" alt="your image" style="width:180px; height:180px;"/>
</div>
              <div class="form-group col-lg-4 col-md-4 col-sm-12">
               
              <input type='file' name="file2" class="form-control" value="{{url('/')}}/storage/images/{{$result[0]->thumbnail2}}" onchange="preview_img(this);"/>
<img id="blah3" src="{{url('/')}}/storage/images/{{$result[0]->thumbnail2}}" alt="your image" style="width:180px; height:180px;"/>
</div>
              <div class="form-group col-lg-4 col-md-4 col-sm-12">
             
              <input type='file' name="file3" class="form-control" value="{{url('/')}}/storage/images/{{$result[0]->thumbnail3}}" onchange="preview_img(this);"/>
<img id="blah3" src="{{url('/')}}/storage/images/{{$result[0]->thumbnail3}}" alt="your image" style="width:180px; height:180px;"/>

            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12">
                <p>
                  <button type="submit" class="btn btn-submmit">Submit</button>
                </p>
              </div>
            </div>
          </form>
         @endif
           </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content --> 

@endsection 