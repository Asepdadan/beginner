<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_akun extends CI_Controller {

	function __construct()
	{
		parent :: __construct();
		$this->load->model('model_data');
		if(!$this->session->userdata('username')){
		$this->session->set_flashdata('error','maaf, anda belum login! silahkan login terdahulu');
		redirect('c_login');
			}
	}

	public function index()
	{
		$data1 = array(
			'title' => 'Dashbord Data Akun'
			);

		$data = $this->model_data->select('daftar');

		$this->load->view('admin/head',$data1);
		$this->load->view('admin/sidebar');
		$this->load->view('table/all_akun',array('data' => $data));
		$this->load->view('admin/footer');

	}

	public function delete($npm)
	{
		$where = array('npm' => $npm);
		$res = $this->model_data->delete('daftar',$where);

		if($res >= 1)
		{
			$this->session->set_flashdata('info','Delete Data Sukses');
			redirect('data_akun');
		}


	}

	public function update($npm)
	{
		$req = $this->model_data->get(" where npm = '$npm' ");
		
		$res = array(
			'npm' => $req[0]['npm'],
			'username' => $req[0]['username'],
			'nama1' => $req[0]['nama_depan'],
			'nama2' => $req[0]['nama_belakang'],
			'email' => $req[0]['email'],
			'jenis_kelamin' => $_POST[0]['optionsRadios'],
			'password' => $req[0]['password'],
			'nohp' => $req[0]['no_handphone'],
			
			);
		$this->load->view('admin/head');
		$this->load->view('table/edit',$res);
		$this->load->view('table/footer');


	}

	public function update_data()
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$nama_depan = $_POST['nama1'];
		$nama_belakang = $_POST['nama2'];
		$nama= $_POST['nama1']." ".$_POST['nama2'];
		$jenis_kelamin = $_POST['optionsRadios'];
		$nohp = $_POST['nohp'];
		$password = $_POST['password'];
		$npm = $_POST['npm'];

		$update = array(
			'npm' => $npm,
			'username' => $username,
			'email' => $email,
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'no_handphone' => $nohp,
			'password' => $password
			);

		$where = array('npm' => $npm);
		$res = $this->model_data->update('daftar',$update,"npm = $npm");




		if($res >= 1)
		{
			$this->session->set_flashdata('info','Edit Data Telah berhasil');
			redirect('data_akun');	
		}
		else
		{

			echo "Script ada yang kurang atau salah";
		}

	}

}