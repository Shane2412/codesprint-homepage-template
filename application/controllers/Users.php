<?php 

    class Users extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Users_model');
        }
        
        
        public function register(){
            
            $data['title'] = 'Sign Up';
            
            $this->form_validation->set_rules('fname', 'fname', 'required');
            $this->form_validation->set_rules('lname', 'lname', 'required');
            $this->form_validation->set_rules('uname', 'uname', 'required');
            // $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
            //$this->form_validation->set_rules('pin', 'pin', 'required');
            
            
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('Users/register', $data);
                $this->load->view('templates/footer');
            } else {
                //Encrypt Password to md5 hash
                //$encryptPassword = $this->input->post('password'));
                
                $this->Users_model->register();
                //set message
                $this->session->set_flashdata('user_registered', 'You are now Registered');
                redirect('Users/login');
            }
            
        }
        
     //Login Users
         public function login(){
            
            $data['title'] = 'Login to Farmers Crop';
            
           
            $this->form_validation->set_rules('uname', 'uname', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('Users/login', $data);
                $this->load->view('templates/footer');
            } else {
                //get username
                $uname = $this->input->post('uname');
                
                //get and encrypt user password
                $password = $this->input->post('password');
                
                $user_id = $this->Users_model->login('a', $uname, $password);
                if ($user_id) {
                  $user_data = array(
                            'uid' => $user_id,
                            'uname'   => $uname,
                            'phone' => $phone,
                            'logged_in' => TRUE
                      );
                    
                      
                    $userData = $this->session->set_userdata($user_data);
                    // Set message
                    // $user_fname = $this->session->userdata('fname');
                    // $this->load->view('users/User_profile', $user_fname);
                    
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					redirect('/');
					
                }
				else{	
                    //set message
                $this->session->set_flashdata('login_failed', 'Log In is Invalid');
                redirect('users/login');
                }
            }
        }
        // Log user out
		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('userId');
			$this->session->unset_userdata('phone');
			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');
			redirect('users/login');
		}
        
       
        
    }