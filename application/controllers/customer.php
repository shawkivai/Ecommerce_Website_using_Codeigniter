    <?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    //session_start();
    class Customer extends CI_Controller {

        public function index() {
            $this->load->view('welcome');
        }

        public function check_customer_login() {
            $admin_email_address = $this->input->post('admin_email_address', true);
            $admin_password = $this->input->post('admin_password', true);
            $this->load->model('admin_model', 'a_model');
            $result = $this->a_model->check_admin_login_info($admin_email_address, $admin_password);
    //       echo '<pre>';
    //       print_r($result);
    //       exit();
            $sdata = array();

            if ($result) {
                $sdata['full_name'] = $result->admin_full_name;
                $sdata['admin_id'] = $result->admin_id;
                $this->session->set_userdata($sdata);
                //$sdata[]
                redirect('customer/ship_product');
            } else {
                $sdata['message'] = 'Your User Id / Password Invalide !';
                $this->session->set_userdata($sdata);
                $this->load->view('admin/admin_login');
            }
        }
        
        
        public function check_customer_login1() {
            $customer_email_address = $this->input->post('customer_email_address', true);
            $customer_password = $this->input->post('customer_password', true);
            $this->load->model('customer_model');
            $result = $this->customer_model->check_customer_login_info($customer_email_address, $customer_password);
    //       echo '<pre>';
    //       print_r($result);
    //       exit();
            $sdata = array();

            if ($result) {
                $sdata['full_name'] = $result->customer_full_name;
                $sdata['customer_id'] = $result->customer_id;
                $this->session->set_userdata($sdata);
                //$sdata[]
                redirect('customer/ship_product');
            } else {
                $sdata['message'] = 'Your User Id / Password Invalide !';
                $this->session->set_userdata($sdata);
                $this->load->view('admin/admin_login');
            }
        }
        

        public function ship_product() {

            $data = array();
            
            $data['all_category'] = $this->super_admin_model->select_all_published_category();
            $data['all_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();

    //        $data['all_category']=$this->super_admin_model->select_all_published_category();
    //        $data['all_manufacturer']=$this->super_admin_model->select_all_published_manufacturer();
    //        $data['featured_product']=$this->welcome_model->select_all_featured_product();
    //        
            $data['maincontent'] = $this->load->view('pages/ship_product', $data, TRUE);
            $this->load->view('pages/master', $data);
        }

        public function ship_info() {

            $data = array();
            
            $data['all_category'] = $this->super_admin_model->select_all_published_category();
            $data['all_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();

            $data['maincontent'] = $this->load->view('pages/shipment_info', $data, TRUE);
            $this->load->view('pages/master', $data);
        }

        public function bill_info() {
            $data = array();
            

            $data['company_name'] = $this->input->post('company_name', true);
            $data['first_name'] = $this->input->post('first_name', true);
            $data['last_name'] = $this->input->post('last_name', true);
            $data['address'] = $this->input->post('address', true);
            $data['zip'] = $this->input->post('zip', true);
            $data['country'] = $this->input->post('country', true);
            $data['city'] = $this->input->post('city', true);
        
            $data['mobile_phone'] = $this->input->post('mobile_phone', true);
            $data['fax'] = $this->input->post('fax', true);
            
                $this->checkout_model->save_bill_info($data);
            
            $sdata['message']='save data successfully';
            $this->session->set_userdata($sdata);
            redirect('customer/ship_info');
            
        }
        
        

        public function thank_you() {
            

            $data = array();
            
            $data['all_category'] = $this->super_admin_model->select_all_published_category();
            $data['all_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();

            $this->cart->destroy();
            $data['maincontent'] = $this->load->view('pages/thank_you', $data, TRUE);
            $this->load->view('pages/master', $data);
        }
        
        
        
        
        
        
        
        public function create_table(){

                $this->load->library('cezpdf');
                $data = array();
                $query = $this->db->query('SELECT * FROM tbl_admin');
                $num = $query->num_fields();
                $farr=array();
                $i=1;
                $file_name = 'Products_'.date('dMy').'.pdf';
                $fname="";
                while($i <= $num){
                    $test = $i;
                    $value = $this->input->post($test);

                    if($value != ''){
                            $fname= $fname." ".$value;
                            array_push($farr, $value);

                        }
                    $i++;
                }

                $fname = trim($fname);

                $fname=str_replace(' ', ',', $fname);
                
                $query = 'select '.$fname.' from tbl_admin';
                $result = mysql_query($query);
                $this->cezpdf->addText(30,400,30,'Hello World');
                
                // step through the result set, populating the array,
    //                note that this could also have been written:
                // while($data[] = mysql_fetch_assoc($result)) {}
                while($data[] = mysql_fetch_array($result, MYSQL_ASSOC)) {}
                // make the table
                $this->cezpdf->ezTable($data,'','Report on Login Table');

                // do the output, this is my standard testing output code,

                    if (isset($d) && $d){
                $pdfcode = $pdf->output(1);
                $pdfcode = str_replace("\n","\n<br>",htmlspecialchars($pdfcode));
                echo '<html><body>';
                echo trim($pdfcode);
                echo '</body></html>';
                } else {
                $pdfcode = $this->cezpdf->ezOutput();
                $fp = fopen($file_name,'wb');
                fwrite($fp,$pdfcode);
                fclose($fp);
                }
            }
            
            
            public function mypdf(){
                
    $this->load->library('pdf');
    $this->pdf->load_view('common/template');
    $this->pdf->render();
    $this->pdf->stream("welcome.pdf");
    }
    
    public function pdf()
    {
        $data=array();
        $this->load->helper(array('dompdf', 'file'));
        // page info here, db calls, etc.     
        $html = $this->load->view('super_admin/save_product', $data, true);
        pdf_create($html, 'filename');
        
        $data = pdf_create($html, '', false);
        write_file('name', $data);
        //if you want to write it to disk and/or send it as an attachment    
    }
    
    
            }
            
            
            


