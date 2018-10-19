
<!--product item-->

<?php
foreach ($category_product as $v_product) {
    ?>

<div class="product_item featured w_xs_full">
    <figure class="r_corners photoframe tr_all_hover type_2 t_align_c shadow relative">
        <!--product preview-->
        <a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
            <img src="<?php echo base_url() . $v_product->product_image; ?>" class="tr_all_hover" alt="">
        <span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
    </a>
    <!--description and price of product-->
    <figcaption>
        <h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo $v_product->product_name;?></a></h5>
        <div class="clearfix m_bottom_15">
            <!--rating-->
            <ul class="horizontal_list type_2 m_bottom_10 d_inline_b clearfix rating_list tr_all_hover">
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
            <p class="scheme_color f_size_large"><?php echo $v_product->product_price;?></p>
        </div>
        <div class="clearfix">
            
            <form action="<?php echo base_url(); ?>cart/add_to_cart" method="post">

<input type="hidden" name="product_id" value="<?php echo $v_product->product_id; ?>">
            <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
            </form>
        
        </div>
        <div class="clearfix m_bottom_5">
            <ul class="horizontal_list d_inline_b l_width_divider">
                <form action="<?php echo base_url(); ?>cart/add_to_wishlist" method="post">

<input type="hidden" name="product_id" value="<?php echo $v_product->product_id; ?>">
                <li class="m_right_15 f_md_none m_md_right_0"><a href="" class="color_dark">Add to Wishlist</a>
            
                </li>
                </form>

                <li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
            </ul>
        </div>
    </figcaption>
</figure>

</div>

<?php } ?>               
<?php
foreach ($category_product as $v_product) {
    ?>
                                <figure class="r_corners photoframe tr_all_hover type_2 shadow relative clearfix">
                                    product preview
                                    <a href="#" class="d_block f_left relative pp_wrap m_right_30 m_xs_right_25">
                                        hot product
                                        <span class="hot_stripe"><img src="images/hot_product.png" alt=""></span>
                                        <img src="<?php echo base_url() . $v_product->product_image; ?>" class="tr_all_hover" alt="">
                                        <span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                                    </a>
                                    description and price of product
                                    <figcaption>
                                        <div class="clearfix">
                                            <div class="f_left p_list_description f_sm_none w_sm_full m_xs_bottom_10">
                                                <h4 class="fw_medium"><a href="#" class="color_dark"><?php echo $v_product->product_name?></a></h4>
                                                <div class="m_bottom_10">
                                                    rating
                                                    <ul class="horizontal_list d_inline_middle clearfix rating_list type_2 tr_all_hover">
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
                                                    <a href="#" class="d_inline_middle default_t_color f_size_medium m_left_10">1 Review(s) </a>
                                                </div>
                                                <hr class="m_bottom_10">
                                                <p class="d_sm_none d_xs_block"><?php echo $v_product->product_description;?></p>
                                            </div>
                                            <div class="f_right f_sm_none t_align_r t_sm_align_l">
                                                <p class="scheme_color f_size_large m_bottom_15"><span class="fw_medium">$<?php echo $v_product->product_price;?></span></p>
                                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15 m_sm_bottom_0 d_sm_inline_middle">Add to Cart</button><br class="d_sm_none">
                                                <button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 m_left_5 p_hr_0 d_sm_inline_middle f_sm_none"><i class="fa fa-files-o"></i></button>
                                                <button class="button_type_4 bg_light_color_2 tr_all_hover f_right m_sm_left_5 r_corners color_dark mw_0 p_hr_0 d_sm_inline_middle f_sm_none"><i class="fa fa-heart-o"></i></button>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                                
<?php }?>
                            </div>
product item-->
