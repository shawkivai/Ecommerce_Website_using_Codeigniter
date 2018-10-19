<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

    <!-- Mirrored from inthe7heaven.com/flatastic-html/ by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 17 Jun 2014 17:30:41 GMT -->
    <head>
        <!--<title>Home</title>-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!--meta info-->
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="icon" type="image/ico" href="images/fav.ico">
        <!--stylesheet include-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/colorpicker.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/camera.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/owl.transitions.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/jquery.custom-scrollbar.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/style.css">
        <!--font include-->
        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        
         <?php
        $cart_contents = $this->cart->contents();
        

        ?>

        <!--boxed layout-->
        <div class="boxed_layout relative w_xs_auto">
            <!--[if (lt IE 9) | IE 9]>
                    <div style="background:#fff;padding:8px 0 10px;">
                    <div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
            <![endif]-->
            <!--markup header-->
            <header role="banner">
                <!--header top part-->
                <section class="h_top_part">
                    <div class="container">
                        <div class="row clearfix">
                          
						  
						  
						  
                            <div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
                                <p class="f_size_small">Call us toll free: <b class="color_dark">(+880)1765786924</b></p>
                            </div>
                            <nav class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
                                <ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
                                    <li><a href="#" class="default_t_color">My Account</a></li>
                                    <li><a href="#" class="default_t_color">Orders List</a></li>
                                    <li><a href="#" class="default_t_color">Wishlist</a></li>
                                    <li><a href="#" class="default_t_color">Checkout</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>
                <!--header bottom part-->
                <section class="h_bot_part container">
                    <div class="clearfix row">
                        <div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
                            <a href="<?php echo base_url();?>" class="logo m_xs_bottom_15 d_xs_inline_b">
                                <img src="<?php echo base_url('images/amazon.png')?>" height="80" width="150" alt="" height="30" width="200">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-8 t_align_r t_xs_align_c">
                            <ul class="d_inline_b horizontal_list clearfix t_align_l site_settings">
                                <!--like-->
                                <li>
                                    <a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-heart-o f_size_ex_large"></i><span class="count circle t_align_c"></span></a>
                                </li>
                                <li class="m_left_5">
                                    <a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-files-o f_size_ex_large"></i><span class="count circle t_align_c"></span></a>
                                </li>
                                <!--language settings-->
                                <li class="m_left_5 relative container3d">
                                    
                                    <a role="button" href="#" class="button_type_2 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none" id="lang_button"><span class="d_mxs_none"><?php echo $this->session->userdata('full_name')?></span></a>
                                    <ul class="dropdown_list top_arrow color_light">
                                        
                                     
                                        <li>
                                          
                                            <a href="<?php echo base_url();?>super_admin/customer_logout" class="tr_delay_hover color_light">Logout</a></li>
                                        
                                    </ul>
                                    
                              
                                    
                                    
                                    
                                </li>
                                <!--currency settings-->
                                <li class="m_left_5 relative container3d">
                                    <a role="button" href="#" class="button_type_2 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none" id="currency_button"><span class="scheme_color"></span> <span class="d_mxs_none">BDT.</span></a>
                                    <ul class="dropdown_list top_arrow color_light">
                                        <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">$</span> US Dollar</a></li>
                                        <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#8364;</span> Euro</a></li>
                                        <li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#163;</span> Pound</a></li>
                                    </ul>
                                </li>
                                <!--shopping cart-->
                                <li class="m_left_5 relative container3d" id="shopping_button">
                                    <a role="button" href="<?php echo base_url()?>cart/show_cart" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
                                        <span class="d_inline_middle shop_icon m_mxs_right_0">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="count tr_delay_hover type_2 circle t_align_c"><?php echo $this->cart->total_items();?></span>
                                        </span>
                                        <b class="d_mxs_none"><?php echo $this->cart->total();?></b>
                                    </a>
                                    <div class="shopping_cart top_arrow tr_all_hover r_corners">
                                        <div class="f_size_medium sc_header">Recently added item(s)</div>
                                        <ul class="products_list">
                                            
                                             <?php 
                                                    if(is_array($cart_contents)):
                                                    foreach ($cart_contents as $v_contents):
                                                    ?>
                                            <li>
                                                 
      
                                                <div class="clearfix">
                                                    <!--product image-->
                                                    <img class="f_left m_right_10" src="<?php echo base_url().$v_contents['image']?>" alt="">
                                                    <!--product description-->
                                                
                                                    <div class="f_left product_description">
                                                        <a href="<?php echo $v_contents['name']?>" class="color_dark m_bottom_5 d_block"></a>
                                                        <!--<span class="f_size_medium">Product Code PS34</span>-->
                                                    </div>
                                                    <!--product price-->
                                                    <div class="f_left f_size_medium">
                                                        <div class="clearfix">
                                                            1 x <b class="color_dark"><?php echo $v_contents['price']?></b>
                                                        </div>
                                                        <button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                
                                               
                                            </li>
                                            
                                                 <?php
                                                    endforeach;
                                                    endif;
                                                 ?>
                                        </ul>
<!--                                    
                                        </ul>
                                        <!--total price-->
                                        <ul class="total_price bg_light_color_1 t_align_r color_dark">
                                                    <li class="m_bottom_10">Tax: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">
                                                <?php
                    $vat=15*$this->cart->total()/100;
                    echo'BDT ', $vat;
                    
                    ?>
                                                </span></li>
                                            <!--<li class="m_bottom_10">Discount: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$37.00</span></li>-->
                                            <li>Total: <b class="f_size_large bold scheme_color sc_price t_align_l d_inline_b m_left_15"><?php echo $this->cart->total()+$vat;?></b></li>
                                        </ul>
                                        <div class="sc_footer t_align_c">
                                            <a href="<?php echo base_url();?>cart/show_cart" role="button" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">View Cart</a>
                                            <a href="<?php echo base_url()?>admin/check_admin_login" data-popup="#login_popup" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!--main menu container-->
                <section class="menu_wrap relative">
                    <div class="container clearfix">
                        <!--button for responsive menu-->
                        <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
                            <span class="centered_db r_corners"></span>
                            <span class="centered_db r_corners"></span>
                            <span class="centered_db r_corners"></span>
                        </button>
                        <!--main menu-->
                        <nav role="navigation" class="f_left f_xs_none d_xs_none">	
                            <ul class="horizontal_list main_menu clearfix">
                                <li class="current relative f_xs_none m_xs_bottom_5"><a href="<?php echo base_url();?>" class="tr_delay_hover color_light tt_uppercase">Home</a>
                                <!--<li class="color_dark tr_delay_hover"><a href="<?php echo base_url();?>welcome/testing" class="tr_delay_hover color_light tt_uppercase">Test</a>-->
                                    <!--sub menu-->
                                </li>
                                   
                                <!--</li>-->
                             
                                    <!--sub menu-->
                                   
                                </li>
                                <li class="relative f_xs_none m_xs_bottom_5"><a href="<?php echo base_url();?>" class="tr_delay_hover color_light tt_uppercase"><b>Shop</b></a>
                                    <!--sub menu-->
                                    <div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
                                        <div class="f_left f_xs_none">
                                            
                                            
                                            <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Electronics</b>
                                            
                                            
                                            <ul class="sub_menu first">
                                                
                                                <?php
                                                foreach ($all_category as $v_category) {
                                                    ?>
                                                <li><a class="color_dark tr_delay_hover" href="<?php echo base_url(); ?>welcome/category_product/<?php echo $v_category->category_id ?>"><?php echo $v_category->category_name; ?></a></li>
                                                    
                                                <?php } ?>
                                                
                                              
                                            </ul>
                                        </div>
                                        <div class="f_left m_left_10 m_xs_left_0 f_xs_none">
                                            <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Accessories</b>
                                            <ul class="sub_menu">
                                                
                                                 <?php
                                                foreach ($all_category as $v_category) {
                                                    ?>
                                                <li><a class="color_dark tr_delay_hover" href="<?php echo base_url(); ?>welcome/category_product/<?php echo $v_category->category_id ?>"><?php echo $v_category->category_name; ?></a></li>
                                                    
                                                <?php } ?>
                                                
                                                
                                               
<!--                                                <li><a class="color_dark tr_delay_hover" href="#">Computer</a></li>
                                                <li><a class="color_dark tr_delay_hover" href="#">Laptops</a></li>
                                                <li><a class="color_dark tr_delay_hover" href="#">Mobiles</a></li>-->
                                              
                                            </ul>
                                        </div>
                                       
                                        <!--<img src="images/woman_image_1.jpg" class="d_sm_none f_right m_bottom_10" alt="">-->
                                    </div>
                                </li>
                                <li class="relative f_xs_none m_xs_bottom_5"><a href="<?php echo base_url() ?>cart/show_cart" class="tr_delay_hover color_light tt_uppercase"><b>Shopping Cart <?php echo $this->cart->total_items();?></b></a>
                                    <!--sub menu-->
                                   
                                </li>
                                <li class="relative f_xs_none m_xs_bottom_5"><a href="<?php echo base_url();?>cart/show_wishlist" class="tr_delay_hover color_light tt_uppercase"><b>Wishlist</b></a>
                                    <!--sub menu-->
<!--                                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                                        <ul class="sub_menu">
                                            <li><a class="color_dark tr_delay_hover" href="category_grid.html">Grid View Category Page</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="category_list.html">List View Category Page</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="category_no_products.html">Category Page Without Products</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="product_page_sidebar.html">Product Page With Sidebar</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="full_width_product_page.html">Full Width Product Page</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="wishlist.html">Wishlist</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="compare_products.html">Compare Products</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="checkout.html">Checkout</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="manufacturers.html">Manufacturers</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="manufacturer_details.html">Manufacturer Page</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="orders_list.html">Orders List</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="order_details.html">Order Details</a></li>
                                        </ul>
                                    </div>-->
                                </li>
                                <li class="relative f_xs_none m_xs_bottom_5"><a href="blog.html" class="tr_delay_hover color_light tt_uppercase"><b>Blog</b></a>
                                    <!--sub menu-->
                                 
                                </li>
<!--                                <li class="relative f_xs_none m_xs_bottom_5"><a href="features_shortcodes.html" class="tr_delay_hover color_light tt_uppercase"><b>Features</b></a>
                                    sub menu
                                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                                        <ul class="sub_menu">
                                            <li><a class="color_dark tr_delay_hover" href="features_shortcodes.html">Shortcodes</a></li>
                                            <li><a class="color_dark tr_delay_hover" href="features_typography.html">Typography</a></li>
                                        </ul>
                                    </div>
                                </li>-->
                                <li class="relative f_xs_none m_xs_bottom_5"><a href="<?php echo base_url()?>" class="tr_delay_hover color_light tt_uppercase"><b>Contact</b></a></li>
                            </ul>
                        </nav>
                        <button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    <!--search form-->
                    <div class="searchform_wrap tf_xs_none tr_all_hover">
                        <div class="container vc_child h_inherit relative">
                            <form role="search" class="d_inline_middle full_width">
                                <input type="text" name="search" placeholder="Type text and hit enter" class="f_size_large">
                            </form>
                            <button class="close_search_form tr_all_hover d_xs_none color_dark">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                </section>
            </header>
            <!--slider-->
            <div class="camera_wrap m_bottom_0">
                <div data-src="images/product_images/sss.jpg" data-custom-thumb="images/product_images/sss.jpg">
<!--                    <div class="camera_caption_1 fadeFromTop t_align_c d_xs_none">
                        <div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_5">Meet New Theme</div>
                        <hr class="slider_divider d_inline_b m_bottom_5">
                        <div class="color_light slider_title tt_uppercase t_align_c m_bottom_45 m_sm_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
                        <div class="color_light slider_title_2 m_bottom_45">$<b>15.00</b></div>
                        <a href="#" role="button" class="tr_all_hover button_type_4 bg_scheme_color color_light r_corners tt_uppercase">Buy Now</a>
                    </div>-->
                </div>
                <div data-src="images/product_images/slide1.jpg" data-custom-thumb="images/product_images/slide1.jpg">
<!--                    <div class="camera_caption_2 fadeIn t_align_c d_xs_none">
                        <div class="f_size_large tt_uppercase slider_title_3 scheme_color">New arrivals</div>
                        <hr class="slider_divider type_2 m_bottom_5 d_inline_b">
                        <div class="color_light slider_title tt_uppercase t_align_c m_bottom_65 m_sm_bottom_20"><b><span class="scheme_color">Spring/Summer 2014</span><br><span class="color_dark">Ready-To-Wear</span></b></div>
                        <a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">View Collection</a>
                    </div>-->
                </div>
                <div data-src="images/product_images/s3.jpg" data-custom-thumb="images/product_images/s3.jpg">
                    <div class="camera_caption_3 fadeFromTop t_align_c d_xs_none">
                        <img src="images/slider_layer_img.png" alt="" class="m_bottom_5">
                        <div class="color_light slider_title tt_uppercase t_align_c m_bottom_60 m_sm_bottom_20"><b class="color_dark">up to 70% off</b></div>
                        <a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Shop Now</a>
                    </div>
                </div>
                
                
                 <div data-src="images/product_images/s4.jpg" data-custom-thumb="images/product_images/s4.jpg">
                    <div class="camera_caption_3 fadeFromTop t_align_c d_xs_none">
                        <img src="images/slider_layer_img.png" alt="" class="m_bottom_5">
                        <div class="color_light slider_title tt_uppercase t_align_c m_bottom_60 m_sm_bottom_20"><b class="color_dark">up to 70% off</b></div>
                        <a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Shop Now</a>
                    </div>
                </div>
                
                 <div data-src="images/product_images/s5.jpg" data-custom-thumb="images/product_images/s5.jpg">
                    <div class="camera_caption_3 fadeFromTop t_align_c d_xs_none">
                        <img src="images/slider_layer_img.png" alt="" class="m_bottom_5">
                        <div class="color_light slider_title tt_uppercase t_align_c m_bottom_60 m_sm_bottom_20"><b class="color_dark">up to 70% off</b></div>
                        <a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Shop Now</a>
                    </div>
                </div>
                 <div data-src="images/product_images/s3.jpg" data-custom-thumb="images/product_images/s3.jpg">
                    <div class="camera_caption_3 fadeFromTop t_align_c d_xs_none">
                        <img src="images/slider_layer_img.png" alt="" class="m_bottom_5">
                        <div class="color_light slider_title tt_uppercase t_align_c m_bottom_60 m_sm_bottom_20"><b class="color_dark">up to 70% off</b></div>
                        <a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Shop Now</a>
                    </div>
                </div>
            </div>






            <?php echo $maincontent; ?>




           
<!--            product brands
            <div class="clearfix m_bottom_25 m_sm_bottom_20">
                <h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
                <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
                </div>
            </div>
            product brands carousel
            <div class="product_brands m_bottom_45 m_sm_bottom_35">
                <a href="#" class="d_block t_align_c animate_fade"><img src="<?php echo base_url('images/product_images/asus.jpg') ?>" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="<?php echo base_url('images/product_images/asus2.jpg')?>" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="<?php echo base_url('images/product_images/hp.jpg')?>" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="<?php echo base_url('images/product_images/dell1.jpg')?>" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="<?php echo base_url('images/product_images/asus.jpg')?>" alt=""></a>
            
            </div>-->
            <!--blog-->
      
    <!--markup footer-->
    <footer id="footer">
        <div class="footer_top_part">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                        <h3 class="color_light_2 m_bottom_20">About</h3>
                        <p class="m_bottom_25"> To Ensure Your Better Experience</p>
                        <!--social icons-->
                        <ul class="clearfix horizontal_list social_icons">
                            <li class="facebook m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>
                                <a href="#" class="r_corners t_align_c tr_delay_hover f_size_ex_large">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="twitter m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Twitter</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="google_plus m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Google Plus</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="rss m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Rss</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                            <li class="pinterest m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Pinterest</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li class="instagram m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Instagram</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="linkedin m_bottom_5 m_sm_left_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">LinkedIn</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="vimeo m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Vimeo</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-vimeo-square"></i>
                                </a>
                            </li>
                            <li class="youtube m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Youtube</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                            <li class="flickr m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Flickr</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-flickr"></i>
                                </a>
                            </li>
                            <li class="envelope m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Contact Us</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-envelope-o"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                        <h3 class="color_light_2 m_bottom_20">The Service</h3>
                        <ul class="vertical_list">
                            <li><a class="color_light tr_delay_hover" href="#">My account<i class="fa fa-angle-right"></i></a></li>
                            <li><a class="color_light tr_delay_hover" href="#">Order history<i class="fa fa-angle-right"></i></a></li>
                            <li><a class="color_light tr_delay_hover" href="#">Wishlist<i class="fa fa-angle-right"></i></a></li>
                            <li><a class="color_light tr_delay_hover" href="#">Vendor contact<i class="fa fa-angle-right"></i></a></li>
                            <li><a class="color_light tr_delay_hover" href="#">Front page<i class="fa fa-angle-right"></i></a></li>
                            <li><a class="color_light tr_delay_hover" href="#">Virtuemart categories<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                        <h3 class="color_light_2 m_bottom_20">Information</h3>
                        <ul class="vertical_list">
                            <li><a class="color_light tr_delay_hover" href="#">About us<i class="fa fa-angle-right"></i></a></li>
                            <li><a class="color_light tr_delay_hover" href="#">New collection<i class="fa fa-angle-right"></i></a></li>
                            <li><a class="color_light tr_delay_hover" href="#">Best sellers<i class="fa fa-angle-right"></i></a></li>
                            <li><a class="color_light tr_delay_hover" href="#">Manufacturers<i class="fa fa-angle-right"></i></a></li>
                            <li><a class="color_light tr_delay_hover" href="#">Privacy policy<i class="fa fa-angle-right"></i></a></li>
                            <li><a class="color_light tr_delay_hover" href="#">Terms &amp; condition<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <h3 class="color_light_2 m_bottom_20">Newsletter</h3>
                        <p class="f_size_medium m_bottom_15">Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <form id="newsletter">
                            <input type="email" placeholder="Your email address" class="m_bottom_20 r_corners f_size_medium full_width" name="newsletter-email">
                            <button type="submit" class="button_type_8 r_corners bg_scheme_color color_light tr_all_hover">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--copyright part-->
        <div class="footer_bottom_part">
            <div class="container clearfix t_mxs_align_c">
                <p class="f_left f_mxs_none m_mxs_bottom_10">&copy; 2017 <span class="color_light">Parvez</span>. All Rights Reserved.</p>
                <ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
                    <li><img src="images/payment_img_1.png" alt=""></li>
                    <li class="m_left_5"><img src="images/payment_img_2.png" alt=""></li>
                    <li class="m_left_5"><img src="images/payment_img_3.png" alt=""></li>
                    <li class="m_left_5"><img src="images/payment_img_4.png" alt=""></li>
                   <li class="m_left_5"><img src="images/payment_img_5.png" alt=""></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<!--social widgets-->
<ul class="social_widgets d_xs_none">
    <!--facebook-->
    <li class="relative">
        <button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>
        </div>
    </li>
    <!--twitter feed-->
    <li class="relative">
        <button class="sw_button t_align_c twitter"><i class="fa fa-twitter"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Latest Tweets</h3>
            <div class="twitterfeed m_bottom_25"></div>
            <a role="button" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color" href="https://twitter.com/fanfbmltemplate">Follow on Twitter</a>
        </div>	
    </li>
    <!--contact form-->
    <li class="relative">
        <button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Contact Us</h3>
            <p class="f_size_medium m_bottom_15">Lorem ipsum dolor sit amet, consectetuer adipis mauris</p>
            <form id="contactform" class="mini">
                <input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="cf_name" placeholder="Your name">
                <input class="f_size_medium m_bottom_10 r_corners full_width" type="email" name="cf_email" placeholder="Email">
                <textarea class="f_size_medium r_corners full_width m_bottom_20" placeholder="Message" name="cf_message"></textarea>
                <button type="submit" class="button_type_4 r_corners mw_0 tr_all_hover color_dark bg_light_color_2">Send</button>
            </form>
        </div>	
    </li>
    <!--contact info-->
    <li class="relative">
        <button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Store Location</h3>
            <ul class="c_info_list">
                <li class="m_bottom_10">
                    <div class="clearfix m_bottom_15">
                        <i class="fa fa-map-marker f_left color_dark"></i>
                        <p class="contact_e">8901 Marmora Road,<br> Glasgow, D04 89GR.</p>
                    </div>
                    <iframe class="r_corners full_width" id="gmap_mini" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=Manhattan,+New+York,+NY,+United+States&amp;aq=0&amp;oq=monheten&amp;sll=37.0625,-95.677068&amp;sspn=65.430355,129.814453&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA&amp;ll=40.790278,-73.959722&amp;spn=0.015612,0.031693&amp;z=13&amp;output=embed"></iframe>
                </li>
                <li class="m_bottom_10">
                    <div class="clearfix m_bottom_10">
                        <i class="fa fa-phone f_left color_dark"></i>
                        <p class="contact_e">800-559-65-80</p>
                    </div>
                </li>
                <li class="m_bottom_10">
                    <div class="clearfix m_bottom_10">
                        <i class="fa fa-envelope f_left color_dark"></i>
                        <a class="contact_e default_t_color" href="mailto:#">info@companyname.com</a>
                    </div>
                </li>
                <li>
                    <div class="clearfix">
                        <i class="fa fa-clock-o f_left color_dark"></i>
                        <p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>
                    </div>
                </li>
            </ul>
        </div>	
    </li>
</ul>
<!--login popup-->
<div class="popup_wrap d_none" id="login_popup">
    
    
      <?php
                                                    $msg=$this->session->userdata('message');
                                                    if($msg)
                                                    {
                                                        echo $msg;
                                                        $this->session->unset_userdata('message');
                                                    }
                                                
                                                ?>
    <section class="popup r_corners shadow">
        <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
        <h3 class="m_bottom_20 color_dark">Log In</h3>
        <form action="<?php echo base_url(); ?>customer/check_customer_login" method="post">
            <ul>
                <li class="m_bottom_15">
                    <label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
                    <input type="text" name="admin_email_address" id="username" class="r_corners full_width">
                </li>
                <li class="m_bottom_25">
                    <label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
                    <input type="password" name="admin_password" id="password" class="r_corners full_width">
                </li>
<!--                <li class="m_bottom_15">
                    <input type="checkbox" class="d_none" id="checkbox_10"><label for="checkbox_10">Remember me</label>
                </li>-->
                <li class="clearfix m_bottom_30">
                    <button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" type="submit">Log In</button>
                    <div class="f_right f_size_medium f_mxs_none">
<!--                        <a href="#" class="color_dark">Forgot your password?</a><br>
                        <a href="#" class="color_dark">Forgot your username?</a>-->
                    </div>
                </li>
            </ul>
        </form>
        <footer class="bg_light_color_1 t_mxs_align_c">
            <h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">New Customer?</h3>
            <a href="#" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Create an Account</a>
        </footer>
    </section>
</div>
<!--custom popup-->


               
    

<button class="t_align_c r_corners tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
<!--scripts include-->
<script src="<?php echo base_url()?>js/jquery-2.1.0.min.js"></script>
<script src="<?php echo base_url()?>js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url()?>js/retina.js"></script>
<script src="<?php echo base_url()?>js/camera.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url()?>js/styleswitcher.js"></script>
<script src="<?php echo base_url()?>js/colorpicker.js"></script>
<script src="<?php echo base_url()?>js/waypoints.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url()?>js/owl.carousel.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.tweet.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.custom-scrollbar.js"></script>
<script src="<?php echo base_url()?>js/scripts.js"></script>
<script type="text/javascript" src="../../s7.addthis.com/<?php echo base_url()?>js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
</body>

<!-- Mirrored from inthe7heaven.com/flatastic-html/ by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 17 Jun 2014 17:33:38 GMT -->
</html>