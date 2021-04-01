@extends('admin.layout.appadmin')
@section('content') 

<!-- page content -->
<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Sample Management</h3>
      <h4 style="display:block;">Sample View</h4>
    </div>
  </div>
  <div class="wrap">
    <div class="page-title">
      <h4><b>About this Item</b></h4>
    </div>
    @if(count($result)>0)
            @foreach($result as $results)
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>First Name</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->fname == "")
          <p>...</p>
          @else
          <p>{{$results->fname}}</p>
          @endif </div>
      </div>
    </div>


    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Last Name</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->lname == "")
          <p>...</p>
          @else
          <p >{{$results->lname}}</p>
          @endif </div>
      </div>
    </div>

    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Email</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->email == "")
          <p>...</p>
          @else
          <p >{{$results->email}}</p>
          @endif </div>
      </div>
    </div>

    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Phone</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->phone == "")
          <p>...</p>
          @else
          <p >{{$results->phone}}</p>
          @endif </div>
      </div>
    </div>

    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Address</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->address == "")
          <p>...</p>
          @else
          <p >{{$results->address}}</p>
          @endif </div>
      </div>
    </div>



    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Sample Name</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->name == "")
          <p>...</p>
          @else
          <p >{{$results->name}}</p>
          @endif </div>
      </div>
    </div>



    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Weave</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->weave == "")
          <p>...</p>
          @else
          <p>{{$results->weave}}</p>
          @endif </div>
      </div>
    </div>
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>GSM</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->GSM == "")
          <p>...</p>
          @else
          <p>{{$results->GSM}}</p>
          @endif </div>
      </div>
    </div>
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Category</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->main_category == "")
          <p>...</p>
          @else
          <p>{{$results->main_category}}</p>
          @endif </div>
      </div>
    </div>
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Sub Category</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->sub_category == "")
          <p>...</p>
          @else
          <p>{{$results->sub_category}}</p>
          @endif </div>
      </div>
    </div>
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Sample Type</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->type == "")
          <p>...</p>
          @else
          <p>{{$results->type}}</p>
          @endif </div>
      </div>
    </div>
    

    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Quantity</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->q == "")
          <p>...</p>
          @else
          <p >{{$results->q}}</p>
          @endif </div>
      </div>
    </div>



    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Warp</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->warp == "")
          <p>...</p>
          @else
          <p >{{$results->warp}}</p>
          @endif </div>
      </div>
    </div>



    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Reed</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->reed == "")
          <p>...</p>
          @else
          <p >{{$results->reed}}</p>
          @endif </div>
      </div>
    </div>



    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>weft</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->weft== "")
          <p>...</p>
          @else
          <p >{{$results->weft}}</p>
          @endif </div>
      </div>
    </div>


    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Unit</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->unit == "")
          <p>...</p>
          @else
          <p >{{$results->unit}}</p>
          @endif </div>
      </div>
    </div>



    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>STN</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->STN == "")
          <p>...</p>
          @else
          <p >{{$results->STN}}</p>
          @endif </div>
      </div>
    </div>



    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Payment</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->payment == "")
          <p>...</p>
          @else
          <p >{{$results->payment}}</p>
          @endif </div>
      </div>
    </div>



    
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Width</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->width == "")
          <p>...</p>
          @else
          <p>{{$results->width}}</p>
          @endif </div>
      </div>
    </div>
    
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Rate</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->price == "")
          <p>...</p>
          @else
          <p>{{$results->price}}</p>
          @endif </div>
      </div>
    </div>
    
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Color</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->color == "")
          <p>...</p>
          @else
          <p>{{$results->color}}</p>
          @endif </div>
      </div>
    </div>
    
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Mode of Shipment</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->mode_of_ship == "")
          <p>...</p>
          @else
          <p>{{$results->mode_of_ship}}</p>
          @endif </div>
      </div>
    </div>


    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Delivery Date</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->delivery_date == "")
          <p>...</p>
          @else
          <p >{{$results->delivery_date}}</p>
          @endif </div>
      </div>
    </div>


    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Pick</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->pick == "")
          <p>...</p>
          @else
          <p >{{$results->pick}}</p>
          @endif </div>
      </div>
    </div>












    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Messge</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->note == "")
          <p>...</p>
          @else
          <p>{{$results->note}}</p>
          @endif </div>
      </div>
    </div>
    @endforeach
              @endif
  </div>
</div>
<!-- /page content --> 

@endsection 