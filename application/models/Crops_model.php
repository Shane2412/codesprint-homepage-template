<?php
class Crops_model extends CI_Model{
    
    public function get_crops(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
          $this->db->or_like('price', $this->input->get("search")); 
          $this->db->like('quality', $this->input->get("search"));
          $this->db->or_like('crop_max_count', $this->input->get("search"));
          $this->db->like('produce_date', $this->input->get("search"));
          $this->db->or_like('estimate_date', $this->input->get("search"));
          $this->db->like('quantity', $this->input->get("search"));
          
        }
        $query = $this->db->get("crop");
        return $query->result();
    }
    public function insert_crop()
    {    
        $data = array(
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'quality' => $this->input->post('quality'),
            'crop_max_count' => $this->input->post('crop_max_count'),
            'produce_date' => $this->input->post('produce_date'),
            'estimate_date' => $this->input->post('estimate_date'),
            'quantity' => $this->input->post('quantity')
        );
        return $this->db->insert('crop', $data);
    }
    public function update_crop($id) 
    {
        $data=array(
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'quality' => $this->input->post('quality'),
            'crop_max_count' => $this->input->post('crop_max_count'),
            'produce_date' => $this->input->post('produce_date'),
            'estimate_date' => $this->input->post('estimate_date'),
            'quantity' => $this->input->post('quantity')
        );
        if($id==0){
            return $this->db->insert('crop',$data);
        }else{
            $this->db->where('cid',$id);
            return $this->db->update('crop',$data);
        }        
    }
}
?>