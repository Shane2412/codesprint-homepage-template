<?php

    class Buyers extends CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
            if (!$this->session->userdata('logged_in', 'b', 'a')) {
				$this->session->set_flashdata('noaccess', 'You need to be logged in to view this');
				redirect('buy/login');
			}
        }
        
        public function index()
        {
             
            
            $user_id = $this->session->userdata('uid');
            $buyer_data['buyers'] = $this->Buyers_model->get_Demand();
            $this->load->view('templates/header');
            $this->load->view('Inventory/buyers', $buyer_data);
            $this->load->view('templates/footer');
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
                        'user_id' => $this->session->userdata('uid'),
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
        
        public function logout()
		{
			//unset session data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('uid');
			$this->session->unset_userdata('uname');
			$this->session->sess_destroy();
			$this->session->set_flashdata('logout', 'You have logged out');
					redirect('/');
		}


    public function reggister()
    {
        
    }    
}