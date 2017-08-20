<?php

class Buyers_model extends CI_Model 
{
    
    public function __construct()
    {
        parent::__construct();
         $this->load->database();
    }
    
    public function getCrops()
    {
        $query = $this->db->get('crop');
        return $query->result();
    }
    
    public function create_demand($data)
    {
    
      $query = $this->db->insert('order', $data); 
      $insert = $this->db->insert_id();
      return $insert;
    }
    
    public function get_Demand()
    {
        $query = $this->db->get('order');
        return $query->result();
    }
    
    public function view_Demand($oid = FALSE) 
    {
                    if($oid === FALSE){
                        $query = $this->db->get('order');
                        return $query->result_array();
                    }
                    $query = $this->db->get_where('order', array('oid' => $oid));
                    return $query->row_array();
    }
    public function update_Demand($data)
    {
        $this->db->where('oid', $this->input->post('oid'));
        return $this->db->update('order', $data);
       
    }
    
    public function delete_Demand($oid)
    {
        $this->db->where('oid', $oid);
        $this->db->delete('order');
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