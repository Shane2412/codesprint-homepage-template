<?php

class Buyers_model extends CI_Model 
{
    
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }
    
    public function getInventory()
    {
        // $query = $this->db->get();
        // return $query->row();
    }
    
    public function getCrops()
    {
        $query = $this->db->get('crop');
        return $query->result();
    }
    
    public function create_crop()
    {
       $data = array(
                    'crop_type' => $this->input->post('crop_type'),
                    'order_quantity' => $this->input->post('order_quantity'),
                    'start_date_of_order' => date('m-d-Y H:i:s',strtotime($this->input->post('start_date_of_order'))),
                    'end_date_of_order' => date('m-d-Y H:i:s',strtotime($this->input->post('end_date_of_order')))
                    );
                    
                    $this->db->insert('order1', $data);
                    return 'success';
    }
    
    public function deleteInventory()
    {
        
    }
    
    public function updateInventory()
    {
        
    }
    
    public function editInventory()
    {
        
    }
    
    public function register($status){
            
            $data = array(
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname'),
                    // 'email' => $this->input->post('email'),
                    'status' => $status,
                    'uname' => $this->input->post('uname'),
                    'password' => $this->input->post('password')
                    /* 'pin' => $this->input->post('pin') */
                    );
                    
                    // Insert user
			        return $this->db->insert('users', $data);
                }

    public function login($status, $uname, $password){
			// Validate
              $query = $this->db->get_where('users', [
                'status' => $status,
                'uname' => $uname,
                'password' => $password
              ]);
           
              return $query->result();
        }
    
}