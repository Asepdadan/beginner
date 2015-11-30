<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		$this->load->library('Session');

	}

	
	public function index()
	{
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');


		if($npm == '13402351' && $nama == 'asep')
		{
			

			echo "betul";
		}
		else
		{
			$this->load->view('session');
		}
	}
	public function test()
	{
		
	}
}