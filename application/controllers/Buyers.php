<?php

    class Buyers extends CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
            
        }
        
        public function index()
        {


            $buyer_data['buyers'] = $this->Buyers_model->get_Demand();
            
            $this->load->view('templates/header');
            $this->load->view('Inventory/buyers', $buyer_data);
            $this->load->view('templates/footer');
            
        }
        
        
        //Creating a Buyer
        public function register(){
            
            $data['title'] = 'Sign Up';
            
            $this->form_validation->set_rules('fname', 'fname', 'required');
            $this->form_validation->set_rules('lname', 'lname', 'required');
            $this->form_validation->set_rules('uname', 'uname', 'required');
            // $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
            //$this->form_validation->set_rules('pin', 'pin', 'required');
            
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('Buyers/register', $data);
                $this->load->view('templates/footer');
            } else {
                //Encrypt Password to md5 hash
                //$encryptPassword = $this->input->post('password'));
                
                $this->Buyers_model->register('b');
                //set message
                $this->session->set_flashdata('user_registered', 'You are now Registered');
                redirect('Users/login');
            }
            
        }
        
        public function login()
        {
            $this->output->enable_profiler(TRUE);
            
            $this->form_validation->set_rules('uname', 'uname', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->benchmark->mark('code_start');
            if($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('Buyers/login');
                $this->load->view('templates/footer');
            }
            else {
                
            $username = $this->input->post('uname');
            $password = $this->input->post('password');
                
            $user_id = $this->Buyers_model->login('b', $username, $password);
            
            if($user_id)
            {
                $user_data = array(
                    'uid'=>$user_id,
                    'uname' => $username,
                    'logged_in' => TRUE
                    );
                $userData = $this->session->set_userdata($user_data);
                redirect('/welcome/buyers');
            }
            
            redirect('/');
            
                
            }
             $this->benchmark->mark('code_end');
              echo $this->benchmark->elapsed_time('code_start', 'code_end');
        }
        
        public function post() 
        {
            $this->output->enable_profiler(TRUE);  //Use the debug the code
            $data['crops'] = $this->Buyers_model->getCrops();
            
            
            if(!isset($_POST['submit'])){
                    $this->load->view('templates/header');
                    $this->load->view('Buyers/create', $data);
                    $this->load->view('templates/footer');
            }
            else 
                {
                    $data = array(
                    //order_quantity, crop_type, start_date_of_order, end_date_of_order
                        'crop_type' => $this->input->post('crop_type'),
                        'order_quantity' => $this->input->post('order_quantity'),
                        'start_date_of_order' => date('Y-m-d', strtotime($this->input->post('start_date_of_order'))),
                        'end_date_of_order' => date('Y-m-d', strtotime($this->input->post('end_date_of_order')))
                        );
                    $this->Buyers_model->create_demand($data);
                    redirect('/');
                }
            }
                
        public function edit_Demands($oid)
        {
            $data['demands'] = $this->Buyers_model->view_Demand($oid);
            $data['crops'] = $this->Buyers_model->getCrops();
            $this->load->view('templates/header');
            $this->load->view('Buyers/edit', $data);
            $this->load->view('templates/footer');
        }
        
        public function update_Demands()
        {
            if(!isset($_POST['update'])){
                    $this->load->view('templates/header');
                    $this->load->view('Buyers/edit', $data);
                    $this->load->view('templates/footer');
            }
            else 
                {
                    $data = array(
                    //order_quantity, crop_type, start_date_of_order, end_date_of_order
                        'crop_type' => $this->input->post('crop_type'),
                        'order_quantity' => $this->input->post('order_quantity'),
                        'start_date_of_order' => date('Y-m-d', strtotime($this->input->post('start_date_of_order'))),
                        'end_date_of_order' => date('Y-m-d', strtotime($this->input->post('end_date_of_order')))
                        );
                    $this->Buyers_model->update_Demand($data);
                    redirect('Buyers/');
                }
        }
        
        public function delete($oid)
        {
            $data['delete_demands'] = $this->Buyers_model->delete_Demand($oid);
            redirect('Buyers/');
        }
    
}