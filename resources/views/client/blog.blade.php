@extends('client.layout.app')
@section('content')

  
  <div class="man_intro  man_image_bck" data-image="images/textile_main_image.jpg" data-color="#333333" data-repeat="no-repeat" data-position="center center" data-attachment="" data-size="cover">
    <div class="man_over"></div>
    <div class="man_intro_cont">
      <h1> About Us</h1>
      <div class="breadcrumbs" typeof="BreadcrumbList">
        <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="King Fabrics" href="#" class="home"><span property="name">Blogs</span></a>
          <meta property="position" content="1">
          </span></li>
        <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span property="name">Blogs</span>
          <meta property="position" content="2">
          </span></li>
      </div>
    </div>
  </div>
  
  <div id="content" class="site-content">
    <div data-elementor-type="wp-post" data-elementor-id="528" class="elementor elementor-528 elementor-bc-flex-widget" data-elementor-settings="[]">
      <div class="elementor-inner">
        <div class="elementor-section-wrap">
          <section class="elementor-section elementor-top-section elementor-element elementor-element-9c6885a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9c6885a" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6238c40" data-id="6238c40" data-element_type="column">
                  <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                      <div class="elementor-element elementor-element-3c396d8 elementor-widget elementor-widget-sm-news" data-id="3c396d8" data-element_type="widget" data-widget_type="sm-news.default">
                        <div class="elementor-widget-container">
                          <div class="man_news_list row">
                          
                          <!--loop -->
                          
                @foreach($blog as $results)
                            <div class="man_news_grid_item col-sm-6 col-md-4"> 
                           
                            <a href="{{URL('/')}}/read-detail-blog/{{$results->id}}" class="man_news_item_link"></a>
                              <div class="man_news_item_img"> <img class="lazy lazy-hidden"
 src="../wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif" data-lazy-type="image" data-src="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-360x280.jpeg"
 srcset="" data-srcset="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-1024x684.jpeg 1024w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-300x200.jpeg 300w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-768x513.jpeg 768w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-1536x1025.jpeg 1536w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-285x190.jpeg 285w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-660x441.jpeg 660w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-150x100.jpeg 150w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef.jpeg 1600w"
 sizes=""
 >
                                <noscript>
                                <img
src="{{URL('/')}}/storage/images/{{$results->image}}"
 srcset="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-1024x684.jpeg 1024w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-300x200.jpeg 300w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-768x513.jpeg 768w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-1536x1025.jpeg 1536w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-285x190.jpeg 285w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-660x441.jpeg 660w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-150x100.jpeg 150w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef.jpeg 1600w"
 sizes=""
 >
                                </noscript>
                                <div class="man_news_item_over"></div>
                                <div class="man_news_item_cont">
                                  <div class="man_news_item_title">{{$results->title}}</div>
                                  <div class="man_news_item_date"><i class="ti ti-time"></i> {{$results->created_at}}</div>
                                </div>
                              </div>
                            </div>
                             @endforeach
             
                             <!--loop -->
                          </div>
                          <div class="man_navigation"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
@endsection
