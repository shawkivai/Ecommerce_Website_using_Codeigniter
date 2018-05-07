<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function customer_signup() {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();


        $data['maincontent'] = $this->load->view('customer_sign_up', $data, true);
        $this->load->view('master', $data);
    }
    
    public function ship_product()
    {
        $data = array();
//        $data['all_category'] = $this->super_admin_model->select_all_published_category();
//        $data['all_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();


        $data['maincontent'] = $this->load->view('', $data, true);
        $this->load->view('master', $data);
    }

    public function save_customer() {

        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['password'] = md5($this->input->post('password', true));
        $data['company'] = $this->input->post('company_name', true);
        $data['address'] = $this->input->post('address', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['city'] = $this->input->post('city', true);
        $data['zip_code'] = $this->input->post('zip_code', true);
        $data['country'] = $this->input->post('country', true);
        $this->checkout_model->save_customer_info($data);
        $sdata = array();
        $sdata['customer_name'] = $data['first_name'] . ' ' . $data['last_name'];
        $this->session->set_userdata($sdata);

//        sending email activity code
        $mdata = array();
        $mdata['from_address'] = 'sales@abc.com';
        $mdata['admin_full_name'] = 'basis';
        $mdata['to_address'] = $data['email_address'];
        $mdata['subject'] = 'account activation email';
        $mdata['last_name'] = $data['last_name'];
         $mdata['customer_id'] = $this->session->userdata('customer_id');
        $mdata['password'] = $this->input->post('password', true);
        $this->mailer_model->sendEmail($mdata,'activation_email');




        redirect('checkout/shipping_address');
    }
    
    public function shipping_address()
    {
        $data = array();
//        $data['all_category']=$this->super_admin_model->select_all_published_category();
//        $data['all_manufacturer']=$this->super_admin_model->select_all_published_manufacturer();
        
        $data['maincontent'] = $this->load->view('activation_successfull', '', true);
        $this->load->view('master', $data);
    }

    public function check_customer_email($email_address) {

        $result = $this->checkout_model->check_email_address($email_address);

        if ($result) {
            echo 'Email Address Alredy Exists !';
        } else {
            echo 'Email Address Avilable';
        }
    }

    public function login() {

        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();


        $data['maincontent'] = $this->load->view('login', '', true);
        $this->load->view('master', $data);
    }

    public function customer_login() {
        $email_address = $this->input->post('email_address', true);
        $password = $this->input->post('password', true);
        $result = $this->checkout_model->login_info($email_address, $password);

       
        $sdata = array();
        if ($result) {
//         $sdata['full_name']=$result->admin_fullname;
            $sdata['customer_id'] = $result->customer_id;
            $this->session->set_userdata($sdata);
        redirect('welcome');
    }
    
    }
    
    public function update_customer_status($customer_enc_id){
        echo $customer_enc_id;
        
        $id = str_replace("%F2","/", $en_customer_id );
        $customer_id=  $this->encrypt->decode($id);
        $this->checkout_model->update_customer_activation_status($customer_id);
        $data['all_category']=$this->super_admin_model->select_all_published_category();
        $data['all_manufacturer']=$this->super_admin_model->select_all_published_manufacturer();
        
        $data['maincontent'] = $this->load->view('activation_successfull', $data, true);
        $this->load->view('master', $data);
        
        
        
    }

}

?>