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
                $product_id=$this->input->post('product_id',true);
                $product_info = $this->welcome_model->select_product_by_product_id($product_id);
            //    echo '<pre>';
            //     print_r($product_info);
            //     exit();
                $data = array(
                    'product_id' => $product_info->product_id,
                    'product_price' => $product_info->product_price,
                    'product_name' => $product_info->product_name,
                    'product_image' =>$product_info->product_image,
                    // 'customer_id' => $customer_id
                );
    //            $aaa = $this->wishlist_model->match_wishlist_info($customer_id,$product_id);
    //            $this->checkout_model->save_wishlist_info($customer_id,$product_id,$data);
    //             echo '<pre>';
    //        print_r($data);
    //        exit();
                $this->checkout_model->save_wishlist_info($data);
                redirect('cart/show_wishlist');
    //        echo '<pre>';
    //        print_r($customer_id);
    //        exit();
            
            
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