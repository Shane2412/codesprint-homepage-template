<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crops extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('Crops_model');         
   }
   public function index()
   {
       $crops=new Crops_model;
       $data['data']=$crops->get_crops();
       $this->load->view('templates/header');       
       $this->load->view('crops/list',$data);
       $this->load->view('templates/footer');
   }
   public function create()
   {
      $this->load->view('templates/header');
      $this->load->view('crops/create');
      $this->load->view('templates/footer');      
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $crops=new Crops_model;
       $crops->insert_crop();
       redirect(base_url('crops'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $crop = $this->db->get_where('crop', array('cid' => $id))->row();
       $this->load->view('templates/header');
       $this->load->view('crops/edit',array('crop'=>$crop));
       $this->load->view('templates/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $crop=new Crops_model;
       $crop->update_crop($id);
       redirect(base_url('crop'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $this->db->where('cid', $id);
       $this->db->delete('crop');
       redirect(base_url('crop'));
   }
}