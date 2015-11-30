<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		$this->load->helper(array('url','form'));

	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required|alpha_numeric|exact_length[15]');
		$this->form_validation->set_rules('password','password','required|alpha_numeric|exact_length[15]');

		if($this->form_validation->run()== false){

			$this->load->view('login/login');
		}
		else{
			redirect('welcome');

		}
	}


	public function valid()
	{

	
	
		
		

	}

}