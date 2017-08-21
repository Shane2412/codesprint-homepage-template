<?php 

    class Farmers extends CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
           
        }
        
        public function index()
        {
            if(!$this->session->userdata('logged_in'))
            {
                redirect('/');
            }
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
            if(!$this->session->userdata('logged_in'))
            {
                redirect('/');
            }
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
            if(!$this->session->userdata('logged_in'))
            {
                redirect('/');
            }
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
             if(!$this->session->userdata('logged_in'))
            {
                redirect('/');
            }
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
             if(!$this->session->userdata('logged_in'))
            {
                redirect('/');
            }
            $data['views'] = $this->Sellers_model->view_crop($cid);
            $this->load->view('templates/header');
            $this->load->view('Farmers/view', $data);
            $this->load->view('templates/footer');
        }
    }