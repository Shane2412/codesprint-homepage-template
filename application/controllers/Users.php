<?php 

    class Users extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        
        public function register_buyer() 
        {
            $data['title'] = 'Sign Up';
            
            $this->form_validation->set_rules('fname', 'fname', 'required');
            $this->form_validation->set_rules('lname', 'lname', 'required');
            $this->form_validation->set_rules('uname', 'uname', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
            
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
                redirect('Users/login_buyers');
            }
        }
        
        public function register_farmer()
        {
            $data['title'] = 'Sign Up';
            
            $this->form_validation->set_rules('fname', 'fname', 'required');
            $this->form_validation->set_rules('lname', 'lname', 'required');
            $this->form_validation->set_rules('uname', 'uname', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
            
            
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('Farmers/register', $data);
                $this->load->view('templates/footer');
            } else {
                $this->Sellers_model->register('f');
                $this->session->set_flashdata('user_registered', 'You are now Registered');
                redirect('Users/login_farmers');
            }
        }
        
        public function login_buyers()
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
            $status;    
            $user_id = $this->Buyers_model->login('b', $username, $password);
            
            if($user_id)
            {
                $user_data = array(
                    'uid'=>$user_id,
                    'uname' => $username,
                    'b' => $status,
                    'logged_in' => TRUE
                    );
                $userData = $this->session->set_userdata($user_data);
                redirect('Buyers/');
            }
            
            redirect('/');
            
                
            }
        }
        
        public function login_farmers()
        {
            
            
             $this->form_validation->set_rules('uname', 'uname', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            
            if($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('Farmers/login');
                $this->load->view('templates/footer');
            }
            else {
                
            $username = $this->input->post('uname');
            $password = $this->input->post('password');
            // $status;    
            $user_id = $this->Sellers_model->login('f', $username, $password);
            
            if($user_id)
            {
                $user_data = array(
                    'uid'=>$user_id,
                    'uname' => $username,
                    'f' => $status,
                    'logged_in' => TRUE
                    );
                $userData = $this->session->set_userdata($user_data);
                redirect('Farmers/create');
            }
            
            redirect('/');
            
                
            }
            
        }
        
    }    
       