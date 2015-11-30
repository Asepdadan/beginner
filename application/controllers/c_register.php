<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_register extends CI_Controller {


	public function __construct()
	{
		parent :: __construct();
		$this->load->model('model_register');
		$this->gallery_path = realpath(APPPATH . '../images');
		$this->gallery_path_url = base_url(). '/images/';
	}

	public function index()
	{
		$data['title'] = "Dashbord Daftar Member";

		//form validation

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|alpha_numeric|min_length[5]|max_length[25]|is_unique[daftar.username]'); //cek username agar tidak terjadi duplikat
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('nama1','nama depan','required|alpha_numeric|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('nama2','nama belakang','required|alpha_numeric|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('password','password','required|alpha_numeric|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('confpassword','confirmasi password','required|matches[password]|alpha_numeric|min_length[5]|max_length[15]');
//finish
		if($this->form_validation->run()== false){

			$this->load->view('daftar/d_register',$data);
		}
		else{
			//inputan
		$username = $_POST['username'];
		$email = $_POST['email'];
		$nama_depan = $_POST['nama1'];
		$nama_belakang = $_POST['nama2'];
		$nama= $_POST['nama1']." ".$_POST['nama2'];
		$jenis_kelamin = $_POST['optionsRadios'];
		$nohp = $_POST['nohp'];
		$password = $_POST['password'];
		$npm = '';
		$foto= $_POST['foto'];



		//insert proses
		$insert = array(
			'id' => $npm,
			'username' => $username,
			'email' => $email,
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'no_handphone' => $nohp,
			'password' => $password,
			'foto' => $foto
			);

		$req = $this->model_register->insert('daftar',$insert);
		//end

					
		$this->session->set_userdata('nama',$nama);
		$this->session->set_userdata('username',$username);

	
		

		if($req >= 0 )
		{
			redirect('c_login');
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan!!!');
		}
		else
		{
			echo "belum berhasil di simpan";
		}
		

		}
		
	}

	

}