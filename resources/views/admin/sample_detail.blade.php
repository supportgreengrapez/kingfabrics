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
          <h4>Sample Name</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->name == "")
          <p>...</p>
          @else
          <p>{{$results->name}}</p>
          @endif </div>
      </div>
    </div>
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Fabric Referance</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->refrence == "")
          <p>...</p>
          @else
          <p >{{$results->refrence}}</p>
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
    
    <!-- <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Color</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->sub_category == "")
          <p>...</p>
          @else
          <p>{{$results->sub_category}}</p>
          @endif </div>
      </div>
    </div> -->
    
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Special Finishing</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->finishing == "")
          <p>...</p>
          @else
          <p>{{$results->finishing}}</p>
          @endif </div>
      </div>
    </div>
    <div class="row borderbotms">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="dbicons">
          <h4>Description</h4>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="dbparahsss"> @if($results->description == "")
          <p>...</p>
          @else
          <p>{{$results->description}}</p>
          @endif </div>
      </div>
    </div>
    @endforeach
              @endif
  </div>
</div>
<!-- /page content --> 

@endsection 