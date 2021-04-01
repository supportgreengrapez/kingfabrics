  
  @extends('client.layout.app')
  @section('content')
  @if($result>0)
            @foreach($result as $results)
  <div class="man_intro  man_image_bck" data-image="{{URL('/')}}/client/images/textile_main_image.jpg" data-color="#333333" data-repeat="no-repeat" data-position="center center" data-attachment="" data-size="cover">
    <div class="man_over"></div>
    <div class="man_intro_cont">
      <h1> Sample Detail</h1>
      <div class="breadcrumbs" typeof="BreadcrumbList">
        <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="King Fabrics" href="#" class="home"><span property="name">King Fabrics</span></a>
          <meta property="position" content="1">
          </span></li>
        <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span property="name">Sample Detail</span>
          <meta property="position" content="2">
          </span></li>
      </div>
    </div>
  </div>
  @if(Session::has('message'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ Session::get('message') }}</strong>
      </div>  
    @endif
  <div class="product-template-default single single-product postid-915 wp-embed-responsive theme-manufacturer woocommerce woocommerce-page woocommerce-no-js ehf-header ehf-footer ehf-template-manufacturer ehf-stylesheet-manufacturer no-sidebar elementor-default elementor-kit-1189">
  <div id="content" class="site-content">
    <div class="stm-products-catalog">
      <div class="container">
        <div class="row">
          <div class="col-md-12 man_main_sidebar">
            <div class="content-area">
              <div class="woocommerce-notices-wrapper"></div>
              <div id="product-915" class="product type-product post-915 status-publish first instock product_cat-home-textiles product_tag-cotton product_tag-pure product_tag-reversible-to-denim has-post-thumbnail shipping-taxable product-type-simple">
                <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
                  <figure class="woocommerce-product-gallery__wrapper ">
                    <div data-thumb="{{URL('/')}}/client/images/volha-flaxeco-546923-unsplash.jpg" data-thumb-alt="" class="woocommerce-product-gallery__image"><a href="{{URL('/')}}/client/images/volha-flaxeco-546923-unsplash.jpg"><img width="660" height="440" src="{{URL('/')}}/client/images/volha-flaxeco-546923-unsplash.jpg" class="wp-post-image" alt="" loading="lazy" title="volha-flaxeco-546923-unsplash" data-caption="" data-src="{{URL('/')}}/client/images/volha-flaxeco-546923-unsplash.jpg" data-large_image="{{URL('/')}}/client/images/volha-flaxeco-546923-unsplash.jpg" data-large_image_width="1600" data-large_image_height="1067"/></a></div>
                    <div data-thumb="{{URL('/')}}/client/images/sergio-ruiz-589237-unsplash.jpg" data-thumb-alt="" class="woocommerce-product-gallery__image"><a href="{{URL('/')}}/client/images/sergio-ruiz-589237-unsplash.jpg"><img width="495" height="660" src="{{URL('/')}}/client/images/sergio-ruiz-589237-unsplash.jpg" class="" alt="" loading="lazy" title="spencer-_-701481-unsplash" data-caption="" data-src="{{URL('/')}}/client/images/sergio-ruiz-589237-unsplash.jpg" data-large_image="{{URL('/')}}/client/images/sergio-ruiz-589237-unsplash.jpg" data-large_image_width="1200" data-large_image_height="1600"/></a></div>
                    <div data-thumb="{{URL('/')}}/client/images/spencer-_-701481-unsplash.jpg" data-thumb-alt="" class="woocommerce-product-gallery__image"><a href="{{URL('/')}}/client/images/spencer-_-701481-unsplash.jpg"><img width="495" height="660" src="{{URL('/')}}/client/images/spencer-_-701481-unsplash.jpg" class="" alt="" loading="lazy" title="spencer-_-701481-unsplash" data-caption="" data-src="{{URL('/')}}/client/images/spencer-_-701481-unsplash.jpg" data-large_image="{{URL('/')}}/client/images/spencer-_-701481-unsplash.jpg" data-large_image_width="1200" data-large_image_height="1600"/></a></div>
                  </figure>
                </div>
                <div class="summary entry-summary summary_catalog">
                  <h2 class="product_title entry-title"> {{$results->name}}</h2>
                  <p class="price"></p>
                  <div class="woocommerce-product-details__short-description">
                    <p>
                    {{$results->description}}   
                  </p>
                  </div>
                  <a href="#tab-title-enquiry" class="btn man_enquiry_btn">Send Enquiry<i class="ti ti-arrow-right"></i></a>
                  <!-- <a href="{{URL('/')}}/add/to/sample/{{$results->pk_id}}" class="btn man_enquiry_btn">Add to Sample<i class="ti ti-arrow-right"></i></a>
                 -->
                  <form method="post" action="{{URL('/')}}/add/to/sample/{{$results->pk_id}}">{{ csrf_field() }}<button type="submit" class="btn man_enquiry_btn"><i class="ti ti-arrow-right"></i>Add to Sample</button></form>
                
                 <div class="product_meta"> 
                  <span class="sku_wrapper"><b>SKU</b> <span class="sku">0368974421-1-1</span></span> 
                  <span class="posted_in"><b>Category</b> <a href="" rel="tag">{{$results->main_category}} </a></span> 
                  <span class="tagged_as"><b>Febric Ref</b> {{$results->refrence}} </span>
                  <span class="tagged_as"><b>Weave </b> {{$results->weave}} </span>
                  <span class="tagged_as"><b>GSM</b>  {{$results->GSM}} GSM</span>
                  </div>
                  
                </div>
                <div class="woocommerce-tabs wc-tabs-wrapper">
                  <ul class="tabs wc-tabs" role="tablist">
                    <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description"> <a href="#tab-description"> Description </a></li>
                    <li class="related_products_tab" id="tab-title-related_products" role="tab" aria-controls="tab-related_products"> <a href="#tab-related_products"> Related Products </a></li>
                    <li class="enquiry_tab" id="tab-title-enquiry" role="tab" aria-controls="tab-enquiry"> <a href="#tab-enquiry"> Enquiry </a></li>
                  </ul>
                  <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                    <div class="row">
                      <div class="col-md-6">
                        <h3>Overview</h3>
                        <p> {{$results->description}}</p>
                        <h3>Special Finishing</h3>
                        <p> {{$results->finishing}}</p>
                        <h3>Notes</h3>
                        <p>{{$results->description}} </p>
                      </div>
                      <div class="col-md-6">
                        <h3>Details</h3>
                        <table class="woocommerce-product-attributes shop_attributes">
                          <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_ref">
                            <th class="woocommerce-product-attributes-item__label">Sub category</th>
                            <td class="woocommerce-product-attributes-item__value"><p>{{$results->sub_category}}</p></td>
                          </tr>
                          <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_composition">
                            <th class="woocommerce-product-attributes-item__label">Type</th>
                            <td class="woocommerce-product-attributes-item__value"><p>{{$results->type}}</p></td>
                          </tr>
                          <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_width">
                            <th class="woocommerce-product-attributes-item__label">Width</th>
                            <td class="woocommerce-product-attributes-item__value"><p>{{$results->width}}</p></td>
                          </tr>
                          <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_height">
                            <th class="woocommerce-product-attributes-item__label">Rate</th>
                            <td class="woocommerce-product-attributes-item__value"><p>{{$results->price}}</p></td>
                          </tr>
                          <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_height">
                            <th class="woocommerce-product-attributes-item__label">Color</th>
                            <td class="woocommerce-product-attributes-item__value"><p>Red</p></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--related_products panel entry-content wc-tab" id="tab-related_products" role="tabpanel" aria-labelledby="tab-title-related_products">
                    <section class="related products text-left">
                      <div class="stm-products-main list">
                      @if($result3>0)
            @foreach($result3 as $results)
                        <div class="stm-product-item"> <a class="stm-product-item__image" href="#"> <img
 src="{{URL('/')}}/client/images/prince-abid-640396-unsplash-270x270.jpg" alt="image" /> </a>
                          <div class="stm-product-item__content">
                            <div class="meta-top">
                              <div class="product-categories"><a href="#" rel="tag">{{$results->name}}</a></div>
                              <a class="stm-product-item__title" href="#">{{$results->description}}</a></div>
                            <div class="meta-middle">
                              <div class="meta-middle-unit">
                                <table class="woocommerce-product-attributes shop_attributes">
                                  <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_ref">
                                    <th class="woocommerce-product-attributes-item__label">Fabrics Refrence</th>
                                    <td class="woocommerce-product-attributes-item__value"><p>{{$results->refrence}}</p></td>
                                  </tr>
                                  <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_composition">
                                    <th class="woocommerce-product-attributes-item__label">GSM</th>
                                    <td class="woocommerce-product-attributes-item__value"><p>{{$results->GSM}}GSM</p></td>
                                  </tr>
                                  <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_width">
                                    <th class="woocommerce-product-attributes-item__label">WEAVE</th>
                                    <td class="woocommerce-product-attributes-item__value"><p>{{$results->weave}}</p></td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                            <div class="meta-bottom">
                              <div class="stm-product-item__price"></div>
                              <div class="stm-product-item__add_cart man_button_round"> <a href= "{{url('/')}}/sample/detail/view/{{$results->pk_id}}" data-quantity="1" class="button product_type_simple">Detail View</a></div>
                            </div>
                          </div>
                          @endforeach
            @endif
                        </div>
                        @endforeach
            @endif
                        
                      </div>
                    </section>
                  </div>
                  <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--enquiry panel entry-content wc-tab" id="tab-enquiry" role="tabpanel" aria-labelledby="tab-title-enquiry">
                    <div role="form" class="wpcf7" id="wpcf7-f1085-p915-o1" lang="en-US" dir="ltr">
                      <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul>
                        </ul>
                      </div>
                     
    <form method="post" action = "{{url('/')}}/add/guest/inquiry" class="wpcf7-form init" enctype="multipart/form-data"  >
            {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6">
            <label for="">First Name<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="fname"  class="wpcf7-form-control">
            </span></div>
          <div class="col-md-6">
            <label for="">Last Name<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="lname"  class="wpcf7-form-control">
            </span></div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Email<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="email" name="email"  class="wpcf7-form-control">
            </span></div>
          <div class="col-md-6">
            <label for="">Phone<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="tel" name="phone"  class="wpcf7-form-control">
            </span></div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Address<span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <input type="text" name="address"  class="wpcf7-form-control">
            </span></div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Product Name <span>*</span></label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <select name="name" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
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
           
            <select  class="wpcf7-form-control wpcf7-select" aria-invalid="false" name="mainCategory" id="mainCategory"  >
                        <option value="" disable="true" selected="true" >---Select Category---</option>
                        
                @if($result2>0)
                    @foreach($result2 as $results)
                            
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
            <input type="text" name="GSM"  class="wpcf7-form-control">
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
            <input type="text" name="q"  class="wpcf7-form-control">
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
            <input type="text" name="dd"  class="wpcf7-form-control">
            </span></div>
          <div class="col-md-6">
            <label for="">Mode Of shipment</label>
            <br>
            <span class="wpcf7-form-control-wrap">
            <select name="mode" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
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
            <input type="text" name="STN"  class="wpcf7-form-control">
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
            <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  </div>
</div>
@endsection