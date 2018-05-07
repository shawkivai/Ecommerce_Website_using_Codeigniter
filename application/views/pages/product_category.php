				
<div class="p_top_10 t_xs_align_l">
    <?php
    foreach ($category_product as $v_product) {
        
       
        ?>



    
        <!--description-->
        <h2 class="color_dark fw_medium m_bottom_10"><?php echo $v_product->product_name; ?></h2>

        <hr class="m_bottom_10 divider_type_3">
        <table class="description_table m_bottom_10">
            <tr>
                <td>Manufacturer:</td>
                <td><a href="#" class="color_dark">Chanel</a></td>
            </tr>
            <tr>
                <td>Availability:</td>
                <td><span class="color_green">in stock</span> 20 item(s)</td>
            </tr>
            <tr>
                <td>Product Code:</td>
                <td>PS06</td>
            </tr>
        </table>
        <h5 class="fw_medium m_bottom_10"><?php echo $v_product->product_description; ?></h5>
        <table class="description_table m_bottom_5">
            <tr>
                <td>Product Length:</td>
                <td><span class="color_dark">10.0000M</span></td>
            </tr>
            <tr>
                <td>Product Weight:</td>
                <td>10.0000KG</td>
            </tr>
        </table>
        <hr class="divider_type_3 m_bottom_10">
        <p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing. </p>
        <hr class="divider_type_3 m_bottom_15">
        <div class="m_bottom_15">
            <s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>
        </div>
        <table class="description_table type_2 m_bottom_15">
            <tr>
                <td class="v_align_m">Size:</td>
                <td class="v_align_m">
                    <div class="custom_select f_size_medium relative d_inline_middle">
                        <div class="select_title r_corners relative color_dark">s</div>
                        <ul class="select_list d_none"></ul>
                        <select name="product_name">
                            <option value="s">s</option>
                            <option value="m">m</option>
                            <option value="l">l</option>
                        </select>
                    </div>
                </td>
            </tr>
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
        <div class="d_ib_offset_0 m_bottom_20">
            <button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large">Add to Cart</button>
            <button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span><i class="fa fa-heart-o f_size_big"></i></button>
            <button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span><i class="fa fa-files-o f_size_big"></i></button>
            <button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
        </div>

    <?php } ?>

</div>