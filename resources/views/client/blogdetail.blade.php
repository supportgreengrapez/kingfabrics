@extends('client.layout.app')
@section('content')
  <div class="man_intro  man_image_bck" data-image="images/textile_main_image.jpg" data-color="#333333" data-repeat="no-repeat" data-position="center center" data-attachment="" data-size="cover">
    <div class="man_over"></div>
    <div class="man_intro_cont">
      <h1>Blogs</h1>
      <div class="breadcrumbs" typeof="BreadcrumbList">
        <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="King Fabrics" href="#" class="home"><span property="name">King Fabrics</span></a>
          <meta property="position" content="1">
          </span></li>
        <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span property="name">Blogs</span>
          <meta property="position" content="2">
          </span></li>
      </div>
    </div>
  </div>
  
  <div id="content" class="site-content">
    <div class="container">
      <div class="row">
           
        <div class="col-md-12 col-lg-9 man_main_sidebar">
          <div id="primary" class="content-area">
            <main id="main" class="site-main">
               
              <article id="post-974" class="post-974 post type-post status-publish format-standard has-post-thumbnail hentry category-textile-news tag-floor-space tag-fruits tag-hanesbrands tag-textile">
                <div class="man_single_page"> <img width="800" height="600" src="{{URL('/')}}/storage/images/{{$blog->image}}" data-lazy-type="image" data-src="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef-800x600.jpeg" class="lazy lazy-hidden attachment-manufacturer_single size-manufacturer_single wp-post-image" alt="" loading="lazy" />
                  <noscript>
                  <img width="800" height="600" src="{{URL('/')}}/storage/images/{{$blog->image}}" class="attachment-manufacturer_single size-manufacturer_single wp-post-image" alt="" loading="lazy" />
                  </noscript>
                  <p> {!!$blog->body!!}</p>
                 
                  <!--<p><img loading="lazy" class="lazy lazy-hidden alignnone wp-image-237" src="../wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif" data-lazy-type="image" data-src="https://manufacturer.stylemixthemes.com/wp-content/uploads/2018/07/aditya-chinchure-499383-unsplash-300x200.jpg" alt="" width="799" height="533" srcset="" data-srcset="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-300x200.jpg 300w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-768x512.jpg 768w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-1024x683.jpg 1024w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-285x190.jpg 285w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash.jpg 1600w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-660x440.jpg 660w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-150x100.jpg 150w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-360x240.jpg 360w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-600x400.jpg 600w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-550x367.jpg 550w" sizes="(max-width: 799px) 100vw, 799px" />-->
                  <!--  <noscript>-->
                  <!--  <img loading="lazy" class="alignnone wp-image-237" src="../../wp-content/uploads/2018/07/aditya-chinchure-499383-unsplash-300x200.jpg" alt="" width="799" height="533" srcset="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-300x200.jpg 300w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-768x512.jpg 768w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-1024x683.jpg 1024w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-285x190.jpg 285w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash.jpg 1600w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-660x440.jpg 660w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-150x100.jpg 150w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-360x240.jpg 360w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-600x400.jpg 600w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/aditya-chinchure-499383-unsplash-550x367.jpg 550w" sizes="(max-width: 799px) 100vw, 799px" />-->
                  <!--  </noscript>-->
                  <!--</p>-->
                  <!--<p>..........</p>-->
                  
                  <!--<blockquote>-->
                  <!--  <p>Nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat.</p>-->
                  <!--</blockquote>-->
                  <!--<p><img loading="lazy" class="lazy lazy-hidden alignright wp-image-240" src="../wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif" data-lazy-type="image" data-src="https://manufacturer.stylemixthemes.com/wp-content/uploads/2018/07/jg-photography-137560-unsplash-300x200.jpg" alt="" width="400" height="267" srcset="" data-srcset="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-300x200.jpg 300w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-768x512.jpg 768w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-1024x683.jpg 1024w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-285x190.jpg 285w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash.jpg 1600w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-660x440.jpg 660w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-150x100.jpg 150w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-360x240.jpg 360w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-600x400.jpg 600w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-550x367.jpg 550w" sizes="(max-width: 400px) 100vw, 400px" />-->
                  <!--  <noscript>-->
                  <!--  <img loading="lazy" class="alignright wp-image-240" src="../../wp-content/uploads/2018/07/jg-photography-137560-unsplash-300x200.jpg" alt="" width="400" height="267" srcset="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-300x200.jpg 300w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-768x512.jpg 768w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-1024x683.jpg 1024w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-285x190.jpg 285w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash.jpg 1600w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-660x440.jpg 660w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-150x100.jpg 150w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-360x240.jpg 360w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-600x400.jpg 600w, https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/07/jg-photography-137560-unsplash-550x367.jpg 550w" sizes="(max-width: 400px) 100vw, 400px" />-->
                  <!--  </noscript>-->
                    <!--<strong>Growth through innovation:</strong><br />-->
                    <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin sem in convallis vestibulum. Suspendisse consequat in libero non facilisis. Nullam dapibus blandit viverra. In sed ante ac eros fermentum lobortis eget in turpis. Sed maximus et odio id facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius leo eget condimentum tempus. In sed ante ac eros fermentum lobortis.</p>-->
                  <!--<div class="addtoany_share_save_container addtoany_content addtoany_content_bottom">-->
                  <!--  <div class="a2a_kit a2a_kit_size_20 addtoany_list" data-a2a-url="https://manufacturer.stylemixthemes.com/textile/new-fabric-opening/" data-a2a-title="New Fabric opening"><a class="a2a_button_facebook" href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fmanufacturer.stylemixthemes.com%2Ftextile%2Fnew-fabric-opening%2F&amp;linkname=New%20Fabric%20opening" title="Facebook" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_twitter" href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fmanufacturer.stylemixthemes.com%2Ftextile%2Fnew-fabric-opening%2F&amp;linkname=New%20Fabric%20opening" title="Twitter" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_pinterest" href="https://www.addtoany.com/add_to/pinterest?linkurl=https%3A%2F%2Fmanufacturer.stylemixthemes.com%2Ftextile%2Fnew-fabric-opening%2F&amp;linkname=New%20Fabric%20opening" title="Pinterest" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_telegram" href="https://www.addtoany.com/add_to/telegram?linkurl=https%3A%2F%2Fmanufacturer.stylemixthemes.com%2Ftextile%2Fnew-fabric-opening%2F&amp;linkname=New%20Fabric%20opening" title="Telegram" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_linkedin" href="https://www.addtoany.com/add_to/linkedin?linkurl=https%3A%2F%2Fmanufacturer.stylemixthemes.com%2Ftextile%2Fnew-fabric-opening%2F&amp;linkname=New%20Fabric%20opening" title="LinkedIn" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_whatsapp" href="https://www.addtoany.com/add_to/whatsapp?linkurl=https%3A%2F%2Fmanufacturer.stylemixthemes.com%2Ftextile%2Fnew-fabric-opening%2F&amp;linkname=New%20Fabric%20opening" title="WhatsApp" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save addtoany_share" href="https://www.addtoany.com/share"></a></div>-->
                  <!--</div>-->
                </div>
                  
                <footer class="entry-footer man_single_page_footer"> <span class="tags-links">Tagged <a href="../tag/floor-space/index.html" rel="tag">floor space</a>, <a href="../tag/fruits/index.html" rel="tag">fruits</a>, <a href="../tag/hanesbrands/index.html" rel="tag">hanesbrands</a>, <a href="../tag/textile/index.html" rel="tag">textile</a></span></footer>
              </article>
              <div id="comments" class="comments-area">
                <div id="respond" class="comment-respond">
                  <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h3>
                  <form action="https://manufacturer.stylemixthemes.com/textile/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                    <p class="comment-form-comment">
                      <textarea id="comment" name="comment" cols="45" rows="8"  aria-required="true" required placeholder="Comment"></textarea>
                    </p>
                    <div class="row">
                      <p class="comment-form-author comment-form-input col-md-4">
                        <input id="author" name="author" type="text" value="" size="30" placeholder="Name*" />
                      </p>
                      <p class="comment-form-email comment-form-input col-md-4">
                        <input id="email" name="email" type="text" value="" size="30" placeholder="E-mail*" />
                      </p>
                      <p class="comment-form-url comment-form-input col-md-4">
                        <input id="url" name="url" type="text" value="" size="30" placeholder="Website" />
                      </p>
                    </div>
                    <p class="form-submit">
                      <input name="submit" type="submit" id="submit" class="submit" value="Post Comment" />
                      <input type='hidden' name='comment_post_ID' value='974' id='comment_post_ID' />
                      <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                    </p>
                    <p style="display: none;">
                      <input type="hidden" id="ak_js" name="ak_js" value="187"/>
                    </p>
                  </form>
                </div>
              </div>
            </main>
          </div>
        </div>
        <div class="col-lg-3 man_sidebar_col">
          <div class="man_sidebar">
            <section id="search-3" class="widget widget_search">
              <h3 class="widget-title">Search</h3>
              <form role="search" method="get" class="search-form" action="https://manufacturer.stylemixthemes.com/textile/" >
                <div>
                  <label class="screen-reader-text" for="search-form-5ff4a8ce90e35">Search for:</label>
                  <input type="text" value="" id="search-form-5ff4a8ce90e35" class="search-field" placeholder="Search"  name="s" />
                  <button type="submit" class="man_search_btn"> <i class="ti ti-search"></i> </button>
                </div>
              </form>
            </section>
            <section id="woocommerce_products-5" class="widget woocommerce widget_products">
              <h3 class="widget-title">Products</h3>
              <ul class="product_list_widget">
                <li> <a href="../product/maison-fringe-quilt-cover-smoke-2/index.html"> <img width="360" height="280" src="../wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif" data-lazy-type="image" data-src="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/daniel-spase-548423-unsplash-360x280.jpg" class="lazy lazy-hidden attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                  <noscript>
                  <img width="360" height="280" src="../wp-content/uploads/sites/6/2018/08/daniel-spase-548423-unsplash-360x280.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                  </noscript>
                  <span class="product-title">Maison Fringe Quilt Cover - Smoke</span> </a></li>
                <li> <a href="../product/rarni-quilt-cover-set-steel-grey-3/index.html"> <img width="360" height="280" src="../wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif" data-lazy-type="image" data-src="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/kelly-sikkema-487603-unsplash-360x280.jpg" class="lazy lazy-hidden attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                  <noscript>
                  <img width="360" height="280" src="../wp-content/uploads/sites/6/2018/08/kelly-sikkema-487603-unsplash-360x280.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                  </noscript>
                  <span class="product-title">Rarni Quilt Cover Set - Steel Grey</span> </a></li>
              </ul>
            </section>
            <section id="recent-posts-2" class="widget widget_recent_entries">
              <h3 class="widget-title">Recent Posts</h3>
              <ul>
                <li> <a href="index.html" aria-current="page">New Fabric opening</a></li>
                <li> <a href="../applied-dna-sciences-westpoint-home-sign/index.html">Applied DNA Sciences, WestPoint Home Sign</a></li>
                <li> <a href="../hanesbrands-awarded-ninth/index.html">HanesBrands Awarded Ninth</a></li>
                <li> <a href="../fruit-of-the-loom-honored-for-energy-efforts/index.html">Fruit Of The Loom Honored For Energy Efforts</a></li>
                <li> <a href="../itma-2019-floor-space-sells-out/index.html">ITMA 2019 Floor Space Sells Out</a></li>
              </ul>
            </section>
            <section id="recent-comments-2" class="widget widget_recent_comments">
              <h3 class="widget-title">Recent Comments</h3>
              <ul id="recentcomments">
                <li class="recentcomments"><span class="comment-author-link">Igor</span> on <a href="../product/chambray-fringe-quilt-cover-mist/index.html#comment-15">Chambray Fringe Quilt Cover &#8211; Mist</a></li>
                <li class="recentcomments"><span class="comment-author-link">Mary J</span> on <a href="../unifi-acquires-national-spinning-assets/index.html#comment-10">Unifi Acquires National Spinning Assets</a></li>
                <li class="recentcomments"><span class="comment-author-link">admin</span> on <a href="../itma-2019-floor-space-sells-out/index.html#comment-9">ITMA 2019 Floor Space Sells Out</a></li>
                <li class="recentcomments"><span class="comment-author-link">admin</span> on <a href="../itma-2019-floor-space-sells-out/index.html#comment-8">ITMA 2019 Floor Space Sells Out</a></li>
                <li class="recentcomments"><span class="comment-author-link">John S.Gates</span> on <a href="../fruit-of-the-loom-honored-for-energy-efforts/index.html#comment-7">Fruit Of The Loom Honored For Energy Efforts</a></li>
              </ul>
            </section>
            <section id="archives-2" class="widget widget_archive">
              <h3 class="widget-title">Archives</h3>
              <ul>
                <li><a href='../2018/08/index.html'>August 2018</a></li>
                <li><a href='../2018/07/index.html'>July 2018</a></li>
              </ul>
            </section>
            <section id="categories-2" class="widget widget_categories">
              <h3 class="widget-title">Categories</h3>
              <ul>
                <li class="cat-item cat-item-17"><a href="../category/textile-news/index.html">Textile News</a></li>
              </ul>
            </section>
            <section id="meta-2" class="widget widget_meta">
              <h3 class="widget-title">Meta</h3>
              <ul>
                <li><a rel="nofollow" href="../wp-login.html">Log in</a></li>
                <li><a href="../feed/index.html">Entries feed</a></li>
                <li><a href="../comments/feed/index.html">Comments feed</a></li>
                <li><a href="https://wordpress.org/">WordPress.org</a></li>
              </ul>
            </section>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  @endsection

