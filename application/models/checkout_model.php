<?php

class Checkout_Model extends CI_Model{
    
    
    public function save_customer_info($data){
        $this->db->insert('tbl_customer',$data);
        
        redirect('checkout/customer_signup');
        
        
    }
    
    public function check_email_address($email_address){
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$email_address);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
        
        
        
    }
    
    public function login_info($email_address,$password){
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$email_address);
        $this->db->where('password',$password);
        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
//          
        
        
    }
    public function update_customer_activation_status($customer_id){
        
        $this->db->set('activation_status');
        $this->db->where('customer_id',$customer_id);
        $this->db->update('tbl_customer');
        
    }
    public function save_wishlist_info($data){
        $this->db->insert('wishlist',$data);
        
    redirect('cart/show_wishlist');
    }
    
    public function view_wishlist()
{
    $query = $this->db->select('*')->from('wishlist')->get();
    return $query->result();
}

public function save_bill_info($data){
    $this->db->insert('tbl_bill_info', $data);
    
}
    
}
