<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crop extends CI_Controller {

   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function index()
   {
       $this->load->database();

       if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
          $this->db->or_like('price', $this->input->get("search"));
          $this->db->or_like('quality', $this->input->get("search")); 
          $this->db->or_like('crop_max_count', $this->input->get("search")); 
          $this->db->or_like('produce_date', $this->input->get("search")); 
          $this->db->or_like('estimate_date', $this->input->get("search")); 
          $this->db->or_like('quality', $this->input->get("search")); 
       }

       $this->db->limit(5, ($this->input->get("page",1) - 1) * 5);
       $query = $this->db->get("crop");
       $data['data'] = $query->result();
       $data['total'] = $this->db->count_all("crop");

       echo json_encode($data);
   }

   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $this->load->database();

       $insert = $this->input->post();
       $this->db->insert('crop', $insert);
       $id = $this->db->insert_id();
       $q = $this->db->get_where('crop', array('id' => $id));

       echo json_encode($q->row());
    }

   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $this->load->database();
       $q = $this->db->get_where('crop', array('id' => $id));
       echo json_encode($q->row());
   }

   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $this->load->database();

       $insert = $this->input->post();
       $this->db->where('cid', $id);
       $this->db->update('crop', $insert);
       $q = $this->db->get_where('crop', array('id' => $id));

       echo json_encode($insert);
    }

   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $this->load->database();

       $this->db->where('cid', $id);
       $this->db->delete('crop');

       echo json_encode(['success'=>true]);
    }

}