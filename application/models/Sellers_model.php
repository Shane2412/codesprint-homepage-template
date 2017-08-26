<?php

    class Sellers_model extends CI_Model 
    {
        function __construct()
        {
            parent::__construct();
        }
        
         public function get()
         {
             $query = $this->db->get('crop');
             return $query->result();
         }
        
        
        
         public function register($status)
         {
            
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
        
        
         public function login($status, $uname, $password)
         {
			// Validate
              $query = $this->db->get_where('users', [
                'status' => $status,
                'uname' => $uname,
                'password' => $password
              ]);
           
              return $query->result();
        }
        
        public function create_crop($data, $uid)
        {
           $uid = $this->db->where('uid', $uid);    
           $query = $this->db->insert('crop', $data,$uid);
            // return $this->db->insert_id();
            return $query;
        }
        
        public function view_crop($cid = FALSE)
        {
                if($cid === FALSE)
                {
                    $query = $this->db->get('crop');
                    return $query->result();
                }
                $query = $this->db->get_where('crop', array('cid' => $cid));
                return $query->row_array();
        }
        
        public function update_crop($data)
        {
        $this->db->where('cid', $this->input->post('cid'));
        return $this->db->update('crop', $data);
        }
        
        
        public function delete_crop($cid)
        {
            $this->db->where('cid', $cid);
            $this->db->delete('crop');
        }
        
        
        
    }