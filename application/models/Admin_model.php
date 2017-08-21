<?php

    class Admin_model extends CI_Model 
    {
        function __construct(){
            parent::__construct();
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
        
        
        public function get_Buyers()
        {
            $query = $this->db->get('buyer');
            return $query->result();
        }
        
        public function get_Farmers()
        {
            $query = $this->db->get('farmer');
            return $query->result();
        }
        
        public function create_Buyers($data)
        {
           $query = $this->db->insert('buyer', $data);
            return $query->insert_id();
        }
        
        public function create_Farmers($data)
        {
            $query = $this->db->insert('farmer', $data);
            return $query->insert_id();
        }
        
        public function update_Buyers($bid)
        {
            
        }
        
        public function update_Farmers($fid)
        {
            
        }
        
        public function delete_Buyers($bid)
        {
            $this->db->where('bid', $bid);
            $this->db->delete('buyer');
        }
        
        public function delete_Farmers()
        {
            $this->db->where('fid', $fid);
            $this->db->delete('farmer');
        }
    }