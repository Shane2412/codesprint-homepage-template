<?php 

    class Users_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        
          public function register(){
            
            
            $data = array(
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname'),
                    'uname' => $this->input->post('uname'),
                    'password' => $this->input->post('password')
                    
                    );
                  $this->db->set('date_added','NOW()', FALSE);
			     return $this->db->insert('users', $data);
                }
        
        public function login($status, $uname, $password){
              $query = $this->db->get_where('users', [
                'status' => $status,
                'uname' => $uname,
                'password' => $password
              ]);
           
              return $query->result();
        }
    }