<?php

class Stats_model extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_total_buyer()
    {
        $query = $this->db->query("SELECT * FROM buyer");
        return $query->num_rows();
        
    }
    
    public function get_total_farmer()
    {
        $query = $this->db->query("SELECT * FROM farmer");
        return $query->num_rows();
        
    }
    
    public function get_total_crops()
    {
        $query = $this->db->get('crop');
        return $query->result();
    }
    
    public function get_total_orders()
    {
        $query = $this->db->get('order');
        return $query->num_rows();
    }
    
    
    
}



?>