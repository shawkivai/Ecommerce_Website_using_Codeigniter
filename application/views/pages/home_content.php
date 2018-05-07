
<!--content-->
<div class="page_content_offset">
    
    
    
    
    
    
    
    <div class="container">
    

        
        <h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">All Products</h2>
        <!--filter navigation of products-->
        <ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
            <li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">All</button></li>
            <!--<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none"><a href="">Featured</</button></li>-->
            <!--<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".new">New</button></li>-->

        </ul>
        <!--products-->
        <section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
            <!--product item-->
            <!--            <div class="product_item">
                            <figure class="r_corners photoframe shadow relative hit animate_ftb long">
                                product preview
                                <a href="#" class="d_block relative pp_wrap">
                                    hot product
                                    <span class="hot_stripe"><img src="images/hot_product.png" alt=""></span>
                                    <img src="../../../images/svga.PNG" class="tr_all_hover" alt="">
                                    <span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                                </a>
                                description and price of product
                                <figcaption>
                                    <h5 class="m_bottom_10"><a href="#" class="color_dark">Eget elementum vel</a></h5>
                                    <div class="clearfix">
                                        <p class="scheme_color f_left f_size_large m_bottom_15">$102.00</p>
                                        rating
                                        <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                            <li class="active">
                                                <i class="fa fa-star-o empty tr_all_hover"></i>
                                                <i class="fa fa-star active tr_all_hover"></i>
                                            </li>
                                            <li class="active">
                                                <i class="fa fa-star-o empty tr_all_hover"></i>
                                                <i class="fa fa-star active tr_all_hover"></i>
                                            </li>
                                            <li class="active">
                                                <i class="fa fa-star-o empty tr_all_hover"></i>
                                                <i class="fa fa-star active tr_all_hover"></i>
                                            </li>
                                            <li class="active">
                                                <i class="fa fa-star-o empty tr_all_hover"></i>
                                                <i class="fa fa-star active tr_all_hover"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-o empty tr_all_hover"></i>
                                                <i class="fa fa-star active tr_all_hover"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                                </figcaption>
                            </figure>
                        </div>-->
            <!--product item-->
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <?php
            foreach ($featured_product as $f_product) {
                ?>

                <div class="product_item featured">
                    <figure class="r_corners photoframe shadow relative animate_ftb long">
                        <!--product preview-->
                        <a href="<?php echo base_url() . $f_product->product_id ?>" class="d_block relative wrapper pp_wrap">
                            <img src="<?php echo base_url() . $f_product->product_image; ?>" class="tr_all_hover" alt="">
                            <span data-popup="#quick_view_product<?php echo $f_product->product_id; ?>" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                        </a>
                        <!--description and price of product-->
                        <figcaption>
                            <h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo $f_product->product_name ?></a></h5>
                            <div class="clearfix m_bottom_15">
                                <p class="scheme_color f_size_large f_left">$<?php echo $f_product->product_price; ?></p>
                                <!--rating-->
                                <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix">



                                                 <form action="<?php echo base_url(); ?>cart/add_to_cart" method="post">

    <input type="hidden" name="product_id" value="<?php echo $f_product->product_id; ?>">
    <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0" type="submit">Add to cart</button>
                                    <!--<input type="submit" value="add to cart">-->
                                </form>
                                    

<!--<button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 m_left_5 p_hr_0"><i class="fa fa-files-o"></i></button>-->
                                
                                 <form action="<?php echo base_url(); ?>cart/add_to_wishlist/<?php echo $f_product->product_id; ?>" method="post">

    <input type="hidden" name="product_id" value="<?php echo $f_product->product_id; ?>">
                                <button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0" type="submit"><i class="fa fa-heart-o"></i></button>
                                 </form>
                            
                            </div>
                        </figcaption>
                    </figure>
                </div>


                <?php
            }
            ?>



        </section>



        <?php
        foreach ($featured_product as $f_product) {
            ?>
            <div class="popup_wrap d_none" id="quick_view_product<?php echo $f_product->product_id; ?>">

                <section class="popup r_corners shadow">
                    <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
                    <div class="clearfix">
                        <div class="custom_scrollbar">


                            <!--left popup column-->
                            <div class="f_left half_column">
                                <div class="relative d_inline_b m_bottom_10 qv_preview">
                                    <span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
                                    <img src="<?php echo base_url() . $f_product->product_image; ?>" class="tr_all_hover" alt="">
                                </div>

                            </div>
                            <!--right popup column-->
                            <div class="f_right half_column">
                                <!--description-->
                                <h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium"><?php echo $f_product->product_name ?></a></h2>
                                <div class="m_bottom_10">
                                    <!--rating-->
                                    <ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                    <!--<a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>-->
                                </div>
                                <hr class="m_bottom_10 divider_type_3">
                                <table class="description_table m_bottom_10">
<!--                                    <tr>
                                        <td>Brand: </td>
                                        <td><a href="" class="color_dark">

                                                <?php echo $f_product->manufacturer_name; ?>
                                            </a></td>
                                    </tr>-->
                                    <tr>
                                        <td>Availability:</td>
                                        <td><span class="color_green">in stock</span> </td>
                                    </tr>
                                    <tr>
                                        <td>Product Code:</td>
                                        <td>PS06</td>
                                    </tr>
                                </table>


                                <hr class="divider_type_3 m_bottom_10">
                                <p class="m_bottom_10">Specifations: <br><?php echo $f_product->product_description ?></p>
                                <hr class="divider_type_3 m_bottom_15">
                                <div class="m_bottom_15">
                                    <s class="v_align_b f_size_ex_large"></s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">BDT. <?php echo $f_product->product_price ?></span>
                                </div>
                                <table class="description_table type_2 m_bottom_15">

                                    <tr>
                                        <td class="v_align_m">Quantity:</td>
                                        <td class="v_align_m">
                                            <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
                                                <button class="bg_tr d_block f_left" data-direction="down">-</button>
                                                <input type="text" name="" readonly value="1" class="f_left">
                                                <button class="bg_tr d_block f_left" data-direction="up">+</button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <div class="clearfix m_bottom_15">
                                    
                                    
                                       <form action="<?php echo base_url(); ?>cart/add_to_cart" method="post">

    <input type="hidden" name="product_id" value="<?php echo $f_product->product_id; ?>">
                                    <button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large" type="submit" value="add to cart">Add to Cart</button>
                                       </form>
                                    
                                    <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span></button>
                                    <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span></button>
                                    <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>


            </div>

        <?php } ?>








