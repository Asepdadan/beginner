<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data = $this->model->tampil();

		
					
		$this->load->view('welcome_message',array('data' => $data));
		
	}

	public function tampil($satu="asep dadan",$dua="")
	{
		//$satu = "hallo";
		$dua = "hallo ini yg kedua";
		echo $satu;
		echo $dua;
	}

	public function ambildata()
	{
		$data = $this->model->tampil();

		foreach ($data as $value) {
			echo $value['id'];
			echo "<br>";
			echo $value['npm'];
			echo "<br>";
			echo $value['nama'];
			echo "<br>";
			echo "<hr>";
		}
	}

	public function kirim_view()
	{
		$data = $this->model->tampil();

				
		$this->load->view('welcome_message',array('data' => $data));

	}

	public function delete($id)
	{
		$where = array('id' => $id);

		$req = $this->model->delete('mahasiswa',$where);
		
		if($req >=0 )
		{
			echo "berhasil di hapus";
		}
		else
		{
			echo "gagal bro";
		}
	}

	public function tampil_data()
	{

		$username = "asep15";
		$password = "loveyou";

	$req = $this->db->query("select username,nama,email from daftar where username='$username' and password = '$password' ");

	foreach ($req->result_array() as $key) {
		echo $key['nama'];
	}




	}



}

