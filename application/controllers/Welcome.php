<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $data=array();
             $data = array();
        $data['all_category']=$this->super_admin_model->select_all_published_category();
        $data['all_manufacturer']=$this->super_admin_model->select_all_published_manufacturer();
        $data['featured_product']=$this->welcome_model->select_all_featured_product();
        
           $data['maincontent']=  $this->load->view('pages/home_content',$data,TRUE);
		$this->load->view('pages/master',$data);
	}
        
          public function category_product($category_id)
    {
        $data = array();
        $data['all_category']=$this->super_admin_model->select_all_published_category();
        $data['all_manufacturer']=$this->super_admin_model->select_all_published_manufacturer();
        $data['category_product']=$this->welcome_model->select_all_product_by_category_id($category_id);
        
        $data['maincontent'] = $this->load->view('pages/category page', $data, true);
        $this->load->view('pages/master', $data);
    }
    
    
      public function product_details($product_id)
    {
       $data = array();
        $data['all_category']=$this->super_admin_model->select_all_published_category();
        $data['all_manufacturer']=$this->super_admin_model->select_all_published_manufacturer();
        $data['product_info']=$this->welcome_model->select_product_by_product_id($product_id);
        
        $data['maincontent'] = $this->load->view('pages/product_details', $data, true);
        $this->load->view('pages/master', $data);
    }
	
}
