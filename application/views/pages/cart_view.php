
<head>
    <title>
    CART
</title>

    
</head>


<?php
$cart_contents = $this->cart->contents();
?>


<h2 class="tt_uppercase color_dark m_bottom_25">Cart</h2>
<!--cart table-->
<table class="table_type_4 responsive_table full_width r_corners wraper shadow t_align_l t_xs_align_c m_bottom_30">
    <thead>
        <tr class="f_size_large">
            <!--titles for td-->

            <th>Product Image</th>
            <th>Name</th>

            <th>Price</th>
            <th>Quantity</th>

            <th>total</th>
        </tr>
    </thead>



    <tbody>

<?php
foreach ($cart_contents as $v_contents) {
    ?>




            <tr>
                <!--Product name and image-->
                <td data-title="Product Image &amp; name" class="t_md_align_c">
                    <img src="<?php echo base_url() . $v_contents['image'] ?>" alt="" class="m_md_bottom_5 d_xs_block d_xs_centered">

                </td>
                <td data-title="Product name" class="t_md_align_c">
                    <a href="#" class="d_inline_b m_left_5 color_dark"><?php echo $v_contents['name'] ?></a>
                </td>

                <!--product key-->

                <!--product price-->
                <td data-title="Price">
        <s></s>
        <p class="f_size_large color_dark"><?php echo $v_contents['price'] ?></p>
    </td>
    <!--quanity-->
    <td data-title="Quantity">
        <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark m_bottom_10">
            <form action="<?php echo base_url(); ?>cart/update_cart" method="post">
                <input type="text" size="3" value="<?php echo $v_contents['qty'] ?>" name="qty"/>
                <input type="hidden" size="3" value="<?php echo $v_contents['rowid'] ?>" name="rowid"/>
                <input type="submit" name="btn" value="update" >
            </form>
        </div>
        <div>
            <!--<a href="<?php echo base_url(); ?>cart/update_cart/<?php echo $v_contents['rowid']; ?>" class="color_dark"><i class="fa fa-check f_size_medium m_right_5"></i>Update</a><br>-->
            <a href="<?php echo base_url(); ?>cart/delete_to_cart/<?php echo $v_contents['rowid']; ?>" class="color_dark"><i class="fa fa-times f_size_medium m_right_5"></i>Remove</a><br>
        </div>
    </td>
    <!--subtotal-->
    <td data-title="Subtotal">
        <p class="f_size_large fw_medium scheme_color">BDT<?php echo $v_contents['subtotal'] ?></p>
    </td>
    </tr>
<?php } ?>



prices
<!--    <tr>
    <td colspan="4">
        <p class="fw_medium f_size_large t_align_r t_xs_align_c">Coupon Discount:</p>
    </td>
    <td colspan="1">
        <p class="fw_medium f_size_large color_dark">$-74.96</p>
    </td>
</tr>-->
<tr>
    <td colspan="4">
        <p class="fw_medium f_size_large t_align_r t_xs_align_c">Subtotal:</p>
    </td>
    <td colspan="1">
        <p class="fw_medium f_size_large color_dark"><?php echo 'BDT ', $this->cart->total(); ?></p>
    </td>
</tr>
<!--    <tr>
    <td colspan="4">
        <p class="fw_medium f_size_large t_align_r t_xs_align_c">Payment Fee:</p>
    </td>
    <td colspan="1">
        <p class="fw_medium f_size_large color_dark"></p>
    </td>
</tr>-->
<tr>
    <td colspan="4">
        <p class="fw_medium f_size_large t_align_r t_xs_align_c">Shipment Fee:</p>
    </td>
    <td colspan="1">
        <p class="fw_medium f_size_large color_dark">$0.00</p>
    </td>
</tr>
<tr>
    <td colspan="4">
        <p class="fw_medium f_size_large t_align_r t_xs_align_c">Tax: 15%</p>
    </td>
    <td colspan="1">
        <p class="fw_medium f_size_large color_dark">

<?php
$vat = 15 * $this->cart->total() / 100;
echo'BDT ', $vat;
?>
        </p>
    </td>
</tr>
total BDT:
<tr>
    <td colspan="4" class="v_align_m d_ib_offset_large t_xs_align_l">
        <!--            coupon
                    <form class="d_ib_offset_0 d_inline_middle half_column d_xs_block w_xs_full m_xs_bottom_5">
                        <input type="text" placeholder="Enter your coupon code" name="" class="r_corners f_size_medium">
                        <button class="button_type_4 r_corners bg_light_color_2 m_left_5 mw_0 tr_all_hover color_dark">Save</button>
                    </form>-->
        <p class="fw_medium f_size_large t_align_r scheme_color p_xs_hr_0 d_inline_middle half_column d_ib_offset_normal d_xs_block w_xs_full t_xs_align_c">Total:</p>
    </td>
    <td colspan="1" class="v_align_m">

        <p class="fw_medium f_size_large scheme_color m_xs_bottom_10"><?php echo $this->cart->total() + $vat; ?></p>
    </td>
</tr>



</tbody>




</table>

<!--tabs-->
<div class="tabs m_bottom_45">
    
<!--    <a href="<?php echo base_url();?>"
       <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">continue shopping</a></button>
     <a href="<?php echo base_url();?>"   
     <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0" align="right">checkout</a></button>
    -->
  <!--<button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large" type="submit" value="checkout"></button>-->
    <!--tabs navigation-->
    <nav>
        <ul class="tabs_nav horizontal_list clearfix">
            <li><a href="<?php echo base_url();?>" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">
       continue shopping</a></li>
            <li>
                <a href="<?php echo base_url(); ?>customer/ship_product" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">  
     checkout</a>
    
            </li>
        </ul>
    </nav>
    <section class="tabs_content shadow r_corners">
        <div id="tab-1">
            <!--login form-->
            <h5 class="fw_medium m_bottom_15">I am Already Registered</h5>
            <form action="<?php echo base_url(); ?>customer/check_customer_login" method="post">
                <ul>
                    <li class="clearfix m_bottom_15">
                        <div class="half_column type_2 f_left">
                            <label for="username" class="m_bottom_5 d_inline_b">Username</label>
                            <input type="text" name="admin_email_address" class="r_corners full_width m_bottom_5">
                            <a href="#" class="color_dark f_size_medium">Forgot your username?</a>
                        </div>
                        <div class="half_column type_2 f_left">
                            <label for="pass" class="m_bottom_5 d_inline_b">Password</label>
                            <input type="password" name="admin_password" class="r_corners full_width m_bottom_5">
                            <a href="#" class="color_dark f_size_medium">Forgot your password?</a>
                        </div>
                    </li>
                    <li class="m_bottom_15">
                        <input type="checkbox" class="d_none" name="checkbox_4" id="checkbox_4"><label for="checkbox_4">Remember me</label>
                    </li>
                    <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover" type="submit">Log In</button></li>
                </ul>
            </form>
            
            
            
            
            
            
            
            
            
              
            
        </div>

    </section>
</div></body>
</html>
<!--									