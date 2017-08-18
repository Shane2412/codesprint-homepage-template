<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->view('templates/header');
		$this->load->view('Inventory/buyers');
		$this->load->view('templates/footer');
	}

	public function viewpost()
	{
		$this->load->view('templates/header');
		$this->load->view('Inventory/viewpost');
		$this->load->view('templates/footer');
	}
	
		
		// testing
		public function welcome2()
	{
		$this->load->view('templates/header');
		$this->load->view('welcome_message2');
		$this->load->view('templates/footer');
	}
	
	public function stats()
	{
		$this->load->view('templates/header');
		$this->load->view('statistics/stats');
		$this->load->view('templates/footer');
	}
	
	public function test()
	{
		$this->load->view('templates/header');
		$this->load->view('home_old');
		$this->load->view('templates/footer');
	}
	
	
}
