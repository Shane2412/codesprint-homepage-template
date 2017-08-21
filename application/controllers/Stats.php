<?php

class Stats extends CI_Controller 
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    
    public function index()
    {
        $this->load->model('Stats_model');
        
        $data['buyer'] = $this->Stats_model->get_total_buyer();
        $data['farmer'] = $this->Stats_model->get_total_farmer();
        //Getting crops data and order data
        $data['crops'] = $this->Stats_model->get_total_crops();
        $data['orders'] = $this->Stats_model->get_total_orders();
        
        $this->load->view('templates/header');
        $this->load->view('statistics/stats_view', $data);
        $this->load->view('templates/footer');
        
        //holy shit, it worked :0
        //this was completely random
    }
    
    
}






?>