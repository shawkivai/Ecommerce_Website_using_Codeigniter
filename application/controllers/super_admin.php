    <?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    session_start();
    class Super_Admin extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $admin_id=$this->session->userdata('admin_id');
            if($admin_id ==NULL)
            {
                redirect('admin','refresh');
            }
            $this->load->model('super_admin_model','sa_model');
        }
        
        public function index()
        {
            $data=array();
            $data['admin_main_content']=$this->load->view('admin/dashbord','',true);
            $this->load->view('admin/admin_master',$data);
        }
        public function add_category()
        {
            $data=array();
            $data['admin_main_content']=$this->load->view('admin/add_category_form','',true);
            $this->load->view('admin/admin_master',$data);
        }
        public function save_category()
        {
            $data=array();
            $data['category_name']=$this->input->post('category_name',true);
            $data['category_description']=$this->input->post('category_description',true);
            $data['publication_status']=$this->input->post('publication_status',true);
        
            $this->sa_model->save_category_info($data);
            $sdata=array();
            $sdata['message']='Save Category Information Successfully !';
            $this->session->set_userdata($sdata);
            
            redirect('super_admin/add_category');
        }
        public function manage_category()
        {
            $data=array();
            $data['all_category']=$this->sa_model->select_all_category();
            $data['admin_main_content']=$this->load->view('admin/manage_category',$data,true);
            $this->load->view('admin/admin_master',$data);
        }
        public function published_category($category_id)
        {
        
            $this->sa_model->update_publication_status_by_id($category_id);
            redirect('super_admin/manage_category');
        }
    public function unpublished_category($category_id)
        {
        
            $this->sa_model->update_unpublication_status_by_id($category_id);
            redirect('super_admin/manage_category');
        }
    
        public function edit_category($category_id)
        {
            $data=array();
            $data['category_info']=$this->super_admin_model->select_category_info_by_id($category_id);
            $data['admin_main_content']=$this->load->view('admin/edit_category',$data,true);
            $this->load->view('admin/admin_master',$data);
        }
        public function update_category()
        {
            $data=array();
            $category_id=$this->input->post('category_id');
            $data['category_name']=$this->input->post('category_name');
            $data['category_description']=$this->input->post('category_description');
            $data['publication_status']=$this->input->post('publication_status');
            $this->super_admin_model->update_category_info($data,$category_id);
            redirect('super_admin/manage_category');
        }

        public function delete_category($category_id)
        {
            $this->super_admin_model->delete_category_by_id($category_id);
            redirect('super_admin/manage_category');
        }
    
        public function logout()
        {
            $this->session->unset_userdata('full_name');
            $this->session->unset_userdata('admin_id');
            $sdata=array();
            $sdata['message']='You are Successfully Logout !';
            $this->session->set_userdata($sdata);
            redirect('admin');
            
        }
        
        
        public function customer_logout()
        {
            $this->session->unset_userdata('full_name');
            $this->session->unset_userdata('admin_id');
            $sdata=array();
            $sdata['message']='You are Successfully Logout !';
            $this->session->set_userdata($sdata);
            redirect('welcome');
            
        }
        
        public function add_manufacturer(){
            
            $data=array();
            $data['admin_main_content']=$this->load->view('admin/add_manufacturer','',true);
            $this->load->view('admin/admin_master',$data);
            
        }
        public function save_manufacturer()
        {
            $data=array();
            $data['manufacturer_name']=$this->input->post('manufacturer_name',true);
            $data['manufacturer_description']=$this->input->post('manufacturer_description',true);
            $data['publication_status']=$this->input->post('publication_status',true);
        
            $this->sa_model->save_manufacturer_info($data);
            $sdata=array();
            $sdata['message']='Successfully save manufacturer Information  !';
            $this->session->set_userdata($sdata);
            
            redirect('super_admin/add_manufacturer');
        }
        
        public function manage_manufacturer()
        {
            $data=array();
            $data['all_manufacturer']=$this->sa_model->select_all_manufacturer();
            $data['admin_main_content']=$this->load->view('admin/manage_manufacturer',$data,true);
            $this->load->view('admin/admin_master',$data);
        }
        public function published_manufacturer($manufacturer_id)
        {
        
            $this->sa_model->update_publication_manufacturer_by_id($manufacturer_id);
            redirect('super_admin/manage_manufacturer');
        }
    public function unpublished_manufacturer($manufacturer_id)
        {
        
            $this->sa_model->update_unpublication_manufacturer_by_id($manufacturer_id);
            redirect('super_admin/manage_manufacturer');
        }
    
        public function edit_manufacturer($manufacturer_id)
        {
            $data=array();
            $data['manufacturer_info']=$this->super_admin_model->select_manufacturer_info_by_id($manufacturer_id);
            $data['admin_main_content']=$this->load->view('admin/edit_manufacturer',$data,true);
            $this->load->view('admin/admin_master',$data);
        }
        public function update_manufacturer()
        {
            $data=array();
            $manufacturer_id=$this->input->post('manufacturer_id');
            $data['manufacturer_name']=$this->input->post('manufacturer_name');
            $data['manufacturer_description']=$this->input->post('manufacturer_description');
            $data['publication_status']=$this->input->post('publication_status');
            $this->super_admin_model->update_manufacturer_info($data,$manufacturer_id);
            redirect('super_admin/manage_manufacturer');
        }

        public function delete_manufacturer($manufacturer_id)
        {
            $this->super_admin_model->delete_manufacturer_by_id($manufacturer_id);
            redirect('super_admin/manage_manufacturer');
        }
        public function add_product()
        {
            $data=array();
            $data['all_published_category']=$this->super_admin_model->select_all_published_category();
            $data['all_published_manufacturer']=$this->super_admin_model->select_all_published_manufacturer();
            $data['admin_main_content']=$this->load->view('admin/add_product',$data,true);
            $this->load->view('admin/admin_master',$data);
        }
        public function save_product()
        {   
            $data=array();
            $data['product_name']=$this->input->post('product_name',true);
            $data['category_id']=$this->input->post('category_id',true);
            $data['manufacturer_id']=$this->input->post('manufacturer_id',true);
    //       $data['manufacturer_name']=$this->input->post('manufacturer_name',true);       
            $data['product_description']=$this->input->post('product_description',true);
            $data['product_price']=$this->input->post('product_price',true);
            $data['product_quantity']=$this->input->post('product_quantity',true);        
            $featured_product=  $this->input->post('featured_product',true);
            if($featured_product=='on')
            {
                $data['featured_product']=1;
            }
            $data['publication_status']=  $this->input->post('publication_status',true);
            
            ///start image upload
            
            $config['upload_path'] = 'images/product_images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '1000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $error='';
                    $fdata=array();
            if (! $this->upload->do_upload('product_image'))
            {
                $error=$this->upload->dispaly_errors();
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
            public function save_wishlist()
        {
            
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
            
                    $config['upload_path'] = './images/product_images';
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
            $this->super_admin_model->save_wishlist($data);
            
            $sdata['message']='save product successfully';
            $this->session->set_userdata($sdata);
            redirect('welcome');
            
            
        }
        //Manage Product
        public function manage_product()
        {
            $data=array();
            $data['all_product']=$this->sa_model->select_all_product();
            $data['admin_main_content']=$this->load->view('admin/manage_product',$data,true);
            $this->load->view('admin/admin_master',$data);
        }

        public function published_product($product_id)
        {
        
            $this->sa_model->update_publication_status_by_product_id($product_id);
            redirect('super_admin/manage_product');
        }
    public function unpublished_product($product_id)
        {
        
            $this->sa_model->update_unpublication_status_by_product_id($product_id);
            redirect('super_admin/manage_product');
        }
        //Edit Product 
        public function edit_product($product_id)
        {
            $data=array();
            $data['product_info']=$this->super_admin_model->select_product_info_by_id($product_id);
            $data['admin_main_content']=$this->load->view('admin/edit_product',$data,true);
            $this->load->view('admin/admin_master',$data);
        }
        public function update_product()
        {
            $data=array();
            $product_id=$this->input->post('product_id');
            $data['product_name']=$this->input->post('product_name');
            $data['product_price']=$this->input->post('product_price');
            $data['product_description']=$this->input->post('product_description');
            $data['publication_status']=$this->input->post('publication_status');
            //Product image 

            $config['upload_path'] = 'images/product_images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '1000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $error='';
                    $fdata=array();
            if (! $this->upload->do_upload('product_image'))
            {
                $error=$this->upload->dispaly_errors();
                echo $error;
                exit();
                        
            }
            else
            {
                $fdata=  $this->upload->data();
                            $data['product_image']=$config['upload_path'].$fdata['file_name'];
                        
            }

            $this->super_admin_model->update_product_info($data,$product_id);
            redirect('super_admin/manage_product');
        }

        public function delete_product($product_id)
        {
            $this->super_admin_model->delete_product_by_id($product_id);
            redirect('super_admin/manage_product');
        }
    }

