@extends('client.layout.app')
@section('content')
<div class="man_intro  man_image_bck" data-image="{{url('/')}}/client/images/textile_main_image.jpg" data-color="#333333" data-repeat="no-repeat" data-position="center center" data-attachment="" data-size="cover">
  <div class="man_over"></div>
  <div class="man_intro_cont">
    <h1> <span>Samples</span></h1>
    <div class="breadcrumbs" typeof="BreadcrumbList">
      <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="King Fabrics" href="#" class="home"><span property="name">King Fabrics</span></a>
        <meta property="position" content="1">
        </span></li>
      <li class="archive taxonomy product_cat current-item"><span property="itemListElement" typeof="ListItem"><span property="name">Sample</span>
        <meta property="position" content="3">
        </span></li>
    </div>
  </div>
</div>
<div id="content" class="site-content">
  <div class="stm-products-catalog">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-9 man_main_sidebar">
          <div class="content-area">
            <div id="primary" class="content-area">
              <main id="main" class="site-main" role="main">
                <div class="stm-products-catalog__filter">
                  <div class="stm-filter-chosen-units"></div>
                  <div class="stm-view-by"> <a href="#" class="view-grid view-type active" data-view="grid"> <i class="fa fa-th"></i> </a> <a href="#" class="view-list view-type" data-view="list"> <i class="fa fa-list-ul"></i> </a></div>
                </div>
                <div class="stm-products-main grid"> @if($result>0)
                  @foreach($result as $results)
                  <div class="stm-product-item"> <a class="stm-product-item__image content" href="#"> <img src="{{url('/')}}/client/images/Fotolia_58165627_Subscription_Monthly_M.jpg" alt="Chambray Quilted Quilt Cover &#8211; Dove"/> </a>
                    <div class="inter">
                      <div><span>Fabric Ref </span><b> JHFJH54</b></div>
                      <div><span>WEAVE </span><b> 2/2 MATT</b></div>
                      <div><span>GSM </span><b> 250GSM</b></div>
                    </div>
                    <div class="stm-product-item__content">
                      <div class="meta-top">
                        <div class="product-categories"><a href="{{URL('/')}}/sample/detail/view/{{$results->pk_id}}">{{$results->name}}</a></div>
                        <a class="stm-product-item__title" href="#">{{$results->description}}</a></div>
                      <div class="meta-middle">
                        <div class="meta-middle-unit">
                          <table class="woocommerce-product-attributes shop_attributes">
                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_ref">
                              <th class="woocommerce-product-attributes-item__label">REF</th>
                              <td class="woocommerce-product-attributes-item__value"><p>{{$results->refrence}}</p></td>
                            </tr>
                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_composition">
                              <th class="woocommerce-product-attributes-item__label">Weave</th>
                              <td class="woocommerce-product-attributes-item__value"><p>{{$results->weave}}</p></td>
                            </tr>
                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_width">
                              <th class="woocommerce-product-attributes-item__label">Width</th>
                              <td class="woocommerce-product-attributes-item__value"><p>{{$results->width}}</p></td>
                            </tr>
                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_height">
                              <th class="woocommerce-product-attributes-item__label">GSM</th>
                              <td class="woocommerce-product-attributes-item__value"><p>{{$results->GSM}}</p></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @endif </div>
              </main>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection