<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_soal extends CI_Controller {


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
		$no = 1;
		$no_max = 10;

		$req = array('title' => "Soal Pertanyaan");

		$data = $this->model_soal->select('soal');

		if($this->session->userdata('username') == "admin123")
			{

			
			$this->load->view('admin/head',$req);
			$this->load->view('admin/sidebar');
			$this->load->view('pertanyaan/soal_pertama',array('data' => $data));
			$this->load->view('admin/footer');
			}else{
			$this->load->view('admin/head',$req);
			$this->load->view('table/sidebar');
			$this->load->view('pertanyaan/soal_pertama',array('data' => $data));
			$this->load->view('admin/footer');

			}
			



		

	}

	public function hitung()
	{
		$res = $this->model_soal->select_hitung();

		$pilih = $_POST['pilih'];


		


	}

	public function input_soal1()
	{
		$data['title'] = "Input Soal Pertama";
		$data['header'] = "INPUT SOAL YANG PERTAMA";
		$this->load->view('admin/head',$data);
		$this->load->view('table/sidebar');
		$this->load->view('pertanyaan/input_soal',$data);
		$this->load->view('admin/footer');

	}

	public function input_soal()
	{
		$pertanyaan = $_POST['pertanyaan'];
		$kunci_jawaban = $_POST['kunci_jawaban'];
		$pil_a = $_POST['pil_a'];
		$pil_b = $_POST['pil_b'];
		$pil_c = $_POST['pil_c'];
		$pil_d = $_POST['pil_d'];
		

		$insert = array(
			'pertanyaan' => $pertanyaan,
			'kunci_jawaban' => $kunci_jawaban,
			'pil_a' => $pil_a,
			'pil_b' => $pil_b,
			'pil_c' => $pil_c,
			'pil_d' => $pil_d);
			
		$data = $this->model_soal->insert('soal',$insert);

		if($data >= 1)
		{
			redirect('c_soal');
		}
	}
}
		