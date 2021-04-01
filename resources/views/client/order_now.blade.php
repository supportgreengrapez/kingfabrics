
@extends('client.layout.app')
@section('content')

<div class="bg">
<div class="container">
	<div class="content_salogan">
    	<h2>Order Now</h2>
    </div>
    <div class="oder_form" id="order_form">
        <form role="form"  method="post" action = "{{url('/')}}/ordernow">
            {{ csrf_field() }}
            <div class="row">
            	<div class="form-group col-lg-9 col-sm-12 col-md-9">
                      <h2>Product Information</h2>
                </div>
                <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Product Name</label>
                        <select class="form-control" name = "product">
                          	<option>Select name</option>
                            <option value="Sartin">Sartin</option>
                            <option value="Twill">Twill</option>
                            <option value="Jelly">Jelly</option>
                            <option value="Wooli">Wooli</option>
                            <option value="Tafta">Tafta</option>
                        </select>
                 </div>
                 <div class="form-group col-lg-9 col-sm-12 col-md-9">
                        <label>Category</label>
                        <select class="form-control" name = "category">
                          	<option>Product Category</option>
                            <option value="Leminated Fabrics">Leminated Fabrics</option>
                            <option value="Spcial Fabrics">Spcial Fabrics</option>
                            <option value="TC">TC</option>
                            <option value="CVC">CVC</option>
                            <option value="PC">PC</option>
                            <option value="100% polyaster">100% polyaster</option>
                            <option value="Viscos">Viscos</option>
                            <option value="PV">PV</option>
                            <option value="FR fabrics">FR fabrics</option>
                            <option value="Kinated Fabrics">Kinated Fabrics</option>
                        </select>
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Weight-GSM</label>
                        <input type="number" class="form-control" name="weight" value="50" min="50" placeholder="Enter Weight in GSM">
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Color</label>
                        <input type="text" class="form-control" name="color" value="" placeholder="Enter Color">
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Weave</label>
                        <select class="form-control" name = "weave">
                          	<option>Product Category</option>
                            <option value="1/1">1/1</option>
                            <option value="1/2">1/2</option>
                            <option value="1/3">1/3</option>
                            <option value="1/4">1/4</option>
                            <option value="2/2">2/2</option>
                            <option value="2/3">2/3</option>
                            <option value="2/4">2/4</option>
                        </select>
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Warp</label>
                        <input type="text" class="form-control" name="warp" value="1" min="1" max="2000" placeholder="Enter Pick">
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Reed</label>
                        <input type="text" class="form-control" name="reed" value="" placeholder="Enter Reed">
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Pick</label>
                        <input type="text" class="form-control" name="pick" value="" placeholder="Enter Pick">
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Weft</label>
                        <input type="text" class="form-control" name="weft" value="" placeholder="Enter Weft">
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Width</label>
                        <input type="text" class="form-control" name="width" value="" placeholder="Enter Width">
                 </div>
                 <div class="form-group col-lg-9 col-sm-12 col-md-9">
                        <label>Quantity in Meter</label>
                        <input type="number" class="form-control" name="qty" value="" placeholder="Enter Quantity">
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Expected Delivery Date</label>
                        <input type="date" class="form-control" name="date" value="" placeholder="Enter expected delivery date">
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Mode Of shipment</label>
                        <select class="form-control" name = "shipment">
                          	<option>Select Shipment mode</option>
                            <option value="By Truck">By Truck</option>
                            <option value="By Train">By Train</option>
                            <option value="By Air">By Air</option>
                            <option value="By Sea">By Sea</option>
                            <option value="By Self">By Self</option>
                        </select>
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>Mode Of Payment</label>
                        <select class="form-control" name = "payment">
                          	<option>Select Payment mode</option>
                            <option value="Self/Cash">Self/Cash</option>
                            <option value="Bank">Bank</option>
                            <option value="Cradit card">Cradit card</option>
                            <option value="Any other">Any other</option>
                        </select>
                 </div>
                 <div class="form-group col-lg-6 col-sm-12 col-md-6">
                        <label>NTN/STN Number For Pakistan</label>
                        <input type="text" class="form-control" name="ntn" value="" placeholder="Enter NTN/STN Number for pakistan">
                 </div>
                 <div class="form-group col-lg-9 col-sm-12 col-md-9">
                        <label>Note</label>
                        <textarea class="form-control" name = "note" rows="9" placeholder="Enter important Not...."></textarea>
                 </div>
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