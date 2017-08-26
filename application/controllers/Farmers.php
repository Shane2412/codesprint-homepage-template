<?php 

    class Farmers extends CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
            if (!$this->session->userdata('logged_in')) {
				$this->session->set_flashdata('noaccess', 'You need to be logged in to view this');
				redirect('farmers/login');
			}
        }
        
        public function index()
        {
            $user_id = $this->session->userdata('uid');
            $data['farmers'] = $this->Sellers_model->get();
            $this->load->view('templates/header');
            $this->load->view('Farmers/index', $data);
            $this->load->view('templates/footer');
        }
        
        public function login()
        {
           
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
                $user_id = array(
                   'user_crop_id' => $this->session->userdata('uid')
                    );
                
                
                // name, price, crop_max_count, produce_date, estimate_date, quantity = database 
                $data = array(
                    
                    'name'=> $this->input->post('name'),
                    'price' => $this->input->post('price'),
                    'crop_max_count' => $this->input->post('crop_max_count'),
                    'produce_date' => date('Y-m-d', strtotime($this->input->post('produce_date'))),
                    'estimate_date' => date('Y-m-d', strtotime($this->input->post('estimate_date'))),
                    'quality' => $this->input->post('quality'),
                    'quantity' => $this->input->post('quantity'),
                    'uid' => $this->session->userdata('uid')
                    );
                
                if($this->Sellers_model->create_crop($data, $user_id))
                    {
                        redirect('Farmers/');
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
             if(!$this->session->userdata('logged_in'))
            {
                redirect('/');
            }
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