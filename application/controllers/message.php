<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

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
		$username = $this->session->userdata('username');
		$req['title'] = "D-Pesan";

		$data = $this->model_message->select('inbox');


		$this->load->view('admin/head',$req);
		$this->load->view('admin/sidebar');
		$this->load->view('pesan/inbox',array('data' => $data));
		$this->load->view('admin/footer');

	}

	public function tulis()
	{
		

		$username = $this->session->userdata('username');

		$data['title'] = "D-Pesan";
		$this->load->view('admin/head',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('pesan/tulis');
		$this->load->view('admin/footer');


	}

	public function kirim()
	{

		$pengirim = $_POST['pengirim'];
		$tujuan = $_POST['tujuan'];
		$isi = $_POST['isi'];
		

		$data = array(
			'id' => '',
			'username' => $pengirim,
			'tujuan' => $tujuan,
			'isi' => $isi,
			'waktu' => ''
			);

		$send = $this->model_message->insert('inbox',$data);

		if($send >= 0)
		{
			$this->session->set_flashdata('pesan','Pengiriman Pesan Sukses!!');

			redirect('message/tulis');
		}



	}



}