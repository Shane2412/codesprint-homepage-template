<?php

class Home extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model();
    }
    
    public function index() 
    {
        $this->load->view('templates/header');
        $this->load->view('home_old');
        $this->load->view('templates/footer');
        
    }
    
    public function create()
    {
        
    }
    
    public function edit()
    {
        
    }
    
    public function update()
    {
        
    }
    
    public function delete_Inv()
    {
        
    }
    
    
    
    
    
    
}



?>