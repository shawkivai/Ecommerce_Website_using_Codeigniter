
    <!--content-->

    <title>
        Wishlist
    </title>

    <div class="page_content_offset">
        <div class="container">
            <div class="row clearfix">
                <!--left content column-->
                <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                    <h2 class="tt_uppercase color_dark m_bottom_20">My Wishlist</h2>
                    <div class="row clearfix m_bottom_15">
                        <div class="col-lg-7 col-md-7 col-sm-7 f_sx_none m_xs_bottom_10">
                            <p class="d_inline_middle f_size_medium">Results 1 - 5 of 45</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 f_sx_none t_xs_align_l t_align_r">
                            <!--pagination-->
                            <a role="button" href="#" class="f_size_large button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-left"></i></a>
                            <ul class="horizontal_list clearfix d_inline_middle f_size_medium m_left_10">
                                <li class="m_right_10"><a class="color_dark" href="#">1</a></li>
                                <li class="m_right_10"><a class="scheme_color" href="#">2</a></li>
                                <li class="m_right_10"><a class="color_dark" href="#">3</a></li>
                            </ul>
                            <a role="button" href="#" class="f_size_large button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <hr class="m_bottom_30 divider_type_3">
                    <!--wishlist table-->
                    <table class="table_type_1 responsive_table full_width t_align_l r_corners wraper shadow bg_light_color_1 m_bottom_30">
                        <thead>
                            <tr class="f_size_large">
                                <!--titles for td-->
                                <th>SL NO.</th>
                                <th>Product Name</th>
                                <th>product image</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $row): ?>
                                <tr>   
                                    <td><?php echo $row->product_id; ?></td>
                                    <td><?php echo $row->product_name; ?></td>
                                    <td>
                                        <img src="<?php echo base_url(). $row->product_image;?>"
                                    </td>
                                    
                                            
                                            
                                    
                                    
                                    <td><?php echo $row->product_price; ?></td>
                                    <td>
                            
                                        
                                        
                                                    <form action="<?php echo base_url(); ?>cart/add_to_cart" method="post">

        <input type="hidden" name="product_id" value="<?php echo $row->product_id; ?>">
        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0" type="submit">Add to cart</button>
                                        <!--<input type="submit" value="add to cart">-->
                                    </form>
                                        
                                        
                                        
                            
                                    </td>
                                        
                                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>


                    </table>
                </section>
            </div>
        </div>
    </div>





                

