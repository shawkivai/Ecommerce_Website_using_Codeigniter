    <?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    //session_start();
    class Developer extends CI_Controller {

        public function index() {
            $data=array();
            $data['maincontent']=  $this->load->view('pages/developer',$data,TRUE);	
            $this->load->view('pages/master',$data);
        }
        
    }