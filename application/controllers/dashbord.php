<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

	function __construct()
	{

	parent :: __construct();
	$this->load->helper('date');
	$this->load->model('model_login');
	if(!$this->session->userdata('username')){
		$this->session->set_flashdata('error','maaf, anda belum login! silahkan login terdahulu');
		redirect('c_login');
			}
	/*elseif ($this->session->userdata('islogin') == TRUE) {
		redirect('dashbord');
	}*/
		
	}


	public function index()
	{

			$data = array(
				'title' => 'Dashbord D-Learning',
				);

			$req = $this->model_dashbord->ambil('beranda');
		
				
			
			$username = $this->session->userdata('username');
			$password = $this->session->userdata('password');

			$res = $this->db->query("select nama,email from daftar where username = '$username' and password = '$password' ");

			if($this->session->userdata('username') == "admin")
			{

			
			$this->load->view('admin/head',$data);
			$this->load->view('admin/sidebar',$data);
			$this->load->view('admin/content',array('res' => $res,'req' => $req));
			$this->load->view('admin/footer');
			}else{
			$this->load->view('admin/head',$data);
			$this->load->view('table/sidebar',$data);
			$this->load->view('admin/content',array('res' => $res,'req' => $req));
			$this->load->view('admin/footer');

			}
			
	}
	

	public function post_status()
	{
		$username = $this->session->userdata('username');
		
		$post = $_POST['post'];
		date_default_timezone_get('Asia/jakarta');
		$datestring = "%Y-%m-%d %h:%i:%s";
        $time = time();
      	$now = mdate($datestring, $time);
	

		$data = array(
			'id' => '',
			'username' => $username,
			'status' => $post,
			'waktu' =>  now()
			);

		$res = $this->model_dashbord->insert_post('beranda',$data);

		if($res >= 1){
			redirect('dashbord');

		}
				      

	}
}