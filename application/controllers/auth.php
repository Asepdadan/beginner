<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

function __construct()
{

	parent :: __construct();
	$this->load->model('model_login');
}
	


public function login()
{
	if(isset($_POST['input']))
	{
	$npm = $this->input->post('npm');
	$nama = $this->input->post('nama');
	$hasil = $this->model_login->login($npm,$nama);
	
	if($hasil==1)
	{
		$this->session->set_userdata(array('status_login' => 'oke'));
		redirect('welcome');
	}
		else{
			redirect('auth/login');
		}
	


	}
	else
	{
		$this->load->view('login');
	}

}
function logout()
{
$this->session->sess_destroy();
redirect('auth/login');

}


}