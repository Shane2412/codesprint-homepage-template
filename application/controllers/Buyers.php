<?php

    class Buyers extends CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
            
        }
        
        public function index()
        {
            $buyer_data['buyers'] = $this->Buyers_model->getCrops();
            $this->load->view('templates/header');
            $this->load->view('Buyers/index', $buyer_data);
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
            $this->form_validation->set_rules('uname', 'uname', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            
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
        }
        
        public function post() 
        {
            if($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('Buyers/create');
                    $this->load->view('templates/footer');
            }
            else {
            $data = array(
            //order_quantity, crop_type, start_date_of_order, end_date_of_order
            'crop_type' => $this->input->post('crop_type'),
            'order_quantity' => $this->input->post('order_quantity'),
            'start_date_of_order' => date('Y-m-d', strtotime($this->input->post('start_date_of_order'))),
            'end_date_of_order' => date('Y-m-d', strtotime($this->input->post('end_date_of_order')))
            );
            if($this->Buyers_model->create_demand($data)){
                redirect('/');
            }
        }
    }
        
        public function edit_crops($oid)
        {
            if($this->form_validation->run() === FALSE)
            {
                $data['order'] = $this->Order_model->get_Data();
            }
        }
    
    
    //  public function create()
    //     {
    //         if($this->form_validation->run() === FALSE)
    //         {
    //             $this->load->view('templates/header');
    //             $this->load->view('Buyers/create');
    //             $this->load->view('templates/footer');
    //         }
    //         else 
    //         {
    //             $create_demand = array(
    //                 'crop_type'=>$this->input->post('crop_type'),
    //                 'order_quantity'=>$this->input->post('order_quantity'),
    //                 'start_date_of_order' =>$this->input->post('start_date_of_order'),
    //                 'end_date_of_order'=>$this->input->post('end_date_of_order')
    //                 );
                    
    //             if($this->buyer_model->create_demand($create_demand))
    //             {
    //                 //$this->session->set_flashdata('list_created', 'Your task list has been created');
    //                 redirect('Buyers/index');
    //             }
    //         }
    //     }
    
    public function create()
    {
        
        $this->load->view('templates/header');
        $this->load->view('Buyers/create');
        $this->load->view('templates/footer');
        
        
        
    }
    
}