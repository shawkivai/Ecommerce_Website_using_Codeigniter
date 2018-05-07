<?php

class Welcome_Model extends CI_Model {

    //put your code here
    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function save_user_info($data) {
        $this->db->insert('tbl_user', $data);
    }

    public function check_user_login_info($email_address, $password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email_address', $email_address);
        $this->db->where('password', md5($password));
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    public function select_all_featured_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->where('featured_product', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }
    public function select_all_product_by_category_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $this->db->where('category_id',$category_id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_product_by_product_id($product_id)
    {
       
        
        $sql="SELECT p.*,c.category_name,m.manufacturer_name FROM tbl_product as p,tbl_category as c,tbl_manufacturer as m WHERE (p.manufacturer_id=m.manufacturer_id AND p.category_id=c.category_id) AND p.product_id='$product_id'";
         $query_result = $this->db->query($sql);
        $result = $query_result->row();

        return $result;
        
        
        
    }
    
    
    

}
