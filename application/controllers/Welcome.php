<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('home');
        $this->load->view('templates/footer');
	}
	
	public function seller(){
		//dummy data for agriculture codesprint app
		$this->load->view('templates/header');
		$this->load->view('Inventory/seller');
		$this->load->view('templates/footer');
	}
	public function buyers()
	{
		$data['buyers'] = $this->Buyers_model->get_Demand();
		$this->load->view('templates/header');
		$this->load->view('Inventory/buyers', $data);
		$this->load->view('templates/footer');
	}

	public function viewpost($oid)
	{
		$data['views'] = $this->Buyers_model->view_Demand($oid);
		$data['buyers'] = $this->Buyers_model->get_Demand();
		
		
		$this->load->view('templates/header');
		$this->load->view('Inventory/viewpost', $data);
		$this->load->view('templates/footer');
	}
	
		
		// testing
		public function welcome2()
	{
		$this->load->view('templates/header');
		$this->load->view('welcome_message2');
		$this->load->view('templates/footer');
	}
	

	

	
}
