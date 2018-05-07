<?php

class Customer_Model extends CI_Model{
    
public function check_customer_login_info($customer_email_address, $customer_password){
     $this->db->select('*');
        $this->db->from('tbl_customer_login');
        $this->db->where('customer_email_address',$customer_email_address);
        $this->db->where('customer_password',md5($customer_password));
//        $password=md5($admin_password);
//        $sql="SELECT * FROM tbl_admin WHERE admin_email_address='$admin_email_address' AND admin_password='$password'";
//        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
        
        
        
}

    
    
    
    
    
    
}