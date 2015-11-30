<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct()
	{

	parent :: __construct();

	$this->load->model('model_login');
	$data = array(
				'nama_depan' => $this->session->userdata('nama_depan'),
				'user' => $this->session->userdata('nama'),
				'npm' => $this->session->userdata('npm')
				
				);


	}

	public function index()
	{
		$data['title'] = "Dashbord Login";
		
		$this->form_validation->set_rules('username','Username','required|alpha_numeric|min_length[3]');
		$this->form_validation->set_rules('password','password','required|alpha_numeric|min_length[3]|max_length[15]');

		
		if($this->form_validation->run()== false){

			$this->load->view('login/d_login',$data);
		}
		else{
			
				$username = set_value('username');
				$password = set_value('password');
				$nama = "asep";

				$hasil = $this->model_login->login($username,$password);

				
					if($hasil != false)
					{
					
					/*$data_session = array(
						'username' => $this->input->post('username'),
						'npm' => $npm,
						'nama_depan' => $nama_depan,
						'nama' => $nama,
						'password' => $password,
						'nohp' => $nohp,
						'islogin' => true
						); */

					$this->session->set_userdata('username',$username);
					
					//$this->session->set_userdata($data_session);

					redirect('dashbord');
						
					}
					else{


						$this->session->set_flashdata('error', 'maaf username/password salah');
					redirect('c_login');
					}
				}
		

				
		
	}

	public function login()
	{
		if(isset($_POST['submit']))
		{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hasil = $this->model_login->login($username,$password);
		
			if($hasil==1)
			{
			$this->session->set_userdata('username',$username);
			
			redirect('dashbord');
			}
			else{
			redirect('c_login');
			}
		}
		else
		{
		$this->load->view('login/d_login');
		}

	}

function logout()
{
	$this->session->sess_destroy();
	redirect('c_login/login');

}
	


}