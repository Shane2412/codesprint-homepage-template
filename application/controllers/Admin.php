<?php 


    Class Admin extends CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
        }
        
        public function login()
        {
            if(isset($_POST['login'])){
                $this->load->view('Admin/Templates/Header');
                $this->load->view('Admin/login');
                $this->load->view('Admin/Templates/footer');
            }
            else {
                
            $username = $this->input->post('uname');
            $password = $this->input->post('password');
                
            $user_id = $this->Admin_model->login('a', $username, $password);
            
            if($user_id)
            {
                $user_data = array(
                    'uid'=>$user_id,
                    'uname' => $username,
                    'logged_in' => TRUE
                    );
                $userData = $this->session->set_userdata($user_data);
                redirect('Admin/');
            }
            
            redirect('/');
            
                
            }
        }
        //Getting All Buyers and Farmers in one view
        public function index()
        {
            $data['buyers'] = $this->Admin_model->get_Buyers();
            $data['farmers'] = $this->Admin_model->get_Farmers();
            
            $this->load->view('Admin/Templates/Header');
            $this->load->view('Admin/index', $data);
            $this->load->view('Admin/Templates/footer');
        }
        
        //Creating a buyer
        public function create_Buyer() 
        {
            if(!isset($_POST['create']))
            {
                $this->load->view('Admin/Templates/Header');
                $this->load->view('Admin/Buyers/create');
                $this->load->view('Admin/Templates/footer');
            }
            else {
                $data = array(
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname'),
                    'address' => $this->input->post('address'),
                    'telephone' => $this->input->post('telephone')
                    );
                if($this->Admin_model->create_Buyers($data)){
                    redirect('Admin/Buyers/index');
                }
            }
        }
        
        //Creating a Farmer
        public function create_Farmer()
        {
            if(!isset($_POST['create']))
            {
                $this->load->view('Admin/Templates/Header');
                $this->load->view('Admin/Farmers/create');
                $this->load->view('Admin/Templates/footer');
            }
            else{
            
                $data = array(
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname'),
                    'address' => $this->input->post('address'),
                    'telephone' => $this->input->post('telephone')
                    );
            if($this->Admin_model->create_Farmers($data)){
                redirect('Admin/Farmers/index');
            }
            }
        }
        
        //Edit A Buyer
        public function edit_Buyer()
        {
            $data['Buyers'] = $this->Admin_model->get_Buyers();
            $this->load->view('Admin/Templates/Header');
            $this->load->view('Admin/Buyers/edit_Buyer', $data);
            $this->load->view('Admin/Templates/footer');
        }
        
        //Edit A Farmer
        public function edit_Farmer()
        {
            $data['farmers'] = $this->Admin_model->get_Farmers();
            $this->load->view('Admin/Templates/Header');
            $this->load->view('Admin/Farmers/edit_Farmer', $data);
            $this->load->view('Admin/Templates/footer');
        }
        
        //Update a Buyer
        public function update_Buyer()
        {
            
        }
        
        //Update a Farmer
        public function update_Farmer()
        {
            
        }
        
        //Delete a Buyer 
        public function delete_Buyer($bid)
        {
            $data = $this->Admin_model->delete_Buyer($bid);
            redirect('Admin/Buyers/');
        }
        
        //Delete a Farmer
        public function delete_Farmer($fid)
        {
            $data = $this->Admin_model->delete_Farmer($fid);
            redirect('Admin/Farmers/');
        }
        
        //Create a demand
        public function create_Demands()
        {
            if(isset($_POST['create'])){
                $this->load->view();
                $this->load->view();
                $this->load->view();
            }
            else{
                if($this->Admin_model->create_Demands($data)){
                    redirect('Admin/Buyers/');
                }
            }
        }
        
        //Edit a demand
        public function edit_Demand()
        {
            $data['admins'] = $this->Buyers_model->get_Demand();
            $this->load->view('Admin/Templates/Header');
            $this->load->view('Admin/Buyers/edit_Demand');
            $this->load->view('Admin/Templates/footer');
        }
        
        //Update Demand
        public function update_Demand()
        {
            
        }
        
        //Delete Demand
        public function delete_Demand($oid)
        {
            $data = $this->Admin_model->delete_Demand($oid);
            redirect('Admin/Buyers/')
        }
        
        //Create crops
        public function create_Crops()
        {
            if(!isset($_POST['create'])){
                $this->load->view('Admin/Templates/Header');
                $this->load->view('Admin/Farmers/createCrops');
                $this->load->view('Admin/Templates/footer');
            }
            else{
                $data = array(
                    'name' => $this->input->post('name'),
                    'price' => $this->input->post('price'),
                    'quality' => $this->input->post('quality'),
                    'crop_max_count' => $this->input->post('crop_max_count'),
                    'produce_date' => $this->input->post('produce_date'),
                    'estimate_date' => $this->input->post('estimate_date'),
                    'quantity' => $this->input->post('quantity')
                    );
                    
                if($this->Admin_model->createCrops($data)){
                    redirect('Admin/Farmers/')
                }
            }
        }
        
        //Edit Crops
        public function edit_Crops()
        {
            $date['admins'] = $this->Sellers_model->get();
            $this->load->view('Admin/Templates/Header');
            $this->load->view('Admin/Farmers/edit_Crops', $data);
            $this->load->view('Admin/Templates/footer');
            
        }
        
        //Update Crops
        public function update_Crops()
        {
            
        }
        
        //Delete Crops
        public function Delete_Crops($cid)
        {
           $data = $this->Admin_model->delete_Crops($oid);
           redirect('Admin/Farmers/')
        }
    }