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
        <h1>Add Enquiry</h1>
      </div>
    </div>
    <div class="col-lg-12">
   
    <form method="post" action = "{{url('/')}}/dashboard/add/enquiry" class="wpcf7-form init" enctype="multipart/form-data"  >
            {{ csrf_field() }}
       
     
        <div class="row">
          <div class="col-md-6">
            <label for="">Product Name <span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <select name="product" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
            <option value=""></option>
            @if($result>0)
                    @foreach($result as $results)
                            
                        <option value="{{urlencode($results->name)}}">{{$results->name}}</option>
                        
                            @endforeach
                            @endif
            </select>
            </span> </div>
          <div class="col-md-6">
            <label for="">Category</label>
            <br>
            <span class="wpcf7-form-control-wrap">
           
            <select  class="wpcf7-form-control wpcf7-select" aria-invalid="false" name="category" id="mainCategory"  >
                        <option value="" disable="true" selected="true" >---Select Category---</option>
                        
                @if($result1>0)
                    @foreach($result1 as $results)
                            
                        <option value="{{urlencode($results->category)}}">{{$results->category}}</option>
                        
                            @endforeach
                            @endif
                </select>


            </span> </div>

        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="">Sub Category<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <select class="wpcf7-form-control wpcf7-select" name="SubCategory" id="SubCategory"  aria-invalid="false">
                        <option value="" disable="true" selected="true" >---Select Sub Category---</option>
                      </select>
          
            </span> </div>
          <div class="col-md-6">
            <label for="">Product Type</label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <select name="type" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
            <option value=""></option>
            @if($result>0)
                    @foreach($result as $results)
                            
                        <option value="{{urlencode($results->type)}}">{{$results->type}}</option>
                        
                            @endforeach
                            @endif
            </select>
            </span> </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <label for="">Weight-GSM<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="weight"  class="wpcf7-form-control">
            </span></div>
          <div class="col-md-6">
            <label for="">Color<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="color"  class="wpcf7-form-control">
            </span></div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Weave</label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <select name="weave" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
              <option value="">---</option>
              <option value="1/1">1/1</option>
              <option value="1/2">1/2</option>
              <option value="1/3">1/3</option>
              <option value="1/4">1/4</option>
              <option value="2/2">2/2</option>
              <option value="2/3">2/3</option>
              <option value="2/4">2/4</option>
            </select>
            </span> </div>
          <div class="col-md-6">
            <label for="">Warp<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="warp"  class="wpcf7-form-control">
            </span></div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Reed<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="reed"  class="wpcf7-form-control">
            </span></div>
          <div class="col-md-6">
            <label for="">Pick<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="pick"  class="wpcf7-form-control">
            </span></div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Weft<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="weft"  class="wpcf7-form-control">
            </span></div>
          <div class="col-md-6">
            <label for="">Quantity in Meter<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="qty"  class="wpcf7-form-control">
            </span></div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Width<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="width"  class="wpcf7-form-control">
            </span></div>
          <div class="col-md-6">
            <label for="">Width Units</label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <select name="unit" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
              <option value="">---</option>
              <option value="">Select Unit</option>
              <option value="yard">yard</option>
              <option value="mm">mm</option>
              <option value="metre">metre</option>
            </select>
            </span> </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Expected Delivery Date<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="date" id="date" data-provide="datepicker" class="form-control"   placeholder="Enter expected delivery date">
            </span></div>
          <div class="col-md-6">
            <label for="">Mode Of shipment</label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <select name="shipment" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
              <option value="">---</option>
              <option value="">Select Unit</option>
              <option value="By Truck">By Truck</option>
              <option value="By Train">By Train</option>
              <option value="By Air">By Air</option>
              <option value="By Sea">By Sea</option>
              <option value="By Self">By Self</option>
            </select>
            </span> </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">NTN/STN Number For Pakistan<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="ntn"  class="wpcf7-form-control">
            </span></div>
          <div class="col-md-6">
            <label for="">Mode Of Payment</label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <select name="payment" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
              <option value="">---</option>
              <option value="Self/Cash">Self/Cash</option>
              <option value="Bank">Bank</option>
              <option value="Cradit card">Credit card</option>
              <option value="Any other">Any other</option>
            </select>
            </span> </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Price<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="price"  class="wpcf7-form-control">
            </span></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="">Note<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <textarea name="note" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
            </span></div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <p>
              <button type="submit" class="btn btn_submit">Submit</button>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection