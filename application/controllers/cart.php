    <?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Cart extends CI_Controller {

        public function add_to_cart() {
            $product_id = $this->input->post('product_id', true);
            $qty = 1;
    //        $qty = $this->input->post('quantity', true);
            $product_info = $this->welcome_model->select_product_by_product_id($product_id);
            
    //        echo '<pre>';
    //        print_r($product_info);
    //        exit();
    //        
            $data = array(
                'id' => $product_info->product_id,
                'qty' => $qty,
                'price' => $product_info->product_price,
                'name' => $product_info->product_name,
                'image' => $product_info->product_image
            );
    //        echo '<pre>';
    //        print_r($data);
    //        exit();
            $cart = $this->cart->insert($data);
            redirect('cart/show_cart');
        }

        public function show_cart() {
            $data = array();
            $data['all_category'] = $this->super_admin_model->select_all_published_category();
            $data['all_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();


            $data['maincontent'] = $this->load->view('pages/cart_view', $data, true);
            $this->load->view('pages/master', $data);
        }
        
        public function show_wishlist()
    {
                $data = array();
                
                $data['all_category'] = $this->super_admin_model->select_all_published_category();
            $data['all_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();

        $this->load->model('checkout_model');
        $data['query'] = $this->checkout_model->view_wishlist();   
    //    $this->load->view('auction_view', $data);
        $data['maincontent'] = $this->load->view('pages/wishlist', $data, true);
            $this->load->view('pages/master', $data);
        
        
    }
        
        
        
        
    //     public function show_wishlist() {
    //        $data = array();
    //        $data['all_category'] = $this->super_admin_model->select_all_published_category();
    //        $data['all_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
    //
    //
    //        $data['maincontent'] = $this->load->view('pages/wishlist', $data, true);
    //        $this->load->view('pages/master', $data);
    //    }
        

        public function add_to_wishlist($product_id) {
            $customer_id=  $this->session->userdata('admin_id');
            if ($customer_id != NULL) {
                $product_info = $this->welcome_model->select_product_by_product_id($product_id);
    //            echo '<pre>';
    //        print_r($product_info);
    //        exit();
                $data = array(
                    'product_id' => $product_info->product_id,
                    'product_price' => $product_info->product_price,
                    'product_name' => $product_info->product_name,
                    'product_image' =>$product_info->product_image,
                    
                    'customer_id' => $customer_id
                );
    //            $aaa = $this->wishlist_model->match_wishlist_info($customer_id,$product_id);
    //            $this->checkout_model->save_wishlist_info($customer_id,$product_id,$data);
    //             echo '<pre>';
    //        print_r($data);
    //        exit();
                $this->checkout_model->save_wishlist_info($data);
                        

                
            } 
            else {
                redirect('cart/show_wishlist');
            }
    //        echo '<pre>';
    //        print_r($customer_id);
    //        exit();
    
        
            
            $data=array();
            $data['product_name']=$this->input->post('product_name',true);
    //        $data['category_id']=$this->input->post('category_id',true);
    //        $data['manufacturer_id']=$this->input->post('manufacturer_id',true);
    //           $data['manufacturer_name']=$this->input->post('manufacturer_name',true);
            
            $data['product_description']=$this->input->post('product_description',true);
            $data['product_price']=$this->input->post('product_price',true);
            $data['product_quantity']=$this->input->post('product_quantity',true);
            
            $featured_product=  $this->input->post('featured_product',true);
            if($featured_product=='on')
            {
                $data['featured_product']=1;
            }
            
            ///start image upload
            
                    $config['upload_path'] = './image/product_images';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '1000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $error='';
                    $fdata=array();

            if ( ! $this->upload->do_upload('product_image'))
            {
                $error=  $this->upload->dispaly_errors();
                            echo $error;
                            exit();
                            
            }
            else
            {
                $fdata=  $this->upload->data();
                            $data['product_image']=$config['upload_path'].$fdata['file_name'];
                        
            }
            
            ////end
            //$data['publication_status']=  $this->input->post('publication_status',true);
            $this->super_admin_model->save_product_info($data);
            
            $sdata['message']='save product successfully';
            $this->session->set_userdata($sdata);
            redirect('super_admin/add_product');
            
            
        }

    

        public function update_cart() {
            $quantity = $this->input->post('qty', true);
            $rowid = $this->input->post('rowid', true);
            $data = array(
                'rowid' => $rowid,
                'qty' => $quantity
            );

            $this->cart->update($data);
            redirect('cart/show_cart');
        }

        public function delete_to_cart($rowid) {

            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );

            $this->cart->update($data);
            redirect('cart/show_cart');
        }

        public function delete_to_wishlist($rowid) {

            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );

            $this->cart->update($data);
            redirect('cart/show_wishlist');
        }

    }

    ?>