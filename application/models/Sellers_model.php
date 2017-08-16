<?php

    class Sellers_model extends CI_Model 
    {
        function __construct()
        {
            parent::__construct();
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