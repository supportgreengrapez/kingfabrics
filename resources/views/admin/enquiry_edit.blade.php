@extends('admin.layout.appadmin')

@section('content') 

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Enquiry Management</h3>
        <h4 style="display: block;">Edit Enquiry</h4>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content"> @foreach($result as $results)
          <form method="post" action = "{{url('/')}}/admin/home/view/preorder/view/enquiry/submit/enquiry/{{$results->pk_id}}/{{$results->c_id}}">
         
            {{ csrf_field() }}
            <div class="row">
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Product Name</label>
                   
                <select class="form-control" name = "product">
                <option value="{{$results->product_name}}" >{{$results->product_name}}</option>
                @endforeach
                @if($result3>0)
            @foreach($result3 as $results) 
                <option value="{{$results->name}}" >{{$results->name}}</option>
                @endforeach
        @endif
                      </select>
                    
              </div>
              @foreach($result as $results)
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Category</label>
                <select class="form-control" name = "category">
                 
                <option value="{{$results->category}}" >{{$results->category}}</option>
                      </select>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Weight-GSM</label>
                <input type="number" class="form-control" name="weight" value="{{$results->weight_GSM}}" min="50" placeholder="Enter Weight in GSM">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Color</label>
                <input type="text" class="form-control" name="color" value="{{$results->color}}" placeholder="Enter Color">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Weave</label>
                <select class="form-control" name = "weave">
                  <option @if($results->weave=="1/1") selected @endif value="1/1">1/1</option>
                  <option @if($results->weave=="1/2") selected @endif value="1/2">1/2</option>
                  <option @if($results->weave=="1/3") selected @endif value="1/3">1/3</option>
                  <option @if($results->weave=="1/4") selected @endif value="1/4">1/4</option>
                  <option @if($results->weave=="2/2") selected @endif value="2/2">2/2</option>
                  <option @if($results->weave=="2/3") selected @endif value="2/3">2/3</option>
                  <option @if($results->weave=="2/4") selected @endif value="2/4">2/4</option>
                </select>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Warp</label>
                <input type="number" min=0 class="form-control" name="warp" value="{{$results->warp}}" min="1" max="2000" placeholder="Enter Pick">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Reed</label>
                <input type="number" min=0 class="form-control" name="reed" value="{{$results->reed}}" placeholder="Enter Pick">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Pick</label>
                <input type="number" min=0 class="form-control" name="pick" value="{{$results->pick}}" placeholder="Enter Pick">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Weft</label>
                <input type="number" min=0 class="form-control" name="weft" value="{{$results->weft}}" placeholder="Enter Weft">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Width</label>
                <input step="any" type="number" min=0 class="form-control" name="width" value="{{$results->width}}" placeholder="Enter Width">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Width Unit</label>
                <select class="form-control" name = "unit">
                  <option @if($results->widthunit=="yard") selected @endif value="yard">yard</option>
                  <option @if($results->widthunit=="mm") selected @endif value="mm">mm</option>
                  <option @if($results->widthunit=="metre") selected @endif value="metre">metre</option>
                </select>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Quantity in Meter</label>
                <input type="number" min=0 class="form-control" name="qty" value="{{$results->quantity}}" placeholder="Enter Quantity">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Expected Delivery Date</label>
                <input type="date" class="form-control" name="date" value="{{$results->delivery_date}}" placeholder="Enter expected delivery date">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Mode Of shipment</label>
                <select class="form-control" name = "shipment">
                  <option @if($results->shipment=="By Truck") selected @endif value="By Truck">By Truck</option>
                  <option @if($results->shipment=="By Train") selected @endif value="By Train">By Train</option>
                  <option @if($results->shipment=="By Air") selected @endif value="By Air">By Air</option>
                  <option @if($results->shipment=="By Sea") selected @endif value="By Sea">By Sea</option>
                  <option @if($results->shipment=="By Self") selected @endif value="By Self">By Self</option>
                </select>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Mode Of Payment</label>
                <select class="form-control" name = "payment">
                  <option @if($results->payments=="Self/Cash") selected @endif value="Self/Cash">Self/Cash</option>
                  <option @if($results->payments=="Bank") selected @endif value="Bank">Bank</option>
                  <option @if($results->payments=="Cradit card") selected @endif value="Cradit card">Cradit card</option>
                  <option @if($results->payments=="Any other") selected @endif value="Any other">Any other</option>
                </select>
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>NTN/STN Number For Pakistan</label>
                <input type="text" class="form-control" name="ntn" value="{{$results->NTN_number}}" placeholder="Enter NTN/STN Number for pakistan">
              </div>
              <div class="form-group col-lg-6 col-sm-12 col-md-6">
                <label>Price</label>
                <input type="number" min=0 class="form-control" name="price" value="{{$results->price}}" placeholder="Price">
              </div>
              <div class="form-group col-lg-9 col-sm-12 col-md-9">
                <label>Note</label>
                <textarea name="note" class="form-control" rows="9" value="{{$results->note}}" >{{$results->note}}</textarea>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <p>
                  <button type="submit" class="btn btn-submmit">Update</button>
                </p>
              </div>
            </div>
          </form>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content --> 

@endsection 