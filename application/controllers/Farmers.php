<?php 

    class Farmers extends CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
        }
        
        public function index()
        {
            $data['farmers'] = $this->Sellers_model->get();
            $this->load->view('templates/header');
            $this->load->view('Farmers/index', $data);
            $this->load->view('templates/footer');
        }
        
         public function register(){
            
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
                $this->load->view('Farmers/login');
                $this->load->view('templates/footer');
            }
            else {
                
            $username = $this->input->post('uname');
            $password = $this->input->post('password');
                
            $user_id = $this->Sellers_model->login('f', $username, $password);
            
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
        
        public function create()
        {
            if(!isset($_POST['submit']))
            {
                $this->load->view('templates/header');
                $this->load->view('Farmers/create');
                $this->load->view('templates/footer');
            }
            else 
            {
                // name, price, crop_max_count, produce_date, estimate_date, quantity = database 
                $data = array(
                    'name'=> $this->input->post('name'),
                    'price' => $this->input->post('price'),
                    'crop_max_count' => $this->input->post('crop_max_count'),
                    'produce_date' => date('Y-m-d', strtotime($this->input->post('produce_date'))),
                    'estimate_date' => date('Y-m-d', strtotime($this->input->post('estimate_date'))),
                    'quality' => $this->input->post('quality'),
                    'quantity' => $this->input->post('quantity')
                    );
                
                if($this->Sellers_model->create_crop($data))
                    {
                        redirect('/');
                    }
            }
            
        }
        
        public function delete_crop($cid)
        {
            $data['delete_crops'] = $this->Sellers_model->delete_crop($cid);
            redirect('Farmers/');
        }
        
        public function edit_crop($cid)
        {
            $data['demands'] = $this->Sellers_model->view_crop($cid);
            $this->load->view('templates/header');
            $this->load->view('Farmers/edit', $data);
            $this->load->view('templates/footer');   
        }
        
        public function update_crop()
        {
             if(!isset($_POST['update'])){
                    $this->load->view('templates/header');
                    $this->load->view('Farmers/edit', $data);
                    $this->load->view('templates/footer');
            }
            else 
                {
                    $data = array(
                    'name'=> $this->input->post('name'),
                    'price' => $this->input->post('price'),
                    'crop_max_count' => $this->input->post('crop_max_count'),
                    'produce_date' => date('Y-m-d', strtotime($this->input->post('produce_date'))),
                    'estimate_date' => date('Y-m-d', strtotime($this->input->post('estimate_date'))),
                    'quality' => $this->input->post('quality'),
                    'quantity' => $this->input->post('quantity')
                    );
                    
                    $this->Sellers_model->update_crop($data);
                    redirect('Farmers/');
                }
        }
        
        public function view($cid)
        {
            $data['views'] = $this->Sellers_model->view_crop($cid);
            $this->load->view('templates/header');
            $this->load->view('Farmers/view', $data);
            $this->load->view('templates/footer');
        }
    }