                                
    <div>

        <h2 class="color_dark tt_uppercase m_bottom_25">Bill To &amp; Shipment Information</h2>
        <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
            <div class="row clearfix">
    <!--            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                    <h5 class="fw_medium m_bottom_15">Bill To</h5>
                    <form>
                        <ul>
                            <li class="m_bottom_15">
                                <label for="c_name_1" class="d_inline_b m_bottom_5">Company Name</label>
                                <input type="text" id="c_name_1" name="" class="r_corners full_width">
                            </li>
                            <li class="m_bottom_15">
                                <label class="d_inline_b m_bottom_5">Title</label>
                                product name select
                                <div class="custom_select relative">
                                    <div class="select_title type_2 r_corners relative color_dark mw_0">Mr</div>
                                    <ul class="select_list d_none"></ul>
                                    <select name="product_name">
                                        <option value="Mr 1">Mr 1</option>
                                        <option value="Ms">Ms</option>
                                    </select>
                                </div>
                            </li>
                            <li class="m_bottom_15">
                                <label for="f_name_1" class="d_inline_b m_bottom_5 required">First Name</label>
                                <input type="text" id="f_name_1" name="" class="r_corners full_width">
                            </li>
                            <li class="m_bottom_15">
                                <label for="m_name_1" class="d_inline_b m_bottom_5 required">Middle Name</label>
                                <input type="text" id="m_name_1" name="" class="r_corners full_width">
                            </li>
                            <li class="m_bottom_15">
                                <label for="l_name_1" class="d_inline_b m_bottom_5 required">Last Name</label>
                                <input type="text" id="l_name_1" name="" class="r_corners full_width">
                            </li>
                            <li class="m_bottom_15">
                                <label for="address_1" class="d_inline_b m_bottom_5 required">Address </label>
                                <input type="text" id="address_1" name="" class="r_corners full_width">
                            </li>
                            <li class="m_bottom_15">
                                <label for="address_1_1" class="d_inline_b m_bottom_5 required">Address 2</label>
                                <input type="text" id="address_1_1" name="" class="r_corners full_width">
                            </li>
                            <li class="m_bottom_15">
                                <label for="code_1" class="d_inline_b m_bottom_5 required">Zip / Postal Code</label>
                                <input type="text" id="code_1" name="" class="r_corners full_width">
                            </li>
                            <li class="m_bottom_15">
                                <label for="city_1" class="d_inline_b m_bottom_5 required">Country</label>
                                
                                <div class="custom_select relative">
                                    <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                                    <ul class="select_list d_none"></ul>
                                    <select name="product_name">
                                        <option value="England">Bangladesh</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                    </select>
                                </div>
                                <input type="text" id="city_1" name="" class="r_corners full_width">
                            </li>
                            <li class="m_bottom_15">
                                <label class="d_inline_b m_bottom_5 required">city</label>
                                product name select
                                <div class="custom_select relative">
                                    <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                                    <ul class="select_list d_none"></ul>
                                    <select name="product_name">
                                        <option value="England">Dhaka</option>
                                        <option value="Australia">Chittagong</option>
                                        <option value="Austria">Rajshahi</option>
                                        <option value="England">Khulna</option>
                                        <option value="Australia">Barisal</option>
                                        <option value="Austria">Sylhet</option>
                                    </select>
                                </div>
                            </li>
                        
                        
                            <li class="m_bottom_15">
                                <label for="m_phone_1" class="d_inline_b m_bottom_5">Mobile Phone</label>
                                <input type="text" id="m_phone_1" name="" class="r_corners full_width">
                            </li>
                            <li>
                                <label for="fax_1" class="d_inline_b m_bottom_5">Fax</label>
                                <input type="text" id="fax_1" name="" class="r_corners full_width">
                            </li>
                        </ul>
                        
                                            <a href="<?php echo base_url() ?>customer/ship_info"> <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">SUBMIT</a></button>
                        
                    </form>
                </div>-->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h5 class="fw_medium m_bottom_15">Ship To</h5>
                    <form enctype="multipart/form-data" action="<?php echo base_url();?>customer/bill_info" method="post">
                        <ul>
                            <li class="m_bottom_5">
                                <input type="checkbox" checked class="d_none" name="checkbox_6" id="checkbox_6"><label for="checkbox_6">Add/Edit shipment address</label>
                            </li>
                        
                            <li class="m_bottom_15">
                                <label for="c_name_2" class="d_inline_b m_bottom_5">Company Name</label>
                                <input type="text" id="c_name_2" name="company_name" class="r_corners full_width">
                            </li>
                            <li class="m_bottom_15">
                                <label for="f_name_2" class="d_inline_b m_bottom_5">First Name</label>
                                <input type="text" id="f_name_2" name="first_name" class="r_corners full_width">
                            </li>
                        
                            <li class="m_bottom_15">
                                <label for="l_name_2" class="d_inline_b m_bottom_5">Last Name</label>
                                <input type="text" id="l_name_2" name="last_name" class="r_corners full_width">
                            </li>
                            <li class="m_bottom_15">
                                <label for="address_2" class="d_inline_b m_bottom_5">Address </label>
                                <input type="text" id="address_2" name="address" class="r_corners full_width">
                            </li>
                        
                            <li class="m_bottom_15">
                                <label for="code_2" class="d_inline_b m_bottom_5">Zip / Postal Code</label>
                                <input type="text" id="code_2" name="zip" class="r_corners full_width">
                            </li>
    <!--                        <li class="m_bottom_15">
                                <label for="city_2" class="d_inline_b m_bottom_5">City</label>
                                <input type="text" id="city_2" name="city" class="r_corners full_width">
                            </li>-->
                            <li class="m_bottom_15">
                                <label class="d_inline_b m_bottom_5">Country</label>
                                <!--product name select-->
                                <div class="custom_select relative">
                                    <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                                    <ul class="select_list d_none"></ul>
                                    <select name="country">
                                        <option value="Bangladesh">Bangladesh</option>
                                    
                                    </select>
                                </div>
                            </li>
                            
                            
                            <li class="m_bottom_15">
                                <label class="d_inline_b m_bottom_5">City</label>
                                <!--product name select-->
                                <div class="custom_select relative">
                                    <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                                    <ul class="select_list d_none"></ul>
                                    <select name="city">
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Barisal">Barisal</option>
                                        <option value="Sylhet">Sylhet</option>
                                    </select>
                                </div>
                            </li>
                    
                        
                            <li class="m_bottom_15">
                                <label for="m_phone_2" class="d_inline_b m_bottom_5">Mobile Phone</label>
                                <input type="text" id="m_phone_2" name="mobile_phone" class="r_corners full_width">
                            </li>
                            <li>
                                <label for="fax_2" class="d_inline_b m_bottom_5">Fax</label>
                                <input type="text" id="fax_2" name="fax" class="r_corners full_width">
                            </li>
                        </ul>

                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0" type="submit">Continue</button>


                    </form>
                </div>
            </div>
        </div>